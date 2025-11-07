<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Job Board</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto">
            <a href="{{ route('jobs.index') }}" class="font-bold">Job Board</a>
            <a href="{{ route('jobs.create') }}" class="ml-4 text-sm">Post a job</a>
        </div>
    </nav>

    <main class="container mx-auto my-6">
        @if(session('success'))
            <div class="bg-green-100 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>
</body>
</html>
