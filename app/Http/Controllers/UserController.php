<?php

namespace App\Http\Controllers;

use App\Models\User;

/**
 *
 */
class UserController extends Controller
{

  function showAction($id){
    $user = User::find($id);
    echo $user->mail."<br>";
    echo $user->meno . " " . $user->priezvisko."<br>";
    echo $user->vek."<br>";
    echo $user->update_at;
  }

  function insertAction(){
    // $user = new User();
    // $user->meno = "Daky";
    // $user->priezvisko = str_random(6);
    // $user->mail = $user->meno. "." . $user->priezvisko . "@gmail.com";
    //  $user->vek = mt_rand(1,80);
    // $user->save();

    User::create(['meno' => 'Peter', 'mail' => 'sajben@sajben.sk' ]);
  }

  function updateAction($id){
    $user = User::find($id);
    $user-> update(["vek" => mt_rand(1,80)]);
  }

  function deleteAction($id){
    $user = User::find($id);
    $user-> delete();
  }

  function showAllAction(){
    // $users = User:all();
    // foreach ($users as $user) {
    //   echo $user->mail."<br>";
    //   echo $user->meno."<br>";
    //   echo $user->update_at."<br><br>";
    // }
  }
}
