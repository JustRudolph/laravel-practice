@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold">{{ $job->title }}</h1>
        <div class="text-sm text-gray-600">{{ $job->company }} • {{ $job->location ?? 'Remote' }}</div>
        <div class="mt-4">{!! nl2br(e($job->description)) !!}</div>

        <div class="mt-4">
            <a href="{{ route('jobs.edit', $job) }}" class="inline-block px-3 py-2 bg-blue-600 text-white rounded">Edit</a>

            <form method="POST" action="{{ route('jobs.destroy', $job) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="inline-block px-3 py-2 bg-red-600 text-white rounded">Delete</button>
            </form>
        </div>
    </div>
@endsection
