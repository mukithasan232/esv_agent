<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patriot & Galiver's</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>

    <?php

    include "./config.php";

    session_start();


    if ($_SESSION["user_role"] == '1') {

        // include "./component/header.php";

        header("Location: {$hostname}/admin/adminView.php");
    } else {
        header("Location: {$hostname}/admin/userView.php");
    }



    ?>




</body>

</html>