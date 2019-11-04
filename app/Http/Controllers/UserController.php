<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAddUserForm()
    {
        return view("adduser");
    }
    public function insertAction(Request $request)
    {
        $mano=$request->input('mano');
        $priezvisko=$request->input('priezvisko');
        $email=$request->input('email');
        $vek=$request->input('vek');

        $user = new User();
        $user->meno=$mano;
        $user->priezvisko=$priezvisko;
        $user->email=$email;
        $user->vek=$vek;
        $user->save();
        return redirect()->action('UserController@showAllAction');
    }
    public function showAction($id)
    {
        $user=User::find($id);
        return view("update", ['user'=> $user]);
    }
    public function updateAction($id, Request $request)
    {
        $user = User::where("id", "=", $id)->first();
        $user->update(['meno'=>$request->input('meno'),
            'priezvisko'=>$request->input('priezvisko'),
            'email'=>$request->input('Email'),
            'vek'=>$request->input('vek')]);
        return redirect()->action('UserController@showAllAction');
    }
    public function deleteAction($id)
{
    $user=User::find($id);
    $user->delete();
    return redirect()->action('UserController@showAllAction');

}
public function showAllAction()
{
    $users=User::all();
    return view("users",["users"=>$users]);
}

}