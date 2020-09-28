<?php
    require_once('php/db.php');
    require_once('php/functions.php');

    
     
 
    if(isset($_POST['nameN'], $_POST['phone']) && !empty($_POST['nameN']) && !empty(['phone'])){
      
      
        $name = $_POST['nameN'];
        $phone = $_POST['phone'];
        $comment = $_POST['comment']; 

        $sql = "INSERT INTO comments (nameN, phone, comment) VALUES ('";
        $sql .= $name . "', '" . $phone . "', '" . $comment . "')";
        if(mysqli_query($conn, $sql)){
            // header("Location:index.php#list-group");
            $sql3 = "SELECT * FROM comments";
            $comments = mysqli_query($conn, $sql3);
            // echo "Correct!";
         }
    
    
}
    
    if(isset($_POST['nameNstore'], $_POST['phonestore']) && !empty($_POST['nameNstore']) && !empty(['phonestore'])){
        $namestore = $_POST['nameNstore'];
        $phonestore = $_POST['phonestore'];
        $list = $_POST['orderstore'];
        $sum = $_POST['sumNstore'];
        
        $sqlstore = "INSERT INTO requeststore (nameNstore, phonestore, orderstore, sumNstore) VALUES ('";
        $sqlstore .= $namestore . "', '" . $phonestore . "', '" . $list . "', '" . $sum . "')";
        mysqli_query($conn, $sqlstore);
        
    }
    
    
    $a = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `comments`"));//count of rows
    if($a!=0){
        
        $sql2 = "SELECT * FROM comments";
        $comments = mysqli_query($conn, $sql2);
    }
 
?> 
    <!doctype html>
    <html lang="en">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lab_2</title>
    <link rel="shortcut icon" href="#" type="image/png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/photo-animation.css">
    <link rel="stylesheet" href="css/list-group.css">
    <link rel="stylesheet" href="css/info-line.css">
    <link rel="stylesheet" href="css/parallax.css">
    <link rel="stylesheet" href="css/mac.css">
    <link rel="stylesheet" href="css/style-fly.css">
    <link rel="stylesheet" href="css/iMac-s.css">

    <link href="https://fonts.googleapis.com/css2?family=Long+Cang&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">


    <body style="opacity: 0;transition: .9s;">
        <!--HEADER-->
        <header id="head">
            <!-- <p type="hidden" id="head"></p> -->

            <nav class="nav fixed" id="nav-2" style="z-index:100;">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.php" id="name"><span class="mk">MK</span>dir</a>

                    </div>
                    <div class="main_list" id="main_list-2">
                        <ul id="list_ul-2">
                            <li><a href="#parallax">Home</a></li>
                            <li><a data-scroll href="#block-nameMAC">Store</a></li>
                            <li><a data-scroll href="#list-group">Info</a></li>
                            
                        </ul>
                        
                    </div>
                    <div class="sh-basket" style="float:right;">

                    </div>
                </div>
                
                <div class="nav_button">
                    <button class="nav_button_main" id="nav_button">
                <span></span>
                <span></span>
                <span></span>
            </button>
                </div>

            </nav>

        </header>
        <!--END HEADER-->

        <div id="fixed-panel-mac" class="d-none d-md-block">
            <a href="https://www.instagram.com/noirkotyara/" target="_blank">
                <div id="telegram">
                    <img id="telegram" src="content/inst.svg" width="50" height="50" alt="Insta">
                </div>
            </a>
            <a href="https://t.me/ave_kucher" target="_blank">
                <div id="telegram">
                    <img id="telegram" src="content/telegram.svg" width="50" height="50" alt="Telegram">
                </div>
            </a>
            <a id="go-top-trans" href="index.php">
                <div id="go-top" title="Main page">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 172 172" style=" fill:#000000;"><defs><linearGradient x1="86" y1="17.46875" x2="86" y2="157.9175" gradientUnits="userSpaceOnUse" id="color-1_43974_gr1"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#000000"></stop></linearGradient><linearGradient x1="105.3715" y1="51.51131" x2="105.3715" y2="123.22725" gradientUnits="userSpaceOnUse" id="color-2_43974_gr2"><stop offset="0" stop-color="#ff9f70"></stop><stop offset="1" stop-color="#383838"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M123.68144,155.875h-10.91931c-1.41094,0 -2.74125,-0.54287 -3.74369,-1.52919l-63.67762,-62.77194c-1.50769,-1.48619 -2.34081,-3.46688 -2.34081,-5.57388c0,-2.107 0.83312,-4.08769 2.33813,-5.57388l63.68031,-62.77194c1.00244,-0.98631 2.33006,-1.52919 3.74369,-1.52919h10.91931c2.1715,0 4.10113,1.28731 4.92081,3.28681c0.81431,1.97531 0.35206,4.22744 -1.17712,5.73513l-59.96081,59.10619c-0.47569,0.47031 -0.73638,1.08844 -0.73638,1.74688c0,0.65844 0.26337,1.27925 0.73638,1.74688l59.9635,59.10619c1.5265,1.50769 1.98875,3.75713 1.17713,5.73513c-0.82238,1.9995 -2.752,3.28681 -4.9235,3.28681zM112.77288,21.5l-63.65881,62.75313c-0.47569,0.46763 -0.73906,1.08844 -0.73906,1.74688c0,0.65844 0.26337,1.27925 0.73638,1.74688l63.67494,62.76656l10.89513,-0.01344l-59.99037,-58.92612c-1.50769,-1.48619 -2.33812,-3.46688 -2.33812,-5.57388c0,-2.107 0.83312,-4.08769 2.33812,-5.57388l59.96081,-59.10619z" fill="url(#color-1_43974_gr1)"></path><path d="M119.04819,52.95181l-31.14275,31.14544c-1.05081,1.05081 -1.05081,2.75469 0,3.80819l31.14275,31.14275c1.68775,1.68775 4.57681,0.49181 4.57681,-1.89738v-62.30162c0,-2.38919 -2.88906,-3.58512 -4.57681,-1.89738z" fill="url(#color-2_43974_gr2)"></path></g></g></svg> -->
                    <img src="content/home/home.svg" alt="home">
                </div>
            </a>
            <div id="nav-search">
                <div class="search-box">
                    <input type="text" placeholder="Search" class="input">
                    <div id="search-btn" class="btn">
                        <i id="search-icon" class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>

        <!--PARALLAX-->
 
        <div id="parallax" class="parallax">

            <div class="parallax-container">
                <h1 class="lax" data-lax-translate-y="0 0, 600 -300">iMac</h1>
                <div class="line lax" data-lax-opacity="0 1, 300 0"></div>
            </div>

            <div class="parallax-container secondary align-middle text-center lax" data-lax-opacity="0 0, 500 1">
                <h2>Strategic</h2>
                <p class="subtext">Alliance</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <img id="header-MAC" src="content/home/mac-home.png" alt="BackMac" class="back">
        </div>




        <!-- STORE -->
        <!-- products -->
        <div id="iMac-store2" class="container">

        </div>
        <div class="shopping">
        
        </div>
        
        <!-- iMac-store -->

        <script src="iMac-s/constants/root.js"></script>
        <script src="iMac-s/constants/catalog.js"></script>
        <script src="iMac-s/constants/catalog2.js"></script>
        <script src="iMac-s/constants/catalog3.js"></script>
        <script src="iMac-s/utils/localStorageUtil.js"></script>

        <script src="iMac-s/components/IMac-store/IMac-store2.js"></script>
        <script src="iMac-s/components/Shopping/Shopping.js"></script>
        <script src="iMac-s/components/Header/header.js"></script>
        <link rel="stylesheet" href="iMac-s/components/Shopping/Shopping.css">
        <!-- end iMac-store -->
        <!-- END STORE -->


        <!-- INFO LINE -->
        <div id="info-line">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 text-center lax" data-lax-translate-y="0 0,-500 150,0 1">
                        <div id="count-line-1" class="count-line">
                            05
                        </div>
                        <div id="info-count-line-1" class="info-count-line">
                            Years of experience
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-center ">
                        <div id="count-line-2" class="count-line ">
                            10K
                        </div>
                        <div id="info-count-line-2" class="info-count-line">
                            Customers
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-center ">
                        <div id="count-line-3" class="count-line ">
                            08
                        </div>
                        <div id="info-count-line-3" class="info-count-line">
                            Partners
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- LIST GROUP -->

        <div id="list-group-container" class="container-fluid">

            <h2 id="list-group" class="text-center">
                Info
            </h2>

            <div class="row list-group-flush">
                <div class="col-sm-4 col-xs-12" style="margin-bottom: 30px;">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">About us</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Why we</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Comments</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Your proposal</a>
                    </div>
                </div>
                <div id="div-comments" class="col-sm-8 col-xs-12" style="margin-bottom: 60px;">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- ABOUT US -->
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <ul class="info-list" style="list-style: none; padding: 15px;">
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    Apple Inc. has became one of the world’s top corporations, generating billions of dollars annually.
                                </li>
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    The company upends the apple carts of technology, politics, social events, and more.
                                </li>
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    Their achievements cover so many areas that it would take days to spotlight.
                                </li>
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    Apple’s rise to power has been an up and down battle of mega proportions, they’ve had to go up against fierce competitors, government regulations, and more.
                                </li>
                            </ul>
                        </div>
                        <!-- WHY WE -->
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <ul class="info-list" style="list-style: none; padding: 15px;">
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    Apple is so successful, that in the first quarter of 2014, it made more money than Amazon, Google, and Facebook combined.
                                </li>
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    To raise capital for Apple, co-founder Steve Wozniak had to sell his scientific calculator.
                                </li>
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    Apple was the first to make a digital color camera.
                                </li>
                                <li style="margin: 10px; border-left: 2px solid gray; border-radius: 10px; padding-left: 8px;">
                                    Apple employs more people than a good sized city. Apple employs over 90,000 people. However, millions more make money from Apple and that ranges from sales affiliates to mom and pop shops around the world.
                                </li>
                            </ul>
                        </div>
                        <!-- COMMENTS -->
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            <ul class="list-unstyled">
                                <?php
                        if($a!=0){
                        while($comment = mysqli_fetch_assoc($comments)){
                            
                                
                    ?>
                                    <li class="media my-4">

                                        <img src="content/iconCat.png" class="align-self-center mr-3" alt="Comment">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">
                                                <?php echo $comment['nameN'] . " (" . $comment['phone'] . ") "; ?>

                                            </h5>
                                            <?php echo $comment['comment']?>
                                        </div>
                                    </li>

                            </ul>
                            <?php 
                        }
                        mysqli_free_result($comments);
                    }
                    else{
                        echo '<h2>No comments yet</h2>';
                    }
                        
                        ?>
                        </div>
                        <!-- FORM PROPOSAL -->
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                            <form action="" method="post">
                                <input type="hidden" name="id" />
                                <input class="form-control border-300 mt-3" name="nameN" type="text" aria-label="Name" placeholder="First and second name" class="form-control" required>


                                <input id="phone-num" class="form-control border-300 mt-3" name="phone" value="" type="text" aria-label="Phone" placeholder="Phone" class="form-control" required>


                                <textarea class="form-control border-300 mt-3" name="comment" rows="6" placeholder="Your Message" required="required" spellcheck="false"></textarea>


                                <button id="send-button" style="margin-bottom: 16px;" class="form-control border-300 mt-3" onclick="testInfo(document.getElementById('phone-num'));">  
                                Send  
                                <svg class="align-middle" id="send-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="32" height="32"viewBox="0 0 172 172"style=" fill:#000000;"><defs><linearGradient x1="86" y1="13.66594" x2="86" y2="157.22413" gradientUnits="userSpaceOnUse" id="color-1_HCYq7G4siTbb_gr1"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#000000"></stop></linearGradient><linearGradient x1="85.99463" y1="13.66594" x2="85.99463" y2="157.22413" gradientUnits="userSpaceOnUse" id="color-2_HCYq7G4siTbb_gr2"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#000000"></stop></linearGradient><linearGradient x1="69.875" y1="13.66594" x2="69.875" y2="157.22413" gradientUnits="userSpaceOnUse" id="color-3_HCYq7G4siTbb_gr3"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#000000"></stop></linearGradient><linearGradient x1="102.125" y1="13.66594" x2="102.125" y2="157.22413" gradientUnits="userSpaceOnUse" id="color-4_HCYq7G4siTbb_gr4"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#000000"></stop></linearGradient><linearGradient x1="118.25" y1="13.66594" x2="118.25" y2="157.22413" gradientUnits="userSpaceOnUse" id="color-5_HCYq7G4siTbb_gr5"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#000000"></stop></linearGradient><linearGradient x1="53.75" y1="13.66594" x2="53.75" y2="157.22413" gradientUnits="userSpaceOnUse" id="color-6_HCYq7G4siTbb_gr6"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#000000"></stop></linearGradient><linearGradient x1="113.02819" y1="51.74781" x2="113.02819" y2="107.00281" gradientUnits="userSpaceOnUse" id="color-7_HCYq7G4siTbb_gr7"><stop offset="0" stop-color="#ff9f70"></stop><stop offset="1" stop-color="#383838"></stop></linearGradient><linearGradient x1="58.97181" y1="51.74781" x2="58.97181" y2="107.00281" gradientUnits="userSpaceOnUse" id="color-8_HCYq7G4siTbb_gr8"><stop offset="0" stop-color="#ff9f70"></stop><stop offset="1" stop-color="#383838"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><rect x="31" y="51" transform="scale(2.6875,2.6875)" width="2" height="8" fill="url(#color-1_HCYq7G4siTbb_gr1)"></rect><path d="M152.11788,114.58694l-59.07394,-94.39037c-1.43244,-2.55312 -4.06619,-4.07156 -7.04394,-4.07156c-2.95625,0 -5.5685,1.49694 -7.00631,4.00706l-59.17606,94.56237c-1.51037,2.6875 -1.30344,5.891 0.53481,8.36888c1.92425,2.58806 5.0955,3.75175 8.29094,3.04762l56.73581,-12.6205c0.40581,-0.09406 0.83312,-0.09406 1.23625,0l56.73581,12.6205c0.61812,0.13706 1.23625,0.20425 1.84362,0.20156c2.53163,0 4.89931,-1.16369 6.44731,-3.24919c1.84362,-2.47787 2.04787,-5.68138 0.47569,-8.47637zM27.477,120.86225c-1.63131,0.37356 -2.56656,-0.67187 -2.80844,-1.00244c-0.27144,-0.3655 -0.83044,-1.34375 -0.22844,-2.42144l58.87238,-94.07594v85.07819zM147.33144,119.85981c-0.24456,0.32788 -1.17713,1.376 -2.80844,1.00244l-55.8355,-12.42162v-85.07819l58.81056,93.96844c0.66381,1.18519 0.10481,2.16344 -0.16662,2.52894z" fill="url(#color-2_HCYq7G4siTbb_gr2)"></path><rect x="25" y="49" transform="scale(2.6875,2.6875)" width="2" height="6" fill="url(#color-3_HCYq7G4siTbb_gr3)"></rect><rect x="37" y="49" transform="scale(2.6875,2.6875)" width="2" height="6" fill="url(#color-4_HCYq7G4siTbb_gr4)"></rect><rect x="43" y="47" transform="scale(2.6875,2.6875)" width="2" height="6" fill="url(#color-5_HCYq7G4siTbb_gr5)"></rect><rect x="19" y="47" transform="scale(2.6875,2.6875)" width="2" height="6" fill="url(#color-6_HCYq7G4siTbb_gr6)"></rect><path d="M94.0625,51.82844v48.47175c0,0.62888 0.43806,1.17444 1.05081,1.3115l35.24119,7.83944c1.16369,0.258 2.064,-1.01319 1.42975,-2.02369l-35.2385,-56.31119c-0.71756,-1.14487 -2.48325,-0.63694 -2.48325,0.71219z" fill="url(#color-7_HCYq7G4siTbb_gr7)"></path><path d="M75.45425,51.11625l-35.24119,56.31119c-0.63156,1.0105 0.26606,2.28438 1.42975,2.02369l35.24119,-7.83944c0.61544,-0.13437 1.0535,-0.67994 1.0535,-1.3115v-48.47175c0,-1.34912 -1.76569,-1.85706 -2.48325,-0.71219z" fill="url(#color-8_HCYq7G4siTbb_gr8)"></path></g></g></svg>
                        
                            </button>

                            </form>

                        </div>

                    </div>
                </div>
            </div>




        </div>
        <!-- END LIST GROUP -->


        <!--FOOTER-->
        <footer class="page-footer">
            <div class="container-fluid">
                <div id="footer-items" class="row">
                    <div id="footer-content" class="col-md-3 col-sm-12">
                        <h3>
                            <p>Content</p>
                        </h3>

                        <ul>
                            <a href="index.php">Menu</a>
                            <li><a href="#parallax">Home</a></li>
                            <li><a href="#block-nameMAC">Store</a></li>
                            <li><a href="#list-group">Info</a></li>
                        </ul>

                    </div>

                    <div id="footer-ntd" class="col-md-6 col-sm-12 text-center">
                        <!-- ntd - name time discription -->
                        <span class="footer-time">10:00</span>
                        <a href="index.php" id="footer-name">MKdir</a>
                        <span class="footer-time">22:00</span>
                        <p id="footer-disc">
                            Here you can buy all Apple accessories
                        </p>
                    </div>
                    <div id="footer-contact" class="col-md-3 col-sm-12 ">
                        <h3>
                            <p>Contact</p>
                        </h3>

                        <ul>
                            <li><a id="footer-phone" href="tel:+380637915664">063-791-56-64</a></li>
                            <li><a href="mailto:noirkotyara@gmail.com">noirkotyara@gmail.com</a></li>
                            <li><a id="footer-phone" href="tel:+380960810643">096-081-06-43</a></li>
                            <li><a href="mailto:vladkycherenko98@gmail.com">vladkycherenko98@gmail.com</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </footer>



        <!--END FOOTER-->



        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
        <script type="text/javascript" src="js/TweenMax.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/jquery.superscrollorama.js"></script>
        <script>
            $(document).ready(function() {
                var controller = $.superscrollorama();
                // individual element tween examples
                controller.addTween('.fade-it', TweenMax.from($('.fade-it'), 1, {
                    css: {
                        opacity: 0
                    }
                }));
                controller.addTween('#fade', TweenMax.from($('#fade'), 1, {
                    css: {
                        opacity: 0
                    }
                }));
                controller.addTween('#fade-i', TweenMax.from($('#fade-i'), 1, {
                    css: {
                        opacity: 0
                    }
                }));
                controller.addTween('#fly-it', TweenMax.from($('#fly-it'), 1, {
                    css: {
                        right: '1000px'
                    },
                    ease: Quad.easeInOut
                }));
                controller.addTween('#fly-i', TweenMax.from($('#fly-i'), 1, {
                    css: {
                        right: '1000px'
                    },
                    ease: Quad.easeInOut
                }));
                controller.addTween('#fly', TweenMax.from($('#fly'), 1, {
                    css: {
                        right: '1000px'
                    },
                    ease: Quad.easeInOut
                }));
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#main_list-2").on("click", "a", function(event) {
                    event.preventDefault();
                    $("#nav_button").trigger('click');
                    var id = $(this).attr('href'),
                        top = $(id).offset().top;

                    $('body,html').animate({
                        scrollTop: top - 50
                    }, 1500);


                });
                $("#footer-content").on("click", "a", function(event) {
                    event.preventDefault();
                    var id = $(this).attr('href'),
                        top = $(id).offset().top;
                    $('body,html').animate({
                        scrollTop: top - 50
                    }, 1500);

                });
            });
        </script>
        <script>
            window.onload = function() {
                lax.setup() // init

                const updateLax = () => {
                    lax.update(window.scrollY)
                    window.requestAnimationFrame(updateLax)
                }

                window.requestAnimationFrame(updateLax)
            }
        </script>
        <!-- <script type="text/javascript">
            document.ondragstart = noselect;
            // запрет на перетаскивание
            document.onselectstart = noselect;
            // запрет на выделение элементов страницы
            document.oncontextmenu = noselect;
            // запрет на выведение контекстного меню
            function noselect() {
                return false;
            }
        </script> -->


        <!-- jQuery (Bootstrap JS plugins depend on it) -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- <script src="js/jquery-1.11.3.min.js"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/navbar-mac.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lax.js"></script>
        <!-- NEW -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
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