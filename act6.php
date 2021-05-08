<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Login Form in PHP With Session</title>

</head>

<body style="background:#CCC;">


    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="card bg-dark mt-5">

                    <div class="card-title bg-primary text-white mt-5">

                        <center><h3 class="text-center py-3">Login Form in PHP </h3></center>

                    </div>
                    <?php 

                        if(@$_GET['Empty']==true)

                        {

                    ?>

                        <center><div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div></center>                                

                    <?php

                        }

                    ?>
                    <?php 

                        if(@$_GET['Invalid']==true)

                        {

                    ?>

                        <center><div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div></center>                                

                    <?php

                        }

                    ?>



                    <div class="card-body">

                        <form action="process.php" method="post">

                            <center><input type="text" name="UName" placeholder=" User Name" class="form-control mb-3"></center>

                            <center><input type="password" name="Password" placeholder=" Password" class="form-control mb-3"></center>

                            <center><button class="btn btn-success mt-3" name="Login">Login</button></center>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


</body>

</html>