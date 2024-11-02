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
    // Fungsi untuk mengambil data kriteria dan mengisi form saat halaman dimuat
    function fetchKriteriaData() {
        const urlParams = new URLSearchParams(window.location.search);
        const idKriteria = urlParams.get('id_kriteria');
        console.log('ID Kriteria:', idKriteria); // Log ID yang didapat

        if (!idKriteria) {
            alert('ID Kriteria tidak ditemukan.');
            return;
        }

        axios.get(`http://localhost:8000/api/bobot-kriteria/show/${idKriteria}`)
            .then(response => {
                const kriteria = response.data;
                document.getElementById('editKriteriaId').value = kriteria.id_kriteria;
                document.getElementById('editNamaKriteria').value = kriteria.nama_kriteria;
                document.getElementById('editBobot').value = kriteria.bobot;
            })
            .catch(error => {
                console.error('Error fetching kriteria data:', error);
                if (error.response) {
                    console.log('Response data:', error.response.data);
                    alert('Terjadi kesalahan: ' + error.response.data.message);
                } else {
                    alert('Gagal memuat data kriteria. Silakan coba lagi.');
                }
            });
    }

    // Menangani pengiriman form untuk mengupdate kriteria
    document.getElementById('editCriteriaForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form default

        // Mengambil data dari input
        const idKriteria = document.getElementById('editKriteriaId').value;
        const namaKriteria = document.getElementById('editNamaKriteria').value;
        const bobot = document.getElementById('editBobot').value;

        // Validasi input
        if (!namaKriteria || !bobot) {
            alert('Semua field harus diisi.');
            return; // Hentikan jika ada yang kosong
        }

        // Mengirimkan data ke API untuk mengupdate kriteria
        axios.put(`http://localhost:8000/api/bobot-kriteria/update/${idKriteria}`, {
                kriteria: namaKriteria,
                bobot: parseFloat(bobot) // Pastikan ini adalah float
            })
            .then(function(response) {
                // Menangani sukses
                console.log(response.data);
                alert('Kriteria berhasil diperbarui!');
                window.location.href = '/admin/data-kriteria'; // Redirect ke halaman yang sesuai
            })
            .catch(function(error) {
                console.error('Error saat memperbarui kriteria:', error);
                if (error.response) {
                    alert('Terjadi kesalahan: ' + error.response.data.message);
                } else {
                    alert('Terjadi kesalahan saat memperbarui kriteria.');
                }
            });
    });

    // Panggil fungsi untuk mengambil data kriteria saat halaman dimuat
    fetchKriteriaData();
</script>
