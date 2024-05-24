@extends('layout.main')

@section('title', 'SUPPLIES')

@section('content')

@include('include.sidebar')

<div class="row g-3 mt-2 mb-3">
    <div class="col-md-6 col-lg-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">TOTAL SUPPLIES IN INVENTORY</h5>
                <p class="fs-4 text-end">0</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">TOTAL SUPPLIES IN TRASH</h5>
                <p class="fs-4 text-end">0</p>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-start mb-3">
    <a href="#" class="btn btn-primary">ADD SUPPLY</a>
    <a href="#" class="btn btn-primary ms-1">PRINT SUPPLY</a>
</div>

<div class="table-responsive shadow-sm">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ITEM</th>
                <th scope="col">BRAND</th>
                <th scope="col">SUPPLIER</th>
                <th scope="col">EXISTING QUANTITY</th>
                <th scope="col">EXISTING UNIT QUANTITY</th>
                <th scope="col">RECEIVING QUANTITY</th>
                <th scope="col">RECEIVING UNIT QUANTITY</th>
                <th scope="col">UNIT COST</th>
                <th scope="col">TOTAL COST</th>
                <th scope="col">DATE CREATED</th>
                <th scope="col">DATE UPDATED</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table data should go here -->
        </tbody>
    </table>
</div>

@endsection
