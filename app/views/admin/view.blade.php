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
                <div class="user-area">
                            <ul>
                                @foreach($users as $user)
                                <li>{{link_to("/admin/show/" . $user->id,$user->username)}}</li>
                                @endforeach
                            </ul>
                    </div>
            </div>

        </div>
    </div>
@stop
