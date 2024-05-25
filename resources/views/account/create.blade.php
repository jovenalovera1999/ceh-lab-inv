@extends('layout.main')

@section('title', 'ADD USER')

@section('content')

@include('include.sidebar')

<div class="row mt-2">
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
    </div>
    <div class="col">
        <div class="mb-3">
            <label for="birth_date">BIRTH DATE</label>
            <input type="date" class="form-control" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" />
        </div>
        <div class="mb-3">
            <label for="gender">GENDER</label>
            <select class="form-select" name="gender" id="gender">
                <option value="" selected>N/A</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="birth_date">BIRTH DATE</label>
            <input type="text" class="form-control" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" />
        </div>
    </div>
</div>

@endsection