@extends('layouts.default')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="card-container">
                        <h1 class="p-4">Welcome Home {{ $user->username }}</h1>
                    </div>



                    <div class="row">
                        <div class="col-lg-9">
                            <h2> Inventory Control</h2>
                            <p>
                                Updates Shown Here........
                            </p>
                            <a href="/inventory" class="btn btn-uce">Browse Inventory</a>
                        </div>
                        <div class="col-lg-3">
                            <img src="./images/logo.jpg" alt="UCEL"/>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
