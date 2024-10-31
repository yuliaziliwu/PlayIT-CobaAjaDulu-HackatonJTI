@include('components.navbar')
@extends('components.sidebar')
@section('content')

<div class="p-8 sm:ml-64">
    <div class="p-4 border shadow-2xl dark:border-gray-700 mt-14 dark:drop-shadow-2xl rounded-md">
        <h1 class="font-bold break-normal text-orange-500 px-2 py-2 text-xl md:text-2xl">
            Data Electricity
        </h1>
        <div class="flex justify-between items-center mb-4 px-2">
          <form action="" method="get">  
            <input type="search" aria-label="Search" name="cari_produk" class="form-control block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-pink-500 focus:border-pink-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="Search...">
          </form>
          
            <a href="#modal-from" class="modal-tambah ml-4">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="relative bg-gradient-to-r from-yellow-200 via-orange-600 to-yellow-200 hover:bg-gradient-to-bl focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 flex space-x-2 items-center w-48 h-9 text-white bg-green-700 hover:bg-green-800 focus:ring-4 font-medium rounded text-sm px-5 py-2.5 me-2 mb-2"">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    Add New Electricity
                </button>
            </a>
        </div>
        
        <div id="recipients" >
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-left">
                        <th scope="col" class="px-2 py-3 w-12 text-center">No</th> <!-- Adjusted width and text alignment -->
                        <th scope="col" class="px-2 py-3">Electrical Data</th>
                    </tr>
                </thead>                
                <tbody id="kategoriTableBody">
                    <!-- Data dari API akan dimasukkan di sini -->
                </tbody>
            </table>
        </div> 
        <br>
        <br>
        <div class="flex justify-between">
          {{-- <div class="text-sm">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries</div> --}}
          <div class="text-sm">Showing entries</div>
          <div class="hidden"></div>
          <div class="text-sm">produk</div>
          {{-- <div class="text-sm">{{ $products->links() }}</div> --}}
        </div>
      </div>
</div>
