<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\pangkat;
use App\Models\pendidikan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;

class BiodataController extends Controller
{
    public function admin()
    {

        $currentYear = Carbon::now()->year;

        $pensiun = User::whereYear('TMT_pensiun', $currentYear)->count();
        $jumlah = User::count();
        $boy = User::where('jenis_Kelamin', 'L')->count();
        $girl = User::where('jenis_Kelamin', 'P')->count();
        return view('admin.dashboard', ['jumlah' => $jumlah, 'boy' => $boy, 'girl' => $girl, 'pensiun' => $pensiun]);
    }


    public function data()
    {
        $users = User::with(['didik', 'jabat'])->get();
        return view('admin.data', ['users' => $users]);
    }

    public function didikjabat()
    {
        $users = User::with(['didik', 'jabat'])->get();
        return view('admin.pangkat', ['users' => $users]);
    }

    public function storeForm()
    {
        return view('admin.store');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'role' => 'required',
            'password' => 'required',
            'nip' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'kartu_pegawai' => 'required',
            'TMT_KGB_terakhir' => 'required',
            'kenaikan_KGB_YAD' => 'required', 
            'TMT_pensiun' => 'required',
            'kode_pendidikan' => 'required',
            'kode_pangkat' => 'required',
            'nama_pendidikan' => 'required',
            'gelar' => 'required',
            'tanggal_lulus' => 'required',
            'pangkat' => 'required',
            'golongan' => 'required',
            'TMT' => 'required',
            'jabatan' => 'required',
        ]);

        // Create a new User
        $user = User::create([
            'nik' => $validatedData['nik'],
            'nama' => $validatedData['nama'],
            'role' => 'pegawai',
            'password' => bcrypt($validatedData['password']),
            'nip' => $validatedData['nip'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'status_perkawinan' => $validatedData['status_perkawinan'],
            'kartu_pegawai' => $validatedData['kartu_pegawai'],
            'TMT_KGB_terakhir' => $validatedData['TMT_KGB_terakhir'],
            'kenaikan_KGB_YAD' => $validatedData['kenaikan_KGB_YAD'],
            'TMT_pensiun' => $validatedData['TMT_pensiun'],
            'kode_pangkat' => $validatedData['kode_pangkat'],
            'kode_pendidikan' => $validatedData['kode_pendidikan'],

        ]);

        // Create the associated pendidikan record
        $pendidikan = Pendidikan::create([
            'kode_pendidikan' => $validatedData['kode_pendidikan'],
            'nama_pendidikan' => $validatedData['nama_pendidikan'],
            'gelar' => $validatedData['gelar'],
            'tanggal_lulus' => $validatedData['tanggal_lulus'],
        ]);

        // Create the associated pangkat record
        $pangkat = Pangkat::create([
            'kode_pangkat' => $validatedData['kode_pangkat'],
            'pangkat' => $validatedData['pangkat'],
            'golongan' => $validatedData['golongan'],
            'TMT' => $validatedData['TMT'],
            'jabatan' => $validatedData['jabatan'],
        ]);

        return redirect('/admin/data');
    }

    public function updateForm($id)
    {
        $user = User::with(['didik', 'jabat'])->find($id);
        return view('admin.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Find the user by 'nik'
        $user = User::where('nik', $id)->first();

        if (!$user) {
            return redirect('/admin/data')->with('error', 'user not found.');
        }

        // Validate and update User data
        $user->update($request->only([
            'nik',
            'nama',
            'nip',
            'jenis_kelamin',
            'status_perkawinan',
            'tempat_lahir',
            'tanggal_lahir',
            'kartu_pegawai',
            'TMT_KGB_terakhir',
            'kenaikan_KGB_YAD',
            'TMT_pensiun'
        ]));

        // Update the associated pendidikan record
        $user->didik->update($request->only([
            'nama_pendidikan',
            'gelar',
            'tanggal_lulus'
        ]));

        // Update the associated pangkat record
        $user->jabat->update($request->only([
            'pangkat',
            'golongan',
            'TMT',
            'jabatan'
        ]));

        return redirect('/admin/data');
    }

    public function destroy($id)
    {
        // Find the user by 'nik'
        $user = User::where('nik', $id)->first();

        if (!$user) {
            return redirect('/dashboard/admin')->with('error', 'user not found.');
        }

        // Delete the associated pendidikan and pangkat records
        $user->didik->delete();
        $user->jabat->delete();

        // Finally, delete the user record
        $user->delete();

        return redirect('/admin/dashboard')->with('success', 'Mading deleted successfully.');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $users = User::where(function ($query) use ($keyword) {
            $query->where('nama', 'like', "%" . $keyword . "%")
                ->orWhere('nik', 'like', "%" . $keyword . "%")
                ->orWhere('tempat_lahir', 'like', "%" . $keyword . "%")
                ->orWhere('status_perkawinan', 'like', "%" . $keyword . "%")
                ->orWhere('jenis_kelamin', 'like', "%" . $keyword . "%");
        })
            ->paginate(5);

        return view('admin.data', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function pensiun()
    {
        $currentYear = Carbon::now()->year;

        $users = User::whereYear('TMT_pensiun', $currentYear)->get();

        return view('admin.data', ['users' => $users]);
    }

    public function boy()
    {
        $boy = User::where('jenis_Kelamin', 'L')->get();
        return view('admin.data', ['users' => $boy]);
    }

    public function girl()
    {
        $girl = User::where('jenis_Kelamin', 'P')->get();
        return view('admin.data', ['users' => $girl]);
    }

    public function boy2()
    {
        $boy = User::where('jenis_Kelamin', 'L')->get();
        return view('admin.pangkat', ['users' => $boy]);
    }

    public function girl2()
    {
        $girl = User::where('jenis_Kelamin', 'P')->get();
        return view('admin.pangkat', ['users' => $girl]);
    }

}
