<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | POST ASSIGNMENT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: radial-gradient(circle at center, #1a1b3a 0%, #050505 100%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">

    <div class="bg-[#121212]/90 border border-gray-800 p-8 rounded-3xl shadow-2xl w-full max-w-md backdrop-blur-sm">
        
        <h1 class="text-2xl font-bold text-white text-center mb-2">Welcome Back</h1>
        <p class="text-gray-500 text-center mb-8 text-sm">Please sign in to your dashboard</p>

        <form action="/second" method="GET" class="space-y-6">
            <div>
                <label class="block text-gray-400 text-sm font-medium mb-1.5">Email or Username</label>
                <input type="text" name="username" placeholder="admin@gmail.com" required
                    class="w-full bg-[#1e1e1e] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:border-blue-500 transition">
            </div>

            <div class="relative">
                <div class="flex justify-between mb-1.5">
                    <label class="text-gray-400 text-sm font-medium">Password</label>
                    <a href="#" class="text-gray-500 text-xs hover:text-gray-300">Forgot?</a>
                </div>
                <input type="password" id="password" name="password" placeholder="Enter your password" required
                    class="w-full bg-[#1e1e1e] border border-gray-700 text-white px-4 py-3 rounded-xl focus:outline-none focus:border-blue-500 transition">
                
                <button type="button" onclick="togglePassword()" class="absolute right-4 bottom-3 text-gray-500 hover:text-gray-300">
                    <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 rounded-xl transition shadow-lg shadow-blue-900/20">
                Log In
            </button>
        </form>

        <p class="text-center text-gray-500 text-sm mt-8">
            Don't have an account? <a href="#" class="text-white hover:underline font-medium">Sign Up</a>
        </p>

    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // Change icon to 'eye-slash' or change color to indicate it's visible
                eyeIcon.classList.add('text-blue-500');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('text-blue-500');
            }
        }
    </script>

</body>
</html>