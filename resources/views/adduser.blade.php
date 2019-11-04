<?php
?>
<form method="post" action="{{ action('UserController@insertAction') }}">
    Meno:<br>
    <input type="text" name="mano">
    <br>
    Priezvisko:<br>
    <input type="text" name="priezvisko">
    <br>
    Email:<br>
    <input type="text" name="email" >
<br>
    Vek:<br>
    <input type="number" name="vek" >
    <br><br>
<input type="submit" vaule="Odoslat">
    {{ csrf_field() }}
</form>