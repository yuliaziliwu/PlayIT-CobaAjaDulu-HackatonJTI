@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h2 class="text-2xl font-bold mb-4">Edit Standar Listrik</h2>
        <form id="editStandarListrikForm">
            @csrf
            <input type="hidden" id="editStandarListrikId" name="id_standar_listrik">
            <div class="mb-4">
                <label for="editDayaMaksimum" class="block mb-2">Daya Maksimum (kW)</label>
                <input type="number" id="editDayaMaksimum" name="daya_maksimum" class="border p-2 w-full">
            </div>
            <div class="mb-4">
                <label for="editTarifPerKwh" class="block mb-2">Tarif per KWh</label>
                <input type="number" id="editTarifPerKwh" name="tarif_per_kwh" class="border p-2 w-full">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Save Changes</button>
        </form>
    </div>
</div>

<script>
    // Ambil ID standar listrik dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const idStandarListrik = urlParams.get('id_standar_listrik');

    // Fungsi untuk mengambil data standar listrik berdasarkan ID
    function fetchStandarListrikData() {
        axios.get(`http://localhost:8000/api/standar-listrik/show/${idStandarListrik}`)
            .then(response => {
                const standarListrik = response.data; // Asumsikan response berisi data standar listrik
                console.log('Data Standar Listrik:', standarListrik); // Debugging
                // Isi formulir dengan data standar listrik
                document.getElementById('editStandarListrikId').value = standarListrik.id_standar_listrik;
                document.getElementById('editDayaMaksimum').value = standarListrik.daya_maksimum;
                document.getElementById('editTarifPerKwh').value = standarListrik.tarif_per_kwh;
            })
            .catch(error => {
                console.error('Error fetching standar listrik data:', error);
                alert('Gagal mengambil data standar listrik.');
            });
    }

    // Menangani pengiriman form untuk memperbarui standar listrik
    document.getElementById('editStandarListrikForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        // Debug: Periksa data yang dikirim
        console.log('Data yang dikirim:', Array.from(formData.entries()));

        axios.put(`http://localhost:8000/api/standar-listrik/update/${idStandarListrik}`, formData)
            .then(response => {
                console.log('Response dari server:', response.data); // Tambahkan ini
                alert('Standar listrik updated successfully!');
                window.location.href = '/admin/data-equipment'; // Redirect setelah berhasil
            })
            .catch(error => {
                console.error('Error updating standar listrik:', error.response ? error.response.data : error.message);
                alert('Gagal memperbarui standar listrik. Silakan coba lagi.');
            });

    });
    // Ambil data standar listrik saat halaman dimuat
    fetchStandarListrikData();
</script>