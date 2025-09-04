<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>


    <section class="bg-gray-100">
        <header class="container mx-auto">

            <div class="flex justify-between items-center py-10">
                <div class="logo">

                    <h1 class="text-xl font-bold">Patriot's</h1>


                </div>
                <!-- 
                <div class="menu">

                    <ul class="flex justify-between items-center gap-20">
                        <li>Home</li>
                        <li>About</li>
                        <li>Services</li>
                        <li>Contact</li>
                    </ul>

                </div> -->



                <div class="navButton flex justify-between items-center gap-20">
                    <a href="./logout.php">logout</a>
                </div>
            </div>



        </header>
    </section>

    <section class="container mx-auto flex justify-between items-center mt-20">
        <?php
        include "./component/shopCard.php";
        ?>

        <?php
        include "./component/shopCard.php";
        ?>

        <?php
        include "./component/shopCard.php";
        ?>

        <?php
        include "./component/shopCard.php";
        ?>

    </section>



    <?php



    ?>





</body>

</html>