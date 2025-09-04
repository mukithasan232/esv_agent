<?php






session_start();

if (isset($_SESSION['username'])) {
    header("Location: http://localhost/esv/admin/index.php");
}



?>



<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>


    <section class="login-signup container mx-auto py-5 flex justify-center items-center  ">

        <div class="login-signup">




            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <div class="input-group border-1 p-4 flex flex-col gap-5 justify-center align-center">

                    <div class="input-email-group flex justify-between items-center w-full gap-10">
                        <h3>Email or Username</h3>
                        <input class="rounded-full border-1 py-2 px-4" type="email" name="email" id="email" required>
                    </div>

                    <div class="password-group flex justify-between items-center w-full">
                        <label for="password">Password</label>
                        <input class="rounded-full border-1 py-2 px-4" type="password" name="password" id="password" required>
                    </div>

                    <input class="border-1 w-1/3 hover:bg-blue-400 cursor-pointer py-2 px-4" type="submit" name="login" value="login">
                </div>

            </form>



            <?php

            include "../config.php";

            if (isset($_POST['login'])) {


                $useremail = mysqli_real_escape_string($conn, $_POST['email']);
                $pass = $_POST['password'];
                $sql = "SELECT email , password, role FROM agency WHERE email ='$useremail' AND password ='$pass'";

                $result = mysqli_query($conn, $sql) or die("Query Failed") or ("connection Failed");

                if (mysqli_num_rows($result) > 0) {


                    while ($row = mysqli_fetch_assoc($result)) {

                        session_start();

                        $_SESSION['user_id'] = $row['email'];
                        $_SESSION['username'] = $row['name'];
                        $_SESSION['user_role'] = $row['role'];


                        header("location: http://localhost/esv/admin/index.php");
                    }
                } else {
                    echo "Invalid Username or Password";
                }
            }



            ?>


        </div>

    </section>



</body>

</html>