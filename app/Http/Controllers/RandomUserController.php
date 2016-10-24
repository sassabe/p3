<?php




/**
* This controller was created via `php artisan make:controller Tag --resource`
* It shows what a basic skeleton for a Resource controller looks like
* Note how it's not pre-populated with all the resource methods (Index, Create, Store, Show, Edit, Update, Delete)
*/

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;

class RandomUserController extends Controller
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
        return view('random-user');
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
          'users'=>'required|numeric|min:1|max:7',
        ]);
        #put title submitted via form into variable "title"
        $uAmount= $request->input('users');

        #code to generate user's random User

        #view results
        //return $uAmount;
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
