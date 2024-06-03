@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

<!-- resources/views/dashboard.blade.php -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to Dashboard</h1>
            <p>Total Sales: {{ $sales }}</p>
            <p>User aktif: {{ $user }}</p>
        </div>
    </div>
</div>
@endsection

