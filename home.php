<?php
    session_start();

    if (isset($_SESSION['id']) && (isset($_SESSION['username']))) {
        # code...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="flex h-screen justify-center items-center">
        <div class="h-auto">
            <div  class="container pl-7 pr-7">       
                <h1 class="uppercase text-5xl p-4">HELLO <?php echo $_SESSION['username'];?> !!</h1>
                <a href="logout.php">
                    <button class="w-full bg-green-300 p-3" name="login">LOGOUT</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }

?>