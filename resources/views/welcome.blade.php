@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Welcome to Podil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img class="img-thumbnail img-fluid rounded" src="images/family.jpg">
                        <h2 class="card-title">Share your <span class="badge badge-info">life moments.</span></h2>
                        <p class="card-text">Sign up and start uploading images.</p>
                        <p class="card-text">Share with your friends and family.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
