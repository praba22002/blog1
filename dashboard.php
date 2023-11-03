<?php

@include '../components/connect.php';

session_start();
$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header("Location:admin_login.php");
    $admin_id = '';
}


?>


<!DOCTYPE.html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>

        <!-- font awesome cdn link -->
        link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!--custom css file link -->
        <link rel = "stylesheet" href="../css/admin_style.css">
</head>
<body>

<!--headear section starts -->
<?php include '../components/admin_header.php'; ?>

<!--headear section starts -->

















<!-- custom js file  link -->
<script src='../js/admin_script.js'></script>

</body>
</html>
