<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kesiapan Karir</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="flex bg-gray-100">

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

<!-- MAIN CONTENT -->
<div class="flex-1">

    <!-- HEADER -->
    <div class="flex justify-end items-center p-6 gap-4">
        <div class="bg-gray-200 px-4 py-2 rounded-lg flex items-center gap-2">
            <span>👤</span>
            <span class="text-sm font-medium">Hi, {{ Auth::user()->name }}</span>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-gray-300 px-4 py-2 rounded-lg hover:bg-gray-400">
                Logout
            </button>
        </form>
    </div>

    <!-- CONTENT -->
    <div class="px-10 pb-10">

        <h2 class="text-lg font-semibold mb-6">
            Distribusi Kesiapan Karir
        </h2>

        <!-- FILTER -->
        <div class="flex gap-3 mb-6">

            <select class="px-3 py-2 border rounded">
                <option>Unit</option>
            </select>

            <select class="px-3 py-2 border rounded">
                <option>Jabatan Target</option>
            </select>

            <select class="px-3 py-2 border rounded">
                <option>Tahun Penilaian</option>
            </select>

            <button class="bg-teal-500 text-white px-4 py-2 rounded">
                Filter
            </button>

            <button class="bg-gray-300 px-4 py-2 rounded">
                Reset Filter
            </button>

        </div>

        <!-- CHART (SIMULASI BAR) -->
        <div class="bg-white p-6 rounded-xl shadow w-[500px] mb-8">

            <div class="flex items-center mb-3">
                <span class="w-40 text-sm">Ready Now</span>
                <div class="bg-teal-600 h-3 w-20 mr-2"></div>
                <span class="text-sm">5 orang</span>
            </div>

            <div class="flex items-center mb-3">
                <span class="w-40 text-sm">Ready < 1 Tahun</span>
                <div class="bg-teal-600 h-3 w-32 mr-2"></div>
                <span class="text-sm">12 orang</span>
            </div>

            <div class="flex items-center mb-3">
                <span class="w-40 text-sm">1-2 Tahun</span>
                <div class="bg-teal-600 h-3 w-48 mr-2"></div>
                <span class="text-sm">20 orang</span>
            </div>

            <div class="flex items-center">
                <span class="w-40 text-sm">Belum siap</span>
                <div class="bg-teal-600 h-3 w-72 mr-2"></div>
                <span class="text-sm">263 orang</span>
            </div>

        </div>

        <!-- TABLE TITLE -->
        <h3 class="font-semibold mb-4">
            Tabel Daftar Karyawan Berdasarkan Kategori → Ready Now
        </h3>

        <!-- TABLE -->
        <div class="bg-white rounded-xl shadow p-6">

            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b">
                        <th class="text-left py-2">No</th>
                        <th class="text-left py-2">Nama</th>
                        <th class="text-left py-2">Unit</th>
                        <th class="text-left py-2">Jabatan Saat Ini</th>
                        <th class="text-left py-2">Target Jabatan</th>
                        <th class="text-left py-2">Skor Kompetensi</th>
                        <th class="text-left py-2">Catatan</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b">
                        <td class="py-2">1</td>
                        <td>Andi Pratama Kurniawan</td>
                        <td>SDM</td>
                        <td>HR Officer</td>
                        <td>HR Supervisor</td>
                        <td>90</td>
                        <td>Konsisten 2 tahun terakhir</td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-2">2</td>
                        <td>Siti Aulia</td>
                        <td>Operasional</td>
                        <td>Operator Produksi</td>
                        <td>Leader Produksi</td>
                        <td>88</td>
                        <td>Leadership kuat</td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-2">3</td>
                        <td>Budi Santoso</td>
                        <td>Operasional</td>
                        <td>Supervisor Produksi</td>
                        <td>Assistant Manager Ops</td>
                        <td>80</td>
                        <td>Technical & managerial balance</td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-2">4</td>
                        <td>Rina Marlina</td>
                        <td>Keuangan</td>
                        <td>Staff Akuntasi</td>
                        <td>Senior Accountant</td>
                        <td>75</td>
                        <td>Siap rotasi</td>
                    </tr>

                    <tr>
                        <td class="py-2">5</td>
                        <td>Bambang Purnomo</td>
                        <td>Pemasaran</td>
                        <td>Digital Marketing Specialist</td>
                        <td>Marketing Manager</td>
                        <td>85</td>
                        <td>Siap promosi internal</td>
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