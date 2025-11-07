@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Job</h1>

    <form action="{{ route('jobs.update', $job) }}" method="POST" class="space-y-4 bg-white p-4 rounded shadow">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm">Title</label>
            <input name="title" value="{{ old('title', $job->title) }}" class="w-full border p-2">
        </div>
        <div>
            <label class="block text-sm">Company</label>
            <input name="company" value="{{ old('company', $job->company) }}" class="w-full border p-2">
        </div>
        <div>
            <label class="block text-sm">Location</label>
            <input name="location" value="{{ old('location', $job->location) }}" class="w-full border p-2">
        </div>
        <div>
            <label class="block text-sm">Description</label>
            <textarea name="description" class="w-full border p-2" rows="6">{{ old('description', $job->description) }}</textarea>
        </div>
        <div>
            <label><input type="checkbox" name="is_remote" value="1" {{ $job->is_remote ? 'checked' : '' }}> Remote</label>
        </div>

        <div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded">Save Changes</button>
        </div>
    </form>
@endsection
