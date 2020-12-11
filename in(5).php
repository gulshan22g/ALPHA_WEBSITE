<?php
include("conf.php");
include("includes/classes/User.php");
include_once("includes/classes/Constant.php");

$user = new User($conn);

if(isset($_POST["contactbtn"])){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["contact"];
    $message = $_POST["message"];
    
    $user->validate_name($fullname);
    $user->validate_email($email);
    $user->validate_phone($phone);
    $user->validate_message($message);

}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>alpha it systems</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="margin: 0px;height: auto;">
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height:80px;background-color:#37434d;color:#ffffff;">
            <div class="container-fluid"><a class="navbar-brand" href="#">&nbsp;Alpha IT Systems</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active" style="color:#ffffff;" href="index.html">&nbsp;Home</a></li>
                        <li class="nav-item"><a class="nav-link " style="color:#ffffff;" href="index.html">&nbsp;Services</a></li>
                        <li class="nav-item"><a class="nav-link " style="color:#ffffff;" href="index.html">&nbsp;Products</a></li>
                        <li class="nav-item"><a class="nav-link " style="color:#ffffff;" href="index.html">&nbsp;About</a></li>
                        <li class="nav-item"><a class="nav-link " style="color:#ffffff;" href="index.html">&nbsp;Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section id="carousel">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-nature carousel-hero">
                        <h1 class="hero-title" style="margin-top: 100px;">Give your web applications the cybersecurity edge<br></h1>
                        <p class="hero-subtitle"></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="sass.html">Learn more...</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated hero-photography carousel-hero">
                        <h1 class="hero-title" style="margin-top: 100px;">Hardware &amp; Software Security Solutions</h1>
                        <p class="hero-subtitle"></p>
                        <p style="margin-top: -36px;"><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more...</a></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated hero-technology carousel-hero">
                        <h1 class="hero-title" style="margin-top: 100px;">Safety Matters</h1>
                        <p class="hero-subtitle"></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="saas.html">Learn more...</a></p>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol
                class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                </ol>
        </div>
    </section>
    <div>
        <div class="container" style="margin-top: 60px;margin-bottom: 60px;">
            <div class="row" style="border-style: none;">
                <div class="col-md-4" style="text-align: center;"><img style="text-align: right;margin: 0px auto;width: 50%;height: 170px;" src="assets/img/logo.png">
                    <p style="text-align: center;">rhyh</p>
                </div>
                <div class="col-md-4" style="text-align: center;"><img style="text-align: right;margin: 0px auto;width: 50%;height: 170px;" src="assets/img/logo.png">
                    <p style="text-align: center;">Paragraph</p>
                </div>
                <div class="col-md-4" style="text-align: center;"><img style="text-align: right;margin: 0px auto;width: 50%;height: 170px;" src="assets/img/logo.png">
                    <p style="text-align: center;">Paragraph</p>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="text-align: center;box-shadow: 0px 0px;">
                    <div class="card">
                        <div class="card-body" style="box-shadow: 0px 0px;"><img src="assets/img/logo.png" style="width: 100%;height: 200px;">
                            <h4 class="card-title">Title</h4>
                            <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link"
                                href="#">Link</a></div>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <div class="card">
                        <div class="card-body" style="box-shadow: 0px 0px;"><img src="assets/img/logo.png" style="width: 100%;height: 200px;">
                            <h4 class="card-title">Title</h4>
                            <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link"
                                href="#">Link</a></div>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: center;box-shadow: 0px 0px;">
                    <div class="card">
                        <div class="card-body" style="box-shadow: 0px 0px;"><img src="assets/img/logo.png" style="width: 100%;height: 200px;">
                            <h4 class="card-title">Title</h4>
                            <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link"
                                href="#">Link</a></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 25px;">
                <div class="col-md-4" style="text-align: center;">
                    <div class="card">
                        <div class="card-body" style="box-shadow: 0px 0px;"><img src="assets/img/logo.png" style="width: 100%;height: 200px;">
                            <h4 class="card-title">Title</h4>
                            <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link"
                                href="#">Link</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="text-align: center;box-shadow: 0px 0px;"><img src="assets/img/logo.png" style="width: 100%;height: 200px;">
                            <h4 class="card-title">Title</h4>
                            <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link"
                                href="#">Link</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="text-align: center;box-shadow: 0px 0px;"><img src="assets/img/logo.png" style="width: 100%;height: 200px;">
                            <h4 class="card-title">Title</h4>
                            <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Link</a><a class="card-link"
                                href="#">Link</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="getintouch" style="margin-bottom: 9px;margin-top: 20px;">
        <div class="container modern-form">
            <div class="text-center">
                <h4 style="color: #212529;font-size: 45px;">Get in touch</h4>
            </div>
            <hr class="modern-form__hr">
            <div class="modern-form__form-container">
                <form method="post">
                    <div class="form-row">
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-r">
                                
                                <input id="fullname" class="form-control input input-tr" type="text" name="fullname" placeholder="Enter Your Name" name="name" minlength="5" maxlength="20">
                                <?php echo $user->is_error(Constant::$emptyName); ?>
                                <?php echo $user->is_error(Constant::$namelength); ?>
                                <span id="fullnameerror" class="text-danger"></span>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-l">
                           
                                <input id="email" class="form-control input input-tr" type="text" name="email" placeholder="Email">
                                <?php echo $user->is_error(Constant::$emptyemail); ?>
                                <?php echo $user->is_error(Constant::$invalidemail); ?>
                                <?php echo $user->is_error(Constant::$emaillength);?>
                                <span id="emailerror" class="text-danger"></span>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-l">
                                <input id="contact" class="form-control input input-tr" type="tel" name="contact" placeholder="012-345-6789">
                            <?php echo $user->is_error(Constant::$emptyphone); ?>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group modern-form__form-group--padding-t">
                                <textarea id="message" class="form-control input modern-form__form-control--textarea" name="message" placeholder="Message"></textarea>
                                <?php echo $user->is_error(Constant::$emptymessage); ?>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col text-center"><button id="submitbtn" class="btn btn-danger submit-now" name="contactbtn" type="submit">Send</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Alpha IT Systems © </p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    var error_array = [];
    $('#submitbtn').attr("disabled", true);
    var fullname = $('#fullname');
    // var email = $('#email').val();
    // var contact = $('#contact').val();
    // var message = $('#message').val();
    $('#fullname').on("keyup", function(){
        if($('#fullname').val().length >= 1){
            $('#fullnameerror').html("Character count <b>" + fullname.val().length+ "</b>");
        }else{
            $('#fullnameerror').html("");
        }
        
        if(fullname.val().length < 5){
            $('#fullnameerror').attr("class","text-danger");
        }else if(fullname.val().length >= 20){
            $('#fullnameerror').attr("class","text-danger");

        }else{
            $('#fullnameerror').attr("class","text-primary");
        }
    });
    // $('#email').on("blur",function(){
    //     if(email.val().length < 10){
    //         console.log("Email length must be within the range of 10 to 50 characters");
    //         $('#email').attr("class","text-danger");
    //     }else if(email.val().length >= 50){
    //         $('#email').attr("class","text-danger");
    //         $('$email').attr("disabled", true);
    //     }else{

    //     }

    //     }
    // })
});



</script>




</body>

</html>