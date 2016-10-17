<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;

class IpsumController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function index()
   {
      return  "You are looking at the LoremController";
       /*return view('ipsum.index');*/
   }

}
