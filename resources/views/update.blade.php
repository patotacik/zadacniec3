
<form method="post" action="{{action('UserController@updateAction',['id'=>$user->id]) }}">
    Meno:<br>
    <input type="text" name="meno" value="{{ $user->meno}}">
    <br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" value="{{ $user->priezvisko}}">
    <br>
    Email:<br>
    <input type="text" name="Email" value="{{ $user->email}}">
    <br>
    Vek:<br>
    <input type="number" name="vek" value="{{ $user->vek}}">
    <br><br>
    <input type="hidden"name="_token"value="{{csrf_token()}}">
    <input type="submit" value="Upravit">
</form>
