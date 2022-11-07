<?php 

$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "SELECT * FROM produktet WHERE produkt_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $edit_query);
	
?>
<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="flex h-screen bg-[#20252a] " :class="{ 'overflow-hidden': isSideMenuOpen }">

        <!-- Desktop sidebar -->
        <aside class="z-20 flex-shrink-0 hidden w-60 pl-2 overflow-y-auto bg-[#20252a] md:block">
            <div>
                <div class="text-white">
                    <div class="flex p-2  bg-[#20252a]">
                        <div class="flex py-3 px-2 items-center">
                            <p class="text-2xl text-yellow-500 font-semibold">tech</p <p class="ml-2 font-semibold italic">
                            Store</p>
                        </div>
                    </div>
                    
                    <div>
                        <ul class="mt-6 leading-10">
                            <li class="relative px-2 py-1 ">
                                <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-yellow-500" 
                                    href=" ./adminnav.php">
                                    <i class="fa-solid fa-house"></i>
                                    <span class="ml-4">ALL PRODUKTS</span>
                                </a>
                            </li>
                            <li class="relative px-2 py-1 ">
                                <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-yellow-500" 
                                    href="./allUsers.php">
                                    <i class="fa-solid fa-users"></i>
                                    <span class="ml-4">Users</span>
                                </a>
                            </li>

                            <li class="relative px-2 py-1 ">
                              <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-yellow-500" 
                                  href="./userPending.php">
                                  <i class="fa-solid fa-code-pull-request"></i>
                                  <span class="ml-4">PENDING</span>
                              </a>
                          </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

        <aside
            class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto  bg-[#20252a] md:hidden"
            x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
            @keydown.escape="closeSideMenu">
            <div>
                <div class="text-white">
                    <div class="flex p-2  bg-[#20252a]">
                        <div class="flex py-3 px-2 items-center">
                        <p class="text-2xl text-yellow-500 font-semibold">tech</p <p class="ml-2 font-semibold italic">
                            Store</p>
                        </div>
                    </div>
                    <div>
                        <ul class="mt-6 leading-10">
                        <li class="relative px-2 py-1 ">
                                <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-yellow-500" 
                                    href=" ./adminnav.php">
                                    <i class="fa-solid fa-house"></i>
                                    <span class="ml-4">All Produkts</span>
                                </a>
                            </li>
                            <li class="relative px-2 py-1 ">
                                <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-yellow-500" 
                                    href="./allUsers.php">
                                    <i class="fa-solid fa-users"></i>
                                    <span class="ml-4">Users</span>
                                </a>
                            </li>

                            <li class="relative px-2 py-1 ">
                              <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-yellow-500" 
                                  href="./userPending.php">
                                  <i class="fa-solid fa-code-pull-request"></i>
                                  <span class="ml-4">Pending</span>
                              </a>
                          </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <header class="z-40 py-4  bg-[#20252a]  ">
                <div class="flex items-center justify-between h-8 px-6 mx-auto">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                        @click="toggleSideMenu" aria-label="Menu">
                        <x-heroicon-o-menu class="w-6 h-6 text-white" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>

                            </template>
                        </li>
                    </ul>

                </div>
            </header>
            <main class="">
                <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-yellow-600">

                    <div class="grid grid-cols-1 gap-6">
                        <div class="grid grid-cols-1 col-span-12 gap-6 xxl:col-span-9">
<?php
while ($erow=mysqli_fetch_array($run_edit)){
?>
<form method="post"  enctype="multipart/form-data" action="edit_produkt_by_id.php"  >
<table class="">
<section class="p-6 mx-auto bg-white rounded-md shadow-md mt-10">
    <a href="./adminnav.php"><i class="fa-solid fa-arrow-left mb-2"></i></a>
				<h1 class="text-xl font-bold text-black capitalize ">Edito shpalljen ne techStore</h1>
				<form action="shtoProdukt.php" enctype="multipart/form-data" method="POST">
					<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
						<div>
							<label class="text-black " for="username">Id i produktit</label>
							<input id="username" type="text" readonly="readonly" name="id" value="<?php echo $erow['produkt_id']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="emailAddress">Emri Produktit</label>
							<input id="emailAddress" type="text" name="title" value="<?php echo $erow['produkt_title']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="password">Emri i Shpallesit Se Produktit</label>
							<input id="password" type="text" name="keywords" value="<?php echo $erow['produkt_keywords']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="passwordConfirmation">Numri i viber</label>
							<input id="passwordConfirmation" type="text" name="viberNumberr"  value="<?php echo $erow['viberNumber']; ?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black">Viber Number</label>
							<input id="password" type="text" name="wpNumberr"  value="<?php echo $erow['wpNumber']; ?>"  class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>

						<div>
							<label class="text-black" for="passwordConfirmation">Cmimi i produktit</label>
							<input id="passwordConfirmation" type="text" name="qmimi" value="<?php echo $erow['produkt_qmimi'];?>" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none">
						</div>
						
					
						<div>
							<label class="text-black" for="passwordConfirmation">Pershkrimi i Produktit</label>
							<textarea id="textarea" type="textarea" name="content" rows="5"class="block w-full px-4 py-2 text-black bg-white border border-black rounded-md   focus:border-yellow-500 focus:outline-none"><?php echo $erow['produkt_content']; ?></textarea>
						</div>


						<div>
							<label class="block text-sm font-medium text-white">
							Foto e Produktit
						</label>
						<div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black border-dashed rounded-md">
							<div class="space-y-1 text-center">
							
							<div class="flex text-sm text-gray-600">
								<label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-black hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
								<span class="">Upload a file</span>
								<input id="file-upload" name="image" placeholder="../images/<?php echo $erow['produkt_image'];?>" type="file" class="sr-only">
								<img src="../images/<?php echo $erow['produkt_image'];?>" class="w-32 h-32 ">
								</label>
								
							</div>
							
							</div>
						</div>
						</div>
					</div>

					<div class="flex justify-end mt-6">
					<input type="submit" name="update" value="Ndryshoje tani"class="inline-flex justify-center rounded-md border border-transparent bg-yellow-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
									</div>
				</form>
			</section>

<?php
}
}	
?>
</table>
</form>
  </div>
</div>

</header>
</div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<script>
        function data() {
          
            return {
               
                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false
                },
                isNotificationsMenuOpen: false,
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
                },
                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = false
                },
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = false
                },
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },
               
            }
        }
    </script>
</body>
</html>