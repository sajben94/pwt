<?php

?>

<form action="{{ action('UserController@insertAction') }}" method="post">
  Meno:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Meno:<br>
  <input type="text" name="lastname" value="Mouse">
  <br>
  Meno:<br>
  <input type="text" name="email" value="@">
  <br>
  Meno:<br>
  <input type="text" name="age" value="25">
  <br><br>
  <input type="submit" value="Odoslat">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
