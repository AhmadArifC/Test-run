@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard - Monthly Stats</h1>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">User Signups</div>
                <div class="card-body">
                    <h3 class="card-title">{{ $userSignups }}</h3>
                    <p class="card-text">This month</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Sales</div>
                <div class="card-body">
                    <h3 class="card-title">${{ number_format($sales, 2) }}</h3>
                    <p class="card-text">This month</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Active Users</div>
                <div class="card-body">
                    <h3 class="card-title">{{ $activeUsers }}</h3>
                    <p class="card-text">This month</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Transactions</div>
                <div class="card-body">
                    <h3 class="card-title">{{ $transactions }}</h3>
                    <p class="card-text">This month</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
