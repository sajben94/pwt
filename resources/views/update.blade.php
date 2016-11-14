
<a href="{{ url('/showall') }}">showall</a>
<a href="{{ url('/add') }}">add</a>



<form action=" {{ action('UserController@updateAction', ['id' => $user->id] ) }} " method="post">
  Meno:<br>
  <input type="text" name="firstname" value="{{ $user->meno }}">
  <br>
  Priezvisko:<br>
  <input type="text" name="lastname" value="{{ $user->priezvisko }}">
  <br>
  Email:<br>
  <input type="text" name="email" value="{{ $user->mail }}">
  <br>
  Vek:<br>
  <input type="text" name="age" value="{{ $user->vek }}">
  <br><br>
  <input type="submit" value="Upravit">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
