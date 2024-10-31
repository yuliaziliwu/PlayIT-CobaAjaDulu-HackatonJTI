	<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
		<div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
			<ul class="space-y-2 font-medium">
				<li class="flex justify-center p-2 text-gray-900 rounded-lg dark:text-white group">
					<p class="font-bold text-xl"> A D M I N </p></a>
				</li>
				<hr>
				<div x-data="{ isActive: false, open: false}">
					<li class="mt-4">
						<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
							<img src="images/categories.png" class="w-6 h-6" alt="">
							<span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Category Data</span>
					</li>	 
					<li class="mt-4">
						<a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
							<img src="images/electrical.png" alt="" class="w-6 h-6"> <!-- Adjust width and height here -->
							<span class="flex-1 ms-3 whitespace-nowrap">Electricity Data</span>
						</a>
					</li>					
					<li class="mt-4">
						<a href="/laporan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
							<img src="images/equipment.png" class="w-6 h-6" alt="">
								<span class="flex-1 ms-3 whitespace-nowrap">Equipment Data</span>
						</a>
					</li>
					<li class="mt-4"	>
						<a href="/member" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
							<img src="images/user.png" class="w-6 h-6" alt="">
								<span class="flex-1 ms-3 whitespace-nowrap">User Data</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</aside>