<?php

class HomeController extends BaseController {

    public function getIndex()
    {
        $role = Auth::user()->role;
        return View::make("home.index")
            ->with("role",$role);

        
    }

}
