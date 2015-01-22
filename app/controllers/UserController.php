<?php

class UserController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter( 'auth', array('only' => array('getIndex','getCreate')) );
    }

    //main index  page
    public function getIndex()
    {
    }
    //form to crete new user
    public function getCreate()
    {
        
    }
    //create new user
    public function postCreate()
    {
        
    }
    //login to system form 
    public function getLogin()
    {
        return View::make("users.login");
    }
    //login to system 
    public function postLogin()
    {
        $input  = Input::all();
        $user = User::where("email",$input["email"])->first();
        if(Auth::attempt(["email" => $input["email"],"password"=>$input["password"]])){
            return View::make("home.index")
                ->with("role",$user->role);
        }
        return Redirect::back()
            ->withErrors("Please try again");
    }
    //logout
    public function getLogout()
    {
        $user = Auth::user();
        Auth::logout($user);
        return Redirect::to("login")
            ->with("logout","You are now logged out");
        
    }

}
