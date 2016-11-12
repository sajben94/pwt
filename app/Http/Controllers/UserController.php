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
    $user = User::find($id);
    return view("update", ['user' => $user]);
  }

  public function insertAction(Request $request){
    $firstname = $request->input('firstname');
    $lastname = $request->input('lastname');
    $mail = $request->input('email');
    $age = $request->input('age');

    $user = new User();
    $user->meno = $firstname;
    $user->priezvisko = $lastname;
    $user->mail = $mail;
    $user->vek = $age;
    $user->save();

    return redirect()->action('UserController@showAllAction');
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

    return redirect()->action('UserController@showAllAction');
  }

  function showAllAction(){
    $users = User::all();
    return view('user',['users' => $users]);
  }
}
