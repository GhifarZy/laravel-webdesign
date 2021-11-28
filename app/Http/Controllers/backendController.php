<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('content.adminContent', compact([
            'user',
            'aktif',
            'nonaktif',
        ]));
    }
    public function indexMembers()
    {
        return view('content.contentMembers');
    }
    public function addMembers()
    {
        return view('content.addMembers');
    }
    public function editMembers()
    {
        return view('content.editMembers');
    }
    public function editDataMembers()
    {
        return view('content.editDataMembers');
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
        return view('content.dashboardMembers', compact([
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
