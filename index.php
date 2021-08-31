<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>LOGIN</title>
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="h-auto">
            <div>
                <h1 class="text-center p-5" style="font-size: 2.4rem">LOGIN SYSTEM (PHP / MYSQL)</h1>
                <div>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="text-red-300 text-center pb-4">
                            <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>
                    <form action="login.php" method="POST" class="flex flex-col gap-4 pl-9 pr-9">
                        <input type="text" class="focus:outline-none focus:border-green-400 border-2 border-gray-300 p-3 rounded" placeholder="username" name="username">
                        <input type="text" class="focus:outline-none focus:border-green-400 border-2 border-gray-300 p-3 rounded" placeholder="password" name="password">
                        <!-- <input type="text" class="focus:outline-none focus:border-green-400 border-2 border-gray-300 p-3 rounded" placeholder="pc num" name="pc"> -->
                        <button class="w-full bg-green-300 p-3" name="login">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>