<?php
    require_once('php/db.php');
    require_once('php/functions.php');

    
    
    
         $sqlstore = "SELECT * FROM requeststore";
         $requeststore = mysqli_query($conn, $sqlstore);
        
?>

<!doctype html>
    <html lang="en">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin page</title>
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
        <h1 class="text-center">Orders</h1>
        <table>
        <tr id="head">
            <td> Name + phone_number</td>
            <td> Order List</td>
        </tr>
         <?php  while($item = mysqli_fetch_assoc($requeststore)){ ?>
            <tr>
               
                <td id="name" class="right-border" ><?php echo $item['nameNstore'] ?> </td>
                <td><a style="float:right;" href=<?php echo 'delete-admin.php?id=' . $item['idstore'];?>><div id="delete-but" ></div></a> <a style="float:right;" href=<?php echo 'edit-admin.php?id=' . $item['idstore'];?>> <img src="/content/home/edit2.png" width=35 height=35 alt="edit"> </a></td>
            
            </tr>   
            <tr style="border-bottom: 10px solid antiquewhite;">
                <td id="phoneStore" class="right-border" style="font-size:1.5em;"><?php echo $item['phonestore'] ?></td>
                <td class="left-border"><?php echo $item['orderstore']?> <p style="border-top:2px solid black;"><?php echo  $item['sumNstore'] . " USD"?></p> </td>
            </tr> 
            <!-- <tr>
            <td></td>
            </tr>            -->

                        <!-- <div id="edit" ></div> -->
                        
                    

                <?php } mysqli_free_result($requeststore); ?>
        </table>
                        
    
    

        <script type="text/javascript"> 

            setTimeout("window.location.reload()",50000);

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

<?php
    require_once('php/footer.php');
?>