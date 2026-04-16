<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Talent Retention - Talent LMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="flex min-h-screen bg-gray-100">

    <!-- SIDEBAR -->
    <div id="sidebar"
         class="w-20 min-h-screen bg-gradient-to-b from-teal-900 to-teal-700 flex flex-col items-center py-6">

        <!-- TOGGLE -->
        <button onclick="toggleSidebar()"
            class="mb-6 bg-white text-teal-700 w-7 h-7 rounded-full shadow flex items-center justify-center text-sm hover:bg-gray-100">
            ❯
        </button>

        <!-- MENU -->
        <div class="flex flex-col items-center gap-10 text-white text-xs mt-4">

            <!-- DASHBOARD -->
            <a href="{{ route('dashboard') }}"
               class="flex flex-col items-center gap-2 opacity-70 hover:opacity-100">
                <div class="text-2xl">
                    <i class="fa-solid fa-house"></i>
                </div>
                <span class="menu-text hidden">Dashboard</span>
            </a>

            <!-- DEVELOPMENT -->
            <a href="/talent-development"
               class="flex flex-col items-center gap-2 opacity-70 hover:opacity-100">
                <div class="text-2xl">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <span class="menu-text hidden">Development</span>
            </a>

            <!-- RETENTION -->
            <div class="relative">

                <button onclick="toggleRetentionMenu()"
                    class="flex flex-col items-center gap-2 w-full">

                    <div class="bg-teal-500 p-3 rounded-full shadow">
                        <i class="fa-solid fa-chart-line text-white text-xl"></i>
                    </div>

                    <span class="menu-text hidden text-white text-xs">Retention</span>
                </button>

    <!-- POPUP MENU -->
    <div id="retentionMenu"
     class="hidden absolute left-20 top-20 bg-white shadow-xl rounded-xl p-4 w-64 z-50">

    <!-- MONITORING -->
    <p class="text-xs text-gray-400 mb-1">Monitoring</p>
    <a href="{{ route('talent.retention') }}"
       class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">
        Monitoring Retensi
    </a>

    <a href="{{ route('retention.risiko') }}"
       class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700 mb-3">
        Risiko Resign
    </a>

    <!-- CAREER -->
    <p class="text-xs text-gray-400 mb-1">Career Development</p>
    <a href="{{ route('retention.career') }}" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">Training</a>
    <a href="{{ route('retention.kesiapan') }}" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">Kesiapan Karir</a>
    <a href="{{ route('retention.rekomendasi') }}" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">Rekomendasi</a>

    <!-- ENGAGEMENT -->
    <p class="text-xs text-gray-400 mb-1">Engagement</p>
    <a href="#" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">Survei</a>
    <a href="#" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">Feedback</a>
    <a href="#" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">Analisis</a>

    <!-- TALENT -->
    <p class="text-xs text-gray-400 mb-1">Talent Pool</p>
    <a href="#" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">
        Talent Potensial
    </a>

    <!-- EWS -->
    <p class="text-xs text-gray-400 mb-1">EWS</p>
    <a href="#" class="block px-3 py-2 rounded hover:bg-teal-50 text-gray-700">
        Risiko Resign
    </a>

</div>

            </div>

            <!-- OFFBOARDING -->
            <a href="/employee-offboarding"
               class="flex flex-col items-center gap-2 opacity-70 hover:opacity-100">
                <div class="text-2xl">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span class="menu-text hidden">Offboarding</span>
            </a>

        </div>
    </div>

</div>

<!-- CONTENT -->
<div class="flex-1 flex flex-col">

    <!-- HEADER -->
    <div class="bg-white px-6 py-3 shadow-sm flex justify-end items-center">

        <div class="flex items-center gap-4">

            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                <div class="text-sm leading-tight">
                    <div class="font-semibold">Hi, {{ Auth::user()->name }}</div>
                    <div class="text-gray-500 text-xs">(User)</div>
                </div>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300">
                    Logout
                </button>
            </form>

        </div>

    </div>

    <!-- MAIN -->
    <div class="p-6 w-full">

        <!-- CARDS -->
        <div class="grid grid-cols-5 gap-6 mb-8 w-full">

            <div class="bg-white p-5 rounded-xl shadow text-center">
                <p>Total Karyawan</p>
                <h2 class="text-3xl font-bold text-teal-700">320</h2>
                <small>+12 dari tahun lalu</small>
            </div>

            <div class="bg-white p-5 rounded-xl shadow text-center">
                <p>Retention Rate</p>
                <h2 class="text-3xl font-bold text-teal-700">92%</h2>
                <small>Turun 2%</small>
            </div>

            <div class="bg-white p-5 rounded-xl shadow text-center">
                <p>Karyawan Resign</p>
                <h2 class="text-3xl font-bold text-teal-700">25</h2>
                <small>18 voluntary</small>
            </div>

            <div class="bg-white p-5 rounded-xl shadow text-center">
                <p>Unit Terendah</p>
                <h2 class="text-3xl font-bold text-teal-700">88%</h2>
                <small>Operasional II</small>
            </div>

            <div class="bg-white p-5 rounded-xl shadow text-center">
                <p>Trend</p>
                <h2 class="text-3xl font-bold text-teal-700">94% → 92%</h2>
                <small>Menurun</small>
            </div>

        </div>

        <!-- TITLE -->
        <h2 class="font-semibold text-gray-700 mb-3">
            Tabel Retention Per Unit
        </h2>

        <!-- FILTER -->
        <div class="flex items-center gap-3 mb-6">

            <!-- UNIT -->
            <div class="relative">
                <select class="appearance-none bg-white border px-4 pr-10 py-2 rounded-lg text-sm shadow-sm">
                    <option>Semua Unit</option>
                    <option>SDM</option>
                    <option>Transformasi</option>
                    <option>Operasional</option>
                    <option>Pemasaran</option>
                </select>
                <div class="absolute right-3 top-2.5 text-gray-500 pointer-events-none"></div>
            </div>

            <!-- TREN -->
            <div class="relative">
                <select class="appearance-none bg-white border px-4 pr-10 py-2 rounded-lg text-sm shadow-sm">
                    <option>Semua Tren</option>
                    <option>Stabil</option>
                    <option>Membaik</option>
                    <option>Memburuk</option>
                </select>
                <div class="absolute right-3 top-2.5 text-gray-500 pointer-events-none"></div>
            </div>

            <!-- BUTTON -->
            <button class="bg-teal-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-teal-700">
                Filter
            </button>

            <button class="bg-gray-200 px-4 py-2 rounded-lg text-sm hover:bg-gray-300">
                Reset
            </button>

        </div>

        <!-- TABLE -->
        <div class="bg-white p-6 rounded-xl shadow-sm w-full">

            <table class="w-full text-sm">
                <thead class="border-b text-gray-600">
                    <tr class="text-left">
                        <th class="pb-2">No</th>
                        <th>Unit</th>
                        <th>Total Karyawan</th>
                        <th>Bertahan</th>
                        <th>Resign</th>
                        <th>Retention Rate</th>
                        <th>Risiko Tinggi</th>
                        <th>Tren</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y">

                    <tr class="hover:bg-gray-50">
                        <td class="py-3">1</td>
                        <td>SDM</td>
                        <td>40</td>
                        <td>40</td>
                        <td>2</td>
                        <td>95%</td>
                        <td>3</td>
                        <td class="text-green-600">Stabil</td>
                        <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="py-3">2</td>
                        <td>Transformasi</td>
                        <td>60</td>
                        <td>60</td>
                        <td>3</td>
                        <td>95%</td>
                        <td>4</td>
                        <td class="text-yellow-500">Membaik</td>
                        <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="py-3">3</td>
                        <td>Pemasaran</td>
                        <td>50</td>
                        <td>50</td>
                        <td>3</td>
                        <td>94%</td>
                        <td>5</td>
                        <td class="text-green-600">Stabil</td>
                        <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="py-3">4</td>
                        <td>Operasional II</td>
                        <td>70</td>
                        <td>70</td>
                        <td>6</td>
                        <td>90%</td>
                        <td>10</td>
                        <td class="text-red-600">Memburuk</td>
                        <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>

</div>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const texts = document.querySelectorAll('.menu-text');

    if (sidebar.classList.contains('w-20')) {
        sidebar.classList.remove('w-20');
        sidebar.classList.add('w-56');
        texts.forEach(t => t.classList.remove('hidden'));
    } else {
        sidebar.classList.remove('w-56');
        sidebar.classList.add('w-20');
        texts.forEach(t => t.classList.add('hidden'));
    }
}
</script>

<script>
function toggleRetentionMenu() {
    const menu = document.getElementById('retentionMenu');
    menu.classList.toggle('hidden');
}

// klik di luar → nutup
document.addEventListener('click', function(e) {
    const menu = document.getElementById('retentionMenu');
    if (!e.target.closest('#retentionMenu') && !e.target.closest('button')) {
        menu.classList.add('hidden');
    }
});
</script>

</body>
</html>