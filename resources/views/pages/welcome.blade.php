@extends('layouts.default')
@section('content')
    <div class="container">
        <form>
            <center>
                <legend>Login to mylogo</legend>
                <div class="form-group">
                  <div class="col-sm-12 col-md-4 col-xl-3 col-lg-3">
                    <input type="text" class="form-control" id="Email" placeholder="email">
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 col-md-4 col-xl-3">
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 col-md-4 col-xl-3">
                        <button type="submit" class="btn btn-primary form-control">Log in</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 col-md-4 col-xl-3">
                        <button type="button" onclick="window.location='{{ url("register") }}'" class="btn btn-primary form-control">Sign up</button>
                    </div>
                </div>
            </center>
        </form>
    </div>
@stop