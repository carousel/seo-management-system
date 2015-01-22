<?php

class HomeController extends BaseController {

    public function getIndex()
    {
        if(Auth::user()){
            $role = Auth::user()->role;
            return View::make("home.index")
            ->with("role",$role);
        
        }
            return View::make("home.index");
        
    }

}
