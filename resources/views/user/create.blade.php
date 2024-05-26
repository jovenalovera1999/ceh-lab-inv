@extends('layout.main')

@section('title', 'ADD USER')

@section('content')

@include('include.sidebar')

<h3 class="mt-2 mb-3">ADD USER</h3>

<div class="row">
    <div class="col">
        <div class="mb-3">
            <label for="first_name">FIRST NAME</label>
            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" />
        </div>
        <div class="mb-3">
            <label for="middle_name">MIDDLE NAME</label>
            <input type="text" class="form-control" name="middle_name" id="middle_name" value="{{ old('middle_name') }}" />
        </div>
        <div class="mb-3">
            <label for="last_name">LAST NAME</label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" />
        </div>
        <div class="mb-3">
            <label for="suffix_name">SUFFIX NAME</label>
            <select class="form-select" name="suffix_name" id="suffix_name">
                <option value="" selected>N/A</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="birth_date">BIRTH DATE</label>
            <input type="date" class="form-control" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" />
        </div>
        <div class="mb-3">
            <label for="address">ADDRESS</label>
            <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" />
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="contact_number">CONTACT NUMBER</label>
            <input type="text" class="form-control" name="contact_number" id="contact_number" value="{{ old('contact_number') }}" />
        </div>
        <div class="mb-3">
            <label for="gender">GENDER</label>
            <select class="form-select" name="gender" id="gender">
                <option value="" selected>N/A</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email">EMAIL</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" />
        </div>
        <div class="mb-3">
            <label for="password">PASSWORD</label>
            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" />
        </div>
        <div class="mb-3">
            <label for="password_confirmation">CONFIRM PASSWORD</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" />
        </div>
        <div class="mb-3">
            <label for="role">ROLE</label>
            <select class="form-select" name="role" id="role">
                <option value="" selected>N/A</option>
            </select>
        </div>

        <div class="d-flex justify-content-end mb-3">
            <a href="#" class="btn btn-primary me-1">BACK</a>
            <button type="submit" class="btn btn-primary">SAVE USER</button>
        </div>
    </div>
</div>

@endsection