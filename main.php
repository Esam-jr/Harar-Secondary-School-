<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harar Secondary School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<header>
        <div class="logo"><img src="./images/logo.png" height="55">HS2S</div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="" class="active">Home</a>
                </li>
                <li>
                    <a href="">Admissions</a>
                </li>
               
                <li>
                    <a href="#contact-us">Contact us</a>
                </li>
                <li>
                    <a href="">Caricullum</a>
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

    <!--section one-->
    <section class="sec1 " style="height: 620px;">
        <div class="bg-dark text-secondary px-4 py-5 text-center" style="height: 1000px;">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white d-block mt-5 mt-5">Welcome to Harar Secondary school</h1>
                <h1 class="display-5 fw-bold text-warning d-block">ADMISSIONS</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4 mt-4 text-white">New Academic Year 2024-2025</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button id="registerButton" type="button"  class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section two-->
    <section class="sec2">
        <div class="sec2-wrapper">
            <div class="content right-div">
                <h1>"Innovating Education, Transforming Lives"</h1>
                <p>Experience the Difference at Harar Senior Secondary <br> School</p>
            </div>

            <div class="content1 left-div">
                <img src="./images/congra.png" height="120">
                <h1>1000+</h1>
                <p>Students</p>
            </div>
        </div>
    </section>
    <!--Section 3-->
<section class="sec3">
    <div class="container">
        <div class="image-grid">
            <div class="image-group">
                <div class="image-div">
                    <img src="./images/img1.jpg" alt="Image 1">
                </div>
                <div class="image-div">
                    <img src="./images/img2.jpg" alt="Image 2">
                </div>
            </div>
            <div class="image-group">
                <div class="image-div">
                    <img src="./images/img3.jpg" alt="Image 3">
                </div>
                <div class="image-div">
                    <img src="./images/img4.jpg" alt="Image 4">
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- Section Three with Google Map -->
    <section class="sec4" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="map-container">
                        <div class="iframe-wrapper">
                            <iframe id="google-map" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-description">
                        <h2>Contact-us</h2><hr>
                        <ul>
                            <li><a href="https://www.facebook.com/p/Harar-senior-secondary-school-100082949781620/">facebook</a></li>
                            <li>
                                <p>Harar City</p>
                            </li>
                            <li>
                               <p> Tel:- 251913306976</p>
                            </li>
                            <li>
                               <p> E-mail:- hararsecondaryschool@mail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Developed by HU students</h3>
            </div>
            <div class="col-md-4">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="./logIn.php">Admins</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2024</p>
                </div>
              
            </div>
        </div>
    </div>
</footer>

    <script src="./javaScript/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // Add functionality to the register button
    $(document).ready(function(){
        $("#registerButton").click(function(){
            // Redirect to register.php
            window.location.href = "Register.php";
        });
    });
</script>
</body>
</html>
