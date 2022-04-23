@extends('layouts.master')

@section('title', 'Home')

@section('sidebar')
    @parent
@endsection

@section('content')
<br><br><br><br><br>
<div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-offset-4 col-md-4" id="box">
                <h2>Sign In</h2>
                <hr>
                <form class="form-horizontal" method="get" id="login_form">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group"> <span class="input-group-addon"><i
                                            class="glyphicon glyphicon-user"></i></span> <input name="first_name"
                                        placeholder="Username" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group"> <span class="input-group-addon"><i
                                            class="glyphicon glyphicon-lock"></i></span> <input name="email"
                                        placeholder="Password" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-md btn-danger pull-right">Submit </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
@endsection

@section('footer')
    @parent
@endsection