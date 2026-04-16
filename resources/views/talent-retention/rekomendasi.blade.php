<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rekomendasi Pengembangan Karir</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100">

<div class="flex">

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



    <!-- MAIN CONTENT -->
    <div class="flex-1 p-6">

        <!-- HEADER -->
        <div class="flex justify-end items-center gap-3 mb-6">
            <div class="bg-gray-200 px-4 py-2 rounded-lg text-sm">
                Hi, {{ Auth::user()->name }}
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-gray-300 px-4 py-2 rounded-lg text-sm">
                    Logout
                </button>
            </form>
        </div>

        <!-- TITLE -->
        <h2 class="text-xl font-semibold mb-4">
            Rekomendasi Pengembangan Karir
        </h2>

        <!-- FILTER -->
        <div class="flex gap-3 mb-6 flex-wrap">
            <select class="px-3 py-2 rounded border text-sm">
                <option>Unit</option>
            </select>

            <select class="px-3 py-2 rounded border text-sm">
                <option>Jabatan Target</option>
            </select>

            <select class="px-3 py-2 rounded border text-sm">
                <option>Tahun Penilaian</option>
            </select>

            <button class="bg-teal-600 text-white px-4 py-2 rounded text-sm">
                Filter
            </button>

            <button class="bg-gray-300 px-4 py-2 rounded text-sm">
                Reset
            </button>
        </div>

        <div class="flex gap-6">

            <!-- TABEL -->
            <div class="flex-1 bg-white rounded-xl shadow p-4 overflow-x-auto">

                <h3 class="font-semibold mb-4">Tabel Rekomendasi Pengembangan</h3>

                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b text-left">
                            <th class="py-2">No</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Jabatan Saat Ini</th>
                            <th>Target Jabatan</th>
                            <th>Gap Kompetensi</th>
                            <th>Rekomendasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 1; $i <= 10; $i++)
                        <tr class="border-b">
                            <td class="py-2">{{ $i }}</td>
                            <td>Andi Pratama</td>
                            <td>SDM</td>
                            <td>HR Officer</td>
                            <td>HR Supervisor</td>
                            <td>Leadership</td>
                            <td>Leadership Training</td>
                            <td>
                                <button class="bg-gray-200 px-3 py-1 rounded text-xs">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>

            </div>

            <!-- PANEL DETAIL -->
            <div class="w-80 bg-white rounded-xl shadow p-4">

                <!-- CLOSE -->
                <div class="flex justify-end">
                    <button class="text-red-500 text-lg">✖</button>
                </div>

                <!-- PROFILE -->
                <div class="flex flex-col items-center mb-4">
                    <div class="w-16 h-16 bg-gray-300 rounded-full mb-2"></div>
                    <h3 class="font-semibold">Andi Pratama</h3>
                    <p class="text-xs text-gray-500">123456789</p>
                </div>

                <!-- DETAIL -->
                <div class="text-sm space-y-3">

                    <div>
                        <p class="font-semibold">Detail Karyawan</p>
                        <p>Unit : SDM</p>
                        <p>Jabatan : HR Officer</p>
                        <p>Masa Kerja : 4 Tahun</p>
                    </div>

                    <div>
                        <p class="font-semibold">Analisis</p>
                        <p>Kompetensi : Baik</p>
                        <p>Leadership : Perlu Pengembangan</p>
                    </div>

                    <div>
                        <p class="font-semibold">Rekomendasi</p>
                        <p>Leadership Training - 6 Bulan</p>
                        <p>Mentoring - 3 Bulan</p>
                    </div>

                    <div>
                        <p class="font-semibold">Timeline</p>
                        <p>Juli - Desember 2026</p>
                    </div>

                    <div>
                        <p class="font-semibold">Status</p>
                        <p>Direncanakan</p>
                    </div>

                </div>

                <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded">
                    Edit
                </button>

            </div>

        </div>

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