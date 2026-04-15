<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Risiko Resign</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- SIDEBAR -->
<div id="sidebar"
     class="w-20 min-h-screen bg-gradient-to-b from-teal-900 to-teal-700 flex flex-col items-center py-6 transition-all duration-300">

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

            <!-- TITLE -->
            <h2 class="text-lg font-semibold mb-6">
                Monitoring Karyawan Berisiko Resign
            </h2>

            <!-- CARDS -->
            <div class="grid grid-cols-6 gap-4 mb-8">

                <div class="bg-white p-4 rounded-xl text-center shadow">
                    <p>Total Karyawan</p>
                    <h1 class="text-3xl text-teal-700 font-bold mt-2">40</h1>
                </div>

                <div class="bg-white p-4 rounded-xl text-center shadow">
                    <p>Bertahan</p>
                    <h1 class="text-3xl text-teal-700 font-bold mt-2">38</h1>
                </div>

                <div class="bg-white p-4 rounded-xl text-center shadow">
                    <p>Resign</p>
                    <h1 class="text-3xl text-teal-700 font-bold mt-2">2</h1>
                </div>

                <div class="bg-white p-4 rounded-xl text-center shadow">
                    <p>Retention Rate</p>
                    <h1 class="text-3xl text-teal-700 font-bold mt-2">95%</h1>
                </div>

                <div class="bg-white p-4 rounded-xl text-center shadow">
                    <p>Risiko Tinggi</p>
                    <h1 class="text-3xl text-teal-700 font-bold mt-2">3</h1>
                </div>

                <div class="bg-white p-4 rounded-xl text-center shadow">
                    <p>Tren</p>
                    <h1 class="text-2xl text-teal-700 font-bold mt-2">Stabil</h1>
                </div>

            </div>

            <!-- TITLE TABLE -->
            <h3 class="font-semibold mb-3">
                Tabel Karyawan Berisiko Resign – Unit SDM
            </h3>

            <!-- FILTER -->
            <div class="flex gap-3 mb-4">
                <select class="border px-3 py-2 rounded-lg text-sm">
                    <option>Unit</option>
                </select>

                <select class="border px-3 py-2 rounded-lg text-sm">
                    <option>Level Risiko</option>
                </select>

                <select class="border px-3 py-2 rounded-lg text-sm">
                    <option>Periode</option>
                </select>

                <select class="border px-3 py-2 rounded-lg text-sm">
                    <option>Risiko Tindak Lanjut</option>
                </select>

                <button class="bg-teal-600 text-white px-4 py-2 rounded-lg text-sm">
                    Filter
                </button>

                <button class="bg-gray-300 px-4 py-2 rounded-lg text-sm">
                    Reset
                </button>
            </div>

            <!-- TABLE -->
            <div class="bg-white rounded-xl shadow p-4">

                <table class="w-full text-sm text-left">
                    <thead>
                        <tr class="border-b">
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Level Risiko</th>
                            <th>Masa Kerja</th>
                            <th>Skor Risiko</th>
                            <th>Indikator</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b">
                            <td>1</td>
                            <td>Andi Pratama</td>
                            <td>123456789</td>
                            <td>Recruitment Staff</td>
                            <td class="text-red-600">Tinggi</td>
                            <td>4 Tahun</td>
                            <td>85</td>
                            <td>Beban Kerja</td>
                            <td class="text-red-600">Belum</td>
                            <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                        </tr>

                        <tr class="border-b">
                            <td>2</td>
                            <td>Bagus Wibowo</td>
                            <td>123456780</td>
                            <td>HR Admin</td>
                            <td class="text-yellow-500">Sedang</td>
                            <td>2 Tahun</td>
                            <td>78</td>
                            <td>Kepuasan Karir</td>
                            <td class="text-yellow-500">Proses</td>
                            <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Cahyo Nugroho</td>
                            <td>123456781</td>
                            <td>Payroll Staff</td>
                            <td class="text-red-600">Tinggi</td>
                            <td>5 Tahun</td>
                            <td>80</td>
                            <td>Minim Pelatihan</td>
                            <td class="text-green-600">Selesai</td>
                            <td><button class="bg-gray-200 px-3 py-1 rounded">Detail</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <!-- BOTTOM CARDS -->
            <div class="grid grid-cols-3 gap-4 mt-6">

                <div class="bg-white p-6 rounded-xl text-center shadow">
                    <p>Karyawan Ditindaklanjuti</p>
                    <h1 class="text-4xl font-bold mt-3">18/32</h1>
                </div>

                <div class="bg-white p-6 rounded-xl text-center shadow">
                    <p>Program Retensi Aktif</p>
                    <h1 class="text-4xl font-bold mt-3">12</h1>
                </div>

                <div class="bg-white p-6 rounded-xl text-center shadow">
                    <p>Belum Ditindaklanjuti</p>
                    <h1 class="text-4xl font-bold mt-3">14</h1>
                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>