<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Home::all();
        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title='Create';
       return view('details',compact('title')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $st=new Home();
        $st->name = $request->name;
        $st->phone= $request->phone;
        $st->dob= $request->dob;
        $st->note= $request->note;
        $st->save();

        return redirect('home');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title='Edit';
        $data=Home::where('id',$id)->first();
        return view('details',compact('data','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $st=Home::find($id);
        $st->name = $request->name;
        $st->phone= $request->phone;
        $st->dob= $request->dob;
        $st->note= $request->note;
        $st->update();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Home::where('id',$id)->delete();
        
        return redirect()->back();
    }
}
