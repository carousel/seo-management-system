@extends("layouts.master")
@section("content")
    <div class="container">
        <div class="row heading">
            <span>SEO Management System USER PANEL</span>
            @if(isset($role) && $role == "admin")
                {{link_to("/admin","Admin Panel",["class"=>"btn btn-danger"])}}
            @endif
            {{link_to("logout","Logout")}}

        </div>
    </div>
@stop
