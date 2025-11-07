@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Post a Job</h1>

    <form action="{{ route('jobs.store') }}" method="POST" class="space-y-4 bg-white p-4 rounded shadow">
        @csrf
        <div>
            <label class="block text-sm">Title</label>
            <input name="title" value="{{ old('title') }}" class="w-full border p-2">
            @error('title')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Company</label>
            <input name="company" value="{{ old('company') }}" class="w-full border p-2">
            @error('company')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Location</label>
            <input name="location" value="{{ old('location') }}" class="w-full border p-2">
            @error('location')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm">Description</label>
            <textarea name="description" class="w-full border p-2" rows="6">{{ old('description') }}</textarea>
            @error('description')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label><input type="checkbox" name="is_remote" value="1"> Remote</label>
        </div>

        <div>
            <button class="px-4 py-2 bg-green-600 text-white rounded">Create Job</button>
        </div>
    </form>
@endsection
