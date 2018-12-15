<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetModel;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$datas = array(
    		'title' => title_case('dashboard asset anda'),
		    'assets' => AssetModel::all()
	    );
    	
        return view('assets/index',compact('datas',$datas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	    $datas = array(
		    'title' => title_case('tambahkan asset baru')
	    );
	    
	    return view('assets/create',compact('datas',$datas));
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
	    $datas = array(
		    'title' => title_case('lihat aset'.$id.''),
		    'asset' => AssetModel::find($id)
 	    );
	    
//	    var_dump($datas['asset']);exit;
	
	    return view('assets/show',compact('datas',$datas));
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
