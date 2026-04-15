<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Talent LMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="min-h-screen bg-gradient-to-r from-teal-800 to-teal-300 flex flex-col">
    
    <!-- HEADER -->
    <div class="flex justify-end items-center gap-3 mb-10 px-10 pt-6">

    <!-- USER -->
    <div class="bg-teal-700 text-white px-4 py-2 rounded-lg shadow flex items-center gap-2 h-10">
        <span>👤</span>
        <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
    </div>

    <!-- LOGOUT -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button 
            class="bg-teal-600 text-white px-4 h-10 rounded-lg shadow hover:bg-teal-700 flex items-center">
            Logout
        </button>
    </form>

</div>

    <div class="flex flex-col items-center justify-center flex-1">

    <!-- TITLE -->
    <div class="text-center mb-10">
        <h1 class="text-white text-2xl font-bold bg-teal-600 inline-block px-6 py-2 rounded-full shadow">
            Menu Utama
        </h1>
    </div>

    <!-- MENU -->
<div class="flex justify-center gap-8 mt-12">

    <!-- Talent Development -->
    <a href="/talent-development"
       class="bg-white/20 backdrop-blur-md p-6 rounded-xl text-center w-64 h-40
       flex flex-col items-center justify-center
       hover:scale-110 hover:bg-white/30 hover:shadow-2xl transition duration-300">

        <i class="fa-solid fa-user-gear text-white text-3xl mb-3"></i>
        <p class="text-white text-base font-medium">Talent Development</p>
    </a>

    <!-- Talent Retention -->
    <a href="{{ route('talent.retention') }}"
       class="bg-white/20 backdrop-blur-md p-6 rounded-xl text-center w-64 h-40
       flex flex-col items-center justify-center
       hover:scale-110 hover:bg-white/30 hover:shadow-2xl transition duration-300">

        <i class="fa-solid fa-user-check text-white text-3xl mb-3"></i>
        <p class="text-white text-base font-medium">Talent Retention</p>
    </a>

    <!-- Employee Offboarding -->
    <a href="/employee-offboarding"
       class="bg-white/20 backdrop-blur-md p-6 rounded-xl text-center w-64 h-40
       flex flex-col items-center justify-center
       hover:scale-110 hover:bg-white/30 hover:shadow-2xl transition duration-300">

        <i class="fa-solid fa-user text-white text-3xl mb-3"></i>
        <p class="text-white text-base font-medium">Employee Offboarding</p>
    </a>

</div>
</div>

</body>
</html>