<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website Design</title>
    

    <!-- Style Css Link -->
    <link rel="stylesheet" href="style.css">
    <!-- Style Css Link -->

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Font Awesome Cdn -->

    <!-- Google Font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
   
</head>
<body id="home">

    <!-- Header Start -->

    <div class="header">
        <nav class="fixed-top">

            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>

            <div class="content">

                <div class="logo">
                    <div class="logo"><a href="index.php"><img src="./images/home.png" alt=""></a></div>
                </div>
                <ul class="links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#packages">Packages</a></li>
                    <li><a href="#book">Book</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Search" required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>


        </nav>
    </div>
    
    <!-- Header End -->

    <!-- Home Section Start -->
    <section class="home" id="home">
        <div class="main-text">
            <h3>Travel The World
                <br> & Explore The New Destination
            </h3>
        
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro molestias nemo, harum debitis error itaque?</p>
        <a href="#packages"><button id="home-btn">PACKAGES <i class="fa-solid fa-arrow-down"></i><button id="home-btn2"><i class="fa-sharp fa-solid fa-circle-play"></i></button></button></a>
    </div>
    </section>
    <!-- Home Section End -->


    <!-- Services Section Start -->
    <section class="services" id="services">
        <div class="heading">
            <h3>Services</h3>
        </div>
            <div class="card-content">

                <div class="row">
                    <i class="fas fa-globe-asia"></i>
                    <div class="card-body">
                        <h3>Around The World</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>
                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-plane"></i>
                    <div class="card-body">
                        <h3>Fastet Travel</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>

                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-hotel"></i>
                    <div class="card-body">
                        <h3>Affordable Hotels</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>

                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-bullhorn"></i>
                    <div class="card-body">
                        <h3>Safty Guide</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>

                    </div>
                </div>

            </div>

       
    </section>
    <!-- Services Section End -->



    <!-- About Section Start -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="./images/about-img.png" alt="">
        </div>
        <div class="about-info">
            <h6>About us</h6>
            <h3>How Work This Travel Agency</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione odio vitae tempora nesciunt quibusdam? Delectus voluptatibus neque quod, id cumque blanditiis, suscipit temporibus ipsam aspernatur sunt voluptatem repellat corrupti amet at velit, minus reprehenderit voluptate nobis asperiores maxime deleniti quibusdam. Numquam sequi iusto consequatur obcaecati, incidunt quia accusantium perspiciatis expedita.</p>

            <button class="about-btn">Read More...</button>
        </div>
    </section>
    <!-- About Section End -->




    <!-- Gallary Section Start -->
    <section class="gallary" id="gallary">
        <div class="heading">
            <h3>OUR GALLARY <i class="fa-solid fa-arrow-down"></i></h3>
        </div>

        <div class="gallary-card">
            <div class="row">
                <img src="./images/p1.jpg" alt="">
            </div>
            <div class="row">
                <img src="./images/p2.png" alt="">
            </div>
            <div class="row">
                <img src="./images/p3.png" alt="">
            </div>
            <div class="row">
                <img src="./images/p4.png" alt="">
            </div>
            <div class="row">
                <img src="./images/p5.png" alt="">
            </div>
           

        </div>
    </section>
    <!-- Gallary Section End -->





    <!-- Packages Section Start -->
    <section class="packages" id="packages">
        <div class="main-txt">
            <h3>Packages</h3>
        </div>

        <div class="card-content">
            <div class="row">
                <img src="./images/united state.png" alt="">
                <div class="card-body">
                    <h3>United States</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/jordan.png" alt="">
                <div class="card-body">
                    <h3>Jordan</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/china.png" alt="">
                <div class="card-body">
                    <h3>China</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Mexico.png" alt="">
                <div class="card-body">
                    <h3>Mexico</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/france.png" alt="">
                <div class="card-body">
                    <h3>France</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Greece.png" alt="">
                <div class="card-body">
                    <h3>Greece</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Spain.png" alt="">
                <div class="card-body">
                    <h3>Spain</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Turkey.png" alt="">
                <div class="card-body">
                    <h3>Turkey</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

    </section>
    <!-- Packages Section End -->





    <!-- Book Section Start -->
    <section class="book" id="book">
        <div class="book-img">
            <img src="./images/book-img.png" alt="">
        </div>
        <div class="book-form">
            <h5>BOOK YOUR DESTINATION</h5>
            <form action="#">
                <input type="text" placeholder="Where To" required>
                <input type="text" placeholder="How Many" required>
                <input type="date" placeholder="Arrivals" required>
                <input type="date" placeholder="Leaving" required>
                <textarea name="" id="" cols="5" rows="5" placeholder="Enter Your Name & Details"></textarea>
                <input type="submit" value="Book Now" class="submit" required>
            </form>
        </div>
    </section>
    <!-- Book Section End -->




    <!-- Section Reviews Start -->
    <section class="reviews" id="reviews">
        <div class="main-txt">
            <h3>What Custommers Say</h3>
        </div>
        <div class="card-content">
            <div class="row">
                <h5><img src="./images/pic-1.png" alt="">Elon Musk</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam a earum commodi exercitationem explicabo amet repudiandae nemo nesciunt beatae omnis.</p>

            </div>
            <div class="row">
                <h5><img src="./images/pic-2.png" alt="">Elon Musk</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam a earum commodi exercitationem explicabo amet repudiandae nemo nesciunt beatae omnis.</p>

            </div>
            <div class="row">
                <h5><img src="./images/pic-3.png" alt="">Elon Musk</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam a earum commodi exercitationem explicabo amet repudiandae nemo nesciunt beatae omnis.</p>

            </div>
        </div>
    </section>
    <!-- Section Reviews End -->




    <!-- Contact Section Start -->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Get In <span>Touch</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe eius possimus nostrum in assumenda aliquam?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, accusantium.</p>
            <div class="list">
                <li><a href="#">+9200000000000000</a></li>
                <li><a href="#">example@gmail.com</a></li>
                <li><a href="#">Pakistan Sindh Karachi</a></li>
            </div>
        </div>

        <div class="contact-form">
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="number" name="phone" placeholder="Phone" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="msg" id="" cols="35" rows="10" placeholder="Message" required></textarea>
                <input type="submit" value="Send" class="submit" name="send" required>
            </form>
        </div>

    </section>
    <!-- Contact Section End -->





    <footer id="footer">
        <div class="footer-content">
            <div class="row" id="row1">
                <a href="#" id="footer-logo">Travel Agency</a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis ratione voluptatem asperiores minima quidem quibusdam tenetur eligendi eaque incidunt. Laudantium?</p>
                <div class="socail-links">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                </div>
            </div>
            <div class="row" id="row2">
                <h3>UseFull Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#packages">Packages</a></li>
                    <li><a href="#book">Book</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#contact">Contact us</a></li>
                </ul>
            </div>
            <div class="row" id="row3">
                <h3>Other Links</h3>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">App Design</a></li>
                    <li><a href="#">Game Design</a></li>
                    <li><a href="#">Term & Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="row" id="row4">
                <h3>Download App</h3>
                <img src="./images/app.png" alt="">
            </div>
        </div>
    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
<?php
  //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){
  $nama = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];


//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ahfan969@gmail.com';                     //SMTP username
    $mail->Password   = 'kgianluwwyylrxkx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ahfan969@gmail.com', 'Contact form');
    $mail->addAddress('ahfan969@gmail.com', 'ahmad');     //Add a recipient
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = " name - $nama <br>  phone - $phone <br>  Email - $email <br>  message - $msg";


    $mail->send();
    echo "<script>
              alert('pesan telah dikirim');
          </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}