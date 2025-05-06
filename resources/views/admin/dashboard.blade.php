@extends('admin.layout.layout')

@section('content')
<style>
   .card:hover {
    transform: translateY(-5px) scale(1.02);
    transition: all 0.3s ease-in-out;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}
.card {
    transition: all 0.3s ease-in-out;
    border: none;
    border-radius: 15px;
}
</style>
<div class="content">
    <div class="row g-4">

        <!-- Users -->
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-body text-center">
                    <h5>Users</h5>
                    <h3>{{ $usersCount }}</h3>
                    <i class="fas fa-users fa-2x"></i>
                </div>
            </div>
        </div>

        <!-- Videos -->
        <div class="col-md-3">
            <div class="card text-white bg-success">
                <div class="card-body text-center">
                    <h5>Videos</h5>
                    <h3>{{ $videosCount }}</h3>
                    <i class="fas fa-video fa-2x"></i>
                </div>
            </div>
        </div>

        <!-- Subjects -->
        <div class="col-md-3">
            <div class="card text-white bg-warning">
                <div class="card-body text-center">
                    <h5>Subjects</h5>
                    <h3>{{ $subjectsCount }}</h3>
                    <i class="fas fa-book fa-2x"></i>
                </div>
            </div>
        </div>

        <!-- VRs -->
        <div class="col-md-3">
            <div class="card text-white bg-danger">
                <div class="card-body text-center">
                    <h5>VR Content</h5>
                    <h3>{{ $vrsCount }}</h3>
                    <i class="fas fa-vr-cardboard fa-2x"></i>
                </div>
            </div>
        </div>

        <!-- Games -->
        <div class="col-md-3">
            <div class="card text-white bg-info">
                <div class="card-body text-center">
                    <h5>Games</h5>
                    <h3>{{ $gamesCount }}</h3>
                    <i class="fas fa-gamepad fa-2x"></i>
                </div>
            </div>
        </div>

        <!-- Subscriptions -->
        <div class="col-md-3">
            <div class="card text-white bg-secondary">
                <div class="card-body text-center">
                    <h5>Subscriptions</h5>
                    <h3>{{ $subscriptionsCount }}</h3>
                    <i class="fas fa-receipt fa-2x"></i>
                </div>
            </div>
        </div>

        <!-- Payments -->
        <div class="col-md-3">
            <div class="card text-white bg-dark">
                <div class="card-body text-center">
                    <h5>Payments</h5>
                    <h3>{{ $paymentsCount }}</h3>
                    <i class="fas fa-credit-card fa-2x"></i>
                </div>
            </div>
        </div>

        <!-- Total Revenue -->
        <div class="col-md-3">
            <div class="card text-white" style="background-color: #8e44ad;">
                <div class="card-body text-center">
                    <h5>Total Revenue</h5>
                    <h3>{{ number_format($totalRevenue, 2) }} JD</h3>
                    <i class="fas fa-coins fa-2x"></i>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
