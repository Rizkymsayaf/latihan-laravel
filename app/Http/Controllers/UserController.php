<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  Route::resource('user', UserController::class);
    public function index()
    {
        // url/user
        $nama = 'Agung';
        $namaBelakang = 'Wahyudi';
        return view('user.index', compact('nama', 'namaBelakang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman menambah data
        // url/user/create
        $nama = 'Agung';
        $namaBelakang = 'Wahyudi';
        return view('user.create', compact('nama', 'namaBelakang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // proses menambahkan data
        // url/user
        // post
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Route::get('user/{id}', [UserController::class, 'show'])
        // halaman menampilkan data by $id
        // url/user/{id}
        $namaBelakang = 'Wahyudi';
        return view('user.show', compact('id', 'namaBelakang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // halaman edit data by $id
        // url/user/{id}/edit
        $nama = 'Agung';
        $namaBelakang = 'Wahyudi';
        return view('user.edit', compact('nama', 'namaBelakang'));
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
        // proses edit data by $id
        // url/user/{id}
        // put / patch
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // proses hapus data by $id
        // url/user/{id}
        // delete
    }

    public function tampildata($tampil)
    {
       $tampil = 'Ini Adalah Data';
       return view('user.tampil', compact('tampil'));
    }
}
