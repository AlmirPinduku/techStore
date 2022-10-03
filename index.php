<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <title>Shopping</title>
        <link href="styles.css" rel="stylesheet">
        <link href="./input.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//code.tidio.co/fptihodyl0nxqlspzxvujwsxyrpxttll.js" async></script>
        <script defer src="app.js"></script>
	</head>

<body class="bg-black">
<?php include("./includes/navbar.php") ?>

<section class="text-gray-700 body-font bg-white pt-10">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center bg-white">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 hidenn">Before they sold out
        <br class="hidden lg:inline-block hidenn">readymade gluten
      </h1>
      <p class="mb-8 leading-relaxed hidenn">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
      <div class="flex justify-center">
  <a href="includes/katalogu.php" class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg hidenn">Store</a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 hidenn">
      <img src="./images/idnex.svg" class="object-cover object-center rounded mt-16" alt="hero">
    </div>
  </div>
  </section>


  <section class="text-gray-400 body-font bg-black">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white hidenn">Check out some products</h1>
        <div class="h-1 w-20 bg-yellow-500 rounded hidenn"></div>
      </div>
    </div>
    <?php include("includes/main_content.php")?>
  </div>
</section>
  
    
    <?php include("./includes/blog.php");  ?>

    <?php include("./includes/contact.php");  ?>
    <?php include("./includes/footer.php");  ?>

        <script>
            document.getElementById("homeclick").onclick = function() {homeClick()};
            function homeClick() {
                window.scrollTo({
                top: 0,
                behavior: 'smooth'
                });
            }
            document.getElementById("aboutclick").onclick = function() {aboutClick()};
            function aboutClick() {
                window.scrollTo({
                top: 695,
                behavior: 'smooth'
                });
            }
            document.getElementById("workclick").onclick = function() {workClick()};
            
            function workClick() {
                window.scrollTo({
                top: 1410,
                behavior: 'smooth'
                });
            }
            document.getElementById("blogclick").onclick = function() {blogClick()};
            
            function blogClick() {
                window.scrollTo({
                top: 2095,
                behavior: 'smooth'
                });
            }
            document.getElementById("contactclick").onclick = function() {contactClick()};
            
            function contactClick() {
                window.scrollTo({
                top: 2700,
                behavior: 'smooth'
                });
            }
            var toTopButton = document.getElementById("to-top-button");
            window.onscroll = function () {
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    toTopButton.classList.remove("hidden");
                } else {
                    toTopButton.classList.add("hidden");
                }
            }
            function goToTop() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        </script>
</body>
</html>