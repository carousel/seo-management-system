@extends("layouts.master")
@section("content")
    <div class="container">

        <div class="row-fluid col-md-6 login-form">
        <h2>SEO Management System</h2>
        <br>
        <h3>Please login to proceed</h3>
        @if($errors->has())
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            {{Form::open(["url"=>"login","method"=>"POST"])}}
            {{Form::label("email")}}
            {{Form::email("email","",["class"=>"form-control","placeholder"=>"please enter email"])}}
            <br>
            {{Form::label("password")}}
            {{Form::password("password",["class"=>"form-control","placeholder"=>"please enter email"])}}
            <br>
            {{Form::submit("Submit",["class"=>"btn btn-success pull-right"])}}
            {{Form::close()}}
        </div>
    </div>
@stop
        
