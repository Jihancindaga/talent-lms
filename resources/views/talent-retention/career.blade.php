<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Career Development Training</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="flex min-h-screen bg-gray-100">

<div class="flex w-full">

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

    <!-- CONTENT -->
    <div class="flex-1">

        <!-- HEADER -->
        <div class="flex justify-end items-center gap-3 px-8 py-4 bg-white shadow">
            <div class="bg-gray-200 px-4 py-2 rounded-lg flex items-center gap-2">
                <span class="w-6 h-6 bg-gray-400 rounded-full"></span>
                <span class="text-sm font-medium">Hi, jihan</span>
            </div>
            <button class="bg-gray-300 px-4 py-2 rounded-lg">Logout</button>
        </div>

        <!-- MAIN -->
        <div class="p-8">

            <h2 class="text-lg font-semibold mb-6">Career Development Training</h2>

            <h3 class="font-semibold mb-3">Tabel Daftar Karyawan</h3>

            <!-- FILTER -->
            <div class="flex gap-3 mb-4">
                <select class="border px-3 py-2 rounded-lg text-sm">
                    <option>Periode</option>
                </select>
                <select class="border px-3 py-2 rounded-lg text-sm">
                    <option>Unit</option>
                </select>
                <button class="bg-teal-600 text-white px-4 py-2 rounded-lg text-sm">Filter</button>
                <button class="bg-gray-300 px-4 py-2 rounded-lg text-sm">Reset</button>
            </div>

            <!-- TABLE -->
            <div class="bg-white rounded-xl shadow p-4 mb-6">
                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Jabatan</th>
                            <th>Masa Kerja</th>
                            <th>Promosi</th>
                            <th>Pelatihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b">
                            <td>1</td>
                            <td>Andi Pratama</td>
                            <td>SDM</td>
                            <td>HR Officer</td>
                            <td>4 Tahun</td>
                            <td>1</td>
                            <td>1</td>
                            <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                        </tr>

                        <tr class="border-b">
                            <td>2</td>
                            <td>Siti Aulia</td>
                            <td>Operasional</td>
                            <td>Operator</td>
                            <td>2 Tahun</td>
                            <td>0</td>
                            <td>0</td>
                            <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>Operasional</td>
                            <td>Supervisor</td>
                            <td>6 Tahun</td>
                            <td>2</td>
                            <td>2</td>
                            <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- DETAIL -->
            <div class="bg-white rounded-xl shadow p-6 flex gap-6">

                <div class="w-1/3 text-center">
                    <div class="w-20 h-20 mx-auto bg-gray-300 rounded-full mb-3"></div>
                    <h3 class="font-semibold">Andi Pratama</h3>
                    <p class="text-sm text-gray-500">123456789</p>

                    <div class="text-left text-sm mt-4">
                        <p><b>Unit:</b> SDM</p>
                        <p><b>Jabatan:</b> HR Officer</p>
                        <p><b>Masa Kerja:</b> 4 Tahun</p>
                    </div>
                </div>

                <div class="w-1/3">
                    <h4 class="font-semibold mb-2">Riwayat Jabatan</h4>
                    <div class="bg-teal-100 p-3 rounded-lg text-sm">
                        <p>2022 - HR Admin</p>
                        <p>2023 - HR Officer</p>
                        <p>2024 - Promosi</p>
                    </div>
                </div>

                <div class="w-1/3">
                    <h4 class="font-semibold mb-2">Ringkasan</h4>
                    <p class="text-sm">Total Promosi: 1</p>
                    <p class="text-sm">Total Pelatihan: 4</p>
                    <p class="text-sm">Terakhir Promosi: 2 tahun lalu</p>
                    <p class="text-teal-700 font-medium mt-2">Gap: Leadership Lanjutan</p>
                </div>

            </div>

        </div>

    </div>

</div>

<script>
function toggleRetentionMenu() {
    document.getElementById('retentionMenu').classList.toggle('hidden');
}

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('w-20');
    sidebar.classList.toggle('w-60');

    document.querySelectorAll('.menu-text').forEach(el => {
        el.classList.toggle('hidden');
    });
}
</script>

</body>
</html>