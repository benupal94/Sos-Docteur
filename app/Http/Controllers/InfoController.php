<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type_info;
use App\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
         $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Type_info $type_info)
     {
        $type_info = Type_info::all();
        return view('pages.forms.form_wizard',
        compact(
              'type_info'
              )
            );
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $info=new Info();
      $info->type_id= $request->input('type_id');
      $info->contenu = $request->input('contenu');
      $info->detail = $request->input('detail');
      //dd($info);
      $info->save();
      return back()->withStatus(__('Information publiée avec succès, elle sera visible sur la plateforme dans 2 minutes'));
    }

    public function liste(Request $request, Info $info)
    {
        $infos = Info::all();
        //dd($infos);
        return view('tags.index',compact('infos'));
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
