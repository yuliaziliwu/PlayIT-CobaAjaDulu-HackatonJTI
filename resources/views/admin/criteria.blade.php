@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h1 class="font-bold break-normal text-orange-500 px-2 py-2 text-xl md:text-2xl">
            Data Kriteria
        </h1>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Bobot
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="kriteriaTableBody">
                    <!-- Data will API -->
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        function fetchBobotKriteria() {
            fetch('http://localhost:8000/api/bobot-kriteria/admin')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Mengubah respons menjadi JSON
                })
                .then(data => {
                    console.log(data); // Log data yang diterima
                    const tableBody = document.getElementById('kriteriaTableBody'); // Pastikan ID-nya benar
                    tableBody.innerHTML = ''; // Kosongkan tabel sebelum diisi

                    // Mengisi tabel dengan data
                    data.forEach((item, index) => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                        <td class="px-6 py-3 text-center">${index + 1}</td>
                        <td class="px-6 py-3 text-center">${item.kriteria}</td>
                        <td class="px-6 py-3 text-center">${item.bobot}</td>
                        <td class="px-6 py-3 text-center">
                            <button class="update-button text-blue-500 hover:text-blue-700 mr-2" data-id="${item.id_kriteria}">
                                 <i class="fas fa-edit"></i>Update
                            </button>
                        </td>
                    `;
                        tableBody.appendChild(row);
                    });

                    // Tambahkan event listener untuk tombol update
                    const updateButtons = document.querySelectorAll('.update-button');
                    updateButtons.forEach(button => {
                        button.addEventListener('click', function() {
                            const idBobotKriteria = this.getAttribute('data-id');
                            window.location.href = `/admin/edit-criteria?id_kriteria=${idBobotKriteria}`;
                        });
                    });
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }

        // Panggil fungsi untuk mengambil data saat halaman dimuat
        fetchBobotKriteria();
    });
</script>
