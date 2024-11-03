@include('components.navbar')
@extends('components.sidebar')

@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h1 class="font-bold break-normal text-orange-500 px-2 py-2 text-xl md:text-2xl">
            Data Standard Listrik
        </h1>
        <div class="flex justify-between items-center mb-4 px-2">
            <form action="" method="get">
                <input type="search" aria-label="Search" name="cari_standar" class="form-control block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Search...">
            </form>

            <button data-modal-target="add-standard-modal" data-modal-toggle="add-standard-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Add New Standard
            </button>
        </div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">No</th>
                        <th scope="col" class="px-6 py-3 text-center">Daya Maksimum</th>
                        <th scope="col" class="px-6 py-3 text-center">Tarif per KWh</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="standarTableBody">
                    <!-- Data will be inserted here via API -->
                </tbody>
            </table>
        </div>

        <!-- Pagination controls -->
        <div id="pagination" class="flex justify-center mt-5"></div>
    </div>
</div>

<!-- Modal Add Standard -->
<div id="add-standard-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Standard Listrik
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-standard-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" id="addStandardForm">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="daya_maksimum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daya Maksimum</label>
                        <input type="number" name="daya_maksimum" id="daya_maksimum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter maximum power" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="tarif_per_kwh" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarif per KWh</label>
                        <input type="number" step="0.01" name="tarif_per_kwh" id="tarif_per_kwh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter rate per KWh" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add new standard
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk mengambil standar listrik dengan pagination
    function fetchStandarListrik(page = 1) {
        axios.get(`http://localhost:8000/api/standar-listrik/admin?page=${page}`)
            .then(response => {
                const standarTableBody = document.getElementById('standarTableBody');
                standarTableBody.innerHTML = '';

                response.data.data.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                    <td class="px-2 py-3 text-center">${index + 1 + (response.data.current_page - 1) * response.data.per_page}</td>
                    <td class="px-2 py-3 text-center">${item.daya_maksimum}</td>
                    <td class="px-2 py-3 text-center">${item.tarif_per_kwh}</td>
                    <td class="px-2 py-3 text-center">
                        <button class="update-button text-blue-500 hover:text-blue-700 mr-2" data-id="${item.id_standar_listrik}">
                            <i class="fas fa-edit"></i> Update
                        </button>
                        <button class="delete-button text-red-500 hover:text-blue-700 mr-2" data-id="${item.id_standar_listrik}">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </td>
                `;
                    standarTableBody.appendChild(row);
                });

                displayPagination(response.data);
                addEventListeners(); // Memastikan event listeners ditambahkan
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    function addEventListeners() {
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const idStandar = this.getAttribute('data-id');
                deleteStandarListrik(idStandar);
            });
        });

        const updateButtons = document.querySelectorAll('.update-button');
        updateButtons.forEach(button => {
            button.addEventListener('click', function() {
                const idStandar = this.getAttribute('data-id');
                // Redirect ke halaman edit berdasarkan id standar listrik
                window.location.href = `/admin/edit-equipment?id_standar_listrik=${idStandar}`;
            });
        });
    }


    function deleteStandarListrik(idStandar) {
        console.log('ID yang diterima untuk hapus:', idStandar); // Log untuk memeriksa ID

        if (!idStandar) {
            alert('ID standar listrik tidak valid!'); // Tampilkan pesan jika ID tidak valid
            return; // Hentikan eksekusi fungsi
        }

        if (confirm('Apakah Anda yakin ingin menghapus standar listrik ini?')) {
            axios.delete(`http://localhost:8000/api/standar-listrik/destroy/${idStandar}`)
                .then(response => {
                    console.log('Response:', response);
                    alert('Standar listrik berhasil dihapus!');
                    fetchStandarListrik(); // Refresh data setelah penghapusan
                })
                .catch(error => {
                    console.error('Error saat menghapus standar listrik:', error);
                    if (error.response) {
                        alert('Terjadi kesalahan: ' + error.response.data.message);
                    } else {
                        alert('Terjadi kesalahan saat menghapus standar listrik.');
                    }
                });
        }
    }

    function displayPagination(data) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = ''; // Kosongkan isi sebelumnya

        // Jika ada banyak halaman, buat tombol untuk navigasi
        if (data.last_page > 1) {
            for (let i = 1; i <= data.last_page; i++) {
                const button = document.createElement('button');
                button.innerText = i;
                button.className = 'mx-1 p-2 border rounded';
                button.addEventListener('click', () => fetchStandarListrik(i));
                pagination.appendChild(button);
            }
        }
    }

    // Menangani pengiriman form untuk menambahkan standar listrik baru
    document.getElementById('addStandardForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);

        axios.post('http://localhost:8000/api/standar-listrik/store', formData)
            .then(response => {
                console.log(response.data);
                fetchStandarListrik(); // Refresh data setelah penambahan
                this.reset(); // Reset form setelah menambahkan data
                // Tutup modal setelah menambahkan data
                const modal = document.getElementById('add-standard-modal');
                modal.classList.add('hidden');
            })
            .catch(error => {
                console.error('Error adding data:', error);
            });
    });

    // Ambil data saat halaman dimuat
    fetchStandarListrik();
</script>