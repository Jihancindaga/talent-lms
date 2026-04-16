<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Talent LMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-teal-800 to-teal-300">

<div class="w-[90%] h-[85vh] flex rounded-2xl overflow-hidden shadow-2xl">

    <!-- LEFT SIDE -->
    <div class="w-1/2 text-white flex flex-col justify-center px-20 relative">

        <!-- Logo (optional) -->
        <h3 class="absolute top-10 left-10 font-bold">LPP AGRO</h3>

        <p class="mb-2 text-sm">Selamat datang di</p>

        <h1 class="text-4xl font-bold mb-10 leading-tight">
            Talent Lifecycle Management System
        </h1>

        <div class="flex gap-4">

        <div class="bg-white/20 backdrop-blur-md p-4 rounded-lg text-center w-32">
            <i class="fa-solid fa-user-gear text-2xl mb-2"></i>
            <p class="text-sm">Talent Development</p>
        </div>

        <div class="bg-white/20 backdrop-blur-md p-4 rounded-lg text-center w-32">
            <i class="fa-solid fa-user-check text-2xl mb-2"></i>
            <p class="text-sm">Talent Retention</p>
        </div>

        <div class="bg-white/20 backdrop-blur-md p-4 rounded-lg text-center w-32">
            <i class="fa-solid fa-user-plus text-2xl mb-2"></i>
            <p class="text-sm">Employee Offboarding</p>
        </div>

    </div>

        <p class="absolute bottom-6 text-xs opacity-70">
            Copyright © 2026 Digital Intelligence
        </p>
    </div>

    <!-- RIGHT SIDE (LOGIN CARD) -->
    <div class="w-1/2 flex items-center justify-center">

        <div class="w-[75%] h-[80%] bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center shadow-lg">

            <form method="POST" action="{{ route('login') }}" class="w-3/4">
                @csrf

                <h2 class="text-2xl font-bold mb-6 text-white text-center">
                    Login
                </h2>

                <!-- Email -->
                <input type="email" name="email" placeholder="Email"
                    class="w-full mb-4 p-3 rounded-lg bg-white/80 outline-none"
                    required>

                <!-- Password -->
                <input type="password" name="password" placeholder="Password"
                    class="w-full mb-6 p-3 rounded-lg bg-white/80 outline-none"
                    required>

                <!-- Button -->
                <button class="w-full bg-teal-700 text-white py-3 rounded-lg hover:bg-teal-800 transition">
                    Login
                </button>

                <!-- Register -->
                <p class="text-center text-sm text-white mt-4">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="underline">Register</a>
                </p>

            </form>

        </div>

    </div>

</div>

</body>
</html>