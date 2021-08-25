<!DOCTYPE html>
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script>
    <link rel="icon" href="/images/favicon.png">
  
    <title>UPES-CSI | CERTIFICATION</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/flipclock.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/dark.css">
  

</head>

<body class="dark">
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="https://www.upescsi.in">
            <img src="images/logo.png" style="height: 60px; width: 170px" alt="logo">
        </a>
        

        </div>
    </nav>
    <div class="site-header  d-flex flex-column align-items-center justify-content-between">
        <div class="hero">
            <h1 class="head-2">Maintaining the<span class="highlight"> environmental integrity</span> <br> is our duty.</h1>
            <p class="lead mt-3 mx-auto">And we at UPES-CSI have been instrumental in taking strides to achieve this. Our initiative of generating E-certificates as green alternative to paper certificates is one of the key steps.</p>
            <a href="download.php" class="button-1">
                <img class="download-1" src="images/button.png" alt="arrow" >
            </a>
        </div>        
        <br>
        
        <div class="container">
            <hr>
            <div class="section-title mini-title">
                <h3 class="head-2">Features</h3>

            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="feature-item">
                        <img src="images/tech-design.ico" alt="icon" class="featured-item-icon" style="height:150px">
                        <h4 class="featured-item-title">Captivating and Charismatic</h4>
                        <p>Certificates designed by the professionals of our Design team</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="feature-item">
                        <img src="images/tech-maintenence.ico" alt="icon" class="featured-item-icon" style="height:150px">
                        <h4 class="featured-item-title">24/7 Support</h4>
                        <p>Our team is only a call away to help resolve any problems you might encounter</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="feature-item">
                        <img src="images/tech-security.ico" alt="icon" class="featured-item-icon" style="height:150px">
                        <h4 class="featured-item-title">Secure Server</h4>
                        <p>Your certificates are for your eyes only. Our security wont let prying eyes hamper you important work.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="section section-highlight">
        <div class="container">
            <hr>
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-12 col-md-6">
                    <img src="images/a.png" alt="illustration" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h2 class="mb-4 head-2">Privacy-oriented Authentication</h2>
                    <p class="lead mb-4">

                        By encrypting your communications, digital certificates form a barrier between you and unwanted seekers looking to steal your data.
                    </p>
                    <p>


                        Thus, we help you save paper but never at the expense of privacy</p>
                   
                </div>
            </div>

        </div>

    </section>
    

    <section class="section">
        <div class="container">
            <hr>
            <div class="row align-items-center justify-content-between mt-5">

                <div class="col-12 col-md-6 text-center">

                    <h2 class="mb-4 head-2"> Be the change you want to see!</h2>
                    <p class="lead mb-4">


                        Each step, each progress we make is built upon the sweat of our hardworking team; but for it to triumph we need your, our clients', support. </p>
                    <p>
                        And support you have shown, so much so that we are extremely proud to call E-certificates on of our major accomplishments.
                    </p>
             
                </div>
                <div class="col-12 col-md-6 text-right">

                    <img src="images/b.png" alt="illustration" class="img-fluid">
                </div>
            </div>

        </div>

    </section>
    

    <section class="section section-highlight ">
        <div class="container"><hr>
            <div class="section-title max-title text-center">
                <h3 class="head-2">Total Certificates Generated
                </h3>
            </div>



            <div class="row text-center">

                <div class="col" >
               
                    <a class="btn btn-primary mt-3">	<h1><strong>
                        <?php
						  require_once 'config.php';
																$count= mysqli_fetch_array(mysqli_query($con, "SELECT SUM(TABLE_ROWS) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA IN (DATABASE())"));
																echo $count[0];
																 ?></strong></h1></a>
                </div>

            </div>



        </div>

    </section>

    

    <footer class="section section-separated py-lg">
        <div class="team-tag" style="font-weight: 600;">
            <h2 class="team-1">A supportive committee that always has your back!</h2>
        </div>
        <br><br>
        <div class="container">
      
               <!-- <div class="text-center mt-5">
                  
                    <p class="footer__info--text">	Navneet Goyal : +91-8375813132.</p>
                  
                </div>-->
                <div class= "footer-img">
                    <img src="images/tech-join.ico">
                </div>
                <div class="text-center mt-5" >
                    <strong><h2 class="link-text" >JOIN US HERE</h2></strong>
                    <a href="https://chat.whatsapp.com/L9ObQw51FFM1ehCZBkR8ZF"><img src="images/tech-whatsapp.ico"></a>
                </div>
         
            
        </div>
        <div class="Copyright-text">
                <p class="copyright__text" style="text-align: center;"><small>Copyright ©2021. <a href="https://www.upescsi.in/">UPES-CSI</a></small></p>
            </div>
    </footer>




    <script src="js/jquery-3.3.1.slim.min.js"></script>
    
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/plugins/flipclock.min.js"></script>
    <script src="js/plugins/chart.min.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>
