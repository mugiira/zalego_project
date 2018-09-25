






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>


    <style>
        body{
            background-color: #eeeeee;
        }
        #registration-form{
            background-color: #fff;
            box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px 0 rgba(0,0,0,.2);
            margin-top: 10px;

        }
        h2{
            font-family: "Roboto Black";
            font-size: 28px;
            font-weight: 100;
            text-transform: uppercase;
            color: black;

        }
        .navbar{
            min-height: 80px !important ;

            background-color: #90ad33 !important;
            border:none!important;
            border-radius: none !important;

        }
        .navbar .navbar-inverse{
            height: 50px;
        }

        label{
            font-family:monospace,sans-serif;
            font-size: 20px;
            font-weight: 100;
            text-transform: uppercase;
            color: black;

        }
        .title{
            font-family: monospace;
            font-size: 25px;
            font-weight: 100px;
        }
        .star{
            color: red;
            margin-left: 2px;


        }
        #kenya11 {
            caret-color:blue;
        }
        .login{
            width: 300px !important;
            height: 40px !important;
            color:green !important;
            margin-left: 20%;
            border: 1px solid #fff;
            background-color: #0caa41;
        }
        .btn-success btn-small{
            border: none !important;
        }

    </style>
    <body>


    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>


            <div class="col-md-6" id="registration-form">
                <fieldset>
                    <form method="post" action="" enctype="multipart/form-data">

                        <h2 class="text-center title"> student registration</h2>

                        <div class="form-group">

                            <label for="name">First Name<span class="star">*</span> </label>
                            <input type="text" name="first-name"  class="form-control">

                        </div>

                        <div class="form-group">

                            <label for="name">Last Name<span class="star">*</span> </label>
                            <input type="text" name="last-name"  class="form-control" id="kenya11">

                        </div>
                        <div class="form-group">

                            <label for="name">username<span class="star">*</span> </label>
                            <input type="text" name="username"  class="form-control">

                        </div>


                        <div class="form-group">

                            <label for="name">PASSWORD<span class="star">*</span>  </label>


                            <input type="password" name="pass"  class="form-control">

                        </div>






                        <div class="form-group">
                            <button type="submit" class="btn-success btn-small" name="register">Register</button>
                            <a href="admin/index.php"class="login" >Login</a>

                        </div>
                        <div class="form-group">
                        </div>
            </div>



            <div class="col-md-3"></div>
        </div>
    </div>


    <script src="../js/jquery2.js"></script>
    <script  src="../js/bootstrap.js"></script>
    </body>
</html>
<?php
include ('admin/init/db.php');
include ('admin/includes/session.php');

if(isset($_POST['register'])){
    $first_name= $_POST['first-name'];
    $last_name= $_POST['last-name'];
    $username =$_POST['username'];
    $pass= $_POST['pass'];
    if (empty($first_name) || empty($last_name) || empty($username) ||empty($pass)) {
       $_SESSION['ErrorMessage'] = "Please you have not entered anything ";


    }
    elseif(strlen($first_name)>50){
        $_SESSION['SuccessMessage'] = "it is too long";
    }else{

    $insert ="INSERT INTO student_details (first_name,last_name,username,password) VALUES('$first_name',' $last_name','$username','$pass')";
    $query =mysqli_query($conn,$insert);
    if ($query) {
        $_SESSION['SuccessMessage'] = "it is data is added successfully to the database ";

    }
    }



}
?>