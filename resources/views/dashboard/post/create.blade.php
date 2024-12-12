
@extends('layouts.dashboard')

@section('title', 'Create Post')

@section('content')
<div class="container mt-5">

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Image Upload -->
        <div class="mb-3">
            <label for="images" class="form-label">Upload Images</label>
            <input
                type="file"
                name="images[]"
                multiple
                class="form-control"
                accept="image/*">

        </div>

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                name="title"
                class="form-control"
                placeholder="Enter title">
            @error("title")
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="text"
                name="price"
                class="form-control"
                placeholder="Enter price">
            @error("price")
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Location -->
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input
                type="text"
                name="location"
                class="form-control"
                placeholder="Enter location">
            @error("location")
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- City -->
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input
                type="text"
                name="city"
                class="form-control"
                placeholder="Enter city">
            @error("city")
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Rooms, Kitchens, Bedrooms, Bathrooms -->
        <div class="row">
            <div class="col-md-3">
                <label for="rooms" class="form-label">Rooms</label>
                <input
                    type="text"
                    name="rooms"
                    class="form-control"
                    placeholder="Rooms">
                @error("rooms")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="kitchens" class="form-label">Kitchens</label>
                <input
                    type="text"
                    name="kitchens"
                    class="form-control"
                    placeholder="Kitchens">
                @error("kitchens")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="bedrooms" class="form-label">Bedrooms</label>
                <input
                    type="text"
                    name="bedrooms"
                    class="form-control"
                    placeholder="Bedrooms">
                @error("bedrooms")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="bathrooms" class="form-label">Bathrooms</label>
                <input
                    type="text"
                    name="bathrooms"
                    class="form-control"
                    placeholder="Bathrooms">
                @error("bathrooms")
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea
                name="description"
                class="form-control"
                id="description"
                rows="3"
                placeholder="Enter description"></textarea>
            @error("description")
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Category -->
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select
                name="category"
                class="form-select">
                <option selected disabled>Choose category</option>
                <option value="rent" {{ old('category') == 'rent' ? 'selected' : '' }}>Rent</option>
                <option value="sell" {{ old('category') == 'sell' ? 'selected' : '' }}>Sell</option>
            </select>
            @error("category")
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input
                type="text"
                name="status"
                class="form-control"
                placeholder="Enter status">
            @error("status")
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
@endsection

