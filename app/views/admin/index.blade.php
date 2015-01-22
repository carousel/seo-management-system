@extends("layouts.master")
@section("content")
    <div class="container">
        <div class="row heading">
            <span>SEO Management System ADMIN PANEL</span>
            @if($role == "admin")
                {{link_to("/","User Panel",["class"=>"btn btn-danger"])}}
            @endif
            {{link_to("logout","Logout")}}
            {{link_to("/","Home")}}
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <br>
                    {{link_to("/admin/view","View Users")}}
                    <br>
                    {{link_to("/admin/create","Create User")}}
                </div>
            </div>
        </div>
    </div>
@stop
