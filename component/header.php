<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>

<body class="">

    <section class="bg-gray-500">
        <header class="container mx-auto">

            <div class="flex justify-between items-center py-3">
                <div class="logo">

                    <h1 class="text-xl font-bold">esv</h1>


                </div>

                <!-- <div class="menu">

                <ul class="flex justify-between items-center gap-20">
                    <li>Home</li>
                    <li>About</li>
                    <li>Services</li>
                    <li>Contact</li>
                </ul>

            </div> -->


                <?php

                if (isset($_POST['login'])) {
                    header("Location: http://localhost/esv/admin/component/login.php");
                }


                ?>


                <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">

                    <input class="mx-10 cursor-pointer" type="submit" name="login" value="login">
                    <input class="cursor-pointer mx-10" type="submit" name="signup" value="signup">



                </form>
            </div>



        </header>
    </section>

</body>

</html>