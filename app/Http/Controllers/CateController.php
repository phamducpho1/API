<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cates;
use App\Products;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $show=Cates::all();
              // return view('admin.listcates', compact('show'));
                 return response()->json([
                    'data' => $show
                ],200);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.addcates');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $them= new Cates();
        $them->name= $request->name;
        $them->description=$request->description;
        $them->save();
         return response()->json([
                    "message" => 'Create Successfull!',
                    'data' =>  $them
                ],200);  

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
          $update=Cates::find($id);     
          $update->name= $request->name;
          $update->description=$request->description;
          $update->save();
          return response()->json([
                    "message" => 'update Successfull!',
                    'data' =>  $update
                ],200);  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=Cates::find($id);
        $destroy->delete();
        return response()->json([
                    "message" => 'delete Successfull!',
                    'data' =>  $update
                ],200); 
    }
}
