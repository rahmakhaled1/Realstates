@extends('layouts.dashboard')

@section('title', 'Seller Settings')

@section('content')

    <!-- Start Add Product -->
    <form method="POST" action="{{ route('user-profile-information.update') }}" class="container pt-5 pb-5">
        @csrf
        @method('PUT')
        <div class="card">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="phone-number" class="form-label">Phone Number</label>
                    <input type="text" name="phone-number" class="form-control" value="{{ old('phone-number', $user->phone_number) }}" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Birth Day</label>
                    <input type="date" name="birthday" class="form-control" value="{{ old('birthday', $user->birthday) }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="New Password (Optional)">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password (Optional)">
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </form>

@endsection

