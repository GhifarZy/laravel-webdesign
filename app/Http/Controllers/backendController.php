<?php

namespace App\Http\Controllers;

use App\Exports\dataMembersExport;
use App\Imports\dataMembersImport;
use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class backendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktif = DB::table('user_level')
            ->where('status', 'aktif')
            ->count();
        $nonaktif = DB::table('user_level')
            ->where('status', 'nonaktif')
            ->count();

        $user = DB::table('user_level')->get();
        return view('content-admin.adminContent', compact([
            'user',
            'aktif',
            'nonaktif',
        ]));
    }
    public function indexMembers()
    {
        $aktif = DB::table('user_level')
            ->where('status', 'aktif')
            ->count();
        $nonaktif = DB::table('user_level')
            ->where('status', 'nonaktif')
            ->count();

        $members = DB::table('profiles')->get();
        return view('content-admin.contentMembers', compact([
            'members',
            'aktif',
            'nonaktif',
        ]));
    }
    public function addMembers(User $members)
    {
        $aktif = DB::table('user_level')
            ->where('status', 'aktif')
            ->count();
        $nonaktif = DB::table('user_level')
            ->where('status', 'nonaktif')
            ->count();

        return view('content-admin.addMembers', compact([
            'members',
            'aktif',
            'nonaktif',
        ]));
    }
    public function editMembers(profile $members)
    {
        $aktif = DB::table('user_level')
            ->where('status', 'aktif')
            ->count();
        $nonaktif = DB::table('user_level')
            ->where('status', 'nonaktif')
            ->count();

        return view('content-members.editMembers', compact([
            'aktif',
            'nonaktif',
            'members',
        ]));
    }
    public function addsMembers(User $members)
    {
        $aktif = DB::table('user_level')
            ->where('status', 'aktif')
            ->count();
        $nonaktif = DB::table('user_level')
            ->where('status', 'nonaktif')
            ->count();

        return view('content-admin.addsMembers', compact([
            'aktif',
            'nonaktif',
            'members',
        ]));
    }
    public function editDataMembers(Profile $members)
    {
        $aktif = DB::table('user_level')
            ->where('status', 'aktif')
            ->count();
        $nonaktif = DB::table('user_level')
            ->where('status', 'nonaktif')
            ->count();

        return view('content-admin.editDataMembers', compact([
            'aktif',
            'nonaktif',
            'members',
        ]));

    }
    public function indexIdMembers()
    {

        $aktif = DB::table('user_level')
            ->where('status', 'aktif')
            ->count();
        $nonaktif = DB::table('user_level')
            ->where('status', 'nonaktif')
            ->count();

        $username = Auth::User()->username;
        $profile = DB::table('profiles')
            ->where('username', $username)
            ->get();
        return view('content-members.dashboardMembers', compact([
            'profile',
            'aktif',
            'nonaktif',
        ]));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postMembers(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:profiles',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        $gambar = $request->gambar;
        $namaFile = $gambar->getClientOriginalName();

        profile::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'gambar' => $namaFile,
        ]);

        $gambar->move(public_path() . '/gambarMember', $namaFile);
        return redirect('dashboardIdMembers');
    }
    public function postAddMembers(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            'level' => $request->level,
        ]);
        return redirect('dashboardAdmin');
    }
    public function postMembersInAdmin(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:profiles',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        $gambar = $request->gambar;
        $namaFile = $gambar->getClientOriginalName();

        profile::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'gambar' => $namaFile,
        ]);
        $gambar->move(public_path() . '/gambarMember', $namaFile);
        return redirect('dashboardMembers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateMembers(Request $request, profile $members)
    {
        Profile::where('id', $members->id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
        ]);
        return redirect('dashboardIdMembers');
    }
    public function updateGambarMembers(Request $request, profile $members)
    {
        $request->validate([
            'gambar' => 'required',
        ]);

        $gambar = $request->gambar;
        $namaFile = $gambar->getClientOriginalName();

        profile::where('id', $members->id)->update([
            'gambar' => $namaFile,
        ]);

        $gambar->move(public_path() . '/gambarMember', $namaFile);
        return redirect('dashboardIdMembers');
    }
    public function updateMemberInAdmin(Request $request, User $members)
    {
        User::where('id', $members->id)->update([
            'username' => $request->username,
            'status' => $request->status,
            'level' => $request->level,
        ]);
        return redirect('dashboardAdmin');
    }
    public function changePasswordBy(Request $request, User $members)
    {
        User::where('id', $members->id)->update([
            'password' => bcrypt($request->password),
        ]);
        return redirect('dashboardAdmin');
    }
    public function updateDataMembers(Request $request, profile $members)
    {
        profile::where('id', $members->id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
        ]);

        return redirect('dashboardMembers');
    }
    public function updateDataGambarMembers(Request $request, profile $members)
    {
        $gambar = $request->gambar;
        $namaFile = $gambar->getClientOriginalName();

        profile::where('id', $members->id)->update([
            'gambar' => $namaFile,
        ]);

        $gambar->move(public_path() . '/gambarMember', $namaFile);
        return redirect('dashboardMembers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteMembers(profile $members)
    {
        profile::destroy('id', $members->id);
        return redirect('dashboardIdMembers');
    }

    public function deleteUser(User $members)
    {
        User::destroy('id', $members->id);
        return redirect('dashboardAdmin');
    }

    public function deleteProfiles(profile $members)
    {
        profile::destroy('id', $members->id);
        return redirect('dashboardMembers');
    }

    public function dataMembersExport()
    {
        return Excel::download(new dataMembersExport, 'dataMembers.xlsx');
    }
    public function dataMembersImport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataImport', $namaFile);
        Excel::import(new dataMembersImport, public_path('/DataImport/' . $namaFile));
        return redirect('dashboardMembers');
    }
}
