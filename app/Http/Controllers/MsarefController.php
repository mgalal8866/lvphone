<?php

namespace App\Http\Controllers;

use App\Models\msaref;
use Illuminate\Http\Request;

class MsarefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $msaref = msaref::all();
        return view('msaref.index', compact('msaref'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('msaref.create');
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msaref = msaref::create($request->all());
        return redirect()->route('msaref.index')
        ->with('success','add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\msaref  $msaref
     * @return \Illuminate\Http\Response
     */
    public function show(msaref $msaref)
    {
       return view('msaref.show', compact('msaref'));
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\msaref  $msaref
     * @return \Illuminate\Http\Response
     */
    public function edit(msaref $msaref)
    {
        return view('msaref.edit', compact('msaref'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\msaref  $msaref
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, msaref $msaref)
    {
       $msaref->update($request->all());
        return redirect()->route('msaref.index')
        ->with('success','Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\msaref  $msaref
     * @return \Illuminate\Http\Response
     */
    public function destroy(msaref $msaref)
    {
        $msaref->delete();
        return redirect()->route('msaref.index')
        ->with('success','deleted successfully');
        
    }
}
