
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Hello, world!</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;600;700;800&family=Inter:wght@300;400;500;600;700;800;900&family=Lobster&family=Montserrat&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Righteous&family=Rubik&display=swap"
      rel="stylesheet"
    />
  </head>
  <body id="home">
    <nav class="navbar navbar-expand-lg pb-3 fixed-top " style="background-color: rgb(39, 131, 47);">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="./img/logoo.png" class="img-fluid" alt=""
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="px-2 search"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn1" type="submit">Search</button>
            <span><i class="bi bi-bag-check" style="margin-left: 20px;"></i></span>
          </form>
        </div>
      </div>
    </nav>
    <!-- main -->

    <section class="main py-5">
      <div class="container py-5">
        <div class="row py-5">
          <div class="col-lg-6 py-5">
            <p class="m-0">Organic products</p>
            <h1>fresh organic</h1>
            <div class="line my-4"></div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
              consequuntur minima deserunt fugit quos nemo perferendis
            </p>

            <button class="mbtn1 mt-4" ><a href="#about">Read more</a></button>
            <button class="mbtn2"><a href="#product">Shop</a></button>
          </div>
        </div>
      </div>
    </section>

    <!-- about -->
    <section class="about py-5" id="about">
      <div class="container py-5">
        <div class="row py-5">
          <div class="col-lg-5 py-5 offset-lg-7 col-md-6 col-sm-12 col-12">
            <p class="m-0">Organic products</p>
            <h1>About our organic</h1>
            <div class="line"></div>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Laudantium velit quasi maxime doloremque deserunt? Exercitationem
              labore voluptatum autem modi a voluptatibus. Quod quos magnam
              culpa eos asperiores at doloribus animi!
            </p>
            <button class="mbtn1 mt-4"><a href="#services">Read more</a></button>
          </div>
        </div>
      </div>
    </section>

    <!-- welcome -->
    <section class="welcome text-center pb-5" id="services">
      <div class="container py-5">
        <div class="row py-5 text-white">
          <div class="col-lg-6 m-auto">
            <p class="m-0">Green agriculture</p>
            <h1>Welcome to organic</h1>
            <div class="line2 my-4"></div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
              reiciendis voluptates officia, facilis doloribus adipisci sed ea
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card py-3">
              <div class="card-body">
                <span><i class="bi bi-shop-window"></i></span>
                <h2>Always Fresh</h2>
                <p>Lorem ipsum dolor sit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card py-3">
              <div class="card-body">
                <span><i class="bi bi-flower2"></i></span>
                <h2>Healthy Food</h2>
                <p>Lorem ipsum dolor sit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card py-3">
              <div class="card-body">
                <span><i class="bi bi-gift"></i></span>
                <h2>100% Organic</h2>
                <p>Lorem ipsum dolor sit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- product -->
    <section class="product bg-light" id="product">
      <div class="container">
        <div class="row py-5 text-center">
          <div class="col-lg-6 m-auto">
            <p class="m-0">Green agriculture</p>
            <h1>Our Best Product</h1>
            <div class="line my-4"></div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
              reiciendis voluptates officia, facilis doloribus adipisci sed ea
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card p-2">
              <div class="card-body">
                <div class="star">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                </div>
                <img src="img/orange.jpg" class="img-fluid pb-3" alt="" />
                <h4 class="head1">Orange</h4>
                <p class="perl">400gram</p>
                <h4 class="head1">20.000</h4>
                <button class="btnc my-4">ADD TO CART</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card p-2">
              <div class="card-body">
                <div class="star">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                </div>
                <img src="img/Pom.jpg" class="img-fluid pb-3" alt="" />
                <h4 class="head1">Plum</h4>
                <p class="perl">400gram</p>
                <h4 class="head1">20.000</h4>
                <button class="btnc my-4">ADD TO CART</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card p-2">
              <div class="card-body">
                <div class="star">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <span><i class="bi bi-star"></i></span>
                </div>
                <img src="img/papaya.jpg" class="img-fluid pb-3" alt="" />
                <h4 class="head1">papaya</h4>
                <p class="perl">400 gram</p>
                <h4 class="head1">20.000</h4>
                <button class="btnc my-4">ADD TO CART</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row py-3">
          <div class="col-lg-4">
            <div class="card p-2">
              <div class="card-body">
                <div class="star">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <span><i class="bi bi-star"></i></span>
                </div>
                <img src="img/strawnb.jpg" class="img-fluid pb-3" alt="" />
                <h4 class="head1">strawbery</h4>
                <p class="perl">400 gram</p>
                <h4 class="head1">20.000</h4>
                <button class="btnc my-4">ADD TO CART</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card p-2">
              <div class="card-body">
                <div class="star">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                </div>
                <img src="img/manngo.jpg" class="img-fluid pb-3" alt="" />
                <h4 class="head1">Manggo</h4>
                <p class="perl">400 gram</p>
                <h4 class="head1">20.000</h4>
                <button class="btnc my-4">ADD TO CART</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card p-2">
              <div class="card-body">
                <div class="star">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                </div>
                <img src="img/melon.jpg" class="img-fluid pb-3" alt="" />
                <h4 class="head1">Melon</h4>
                <p class="perl">400 gram</p>
                <h4 class="head1">20.000</h4>
                <button class="btnc my-4">ADD TO CART</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center py-5">
          <div class="col-lg-6 m-auto">
            <button class="mbtn1"><a href="#store">Read more</a></button>
          </div>
        </div>
      </div>
    </section>


    <!-- discount -->
    <section class="diskon py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-10 m-auto text-center">
            <h1 class="head1">
              <span
                ><i class="bi bi-cash-coin"></i> Discount Coupon For 40% :</span
              >
              BISMILLAH123
            </h1>
          </div>
          <div class="col-lg-2 m-auto">
            <button class="dbtn">More Offer</button>
          </div>
        </div>
      </div>
    </section>

    <!-- store -->
    <section class="store py-4 bg-light text-center">
      <div class="container py-4"  id="store">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <p class="m-0">Green agriculture</p>
            <h1>Our Best Product</h1>
            <div class="line my-4"></div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
              reiciendis voluptates officia, facilis doloribus adipisci sed ea
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mt-2">
            <div class="card py-3">
              <div class="card-body">
                <span><i class="bi bi-truck"></i></span>
                <h5 class="head1 py-3">Free shiping</h5>
                <p class="pearl">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div class="card py-3">
              <div class="card-body">
                <span><i class="bi bi-cart2"></i></span>
                <h5 class="head1 py-3">Free shiping</h5>
                <p class="pearl">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div class="card py-3">
              <div class="card-body">
                <span><i class="bi bi-bicycle"></i></span>
                <h5 class="head1 py-3">Free shiping</h5>
                <p class="pearl">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div class="card py-3">
              <div class="card-body">
                <span><i class="bi bi-bank"></i></span>
                <h5 class="head1 py-3">Free shiping</h5>
                <p class="pearl">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- seller -->
    <section class="seller bg-light py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="py-5">New Arrivals</h1>
          </div>
        </div>
        <div class="row g-2">
          <div class="col-lg-6">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <img src="img/lemon.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-6 p-5">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <h5 class="head1">Fresh Lemon</h5>
                  <p class="pearl">200 gram</p>
                  <h5 class="head1">15.000</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <img src="img/garlic.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-6 p-5">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <h5 class="head1">Fresh Garlic</h5>
                  <p class="pearl">200 gram</p>
                  <h5 class="head1">15.000</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-2 py-2">
          <div class="col-lg-6">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <img src="img/chilli.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-6 p-5">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <h5 class="head1">Fresh Chili</h5>
                  <p class="pearl">200 gram</p>
                  <h5 class="head1">15.000</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <img src="img/raw-onions.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-6 p-5">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <h5 class="head1">Fresh Onions</h5>
                  <p class="pearl">200 gram</p>
                  <h5 class="head1">15.000</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-2">
          <div class="col-lg-6">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <img src="img/mint.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-6 p-5">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <h5 class="head1">Fresh Mint</h5>
                  <p class="pearl">200 gram</p>
                  <h5 class="head1">15.000</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <img src="img/gApple.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-6 p-5">
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star-fill"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <span><i class="bi bi-star"></i></span>
                  <h5 class="head1">Fresh Apple</h5>
                  <p class="pearl">200 gram</p>
                  <h5 class="head1">15.000</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section class="contact py-5" id="contact">
      <div class="container py-3">
        <div class="row">
          <div class="col-lg-7">
            <p class="m-0">Green agriculture</p>
            <h1>Welcome to organic</h1>
            <div class="line2 my-4"></div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
              reiciendis voluptates officia, facilis doloribus adipisci sed ea
            </p>
            <div class="row py-3">
              <div class="col-lg-6">
                <div class="row pt-2">
                  <div class="col-lg-3 col-sm-3 col-3">
                    <div class="circle">
                      <span> <i class="bi bi-house-fill"></i></span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-8 col-8 pt-2"><p>Cigugur tengah Rt04/08,Gg daya bakti No64</p></div>
                </div>
                <div class="row pt-2">
                  <div class="col-lg-3 col-sm-3 col-3">
                    <div class="circle">
                      <span> <i class="bi bi-pencil"></i></span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-8 col-8 pt-2"><p>ahfan969@gmail.com</p></div>
                </div>
                <div class="row pt-2">
                  <div class="col-lg-3 col-sm-3 col-3">
                    <div class="circle">
                      <span> <i class="bi bi-telephone-fill"></i></span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-8 col-8 pt-2"><p>08979299872</p></div>
                </div>
                <div class="row pt-2">
                  <div class="col-lg-3 col-sm-3 col-3">
                    <div class="circle">
                      <span> <i class="bi bi-envelope"></i></span>
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-8 col-8 pt-2"><p>Kirim pesan ke email atau no telepon diatas</p></div>
                </div>
              </div>
              <form class="col-lg-6" method="post">
                <input type="text" name="name" id="" placeholder="nama..">
                <input type="email" name="email" id="" placeholder="email..">
                <input type="text" name="" id="" placeholder="Phone..">
                <textarea name="msg" id="" placeholder="Message..."></textarea>
                <button type="submit" name="send" class="cbtn">Send now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <section class="footer py-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 pt-3">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-lg-3">
            <div class="s1">
              <span> <i class="bi bi-youtube"></i></span>
            </div>
            <div class="s1">
              <span> <i class="bi bi-instagram"></i></a></span>
            </div>
            <div class="s1">
              <span> <i class="bi bi-facebook"></i></span>
            </div>
            <div class="s1">
              <span> <i class="bi bi-linkedin"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
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
