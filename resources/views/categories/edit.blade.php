<!-- resources/views/categories/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
            <h1 class="text-2xl font-bold mb-6">Edit Category</h1>

            <form method="post" action="{{ route('categories.update', $category->id) }}" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Category Name:</label>
                    <input type="text" id="name" name="name" value="{{ $category->name }}" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Category Type:</label>
                    <select id="type" name="type" class="mt-1 p-2 w-full border rounded-md">
                        <option value="service" {{ $category->type === 'service' ? 'selected' : '' }}>Service</option>
                        <option value="product" {{ $category->type === 'product' ? 'selected' : '' }}>Product</option>
                    </select>
                </div>

                <!-- Add other fields as needed -->

                <div>
                    <button type="submit" class="w-full bg-gray-500 text-white p-2 rounded-md hover:bg-gray-600">Update Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
