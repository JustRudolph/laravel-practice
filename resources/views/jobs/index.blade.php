@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Open Positions</h1>

    <div class="space-y-4">
    @foreach($jobs as $job)
        <div class="bg-white p-4 rounded shadow">
            <a href="{{ route('jobs.show', $job) }}" class="text-xl font-semibold">{{ $job->title }}</a>
            <div class="text-sm text-gray-600">{{ $job->company }} — {{ $job->location ?? 'Remote' }}</div>
        </div>
    @endforeach
    </div>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
@endsection
