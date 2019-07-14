<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index (){
    $works = DB::table('works')->get();

    return view('works.index', ['works' => $works]);
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
   * @param  \App\Work  $work
   * @return \Illuminate\Http\Response
   */
   public function show ($id){
    $work = DB::table('works')->find($id);

    // return view('works/show', ['work' => $work]);
    return view('works.show', compact('work'));
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Work  $work
   * @return \Illuminate\Http\Response
   */
  public function edit(Work $work)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Work  $work
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Work $work)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Work  $work
   * @return \Illuminate\Http\Response
   */
  public function destroy(Work $work)
  {
      //
  }
}
