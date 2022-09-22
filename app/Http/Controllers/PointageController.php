<?php

namespace App\Http\Controllers;
use App\Models\Pointage;
use Illuminate\Http\Request;

class PointageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pointage::all();
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
        $pointage = new Pointage;
        $pointage->pointeur_id = $request->pointeur_id;
        $pointage->phone = $request->phone;
        $pointage->Date=$request->Date;
        $pointage->heurDarriver = $request->heurDarriver;
        $pointage->heurDepart = $request->heurDepart;
        $pointage->save();
        return ["response"=>"pointage valide"];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pointage::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function testPointage($date,$phone)
    {
        return Pointage::where('Date','=',$date,'and')->where('phone','=',$phone)->get();
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
        $pointage=Pointage::find($id);
        $pointage->pointeur_id = $request->pointeur_id;
        $pointage->phone = $request->phone;
        $pointage->Date=$request->Date;
        $pointage->heurDarriver = $request->heurDarriver;
        $pointage->heurDepart = $request->heurDepart;
        $pointage->save();
        return ["response"=>"Pointer was updated successfully"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pointage=Pointage::find($id);
        $pointage->delete();
        return ["response"=>"pointage was deleted successfully"];
    }
    // public function getAllPointageUser(){
    //   return Pointage::join('pointeurs','pointages.pointeur_id','=','pointeurs.id')->get('pointeur*','pointage*');
    // }
}
