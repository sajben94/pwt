<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

/**
 *
 */
class UserController extends Controller
{

  function showAction($id){
    // $user = User::find($id);
    // echo $user->mail."<br>";
    // echo $user->meno . " " . $user->priezvisko."<br>";
    // echo $user->vek."<br>";
    // echo $user->update_at;

    $user = User::find($id);
    return view("update", ['user' => $user]);
  }

  public function insertAction(Request $request){
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');
    $mail = $request->input('mail');
    $age = $request->input('age');

    $user = new User();
    $user->meno = $firstname;
    $user->priezvisko = $lastname;
    $user->mail = $mail;
    $user->vek = $age;
    $user->save();

    return response()->view('adduser');

    //User::create(['meno' => 'Peter', 'mail' => 'sajben@sajben.sk' ]);
  }

  public function getUserForm(){
    return view('adduser');
  }

  function updateAction($id, Request $request){
    $user = User::where("id", "=", $id)->first();
    $user->update(["vek" => $request->input('age'),
            "meno" => $request->input('firstname'),
            "priezvisko" => $request->input('lastname'),
            "mail" => $request->input('email')]);

    return redirect()->action('UserController@showAllAction');
  }

  function deleteAction($id){
    $user = User::find($id);
    $user-> delete();
  }

  function showAllAction(){
    $users = User::all();
    // dd($users);
    return view('user',['users' => $users]);
  }
}
