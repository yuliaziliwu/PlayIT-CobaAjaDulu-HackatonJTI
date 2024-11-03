@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h2 class="text-2xl font-bold mb-4">Edit Category</h2>
        <form id="editCategoryForm">
            @csrf
            <input type="hidden" id="editKategoriId" name="id_kategori">
            <div class="mb-4">
                <label for="editNamaKategori" class="block mb-2">Nama Kategori</label>
                <input type="text" id="editNamaKategori" name="nama_kategori" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editDurasiBijak" class="block mb-2">Durasi Bijak</label>
                <input type="text" id="editDurasiBijak" name="durasi_bijak" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="editDayaBijak" class="block mb-2">Daya Bijak</label>
                <input type="text" id="editDayaBijak" name="daya_bijak" class="border p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Save Changes</button>
        </form>
    </div>
</div>

<script>
    // Ambil id_kategori dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const idKategori = urlParams.get('id_kategori');

    // Fungsi untuk mengambil data kategori berdasarkan ID
    function fetchCategoryData(id) {
        axios.get(`http://localhost:8000/api/kategori/show/${id}`) // Menggunakan endpoint yang sesuai
            .then(response => {
                // Mengisi form dengan data kategori
                const kategori = response.data;
                document.getElementById('editKategoriId').value = kategori.id_kategori;
                document.getElementById('editNamaKategori').value = kategori.nama_kategori;
                document.getElementById('editDurasiBijak').value = kategori.durasi_bijak;
                document.getElementById('editDayaBijak').value = kategori.daya_bijak;
            })
            .catch(error => {
                console.error('Error fetching category data:', error);
            });
    }

    // Panggil fungsi untuk mengambil data kategori
    if (idKategori) {
        fetchCategoryData(idKategori);
    }

    document.getElementById('editCategoryForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form dari pengiriman default

        const id = document.getElementById('editKategoriId').value; // Ambil ID kategori
        const formData = {
            nama_kategori: document.getElementById('editNamaKategori').value,
            durasi_bijak: document.getElementById('editDurasiBijak').value,
            daya_bijak: document.getElementById('editDayaBijak').value,
        };

        axios.put(`http://localhost:8000/api/kategori/update/${id}`, formData)
            .then(response => {
                alert('Kategori berhasil diupdate');
                // Mungkin di sini Anda ingin meredirect atau memuat ulang data
                window.location.href = '/admin/data-category';
            })
            .catch(error => {
                console.error('Error updating category:', error.response.data);
                alert('Gagal mengupdate kategori');
            });
    });
</script>