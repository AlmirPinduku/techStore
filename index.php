<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping</title>
  <link href="styles.css" rel="stylesheet">
  <link href="./input.css" rel="stylesheet">
  <link rel="stylesheet" href="input.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//code.tidio.co/fptihodyl0nxqlspzxvujwsxyrpxttll.js" async></script>
  <script defer src="app.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
	text-decoration: none;
	list-style: none;
}
:root{
	--bg-color: #222327;
	--text-color: #fff;
	--main-color: #fdfd29;
}
body{
	min-height: 100vh;
	background: var(--bg-color);
	color: var(--text-color);
}
header{
	position: fixed;
	width: 100%;
	top: 0;
	right: 0;
	z-index: 1000;
	display: flex;
	align-items: center;
	justify-content: space-between;
	background: transparent;
	padding: 28px 12%;
	transition: all .50s ease;
}
.logo{
	display: flex;
	align-items: center;
}
.logo i{
	color: var(--main-color);
	font-size: 28px;
	margin-right: 3px;
}
.logo span{
	color: var(--text-color);
	font-size: 1.7rem;
	font-weight: 600;
}
.navbar{
	display: flex;
}
.navbar a{
	color: var(--text-color);
	font-size: 1.1rem;
	font-weight: 500;
	padding: 5px 0;
	margin: 0px 30px;
	transition: all .50s ease;
}
.navbar a:hover{
	color: var(--main-color);
}
.navbar a.active{
	color: var(--main-color);
}
.main{
	display: flex;
	align-items: center;
}
.main a{
	margin-right: 25px;
	margin-left: 10px;
	color: var(--text-color);
	font-size: 1.1rem;
	font-weight: 500;
	transition: all .50s ease;
}
.user{
	display: flex;
	align-items: center;
}
.user i{
	font-size: 28px;
	margin-right: 7px;
}
.main a:hover{
	color: var(--main-color);
}
#menu-icon{
	font-size: 35px;
	color: var(--text-color);
	cursor: pointer;
	z-index: 10001;
	display: none;
}


@media (max-width: 1280px){
	header{
		padding: 14px 2%;
		transition: .2s;
	}
	.navbar a{
		padding: 5px 0;
		margin: 0px 20px;
	}
}

@media (max-width: 1090px){
	#menu-icon{
		display: block;
	}
	.navbar{
		position: absolute;
		top: 100%;
		right: -100%;
		width: 270px;
		height: 29vh;
		background: var(--main-color);
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
		border-radius: 10px;
		transition: all .50s ease;
	}
	.navbar a{
		display: block;
		margin: 12px 0;
		padding: 0px 25px;
		transition: all .50s ease;
	}
	.navbar a:hover{
		color: var(--text-color);
		transform: translateY(5px);
	}
	.navbar a.active{
		color: var(--text-color);
	}
	.navbar.open{
		right: 2%;
	}
}
</style>
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

<header>
		<a href="#" class="logo"><span>techStore</span></a>
    
		<div class="main">
			<a href="#" class="user"><i class="fa-solid fa-plus"></i>Krijo një shpallje</a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
    
	</header>

  <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 18rem; background-image: url('./images/banner.png');">

    <div class="container mx-auto">
    </div>
  </section>
 


  <section class="bg-white py-8 container mx-auto">
    <div class="container mx-auto flex flex-wrap">
      <aside class="w-64 mr-20 h-fit border" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3  rounded">
            <ul class="space-y-2">
              <li>
                    <span class="ml-3 flex justify-center text-2xl">Top Brendet</span>
                    <div class="border-b border-black opacity-50"></div>
              </li>
              <li>
                  <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 opacity-80 hover:opacity-100">
                    <span class="flex-1 ml-3 whitespace-nowrap">example Apple</span>
                    <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-red-300 rounded-full">112</span>
                  </a>
              </li>
              
            </ul>
        </div>
      </aside>


      

      <a href="#" class="w-full flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="./images/14pro.png" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </a>
         
    
    </div>
  </section>


</body>

</html>
