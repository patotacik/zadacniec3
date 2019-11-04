<a href="{{action("UserController@getAddUserForm")}}">Pridať</a>
<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{$user->meno}}{{$user->priezvisko}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                <a href="{{action("UserController@showAction",['id'=> $user->id])}}">editovat</a>
                <a href="{{action("UserController@deleteAction",['id'=> $user->id])}}">vymazat</a>
            </td>
        </tr>
        @endforeach
</table>