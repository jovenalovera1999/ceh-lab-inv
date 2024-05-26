@extends('layout.main')

@section('title', 'ACCOUNTS')

@section('content')

@include('include.sidebar')

<div class="row g-3 mt-2 mb-3">
    <div class="col-md-6 col-lg-4">
        <div class="card custom-card-color h-100">
            <div class="card-body">
                <h5 class="card-title">TOTAL NUMBER OF ADMIN</h5>
                <p class="fs-4 text-end">0</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card custom-card-color h-100">
            <div class="card-body">
                <h5 class="card-title">TOTAL NUMBER OF USER</h5>
                <p class="fs-4 text-end">0</p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-start mb-3">
    <a href="#" class="btn btn-primary">ADD USER</a>
</div>

<div class="table-responsive shadow-sm">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">FULL NAME</th>
                <th scope="col">BIRTH DATE</th>
                <th scope="col">AGE</th>
                <th scope="col">GENDER</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">CONTACT NUMBER</th>
                <th scope="col">EMAIL</th>
                <th scope="col">POSITION</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table data should go here -->
        </tbody>
    </table>
</div>
    
@endsection