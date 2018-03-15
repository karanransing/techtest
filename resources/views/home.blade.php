@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default mycontainer">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! {{ Auth::user()->name }}<br>
                    Email : {{ Auth::user()->email }}<br>
                    Contact : {{ Auth::user()->contact }}<br>
                    Address : {{ Auth::user()->address }}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
