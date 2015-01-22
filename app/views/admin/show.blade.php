@extends("layouts.master")
@section("content")
    <div class="container">
        <div class="row heading">
            <span>SEO Management System ADMIN PANEL</span>
            @if($role == "admin")
                {{link_to("/","User Panel",["class"=>"btn btn-danger"])}}
            @endif
            {{link_to("logout","Logout")}}
        </div>
        <div class="row user-area">
            <div class="col-md-2">
                <div class="sidebar">
                    <br>
                    {{link_to("/admin/view","View Users")}}
                    <br>
                    {{link_to("/admin/create","Create User")}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="user-form">
                    {{Form::open(["url"=>"/admin/create","method"=>"POST"])}}
                        {{Form::label("username")}}
                        {{Form::text("username",$user->username,["class"=>"form-control","placeholder"=>"enter username"])}}
                        <br>
                        {{Form::label("email")}}
                        {{Form::email("email",$user->email,["class"=>"form-control","placeholder"=>"enter email"])}}
                        <br>
                        {{Form::label("password")}}
                        {{Form::text("password","",["class"=>"form-control","placeholder"=>"enter new password"])}}
                        <br>
                        {{Form::label("role")}}
                        {{Form::select("role",["admin"=>"admin","user"=>"user"],$user->role,["class"=>"form-control"])}}
                        <br>
                        {{Form::label("activated")}}
                        {{Form::select("activated",["1"=>"Yes","0"=>"No"],$user->activated,["class"=>"form-control"])}}
                        <br>
                        {{Form::submit("Edit User",["class"=>"btn btn-success pull-right"])}}
                    {{Form::close()}}
                    {{Form::open(["url"=>"/admin/delete","method"=>"POST"])}}
                    {{Form::submit("Delete User",["class"=>"btn btn-danger"])}}
                    {{Form::close()}}

                </div>
            </div>


        </div>
    </div>
@stop
