@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h2 class="text-2xl font-bold mb-4">Edit Kriteria</h2>
        <form id="editCriteriaForm">
            @csrf
            <input type="hidden" id="editKriteriaId" name="id_kriteria">
            <div class="mb-4">
                <label for="editNamaKriteria" class="block mb-2">Nama Kriteria</label>
                <input type="text" id="editNamaKriteria" name="nama_kriteria" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editBobot" class="block mb-2">Bobot</label>
                <input type="text" id="editBobot" name="bobot" class="border p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Simpan Perubahan</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil parameter ID dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const idKriteria = urlParams.get('id_kriteria');

        // Fungsi untuk mengambil data kriteria berdasarkan ID

        function fetchBobotKriteriaData(id) {
            fetch(`http://localhost:8000/api/bobot-kriteria/show/${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Data Bobot Kriteria yang diterima:', data); // Log seluruh respons data

                    // Perbarui pemeriksaan untuk nama kriteria
                    if (data && data.id_kriteria && data.kriteria && data.bobot !== undefined) {
                        document.getElementById('editKriteriaId').value = data.id_kriteria;
                        document.getElementById('editNamaKriteria').value = data.kriteria; // Menggunakan 'data.kriteria' sekarang
                        document.getElementById('editBobot').value = data.bobot;
                    } else {
                        console.error('Data tidak ditemukan atau format tidak sesuai:', data);
                        alert('Data tidak ditemukan atau format tidak sesuai.');
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    alert('Gagal mengambil data. Silakan periksa koneksi atau API.');
                });
        }

        // Panggil fungsi fetch untuk mengisi data form
        if (idKriteria) {
            fetchBobotKriteriaData(idKriteria);
        }

        // Fungsi untuk mengupdate data kriteria
        // Fungsi untuk mengupdate data kriteria
        document.getElementById('editCriteriaForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah submit form secara default

            // Ambil data dari form
            const id = document.getElementById('editKriteriaId').value;
            const namaKriteria = document.getElementById('editNamaKriteria').value;
            const bobot = document.getElementById('editBobot').value;

            // Kirim data ke API untuk update
            fetch(`http://localhost:8000/api/bobot-kriteria/update/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        kriteria: namaKriteria, // Ganti 'nama_kriteria' dengan 'kriteria'
                        bobot: bobot
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error updating data');
                    }
                    return response.json();
                })
                .then(data => {
                    alert('Data berhasil diperbarui');
                    // Redirect atau aksi lain setelah berhasil update
                    window.location.href = '/admin/data-criteria';
                })
                .catch(error => {
                    console.error('Error updating data:', error);
                });
        });

    });
</script>