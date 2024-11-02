<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoSaver</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Keania+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-orange-200 dark:bg-gray-800 dark:border-gray-700"  style="background-color: #FF735C;">
		<div class="px-3 py-3 lg:px-5 lg:pl-3">
		  <div class="flex items-center justify-between">
			<div class="flex items-center justify-start rtl:justify-end">
				<a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
					<img src="../images/logo.svg" class="h-8" alt="Flowbite Logo" />
					<span class="self-center text-2xl font-semibold whitespace-nowrap text-white" style="font-family: 'Keania One', sans-serif;">EcoSaver</span>
				</a>
			</div>
			<div class="flex items-center">
				<div class="flex items-center ms-3">
					<div class="grid grid-cols-2 gap-6 font-extralight text-sm dark:text-white">
						<div class="col-start-1 justify-items-end">
							<span>Wednesday, 27 April 2024</span>
							<h5 class="font-bold" id="jam_aktif">19:19:10</h5>
						</div>
						<div class="col-start-2 flex items-center justify-end">  <!-- Changed to flex container -->
							<span class="font-bold me-2">ECO SAVER ADMIN</span>  <!-- Added margin to separate text and image -->
							<button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false">
								<span class="sr-only">Open user menu</span>
								<img class="w-10 h-10 rounded-full" src="images/8669673.jpg" alt="user photo">
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
  

