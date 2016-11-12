<?php

?>
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
    </tr>
  @endforeach
</table>
