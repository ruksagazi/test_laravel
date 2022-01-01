<?php

namespace App\Http\Controllers;

use App\Model\Data;
use Illuminate\Http\Request;
use Log;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Data::all();
        Log::debug($entries);
        return view('welcome',compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::debug('create');
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::debug($request);
      $data = new Data;
      $data->name=$request->name;
      $data->age=$request->age;
      $data->willing_to_work=$request->willing;
      $data->gender=$request->gender;
      $data->languages=implode(",",$request->languages);
      $data->save();
      return redirect('data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
       return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $data->name = $request->name;
        $data->age = $request->age;
        $data->gender = $request->gender;
        $data->languages = implode(",",$request->languages);
        $data->willing_to_work = $request->willing;
        $data->save();
        return redirect('data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        $data->delete();
        return redirect('data');
    }
}
