<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaction</title>
    <!-- Required meta tags -->
    
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;

        }

        * {
            font-family: Poppins;
        }
    </style>
</head>

<body>

    
    <?php
    include './connection.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include './navbar.php';
    ?>
    
        <h3 style="text-align: center;color:blue"><b>Customers</b></h3>
    </div>
    <div class="container">
        <br />
        <div class="row">
            <div class="col">

                <div class="container-fluid table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2">Cust_Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Current Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($result)) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="center py-2"><?php echo (isset($rows['c_id']) ? $rows['c_id'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['name']) ? $rows['name'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['email']) ? $rows['email'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['balance']) ? $rows['balance'] : ''); ?></td>
                                        <td class="center"><a href="userdetails.php?c_id=<?php echo $rows['c_id']; ?>"> 
                                            <button type="button" class="btn ">Transfer ₹</i>
                                            </button></a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <footer class="center footer" style=" background: green; color:white; margin-bottom: 0; bottom: 0; padding: 10px;">
    <h6 class="info"><b>GRIP Feb 2021 © The Sparks Foundation -> By Pratik Chainani </b></h6>
  </footer>

</body>

</html>