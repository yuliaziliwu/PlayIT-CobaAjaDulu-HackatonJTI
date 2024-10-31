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
          
            <a href="#modal-from" class="modal-tambah ml-4">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="relative bg-gradient-to-r from-yellow-200 via-orange-600 to-yellow-200 hover:bg-gradient-to-bl focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 flex space-x-2 items-center w-48 h-9 text-white bg-green-700 hover:bg-green-800 focus:ring-4 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2"">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    Add New Category
                </button>
            </a>
        </div>
        
        <div id="recipients" >
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-left">
                        <th scope="col" class="px-2 py-3 w-12 text-center">No</th> <!-- Adjusted width and text alignment -->
                        <th scope="col" class="px-2 py-3">Category Data</th>
                    </tr>
                </thead>                
                <tbody id="kategoriTableBody">
                    <!-- Data dari API akan dimasukkan di sini -->
                </tbody>
            </table>
        </div> 
      
        <br>
          {{-- menemapilkan paginationnya --}}
        <br>
        
        <div class="flex justify-between">
          {{-- <div class="text-sm">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries</div> --}}
          <div class="text-sm">Showing entries</div>
          <div class="hidden"></div>
          <div class="text-sm">produk</div>
          {{-- <div class="text-sm">{{ $products->links() }}</div> --}}
        </div>
      </div>
  
  <!-- Modal Tambah Data -->
  <div id="addDataModal" tabindex="-1" aria-hidden="true" class="hidden bg-gray-500 bg-opacity-50 flex overflow-y-auto fixed z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full translate-y-8">
      <div class="relative p-2 w-full max-w-3xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                      Add New Product
                  </h3>
                  <button type="button" id="closeAddModalButton" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form id="addDataForm" method="post" enctype="multipart/form-data" class="p-4 md:p-5">
                  <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-1">
                          <label for="id_kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                          <select name="id_kategori" id="id_kategori" class="p-2 rounded-lg form-control mt-1 block w-full">
                      <option value=""></option>

              </select>
                      </div>
                      <div class="col-span-1">
                          <label for="id_subkategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subcategory</label>

                      <option value=""></option>
              </select>
                      </div> 
                    </div>
                       <!-- Kolom 3 -->
          <div class="grid gap-4 mb-4 grid-cols-4">
            <div class="col-span-1">
                <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product</label>
                <input type="text" id="nama_barang" name="nama_barang" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama produk">
            </div>
            
            <!-- Kolom 4 -->
            <div class="col-span-1">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input type="number" id="harga" name="harga" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga">
            </div>
            <div class="col-span-1">
                <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                <input type="number" id="stok" name="stok" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Stock">
            </div>
            
            <!-- Kolom 5 -->
            <div class="col-span-1">
                <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                <input type="text" id="ukuran" name="ukuran" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ukuran">
            </div>
    
            </div>
                  
            
            <!-- Kolom 6 -->
            <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-1">
                <label for="manfaat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Benefit</label>
                <textarea id="manfaat" name="manfaat" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Manfaat"></textarea>
            </div>
            <div class="col-span-1">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="deskripsi" name="deskripsi" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsi produk"></textarea>
            </div>
            
            </div>
            <!-- Kolom 8 -->
            <div class="col-span-2">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
                <input type="file" name="gambar" id="gambar" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <br>      
                        <button type="submit" class="relative bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 flex space-x-2 items-center w-48 h-9 text-black bg-green-700 hover:bg-green-800 focus:ring-4 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                        Add New Product
                    </button>
                </form>
            </div>
        </div>
      </div>
   
  <!-- Modal Konfirmasi Berhasil Ditambahkan -->
  <div id="successAddConfirmationModal" class="fixed z-40 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
              <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                Berhasil Ditambahkan
              </h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                  Data berhasil ditambahkan.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" id="confirmSuccessAddButton" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
            OK
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal Konfirmasi Penghapusan -->
  <div id="deleteConfirmationModal" class="fixed z-40 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
              <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856a2 2 0 001.789-2.895L13.789 4.105A2 2 0 0012.001 2a2 2 0 00-1.789 1.105L3.211 15.105a2 2 0 001.789 2.895z" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                Confirmation Delete
              </h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                  Are you sure you want to delete this product permanently?
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" id="confirmDeleteButton" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            Delete
          </button>
          <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm btn-batal">
            Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal Konfirmasi Berhasil Dihapus -->
  <div id="successConfirmationModal" class="fixed z-40 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
              <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                Berhasil Dihapus
              </h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                  Data berhasil dihapus.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" id="confirmSuccessButton" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
            OK
          </button>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  <!-- Modal Edit Data -->
  <div id="editDataModal" tabindex="-1" aria-hidden="true" class="hidden bg-gray-500 bg-opacity-50 flex overflow-y-auto fixed z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full translate-y-8">
      <div class="relative p-2 w-full max-w-3xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                      Edit Product
                  </h3>
                  <button type="button" id="closeEditModalButton" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form id="editDataForm" method="POST" enctype="multipart/form-data" class="p-4 md:p-5">
               
                <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-1">
                        <label for="id_kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select name="id_kategori" id="id_kategori" class="p-2 rounded-lg form-control mt-1 block w-full">
           
                    <option value=""></option>
                
            </select>
                    </div>
                    <div class="col-span-1">
                        <label for="id_subkategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subcategory</label>
                         <select name="id_subkategori" id="id_subkategori" class="p-2 rounded-lg form-control mt-1 block w-full">
                         <option value=""></option>
            </select>
                    </div> 
                  </div>
                     <!-- Kolom 3 -->
        <div class="grid gap-4 mb-4 grid-cols-4">
          <div class="col-span-1">
              <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product</label>
              <input type="text" id="nama_barang" name="nama_barang" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama produk">
          </div>
          
          <!-- Kolom 4 -->
          <div class="col-span-1">
              <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
              <input type="number" id="harga" name="harga" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga">
          </div>
          <div class="col-span-1">
            <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
            <input type="number" id="stok" name="stok" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Stock">
        </div>
          
          <!-- Kolom 5 -->
          <div class="col-span-1">
              <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
              <input type="text" id="ukuran" name="ukuran" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ukuran">
          </div>
          </div>
          <!-- Kolom 6 -->
          <div class="grid gap-4 mb-4 grid-cols-2">
          <div class="col-span-1">
              <label for="manfaat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Benefit</label>
              <textarea id="manfaat" name="manfaat" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Manfaat"></textarea>
          </div>
          <div class="col-span-1">
              <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
              <textarea id="deskripsi" name="deskripsi" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsi produk"></textarea>
          </div>
          
          </div>
          <!-- Kolom 8 -->
          <div class="col-span-2">
              <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
              <input type="file" name="gambar" id="gambar" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
          </div>
          <br>
                      <button type="submit" class="relative bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 flex space-x-2 items-center w-48 h-9 text-black bg-green-700 hover:bg-green-800 focus:ring-4 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2">
                      <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                      Update Category
                  </button>
              </form>
          </div>
      </div>
  </div> 
  
  <div id="editDataModal" class="fixed z-40 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <form id="editDataForm" action="editDataForm" method="POST" enctype="multipart/form-data">
          {{-- @csrf
          @method('PUT') --}}
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
              </div>
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                  Edit data Kategori
                </h3>
                <div class="mt-2">
                  <div class="mb-4">
                    <label for="nama_kategori" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                  </div>
                  <div class="mb-4">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
                  </div>
                  <div class="mb-4">
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Simpan</button>
            <button type="button" id="closeEditModalButton" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Modal Konfirmasi Berhasil Diubah -->
  <div id="successEditConfirmationModal" class="fixed z-40 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
              <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                Berhasil Diubah
              </h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                  Data berhasil diubah.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="button" id="confirmSuccessEditButton" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
            OK
          </button>
        </div>
      </div>
    </div>
  </div>
  
  {{-- penutup --}}
  </div>
  </div>
  