<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bayeta Backend | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="bg-red-200 p-10">
    <div class="max-w-4xl mx-auto">
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 underline decoration-white-500">My Dashboard</h1>
            <a href="/" class="text-blue-600 hover:text-blue-800">← Log Out</a>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse($posts as $post)
                <div class="bg-white p-6 round
                ed-lg shadow-md border-l-4 border-blue-500">
                    <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ $post->text }}</p>
                    <span class="text-xs text-gray-400">Posted on: {{ $post->created_at }}</span>
                </div>
            @empty
                <p class="text-gray-500 italic">No posts found in the database yet.</p>
            @endforelse
        </div>
    </div>
</body>
</html>