<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stages = Stage::orderBy('order' , 'ASC')->get();
        return view('stage.index',compact('stages'));
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
        $request->validate([
            'name' => 'required|string|max:50|unique:stages',
            'order' => 'numeric',
        ]);
        Stage::create($request->all());

        $request->session()->flash('msg', 'Stage added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function show(Stage $stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function edit(Stage $stage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stage $stage)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:stages',
            'order' => 'numeric',
        ]);
        Stage::findOrFail($request->id)->update($request->all());

        $request->session()->flash('msg', 'Stage Updated successfully');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function delete(Stage $stage, Request $request)
    {
        try {
            $stage->delete();
            $msg = "Stage deleted successfully";
        } catch (Exception $e) {
            $msg = "can't delete this Stage";
        }
        $request->session()->flash('msg', $msg);
        return back();
    }
}
