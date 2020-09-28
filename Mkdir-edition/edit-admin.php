<?php
    require_once('php/db.php');
    require_once('php/functions.php');
    $id=$_GET['id'];
    if(isset($_POST['nameNstore'], $_POST['phonestore']) && !empty($_POST['nameNstore']) && !empty(['phonestore'])){
        $namestore = $_POST['nameNstore'];
        $phonestore = $_POST['phonestore'];
        $list = $_POST['orderstore'];
        $sum = $_POST['sumNstore'];
        // $id = $_POST['idstore'];
        // echo "ID is " . $id . "<br>";
        $sqlstore = "UPDATE requeststore SET ";
        $sqlstore .= "nameNstore ='" . $namestore ."',";
        $sqlstore .= "phonestore ='" . $phonestore ."',";
        $sqlstore .= "orderstore ='" . $list ."',";
        $sqlstore .= "sumNstore ='" . $sum ."'";
        $sqlstore .= "WHERE idstore =" . $id;
        // echo $sqlstore;
        if(mysqli_query($conn, $sqlstore)){
            // echo 'Correct!';
            header("Location: admin.php");
        }
     }
    
     if(!isset($_GET['id'])){
        header("Location:admin.php");
    }
    
    $sqlstore = "SELECT * FROM requeststore WHERE idstore='" . $id . "' LIMIT 1";
    $requeststore = mysqli_query($conn, $sqlstore);
   
    $item = mysqli_fetch_assoc($requeststore);
    mysqli_free_result($requeststore);


        //  $sqlstore = "SELECT * FROM requeststore";
        //  $requeststore = mysqli_query($conn, $sqlstore);
        
?>

<!doctype html>
    <html lang="en">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update admin page</title>
    <link rel="shortcut icon" href="#" type="image/png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/list-group.css">
    <link rel="stylesheet" href="css/admin.css">

    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap" rel="stylesheet">

    <body style="opacity: 0;transition: .9s;">
        <img id="admin-head-bl" src="content/home/admin-head.png" width="100%" alt="admin-head">
        <h1 class="text-center">Order</h1>
  
        
                <form id="store-edit" method="post" style="margin:5%; font-size:2em;">
                    <input type="hidden" name="idstore" />
                    <input style="font-size:1.5em;" class="form-control border-300 mt-3" name="nameNstore" value="<?php echo $item['nameNstore'] ?>" type="text" aria-label="Name" placeholder="First and second name" class="form-control" required>
                    <input type="" id="" class="form-control border-300 mt-3" name="sumNstore" value="<?php echo  $item['sumNstore'] ?>" aria-label="Price" placeholder="Price" class="form-control" >
                    <input type="" id="" class="form-control border-300 mt-3" name="orderstore" value="<?php echo $item['orderstore']?> " aria-label="List" placeholder="List" class="form-control" >
                    <input id="phone-num2" class="form-control border-300 mt-3" name="phonestore" value="<?php echo $item['phonestore'] ?>" type="text" aria-label="Phone" placeholder="Phone" class="form-control" required>
                    
                    <button id="send-button" style="margin-bottom: 16px; width:50%; margin:auto;" class="form-control border-300 mt-3" onclick="testStore(document.getElementById('phone-num2'));">  
                            Edit
                    </button>
                        
                    
                </form>
    

        <script type="text/javascript"> 

            setTimeout("window.location.reload()",150000);

        </script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        
        
        <!-- NEW -->
        
        <script>
        $(document).ready(function() {    
            $("body").css("opacity", "1");
        });
    </script>
    </body>

    </html>

