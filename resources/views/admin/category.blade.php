@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h1 class="font-bold break-normal text-orange-500 px-2 py-2 text-xl md:text-2xl">
            Data Category
        </h1>
        <div class="flex justify-between items-center mb-4 px-2">
            <form action="" method="get">
                <input type="search" aria-label="Search" name="cari_produk" class="form-control block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Search...">
            </form>

            <button data-modal-target="add-category-modal" data-modal-toggle="add-category-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Add New Category
            </button>

        </div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama Kategori
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Durasi Bijak
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Daya Bijak
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="kategoriTableBody">
                    <!-- Data will API -->
                </tbody>
            </table>
        </div>

        <!-- Pagination controls -->
        <div id="pagination" class="flex justify-center mt-5">

        </div>
    </div>
</div>

<!-- Modal Add Category -->
<div id="add-category-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Category
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-category-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" id="addCategoryForm">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="nama_kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type category name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="durasi_bijak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi Bijak</label>
                        <input type="text" name="durasi_bijak" id="durasi_bijak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter duration" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="daya_bijak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daya Bijak</label>
                        <input type="text" name="daya_bijak" id="daya_bijak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter power" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add new category
                </button>
            </form>
        </div>
    </div>
</div>


<script>
    // Fungsi untuk mengambil kategori dengan pagination
    function fetchCategories(page = 1) {
        axios.get(`http://localhost:8000/api/kategori/admin?page=${page}`)
            .then(response => {
                const kategoriTableBody = document.getElementById('kategoriTableBody');
                kategoriTableBody.innerHTML = ''; // Kosongkan isi sebelumnya

                // Menampilkan setiap kategori dalam tabel
                response.data.data.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td class="px-2 py-3 text-center">${index + 1 + (response.data.current_page - 1) * response.data.per_page}</td>
                <td class="px-2 py-3 text-center">${item.nama_kategori}</td>
                <td class="px-2 py-3 text-center">${item.durasi_bijak}</td>
                <td class="px-2 py-3 text-center">${item.daya_bijak}</td>
                <td class="px-2 py-3 text-center">
                    <button class="update-button text-blue-500 hover:text-blue-700 mr-2" data-id="${item.id_kategori}">
                        <i class="fas fa-edit"></i> Update
                    </button>
                    <button class="delete-button text-red-500 hover:text-red-700 ml-2" data-id="${item.id_kategori}">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                </td>
            `;
                    kategoriTableBody.appendChild(row);
                });

                // Menampilkan tombol pagination
                displayPagination(response.data);

                // Tambahkan event listener untuk tombol update
                const updateButtons = document.querySelectorAll('.update-button');
                updateButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const idKategori = this.getAttribute('data-id');
                        // Redirect ke halaman edit berdasarkan id kategori
                        window.location.href = `/admin/edit-category?id_kategori=${idKategori}`;
                    });
                });

                // Tambahkan event listener untuk tombol delete
                const deleteButtons = document.querySelectorAll('.delete-button');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const idKategori = this.getAttribute('data-id');
                        deleteKategori(idKategori);
                    });
                });
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    function deleteKategori(id) {
        if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
            axios.delete(`http://localhost:8000/api/kategori/destroy/${id}`)
                .then(response => {
                    alert(response.data.message); // Tampilkan pesan sukses
                    fetchCategories(); // Memanggil kembali fetchCategories untuk memperbarui tabel
                })
                .catch(error => {
                    console.error('Error deleting category:', error.response);
                    alert('Gagal menghapus kategori. Silakan coba lagi.');
                });
        }
    }


    // Fungsi untuk menampilkan tombol pagination
    function displayPagination(data) {
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
                fetchCategories(data.current_page - 1); // Ambil kategori halaman sebelumnya
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
                fetchCategories(data.current_page + 1); // Ambil kategori halaman berikutnya
            });
            paginationContainer.appendChild(nextButton);
        }
    }

    // Panggil fungsi untuk mengambil kategori saat halaman dimuat
    fetchCategories();
</script>


<script>
    document.getElementById('addCategoryForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form default

        // Mengambil data dari input
        const namaKategori = document.getElementById('nama_kategori').value;
        const durasiBijak = document.getElementById('durasi_bijak').value;
        const dayaBijak = document.getElementById('daya_bijak').value;

        // Validasi input
        if (!namaKategori || !durasiBijak || !dayaBijak) {
            alert('Semua field harus diisi.');
            return; // Hentikan jika ada yang kosong
        }

        // Mengirimkan data ke API
        axios.post('http://localhost:8000/api/kategori/store', {
                nama_kategori: namaKategori,
                durasi_bijak: parseInt(durasiBijak), // Pastikan ini adalah integer
                daya_bijak: parseInt(dayaBijak) // Pastikan ini adalah integer
            })
            .then(function(response) {
                // Menangani sukses
                console.log(response.data);
                alert('Kategori berhasil ditambahkan!');
                document.querySelector('[data-modal-toggle="add-category-modal"]').click();
                document.getElementById('addCategoryForm').reset();
            })
            .catch(function(error) {
                console.error('Error saat menambahkan kategori:', error);
                if (error.response) {
                    alert('Terjadi kesalahan: ' + error.response.data.message);
                } else {
                    alert('Terjadi kesalahan saat menambahkan kategori.');
                }
            });
    });
</script>