<?php
session_start();
include("functions.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login techStore</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="app.js"></script>

</head>

<body class="text-center">
  <?php

      if (isset($_POST['signin'])) {
        $password = $_POST['password'];
        $email = $_POST['email'];
        $query = "SELECT * from `accounts`;";
        if (count(fetchAll($query)) > 0) {
          foreach (fetchAll($query) as $row) {
            if ($row['email'] == $email && $row['password'] == $password) {
              $_SESSION['login'] = true;
              $_SESSION['type'] = $row['type'];
              header('location:./index2.php');
            } else {
              echo "<script>alert('Wrong login details.')</script>";
            }
          }
        } else {
          echo "<script>alert('Error.')</script>";
        }

      }

      ?>
  <div class="h-screen md:flex">

    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
      <form method="post" class="bg-white">
        <h1 class="text-gray-800 font-bold text-2xl mb-1">Login here</h1>


        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
          </svg>
          <input class="pl-2 outline-none border-none" name="email" type="email" id="" placeholder="Email Address" />
        </div>
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
              clip-rule="evenodd" />
          </svg>
          <input class="pl-2 outline-none border-none" name="password" type="password" id="" placeholder="Password" />
        </div>
        <button type="submit" name="signin"
          class="block w-full bg-gradient-to-tr from-orange-700 to-yellow-300  mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
        <span class="text-sm ml-2  cursor-pointer">Don`t Have Account?</span>
        <a href="signin.php" class="text-sm ml-1 hover:text-orange-500 text-yellow-800 cursor-pointer">Signin</a>

      </form>
    </div>
    <div
      class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-yellow-800 to-orange-500 i justify-around items-center hidden">
      <div>
        <a href="./index.php" class="text-white font-bold text-4xl font-sans">techStore</a>
        <p class="text-white mt-1">The most popular website for Buy&Sell Tech Produkts</p>
      </div>
      <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
      <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
      <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
      <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
    </div>
  </div>

</body>

</html>