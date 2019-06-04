@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul>
                <li><a href="#" >Families</a></li>
                <ul>
                    <li><a href="#" >Members</a></li>
                </ul>
                <li><a href="#" >Giving</a></li>
                <ul>
                    <li><a href="#" >Offering List</a></li>
                    <li><a href="#" >New Offering</a></li>
                </ul>
                <li><a href="#" >Config</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
