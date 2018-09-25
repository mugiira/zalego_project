<?php
include("init/db.php");

$sql ="SELECT * FROM student_details";
$sql_query=mysqli_query($conn,$sql);





?>



    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Category</title>
        <link rel="stylesheet"  href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../css/admin_style.css">



    </head>

    <body>
    <div class="container"><!---- Start of container ==== ---->
        <div class="row"><!---- Start of  row ==== ---->
            <div class="col-sm-2"><!---- Start of col-sm-2 ==== ---->
                <h1 class="dash">DashBoard</h1>
                <ul id="side_menu" class="nav nav-pills nav-stacked">
                    <li ><a href="dashboard.php"><span ><i class="fa fa-th fa-1x"></i></span>Home</a><li>
                    <li ><a href="logout.php"><span ><i class="fa fa-th fa-1x"></i></span>logout</a><li>



                </ul>

            </div><!---- End of col-sm-2 ==== ---->
            <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->

       <h2 class="text-center">View Student Details</h2>

                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row_data=mysqli_fetch_array($sql_query)){
                        $fname= $row_data['first_name'];
                        $lname= $row_data['last_name'];
                        $username= $row_data['username'];
                        $pass= $row_data['password'];


                        ?>
                        <tr>

                            <td><?= $fname ?></td>
                            <td><?= $lname ?></td>
                            <td><?= $username ?></td>
                            <td><?= $pass ?></td>



                        </tr>
                    <?php } ?>






                    </tbody>
                </table>





            </div><!---- Start of col-sm-10 ==== ---->
        </div>
    </div>
    </body>
    </html>
<