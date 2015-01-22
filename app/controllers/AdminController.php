<?php

class AdminController extends \BaseController {

	public function getIndex()
	{
        $role = Auth::user()->role;
        return View::make("admin.index")
            ->with("role",$role);
	}
    public function getCreate()
    {
        $role = Auth::user()->role;
        return View::make("admin.create")
            ->with("role",$role);
    }
    public function postCreate()
    {
        $input = Input::all();
        $user = new User;
        $user->username = $input["username"];
        $user->email = $input["email"];
        $user->password = Hash::make($input["email"]);
        $user->save();
        return Redirect::back()
            ->with("success","New user has been created");
    }
    public function getView()
    {
        $role = Auth::user()->role;
        $users = User::all();
        return View::make("admin.view")
            ->with("role",$role)
            ->with("users",$users);
        
    }
    public function getUser($id)
    {
        $role = Auth::user()->role;
        $user = User::where("id",$id)->first();
        return View::make("admin.show")
            ->with("role",$role)
            ->with("user",$user);
    }

}
