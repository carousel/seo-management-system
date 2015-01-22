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
        @if(Session::has("success"))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <ul>
                    <li>{{Session::get("success")}}</li>
                </ul>
            </div>
        @endif
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
                        {{Form::text("username","",["class"=>"form-control","placeholder"=>"enter username"])}}
                        <br>
                        {{Form::label("email")}}
                        {{Form::email("email","",["class"=>"form-control","placeholder"=>"enter email"])}}
                        <br>
                        {{Form::label("password")}}
                        {{Form::text("password","",["class"=>"form-control","placeholder"=>"enter password"])}}
                        <br>
                        {{Form::label("role")}}
                        {{Form::select("role",["admin"=>"admin","user"=>"user"],"",["class"=>"form-control"])}}
                        <br>
                        {{Form::label("activate")}}
                        {{Form::select("activate",["1"=>"Yes","0"=>"No"],"",["class"=>"form-control"])}}
                        <br>
                        {{Form::submit("Create User",["class"=>"btn btn-success pull-right"])}}
                    {{Form::close()}}
                </div>
            </div>

        </div>
    </div>
@stop
