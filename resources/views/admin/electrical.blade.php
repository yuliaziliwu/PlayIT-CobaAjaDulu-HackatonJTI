@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h1 class="font-bold break-normal text-orange-500 px-2 py-2 text-xl md:text-2xl">
            Data Perangkat Listrik
        </h1>
        <div class="flex justify-between items-center mb-4 px-2">
            <form action="" method="get">
                <input type="search" aria-label="Search" name="cari_produk" class="form-control block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Search...">
            </form>

            <button data-modal-target="add-device-modal" data-modal-toggle="add-device-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Add New Device
            </button>

        </div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">No</th>
                        <th scope="col" class="px-6 py-3 text-center">Nama Perangkat</th>
                        <th scope="col" class="px-6 py-3 text-center">Daya</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="deviceTableBody">
                    <!-- Data will API -->
                </tbody>
            </table>
        </div>

        <!-- Pagination controls -->
        <div id="pagination" class="flex justify-center mt-5"></div>
    </div>
</div>

<!-- Modal Add Device -->
<div id="add-device-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Create New Device</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-device-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form class="p-4 md:p-5" id="addDeviceForm">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select name="kategori_id" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">Select category</option>
                            <!-- Categories will be populated here -->
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="nama_perangkat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perangkat</label>
                        <input type="text" name="nama_perangkat" id="nama_perangkat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type device name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="daya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daya</label>
                        <input type="text" name="daya" id="daya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter power" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add new device
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk mengambil perangkat listrik dengan pagination
    function fetchDevices(page = 1) {
        axios.get(`http://localhost:8000/api/perangkat-listrik/admin?page=${page}`)
            .then(response => {
                const deviceTableBody = document.getElementById('deviceTableBody');
                deviceTableBody.innerHTML = ''; // Kosongkan isi sebelumnya

                // Menampilkan setiap perangkat dalam tabel
                response.data.data.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td class="px-2 py-3 text-center">${index + 1 + (response.data.current_page - 1) * response.data.per_page}</td>
                        <td class="px-2 py-3 text-center">${item.nama_perangkat}</td>
                        <td class="px-2 py-3 text-center">${item.daya}</td>
                        <td class="px-2 py-3 text-center">
                            <button class="update-button text-blue-500 hover:text-blue-700 mr-2" data-id="${item.id_perangkat}">
                                <i class="fas fa-edit"></i> Update
                            </button>
                            <button class="delete-button text-red-500 hover:text-red-700 ml-2" data-id="${item.id_perangkat}">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </td>
                    `;
                    deviceTableBody.appendChild(row);
                });

                // Menampilkan tombol pagination
                displayDevicePagination(response.data);

                // Fungsi untuk menambahkan perangkat baru
                document.getElementById('addDeviceForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Mencegah refresh halaman

                    const formData = new FormData(this); // Mengambil data dari form

                    // Mengirim data ke API
                    axios.post('http://localhost:8000/api/perangkat-listrik/store', formData)
                        .then(response => {
                            // Menutup modal setelah berhasil menambahkan perangkat
                            document.getElementById('add-device-modal').classList.add('hidden');

                            // Memanggil kembali fetchDevices untuk memperbarui tabel
                            fetchDevices();

                            // Menampilkan pesan sukses
                            alert(response.data.message);
                        })
                        .catch(error => {
                            console.error('Error adding device:', error);
                            // Menampilkan pesan kesalahan
                            alert('Gagal menambahkan perangkat. Silakan coba lagi.');
                        });
                });

                // Tambahkan event listener untuk tombol update
                const updateButtons = document.querySelectorAll('.update-button');
                updateButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const idDevice = this.getAttribute('data-id');
                        // Redirect ke halaman edit berdasarkan id perangkat
                        window.location.href = `/admin/edit-electrical?id_perangkat=${idDevice}`;
                    });
                });

                // Tambahkan event listener untuk tombol delete
                const deleteButtons = document.querySelectorAll('.delete-button');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const idDevice = this.getAttribute('data-id');
                        deleteDevice(idDevice);
                    });
                });
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    // Fungsi untuk menghapus perangkat
    function deleteDevice(id) {
        if (confirm('Are you sure you want to delete this device?')) {
            axios.delete(`http://localhost:8000/api/perangkat-listrik/destroy/${id}`)
                .then(response => {
                    alert(response.data.message); // Tampilkan pesan sukses
                    fetchDevices(); // Memanggil kembali fetchDevices untuk memperbarui tabel
                })
                .catch(error => {
                    console.error('Error deleting device:', error.response);
                    alert('Gagal menghapus perangkat. Silakan coba lagi.');
                });
        }
    }


    // Fungsi untuk menampilkan tombol pagination
    function displayDevicePagination(data) {
        const paginationContainer = document.getElementById('pagination');
        paginationContainer.innerHTML = ''; // Kosongkan isi sebelumnya

        // Menampilkan tombol Previous jika bukan di halaman pertama
        if (data.current_page > 1) {
            const prevButton = document.createElement('a');
            prevButton.href = "#";
            prevButton.className = "flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white";
            prevButton.innerText = 'Previous';
            prevButton.addEventListener('click', (e) => {
                e.preventDefault();
                fetchDevices(data.current_page - 1); // Ambil perangkat halaman sebelumnya
            });
            paginationContainer.appendChild(prevButton);
        }

        // Menampilkan tombol Next jika masih ada halaman berikutnya
        if (data.current_page < data.last_page) {
            const nextButton = document.createElement('a');
            nextButton.href = "#";
            nextButton.className = "flex items-center justify-center px-3 h-8 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white";
            nextButton.innerText = 'Next';
            nextButton.addEventListener('click', (e) => {
                e.preventDefault();
                fetchDevices(data.current_page + 1); // Ambil perangkat halaman berikutnya
            });
            paginationContainer.appendChild(nextButton);
        }
    }

    // Panggil fungsi untuk mengambil perangkat saat halaman dimuat
    fetchDevices();
</script>