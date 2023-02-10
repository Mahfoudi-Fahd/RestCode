<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = DB::table('menus')->get();  
        // return $menus;
    return view('dashboard',compact('menus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('menus')->insert([
            'title'=>$request->title,
            'day'=>$request->day,
            'description'=>$request->description
        ]);
        return redirect()->back();   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = DB::table('menus')->where('id' , $id)->get();  
        // return $menus;
        return view('show',compact('menu'));
        // return view('show', ['menu' => $menu[0]]);   
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu= DB::table('menus')->where('id',$id)->first();
    
        return view('edit',compact('menu')) ;
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
        DB::table('menus')->where('id',$id)->update([
            'title'=>$request->title,
            'day'=>$request->day,
            'description'=>$request->description
            
        ]);
        return redirect('dashboard');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('menus')->where('id',$id)->delete();
        return redirect()->back();   
     }
}
