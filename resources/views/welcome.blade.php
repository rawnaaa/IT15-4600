<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Bayeta Backend</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 h-screen flex items-center justify-center">
    <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-md border border-gray-200">
        <h1 class="text-3xl font-extrabold text-blue-600 mb-2 text-center">WELCOME!</h1>
        <p class="text-gray-500 text-center mb-8 font-medium">Please sign in to your dashboard</p>
        <form action="/second" method="GET" class="space-y-5">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Username</label>
                <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="admin" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Password</label>
                <input type="password" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="••••••••" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg transition duration-300 transform hover:-translate-y-1">
                Log In
            </button>
        </form>
    </div>
</body>
</html>
