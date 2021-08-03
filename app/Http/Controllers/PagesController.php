<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index'); 
    }

    public function privacy()
    {
        return view('pages.privacypolicy'); 
    }


    public function tandc()
    {
        return view('pages.tandc'); 
    }


    public function bio()
    {
        return view('pages.bio'); 
    }

    public function outro()
    {
        return view('pages.pvo'); 
    }

    public function mc()
    {
        return view('pages.mc'); 
    }


    public function showCurate($field)
    {
        $projects = Projects::where('field', '=', $field)->get();
        
        return view('pages.curated', ['projects'=>$projects]); 
    }

    public function showCurates($field)
    {
        $projects = Projects::where('field', '=', $field)
        ->orWhere('field2',  '=', $field)->orderBy('date', 'desc')->get();
        
        return view('pages.curated', ['projects'=>$projects]); 
    }

    public function showCurated($field2)
    {
        $projects = Projects::where('field2', '=', $field2)->get();
        
        return view('pages.curated', ['projects'=>$projects]); 
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
        //
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
