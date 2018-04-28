<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->

        <link rel="stylesheet" type="text/css" href="./css/animate.css">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        
        <div class="container-fluid main-container">
            <div class="col-md-5 col-sm-12 main-container__half main-container__half--first">
                <div class="row logo-container center">
                       <img src="./img/Mentiq loqo PNG.png" alt="logo" class="img img-responsive animated slideInDown">
                </div>
               <?php include_once $_GET['page'].'.php'; ?>
                <div class="row nova">
                    <div class="col-md-8 col-md-offset-3">
                        <img src="./img/NOVA_digital_solutions_logo.png" alt="Nova logo" class="img">
                        şirkəti tərəfindən hazırlanıb
                    </div>
                </div>   
                
            </div> <!--/col-md-6-->
            <?php include_once 'secondpart.php' ?>
        </div>
        
<!--        <div class="g-recaptcha" data-sitekey="6LdCt1UUAAAAALbDhqT7E4x6vxioLfmFP0vY6qm3"></div>-->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>

        <script src="./js/vendor/jquery.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

        <script src="./js/vendor/bootstrap.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<!--        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>-->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();  
            $(".id__box").keyup(function () {
                if (this.value.length == this.maxLength) {
                  var $next = $(this).next('.id__box');
                  if ($next.length)
                      $(this).next('.id__box').focus();
                  else
                      $(this).blur();
                }
            });
            $(".accepted__send-email").click(function (e) {
                e.preventDefault();
                $(".send-email__replay-button").addClass('infinite-rotate')
            })
            $("button").click(function (e) {
                e.preventDefault();
                $(this).addClass('animated zoomOutRight')
                // $(this).addClass('animated zoomInRight')
            })
            $(".go-back").click(function (e) {
                e.preventDefault();
                $(this).addClass('animated slideOutLeft')
                // $(this).addClass('animated zoomInRight')
            })
        });
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>
