<?php
/**
* This controller was created via `php artisan make:controller Tag --resource`
* It shows what a basic skeleton for a Resource controller looks like
* Note how it's not pre-populated with all the resource methods (Index, Create, Store, Show, Edit, Update, Delete)
*/
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lorem-ipsum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
            #validate
            $this->validate($request, [
              'number'=>'required|numeric|min:1|max:7',
            ]);
            #put title submitted via form into variable "title"
            $lAmount= $request->input('number');

            #code to generate lorem ipsum
            $generator = new \Badcow\LoremIpsum\Generator();
            $paragraphs = $generator->getParagraphs($lAmount);
            $text = '&lt;p&gt;';
            $text .= implode('&lt;/p&gt;&lt;p&gt;', $paragraphs);
            $text .= '&lt;/p&gt;';

            #view results

            return view('lorem-ipsum.store', ['text' => $text]);

    }
}
