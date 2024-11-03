<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoSaver</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Keania+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <nav class="border-gray-200" style="background-color: #FF735C;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white" style="font-family: 'Keania One', sans-serif;">EcoSaver</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="#home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white dark:hover:bg-gray-700">About Us</a>
                    </li>
                    <li>
                        <a href="#callculator" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white dark:hover:bg-gray-700">Safe Your Energy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="max-w-screen-xl mx-auto p-8 flex flex-col md:flex-row gap-4">
            <div class="flex-1 flex flex-col items-start justify-center">
                <p class="text-6xl md:text-7xl font-bold text-gray-700">
                    Bijaklah, hemat energi setiap saat <span style="color: #FF735D;">Energi listrik sangat penting</span>
                </p>
                <p class="text-lg text-[#717171] mt-4">
                    Perubahan kecil, penghematan besar—kurangi konsumsi listrik Anda.
                </p>
            </div>

            <div class="flex-1 flex items-center justify-center">
                <img src="images/8669673.jpg" alt="EcoSaver Illustration" class="w-[120%] md:w-[100%] max-w-2xl">
            </div>
        </div>

        <div class="max-w-screen-xl mx-auto">
            <!-- Row 1: Single Column -->
            <div class="max-w-screen-xl mx-auto mt-0 md:mt-5">
                <div class="flex items-center">
                    <hr class="flex-grow border-t border-gray-300" />
                    <div class="text-center mx-4">
                        <span class="block text-2xl md:text-3xl font-semibold text-gray-700 leading-tight">
                            Kelola seluruh konsumsi
                        </span>
                        <span class="block text-2xl md:text-3xl font-semibold text-gray-700 leading-tight">energi Anda dalam satu sistem.</span>
                    </div>
                    <hr class="flex-grow border-t border-gray-300" />
                </div>
                <p class="text-[#717171] text-sm mt-3 text-center">Siapa yang cocok menggunakan EcoSaver?</p>
            </div>

            <!-- Row 2: Three Columns -->
            <div class="max-w-screen-xl mx-auto p-8 mt-0 md:mt-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center">
                    <div class="text-2xl text-gray-700 text-center p-4">
                        <img src="images/Icon.svg" alt="Logo" class="mx-auto mb-4 w-20 h-20">
                        <div class="font-semibold">
                            <span>Kesadaran</span><br>
                            <span>Energi</span>
                        </div>
                        <p class="text-[#717171] text-sm mt-0 md:mt-2">
                            Temukan dampak berbagai perangkat pada konsumsi energi Anda dan pelajari strategi efektif untuk mengurangi limbah.
                        </p>
                    </div>
                    <div class="text-2xl text-gray-700 text-center p-4">
                        <img src="images/Icon 2.svg" alt="Logo" class="mx-auto mb-4 w-20 h-20"> <!-- Adjust size as needed -->
                        <div class="font-semibold">
                            <span>Simulasi</span><br>
                            <span>Optimisasi Energi</span>
                        </div>
                        <p class="text-[#717171] text-sm mt-2">
                            Simulasikan potensi penghematan dengan mengurangi penggunaan energi yang tidak perlu.
                        </p>
                    </div>

                    <div class="text-2xl text-gray-700 text-center p-4">
                        <img src="images/Icon 3.svg" alt="Logo" class="mx-auto mb-4 w-20 h-20">
                        <div class="font-semibold">
                            <span>Rekomendasi</span><br>
                            <span>Lebih Efisien</span>
                        </div>
                        <p class="text-[#717171] text-sm mt-2">
                            Terima tips pribadi untuk meminimalkan limbah energi dan meningkatkan efisiensi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="max-w-screen-xl mx-auto p-8 flex flex-col md:flex-row gap-4">
            <div class="flex-1 flex items-center justify-center md:justify-start">
                <img src="images/8669670.jpg" alt="EcoSaver Illustration" class="w-[80%] max-w-2xl md:w-[130%]">
            </div>
            <div class="flex-1 flex flex-col items-center md:items-start md:justify-center md:ml-12"> <!-- Menggunakan md:ml-8 untuk margin kiri pada layar lebar -->
                <p class="text-3xl font-bold w-auto text-gray-700 text-center md:text-left">
                    Keputusan bijak mengarah pada penghematan
                </p>
                <p class="text-sm text-justify text-[#717171] mt-4 md:text-left">
                    Keputusan bijak mengarah pada penghematan. Dengan membuat pilihan yang tepat tentang penggunaan energi, Anda dapat secara signifikan mengurangi tagihan bulanan Anda sambil berkontribusi pada masa depan yang lebih berkelanjutan. Setiap keputusan kecil, mulai dari menggunakan peralatan hemat energi hingga mengoptimalkan waktu penggunaan, akan terakumulasi menjadi penghematan yang substansial seiring waktu. Memilih solusi hemat energi tidak hanya menghemat uang Anda tetapi juga membantu menjaga lingkungan untuk generasi mendatang.
                </p>
                <a href="#callculator" class="mt-4 mx-20 px-12 py-2 text-white bg-[#FF735C] rounded hover:bg-[#ff4f3a] focus:outline-none focus:ring-2 focus:ring-[#FF735C] focus:ring-opacity-50">
                    Coba tes
                </a>
            </div>
        </div>
    </section>
    
    

    <div class="grid grid-cols-1 md:grid-cols-2 bg-gray-100 p-6">
        <!-- Kolom Pertama -->
        <div class="flex justify-center items-center p-4">
            <div class="text-center md:text-left">
                <p class="text-3xl md:text-5xl font-bold text-gray-700">
                    Kemitraan dengan <br><span style="color: #FF735D;">Organisasi Lokal</span>
                </p>
                <p class="text-xs md:text-sm text-[#717171] mt-2">
                    Kami sampai di sini dengan kerja keras dan dedikasi kami.
                </p>
            </div>
        </div>
    
        <!-- Kolom Kedua -->
        <div class="grid grid-rows-2 gap-4">
            <!-- Row Pertama -->
            <div class="flex flex-col md:flex-row items-center justify-center p-4 space-y-4 md:space-y-0 md:space-x-8">
                <div class="flex items-center">
                    <img src="images/Icon 4.svg" alt="Logo" class="w-10 h-10 md:w-12 md:h-12 mr-2">
                    <div class="text-center md:text-left">
                        <p class="text-xl md:text-2xl font-bold text-gray-700">
                            245,341
                        </p>
                        <p class="text-xs md:text-sm text-[#717171]">
                            Kunjungan
                        </p>
                    </div>
                </div>
    
                <div class="flex items-center">
                    <img src="images/Icon 5.svg" alt="Logo" class="w-10 h-10 md:w-12 md:h-12 mr-2">
                    <div class="text-center md:text-left">
                        <p class="text-xl md:text-2xl font-bold text-gray-700">
                            5,828,867
                        </p>
                        <p class="text-xs md:text-sm text-[#717171]">
                            Klik
                        </p>
                    </div>
                </div>
            </div>
    
            <!-- Row Kedua -->
            <div class="bg-gray-100 p-4">
                <p class="text-xs md:text-sm text-center text-[#717171] italic">
                    "Aplikasi kami siap mendukung seminar pendidikan tentang penghematan energi rumah tangga. Dengan fitur interaktif dan sumber daya yang informatif, kami berkomitmen untuk membantu peserta memahami pentingnya efisiensi energi dan cara menerapkannya dalam kehidupan sehari-hari."
                </p>
            </div>
        </div>
    </div>
    
    <div class="max-w-screen-xl mx-auto mt-5" id="callculator">
        <div class="flex flex-col md:flex-row items-center">
            <hr class="flex-grow border-t border-gray-300" />
            <div class="text-center mx-4">
                <span class="block text-2xl md:text-3xl font-semibold text-gray-700 leading-tight">Kelola konsumsi energi</span>
                <span class="block text-2xl md:text-3xl font-semibold text-gray-700 leading-tight">Anda di sini</span>
            </div>
            <hr class="flex-grow border-t border-gray-300" />
        </div>
    </div>

    <div class="grid grid-cols-3 items-start gap-x-4 md:gap-x-3 mx-14 mt-2">
        <!-- VA Selection -->
        <div class="max-w-xs">
            <label for="va" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Pilih Ampere Rumah</label>
            <select id="va" class="block w-full p-2 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </select>
        </div>

        <!-- Cost Display -->
        <div class="max-w-xs md:justify-center">
            <label for="cost" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Tarif per kWh</label>
            <input type="text" value="0.00" id="cost" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white" disabled>
        </div>

        <div class="max-w-xs md:justify-center">
            <label for="resetAppliance" class="block mb-2 text-sm font-semibold text-center text-white">!#!</label>
            <button id="resetAppliance" class="block w-full md:w-1/2 p-2 text-sm font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Reset
            </button>
        </div>
    </div>

    <div id="appliance-container" class="flex flex-wrap gap-x-2 md:gap-x-10 mx-2 md:mx-10 mt-2">
        <div class="appliance-group flex items-start gap-x-2 md:gap-x-8 md:ml-4 md:mt-2 md:mb-2">
            <!-- House Type Selection -->
            <div class="max-w-xs">
                <label for="house-type" class="block mb-2 text-xs md:text-sm font-semibold text-gray-900 dark:text-white">Perangkat</label>
                <select id="house-type" class="block w-full p-2 mb-4 text-xs md:text-sm border rounded-lg bg-white focus:ring-2 focus:ring-gray-300 focus:border-gray-300 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 dark:focus:ring-gray-600 dark:focus:border-gray-600">
                    <option selected class="text-gray-500 dark:text-gray-400">Pilih perangkat</option>
                    <!-- Optgroups dan opsi akan diisi secara dinamis di sini -->
                </select>
            </div>
    
            <!-- Number of Appliances -->
            <div class="md:max-w-xs">
                <label for="appliance-count" class="block mb-2 text-xs md:text-sm font-semibold text-gray-900 dark:text-white">Jumlah</label>
                <input type="number" id="appliance-count" class="block w-full p-2 mb-4 text-xs md:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan jumlah" min="1">
            </div>
    
            <!-- Wattage (W) - Disabled Input -->
            <div class="md:max-w-xs">
                <label for="wattage" class="block mb-2 text-xs md:text-sm font-semibold text-gray-900 dark:text-white">Daya perangkat (W)</label>
                <input type="number" id="wattage" class="block w-full p-2 mb-4 text-xs md:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Daya perangkat" min="1">
            </div>
    
            <!-- Hours per Day -->
            <div class="md:max-w-xs">
                <label for="hours-per-day" class="block mb-2 text-xs md:text-sm font-semibold text-gray-900 dark:text-white">Penggunaan per Hari (Jam)</label>
                <input type="number" id="hours-per-day" class="block w-full p-2 mb-4 text-xs md:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Durasi penggunaan" min="1" max="24">
            </div>
    
            <!-- Use per Month -->
            <div class="md:max-w-xs">
                <label for="use-per-month" class="block mb-2 text-xs md:text-sm font-semibold text-gray-900 dark:text-white">Frekuensi per bulan (Hari)</label>
                <input type="number" id="use-per-month" class="block w-full p-2 mb-4 text-xs md:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Frekuensi per bulan" min="1" max="30">
            </div>
        </div>
    </div>
    
    <!-- Buttons Section -->
    <div class="md:ml-14 md:mr-2 ml-14 mr-12 mt-2 flex gap-x-4">
        <button id="add-appliance-btn" class="p-2 text-xs md:text-sm font-semibold  text-[#FF735C] border border-[#FF735C] rounded-lg hover:bg-[#FF735C] hover:text-white focus:outline-none focus:ring-2 focus:ring-[#FF735C]/50 ">
            Tambah perangkat
        </button>

        <button id="calculate-btn" class="p-2 text-sm font-semibold text-white bg-[#FF735C] rounded-lg hover:bg-[#FF735C]/90 focus:outline-none focus:ring-2 focus:ring-[#FF735C]/50 dark:bg-[#FF735C] dark:hover:bg-[#FF735C]/90 dark:focus:ring-[#FF735C]/50">
            Klik disini untuk hasil analisis
        </button>
    </div>


    <div class="max-w-screen-xl mx-auto mt-5">
        <div class="flex items-center">
            <hr class="flex-grow border-t border-gray-300" />
            <span class="mx-4 text-3xl font-semibold text-gray-700 leading-tight">Hasil Analisis</span>
            <hr class="flex-grow border-t border-gray-300" />
        </div>
        <div class="flex flex-wrap gap-x-4 mt-10">
            <div id="recommendation-results" class="w-full"></div>
        </div>
        <div class="flex justify-center">
            {{-- @include('components.graph-bar') --}}
        </div>
    </div>


    <footer class="flex bg-[#263238] dark:bg-gray-900 mt-10">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 md:ml-28 md:items-start md:justify-start">
                    <a href="#" class="flex items-center">
                        <img src="images/logo.svg" class="h-8 me-3" alt="EcoSaver Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white" style="font-family: 'Keania One', sans-serif;">EcoSaver</span>
                    </a>
                    <!-- Copyright Text -->
                    <p class="text-md text-white mt-10">Copyright © 2024 Politeknik Negeri Batam.</p>
                    <p class="text-md text-white">All rights reserved.</p>
    
                    <!-- Social Media Icons using FontAwesome -->
                    <div class="flex mt-10 space-x-5 justify-center md:justify-start">
                        <a href="https://youtube.com/@jtipolinema367?si=I0FOjRuanjiM18C0" class="text-white hover:text-gray-400">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/playit_jti?igsh=MXMwNTJhc2lzeDI4cA==" class="text-white hover:text-gray-400">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-3 md:grid-cols-3 md:gap-6 mx-1 md:mx-2 md:mr-24 text-white justify-center">
                    <div class="col-auto md:col-span-1">
                        <h2 class="mb-6 text-md md:xl font-semibold">Company</h2>
                        <ul class="font-light text-xs md:text-sm">
                            <li class="mb-2">
                                <a href="#" class="hover:underline md:hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto md:col-span-1">
                        <h2 class="mb-6 text-md md:xl font-semibold">Support</h2>
                        <ul class="font-light text-xs md:text-sm">
                            <li class="mb-2">
                                <a href="#" class="hover:underline">Github</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <h2 class="mb-6 text-md md:text-xl font-semibold">Stay up to date</h2>
                        <ul class="font-light">
                            <li>
                                <form class="max-w-xs md:max-w-md mx-0 text-xs md:text-sm">
                                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative">
                                        <!-- Adjusted Input Field for Smaller Screens -->
                                        <input
                                            type="text"
                                            id="default-search"
                                            class="block w-full p-2 md:p-4 pr-8 md:pr-10 text-xs md:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-300 bg-opacity-20 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Enter your message"
                                            required />
                    
                                        <!-- Button with Paper Plane Icon Adjusted for Mobile -->
                                        <button
                                            type="submit"
                                            class="absolute inset-y-0 right-3 md:right-2 flex items-center p-1 md:p-2 focus:ring-4 focus:outline-none focus:ring-gray-300">
                                            <i class="fas fa-paper-plane fa-sm md:fa-lg text-white"></i>
                                        </button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </footer>
    


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        // Fungsi untuk mengambil data dari API dan mengisi dropdown
        async function loadDayaMaksimum() {
            try {
                const response = await axios.get('http://localhost:8000/api/standar-listrik/index');
                const data = response.data;
    
                const vaSelect = document.getElementById('va');
                vaSelect.innerHTML = '<option selected disabled>Select VA</option>';
    
                // Tambahkan opsi dari data API
                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.daya_maksimum; // Simpan daya maksimum sebagai nilai opsi
                    option.dataset.tarif = item.tarif_per_kwh; // Simpan tarif per kWh sebagai data atribut
                    option.textContent = `${item.daya_maksimum} VA`;
                    vaSelect.appendChild(option);
                });
    
                // Secara otomatis pilih opsi pertama setelah dropdown diisi
                if (data.length > 0) {
                    vaSelect.value = data[0].daya_maksimum; // Atur nilai dropdown ke daya maksimum pertama
                    const selectedOption = vaSelect.options[vaSelect.selectedIndex]; // Ambil opsi yang dipilih
                    const costInput = document.getElementById('cost');
                    const tarifPerKwh = parseFloat(selectedOption.dataset.tarif);
                    
                    // Update nilai input cost berdasarkan tarif per kWh
                    costInput.value = isNaN(tarifPerKwh) ? '0.00' : tarifPerKwh.toFixed(2); // Format menjadi dua desimal
                }
    
                // Tambahkan event listener untuk mengubah cost saat memilih VA
                vaSelect.addEventListener('change', function() {
                    const selectedOption = this.options[this.selectedIndex]; // Dapatkan opsi yang dipilih
                    const costInput = document.getElementById('cost');
    
                    // Ambil tarif per kWh dari data atribut opsi yang dipilih
                    const tarifPerKwh = parseFloat(selectedOption.dataset.tarif);
                    
                    // Debugging: log nilai yang dipilih dan tarif per kWh
                    console.log(`Selected Daya: ${this.value}, Tarif per kWh: ${selectedOption.dataset.tarif}`);
    
                    // Update nilai input cost berdasarkan tarif per kWh
                    costInput.value = isNaN(tarifPerKwh) ? '0.00' : tarifPerKwh.toFixed(2); // Format menjadi dua desimal
                });
            } catch (error) {
                console.error('Error fetching daya maksimum data:', error);
            }
        }
    
        document.addEventListener('DOMContentLoaded', loadDayaMaksimum);
    </script>
    

    <!-- function API Appliance database  -->
    <script>
        async function loadCategories() {
            try {
                const response = await axios.get('http://localhost:8000/api/kategori/index');
                const categories = response.data;

                const houseTypeSelect = document.getElementById('house-type');
                houseTypeSelect.innerHTML = '<option selected class="text-gray-500 dark:text-gray-400">Pilih perangkat</option>';

                categories.forEach(category => {
                    const optgroup = document.createElement('optgroup');
                    optgroup.label = category.nama_kategori; // Atur label dari nama kategori

                    // Pastikan kategori memiliki perangkat listrik
                    if (category.perangkat_listrik) {
                        category.perangkat_listrik.forEach(perangkat => {
                            const option = document.createElement('option');
                            option.value = perangkat.id_perangkat; // Gunakan id perangkat sebagai nilai
                            option.textContent = perangkat.nama_perangkat; // Gunakan nama perangkat sebagai teks
                            option.className = 'text-gray-900 dark:text-gray-50';
                            option.dataset.wattage = perangkat.daya; // Simpan daya dalam atribut data
                            optgroup.appendChild(option);
                        });
                    }

                    houseTypeSelect.appendChild(optgroup);
                });

                // Tambahkan event listener untuk dropdown perangkat
                houseTypeSelect.addEventListener('change', (event) => {
                    const selectedOption = event.target.options[event.target.selectedIndex];
                    const wattage = selectedOption.dataset.wattage; // Ambil daya dari atribut data
                    document.getElementById('wattage').value = wattage || ''; // Set wattage ke input, kosongkan jika tidak ada
                });

            } catch (error) {
                console.error('Error fetching categories:', error);
            }
        }

        document.addEventListener('DOMContentLoaded', loadCategories);
    </script>

    <!-- function add more appliance & resert appliance  -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("add-appliance-btn").addEventListener("click", function() {
                // Ambil elemen container
                const applianceContainer = document.getElementById("appliance-container");

                // Clone elemen group yang pertama
                const originalApplianceGroup = applianceContainer.querySelector(".appliance-group");
                const newApplianceGroup = document.createElement("div");
                newApplianceGroup.className = "appliance-group flex items-start gap-x-2 md:gap-x-8 md:ml-4 ml-0 md:mt-2 md:mb-2";

                
                // Clone hanya input dan select dari grup asli
                const inputs = originalApplianceGroup.querySelectorAll("input, select");
                inputs.forEach(input => {
                    const clonedInput = input.cloneNode(true); // Clone elemen input

                    // Bersihkan nilai input yang baru
                    if (clonedInput.tagName === "SELECT") {
                        clonedInput.selectedIndex = 0; // Reset select ke opsi pertama
                    } else {
                        clonedInput.value = ""; // Kosongkan input
                    }

                    // Buat ID baru untuk input yang di-kloning
                    const uniqueId = input.id + "-" + (applianceContainer.children.length + 1);
                    clonedInput.id = uniqueId;

                    // Buat div wrapper baru untuk input
                    const wrapper = document.createElement("div");
                    wrapper.className = "md:max-w-xs"; // Set lebar sesuai yang diinginkan
                    wrapper.appendChild(clonedInput);

                    // Tambahkan elemen baru ke grup
                    newApplianceGroup.appendChild(wrapper);
                });

                // Tambahkan tombol reset di grup baru
                const resetButton = document.createElement("button");
                resetButton.className = "p-2 text-sm font-semibold text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500";

                // Menambahkan ikon ke tombol reset
                resetButton.innerHTML =  '<i class="fas fa-trash text-xs md:text-sm mr-1"></i>' ; // Menggunakan ikon trash dari Font Awesome

                // Tambahkan event listener untuk tombol reset
                resetButton.addEventListener("click", function() {
                    // Menghapus grup appliance ini
                    applianceContainer.removeChild(newApplianceGroup);
                });

                // Tambahkan tombol reset ke grup baru
                newApplianceGroup.appendChild(resetButton);

                // Tambahkan elemen grup baru ke dalam container
                applianceContainer.appendChild(newApplianceGroup);

                // Tambahkan event listener untuk dropdown perangkat yang baru
                const newHouseTypeSelect = newApplianceGroup.querySelector("select"); // Ambil select dari grup baru
                newHouseTypeSelect.addEventListener('change', (event) => {
                    const selectedOption = event.target.options[event.target.selectedIndex];
                    const wattage = selectedOption.dataset.wattage; // Ambil daya dari atribut data
                    newApplianceGroup.querySelector('input[id^="wattage"]').value = wattage || ''; // Set wattage ke input
                });
            });
        });
    </script>

    <!-- Function Reset All Appliance  -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Fungsi untuk mereset semua pilihan dan input
            function resetApplianceInputs() {
                // Menghapus semua grup appliance yang di-clone
                const applianceContainer = document.getElementById("appliance-container");

                // Menghapus semua grup appliance kecuali grup pertama
                const applianceGroups = applianceContainer.querySelectorAll(".appliance-group");
                applianceGroups.forEach((group, index) => {
                    if (index !== 0) { // Jaga grup pertama tetap ada
                        applianceContainer.removeChild(group); // Hapus grup yang di-clone
                    } else {
                        // Reset grup pertama
                        const houseTypeSelect = group.querySelector("#house-type");
                        const applianceCountInput = group.querySelector("#appliance-count");
                        const wattageInput = group.querySelector("#wattage");
                        const hoursPerDayInput = group.querySelector("#hours-per-day");
                        const usePerMonthInput = group.querySelector("#use-per-month");

                        if (houseTypeSelect) houseTypeSelect.selectedIndex = 0; // Reset dropdown perangkat
                        if (applianceCountInput) applianceCountInput.value = ""; // Reset input jumlah perangkat
                        if (wattageInput) wattageInput.value = ""; // Reset wattage
                        if (hoursPerDayInput) hoursPerDayInput.value = ""; // Reset hours per day
                        if (usePerMonthInput) usePerMonthInput.value = ""; // Reset use per month
                    }
                });

                // Reset dropdown VA
                const vaSelect = document.getElementById("VA");
                if (vaSelect) vaSelect.selectedIndex = 0; // Reset dropdown VA ke opsi pertama

                // Reset cost display
                const costDisplay = document.getElementById("cost");
                if (costDisplay) costDisplay.value = "0.00"; // Reset cost display ke 0.00
            }

            // Event listener untuk tombol resetAppliance
            document.getElementById("resetAppliance").addEventListener("click", resetApplianceInputs);
        });
    </script>

    <!-- Script untuk menampilkan klasifikasi penggunaan perangkat -->
    <script>
        document.getElementById('calculate-btn').addEventListener('click', function() {
            // Ambil nilai dari inputan "Cost per kWh"
            const costPerKwh = document.getElementById('cost').value;
    
            // Periksa apakah costPerKwh adalah "0.00"
            if (costPerKwh === '0.00') {
                // Tampilkan peringatan jika cost per kWh adalah 0
                alert("Cost per kWh tidak boleh 0. Silakan periksa pengaturan daya listrik.");
                return; // Hentikan eksekusi lebih lanjut
            }
    
            // Bersihkan hasil lama setiap kali tombol diklik
            const resultsContainer = document.getElementById('recommendation-results');
            resultsContainer.innerHTML = ''; // Bersihkan hasil lama
    
            // Ambil semua inputan dari form
            const appliances = document.querySelectorAll('.appliance-group');
            const userInput = [];
    
            appliances.forEach(appliance => {
                const applianceName = appliance.querySelector('select[id^="house-type"]').selectedOptions[0].text;
                const applianceCount = parseInt(appliance.querySelector('input[id^="appliance-count"]').value) || 0; // Ensure it's a number
                const wattage = parseInt(appliance.querySelector('input[id^="wattage"]').value) || 0; // Ensure it's a number
                const hoursPerDay = parseInt(appliance.querySelector('input[id^="hours-per-day"]').value) || 0; // Ensure it's a number
                const usePerMonth = parseInt(appliance.querySelector('input[id^="use-per-month"]').value) || 0; // Ensure it's a number
    
                // Check if all required fields are filled
                if (applianceCount && wattage && hoursPerDay && usePerMonth) {
                    // Push the appliance data to the userInput array without aggregation
                    userInput.push({
                        name: applianceName,
                        inputCount: applianceCount,
                        inputDaya: wattage,
                        inputDurasi: hoursPerDay,
                        inputPerBulan: usePerMonth
                    });
                }
            });
    
            // Check if userInput is empty
            if (userInput.length === 0) {
                // Display a message if no appliances are input
                const noInputMessage = document.createElement('div');
                noInputMessage.className = "flex justify-center block p-4 text-base font-semibold text-red-700 bg-red-100 border border-red-300 rounded-lg";
                noInputMessage.innerHTML = "Silakan pilih data perangkat sebelum menghitung.";
                resultsContainer.appendChild(noInputMessage);
                return; // Stop further execution
            }
    
            // Kirim data ke Laravel, termasuk nilai "Cost per kWh"
            axios.post('/api/calculate', {
                userInput: userInput,
                costPerKwh: costPerKwh // Tambahkan nilai "Cost per kWh"
            })
            .then(response => {
                console.log(response.data); // Lakukan sesuatu dengan hasil response
    
                // Tampilkan hasil di bagian recommendation-results
                response.data.results.forEach(result => {
                    // Buat elemen div untuk setiap perangkat
                    const resultItem = document.createElement('div');
                    resultItem.classList.add("appliance-group", "flex", "items-start", "gap-x-4");
    
                    // Tambahkan input untuk nama perangkat
                    const nameInput = document.createElement('input');
                    nameInput.type = "text";
                    nameInput.disabled = true;
                    nameInput.className = "block w-full p-2 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50";
                    nameInput.value = result.nama_perangkat;
    
                    // Tambahkan input untuk daya
                    const dayaInput = document.createElement('input');
                    dayaInput.type = "text";
                    dayaInput.disabled = true;
                    dayaInput.className = "block w-full p-2 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50";
                    dayaInput.value = `Daya: ${result.inputDaya} W`;
    
                    // Tambahkan input untuk durasi
                    const durasiInput = document.createElement('input');
                    durasiInput.type = "text";
                    durasiInput.disabled = true;
                    durasiInput.className = "block w-full p-2 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50";
                    durasiInput.value = `Durasi: ${result.inputDurasi} jam`;
    
                    // Tambahkan input untuk jumlah perangkat
                    const countInput = document.createElement('input');
                    countInput.type = "text";
                    countInput.disabled = true;
                    countInput.className = "block w-full p-2 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50";
                    countInput.value = `Jumlah: ${result.inputCount}`;
    
                    const usePerMonthInput = document.createElement('input');
                    usePerMonthInput.type = "text";
                    usePerMonthInput.disabled = true;
                    usePerMonthInput.className = "block w-full p-2 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50";
                    usePerMonthInput.value = `Frekuensi /bulan: ${result.inputPerBulan}`; // Display the usePerMonth value
    
                    // Tambahkan input untuk klasifikasi
                    const classificationInput = document.createElement('input');
                    classificationInput.type = "text";
                    classificationInput.disabled = true;
                    classificationInput.className = `block w-full p-2 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg ${result.classification === 'Bijak' ? 'bg-green-200' : 'bg-red-200'}`;
                    classificationInput.value = `Klasifikasi: ${result.classification}`;
    
                    // Tambahkan semua elemen input ke dalam resultItem
                    resultItem.appendChild(nameInput);
                    resultItem.appendChild(dayaInput);
                    resultItem.appendChild(durasiInput);
                    resultItem.appendChild(countInput);
                    resultItem.appendChild(usePerMonthInput);
                    resultItem.appendChild(classificationInput);
    
                    // Tambahkan resultItem ke resultsContainer
                    resultsContainer.appendChild(resultItem);
    
                    // Tambahkan rekomendasi di luar resultItem jika klasifikasi adalah "Tidak Bijak"
                    if (result.classification === 'Tidak Bijak' && result.recommendation) {
                        const recommendationText = document.createElement('p');
                        recommendationText.className = "block p-2 mb-4 text-sm text-gray-900 bg-yellow-100 border border-yellow-300 rounded-lg";
                        
                        // Gunakan innerHTML agar tag <b> di dalam rekomendasi dirender sebagai HTML
                        recommendationText.innerHTML = result.recommendation;
    
                        // Tambahkan recommendationText setelah resultItem
                        resultsContainer.appendChild(recommendationText);
                    }
                });
    
                // Tampilkan total cost dan total kWh
                const totalCostItem = document.createElement('div');
                totalCostItem.className = "total-cost block p-4 mt-6 text-base font-semibold text-gray-900 bg-blue-100 border border-blue-300 rounded-lg";
                totalCostItem.innerHTML = `
                    Total Pengeluaran Bulanan: <b>Rp ${response.data.totalCost.toLocaleString()}</b><br>
                    Total Kwh Bulanan: <b>${response.data.totalKwh.toLocaleString()}</b> kWh
                `; // Format totalCost and totalKwh
    
                // Tambahkan totalCostItem ke resultsContainer
                resultsContainer.appendChild(totalCostItem);
    
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>    
    
    <script>
        // const options = {
        // colors: ["#1A56DB", "#FDBA8C"],
        // series: [
        //     {
        //     name: "Total konsumsi",
        //     color: "#f87171",
        //     data: [
        //         { x: "Konsumsi Energi", y: 8799 },
        //     ],
        //     },
        //     {
        //     name: "Konsumsi alternatif",
        //     color: "#4ade80",
        //     data: [
        //         { x: "Konsumsi Energi", y: 3452 },
        //     ],
        //     },
        // ],
        // chart: {
        //     type: "bar",
        //     height: "320px",
        //     fontFamily: "Inter, sans-serif",
        //     toolbar: {
        //     show: false,
        //     },
        // },
        // plotOptions: {
        //     bar: {
        //     horizontal: false,
        //     columnWidth: "70%",
        //     borderRadiusApplication: "end",
        //     borderRadius: 8,
        //     },
        // },
        // tooltip: {
        //     shared: true,
        //     intersect: false,
        //     style: {
        //     fontFamily: "Inter, sans-serif",
        //     },
        // },
        // states: {
        //     hover: {
        //     filter: {
        //         type: "darken",
        //         value: 1,
        //     },
        //     },
        // },
        // stroke: {
        //     show: true,
        //     width: 0,
        //     colors: ["transparent"],
        // },
        // grid: {
        //     show: false,
        //     strokeDashArray: 4,
        //     padding: {
        //     left: 2,
        //     right: 2,
        //     top: -14
        //     },
        // },
        // dataLabels: {
        //     enabled: false,
        // },
        // legend: {
        //     show: false,
        // },
        // xaxis: {
        //     floating: false,
        //     labels: {
        //     show: true,
        //     style: {
        //         fontFamily: "Inter, sans-serif",
        //         cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
        //     }
        //     },
        //     axisBorder: {
        //     show: false,
        //     },
        //     axisTicks: {
        //     show: false,
        //     },
        // },
        // yaxis: {
        //     show: false,
        // },
        // fill: {
        //     opacity: 1,
        // },
        // }

        // if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        // const chart = new ApexCharts(document.getElementById("column-chart"), options);
        // chart.render();
        // }

    </script>
</body>

</html>