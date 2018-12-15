<?php

namespace App\Http\Controllers;

use App\LocationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	    $datas = array(
	    	'title' => title_case('Lokasi Aset '),
		    'locations' =>  DB::table('ams_location')->orderBy('date_created','desc')->limit(3)->get()
	    );
	    
	    print_r($datas['locations']);exit;
	    
	    return view('locations/index',compact('datas',$datas));
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
     * @param  \App\LocatioinModel  $locatioinModel
     * @return \Illuminate\Http\Response
     */
    public function show(LocationModel $locationModel,$id)
    {
        //
	    $datas = array(
	        'title' => title_case('lihat lokasi aset'),
		    'location' => $locationModel::find($id)
	    );
	    
	    return view('locations/show',compact('datas',$datas));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LocatioinModel  $locatioinModel
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationModel $locationModel)
    {
        //
	    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LocatioinModel  $locatioinModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationModel $locationModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LocatioinModel  $locatioinModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocatioinModel $locatioinModel)
    {
        //
    }
}
