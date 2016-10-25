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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('random-user.create');
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
          'uAmount'=>'required|numeric|min:1|max:99',
        ]);
        #put title submitted via form into variable "title"
        $uAmount= $request->input('uAmount');

        #code to generate random User
        $gen = new \RandomUser\Generator();
        $users = $gen->getUsers($uAmount);
        $userArray = array();
        foreach($users as $user) {
            array_push($userArray, '<ul class="user-output">');
            array_push($userArray, '<li>Name: '.$user->getFirstName().' '.$user->getLastName().'</li>');
            array_push($userArray, '<li>Email: '.$user->getEmail().'</li>');
            array_push($userArray, '<li>Username: '.$user->getUsername().'</li>');
            array_push($userArray, '<li>Password: '.$user->getPassword().'</li>');
            array_push($userArray, '</ul>');
        }
        $output = implode("", $userArray);


       #?
        #view results
        return view('random-user.store', ['output' => $output]);

    }
  }
