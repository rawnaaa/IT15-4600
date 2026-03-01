<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Bayeta Backend</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            /* Matching the login page gradient */
            background: radial-gradient(circle at center, #1a1b3a 0%, #050505 100%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="min-h-screen p-8">

    <div class="max-w-6xl mx-auto flex justify-between items-center mb-12">
        <div>
            <h1 class="text-3xl font-bold text-white tracking-tight">My Dashboard</h1>
            
        </div>
        
        <a href="/" class="bg-[#121212]/60 border border-gray-800 text-gray-400 hover:text-white px-6 py-2 rounded-xl transition backdrop-blur-sm">
            ← Log Out
        </a>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($posts as $post)
            <div class="bg-[#121212]/80 border border-gray-800 p-6 rounded-3xl shadow-2xl backdrop-blur-md flex flex-col justify-between hover:border-blue-500/50 transition duration-300">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2 h-8 bg-blue-600 rounded-full"></div>
                        <h2 class="text-xl font-bold text-white">{{ $post->title }}</h2>
                    </div>
                    
                    <p class="text-gray-400 leading-relaxed mb-6">
                        {{ $post->text }}
                    </p>
                </div>

                <div class="pt-4 border-t border-gray-800/50">
                    <span class="text-[10px] uppercase tracking-widest text-gray-600 font-semibold">
                        Posted on: {{ $post->created_at->format('Y-m-d H:i') }}
                    </span>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-20 bg-[#121212]/40 border-2 border-dashed border-gray-800 rounded-3xl">
                <p class="text-gray-500 italic">No posts found in the database. Use Tinker to add some!</p>
            </div>
        @endforelse
    </div>

</body>
</html>