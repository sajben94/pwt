<?php

?>
<a href="{{ url('/showall') }}">showall</a>
<a href="{{ url('/add') }}">add</a>

<table>
  @foreach($users as $user)
    <tr>
      <td>
        {{ $user->meno }} {{$user->priezvisko}}
      </td>
      <td>
        {{ $user->mail }}
      </td>
      <td>
        <a href="{{ action('UserController@showAction',['id' => $user->id]) }}">editovat</a>
      </td>
      <td>
        <a href="{{ action('UserController@deleteAction',['id' => $user->id]) }}">zmazať</a>
      </td>
    </tr>
  @endforeach
</table>
