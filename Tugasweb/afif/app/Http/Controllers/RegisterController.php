<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::all();
        return view('daftar', ['register' => $register]);
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
    public function store(Request $request)
    {
        // $path = Input::file('photo')->getRealPath();
        // dd($path); 
        $transaksi = new Register();
        $trasaksi->name = $request->input('name');
        $transaksi->birthplce = $erquest->input('b_date');
        $transaksi->birthplace = $erquest->input('b_place');
        $transaksi->phone = $erquest->input('numba');
        $transaksi->gender = $erquest->input('gender');
        $transaksi->option = $erquest->input('result');
        $transaksi->photo =  $erquest->input('image');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}
