<!-- resources/views/subcategories/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
            <h1 class="text-2xl font-bold mb-6">Create Subcategory</h1>

            <form method="post" action="{{ route('subcategories.store') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Subcategory Name:</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div>
                    <label for="parent_category" class="block text-sm font-medium text-gray-700">Parent Category:</label>
                    <select id="parentcategory_id" name="parentcategory_id" class="mt-1 p-2 w-full border rounded-md">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Add other fields as needed -->

                <div>
                    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded-md hover:bg-gray-600">Create Subcategory</button>
                    <a href="{{ route('subcategories.index') }}" class="block mt-1 w-full bg-gray-500  text-center text-white p-2 rounded-md hover:bg-gray-600">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
