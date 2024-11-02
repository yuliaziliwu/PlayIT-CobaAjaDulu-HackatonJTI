@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h2 class="text-2xl font-bold mb-4">Edit Device</h2>
        <form id="editDeviceForm">
            @csrf
            <input type="hidden" id="editDeviceId" name="id_perangkat">
            <div class="mb-4">
                <label for="editNamaPerangkat" class="block mb-2">Nama Perangkat</label>
                <input type="text" id="editNamaPerangkat" name="nama_perangkat" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editDaya" class="block mb-2">Daya</label>
                <input type="text" id="editDaya" name="daya" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editKategoriId" class="block mb-2">Kategori ID</label>
                <input type="text" id="editKategoriId" name="kategori_id" class="border p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Save Changes</button>
        </form>
    </div>
</div>

<script>
    // Ambil id_perangkat dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const idPerangkat = urlParams.get('id_perangkat'); // Pastikan parameter ID di URL sesuai

    // Fungsi untuk mengambil data perangkat berdasarkan ID
    function fetchDeviceData(id) {
        console.log('Fetching data for device ID:', id);

        // Cek jika ID valid sebelum membuat permintaan
        if (!id) {
            console.error('ID perangkat tidak valid');
            alert('ID perangkat tidak valid');
            return;
        }

        axios.get(`http://localhost:8000/api/perangkat-listrik/show/${id}`)
            .then(response => {
                console.log('Response dari API:', response.data); // Log keseluruhan respons API

                // Memeriksa apakah data tersedia
                if (response.data && response.data.data) {
                    const perangkat = response.data.data;
                    console.log('Data perangkat yang diterima:', perangkat);

                    // Mengisi elemen form dengan data perangkat
                    document.getElementById('editDeviceId').value = perangkat.id_perangkat;
                    document.getElementById('editNamaPerangkat').value = perangkat.nama_perangkat;
                    document.getElementById('editDaya').value = perangkat.daya;
                    document.getElementById('editKategoriId').value = perangkat.kategori_id;
                } else {
                    console.warn('Data perangkat tidak ditemukan dalam respons:', response.data);
                    alert('Data perangkat tidak ditemukan');
                }
            })
            .catch(error => {
                console.error('Error fetching device data:', error); // Log kesalahan
                alert('Gagal mengambil data perangkat');
            });
    }


    // Panggil fungsi untuk mengambil data perangkat
    if (idPerangkat) {
        console.log('Memanggil fetchDeviceData dengan ID:', idPerangkat); // Log ID sebelum memanggil
        fetchDeviceData(idPerangkat);
    } else {
        console.log('ID Perangkat tidak ditemukan di URL');
    }


    // Menangani pengiriman formulir
    document.getElementById('editDeviceForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form dari pengiriman default

        const id = document.getElementById('editDeviceId').value; // Ambil ID perangkat
        console.log('ID perangkat yang akan diperbarui:', id);

        const formData = {
            nama_perangkat: document.getElementById('editNamaPerangkat').value,
            daya: document.getElementById('editDaya').value,
            kategori_id: document.getElementById('editKategoriId').value,
        };
        console.log('Data yang dikirimkan untuk pembaruan:', formData);

        axios.put(`http://localhost:8000/api/perangkat-listrik/update/${id}`, formData)
            .then(response => {
                console.log('Response dari server saat pembaruan:', response.data);
                alert('Perangkat berhasil diperbarui');
                window.location.href = '/admin/data-electrical'; // Ubah sesuai dengan rute tujuan Anda
            })
            .catch(error => {
                console.error('Error updating device:', error.response.data);
                alert('Gagal memperbarui perangkat: ' + (error.response.data.message || 'Terjadi kesalahan'));
            });
    });
</script>