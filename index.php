<?php

//print_r($_POST);
session_start();

$DBservername = "localhost";
$DBusername = "root";
$DBpassword = "PaKaya2022@"; /////// TO CHANGE
$dbname = "users";


$message="";
// Create connection
$conn = new mysqli($DBservername, $DBusername, $DBpassword,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];






    $sql = "select username, password from users where username='" .$username."' and password='" .$password. "' limit 0,1";


    

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $message ="Login successful" ;
        //create_session();

        $_SESSION['logged_in'] = true;
        header('Location: home.php');
        exit(); // Ensure that no code is executed after the redirect



    }else{
        $message = "invalid user credintials";
    }

    }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class=" w-80 h-auto mr-2" src="./Images/logo.png" alt="logo">
                <!-- Red Cypher 1.0     -->
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="index.php" method="post" >
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username</label>
                            <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                          

                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>

                        
                        <div class="flex items-center justify-center">
                            <label for="message" class="block mb-2 text-sm font-medium text-center text-red-500">
                                <?php echo $message; ?>
                            </label>
                        </div>

                        <button type="submit" class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>

                    </form>
                </div>
            </div>
        </div>
      </section>
    
</body>
</html>