<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>boostrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-warning">My</span>website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#home">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/home-1.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Your dream house</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores doloribus necessitatibus vel voluptate aut illo.</p>
            <p><a href="#" class="btn btn-warning mt-3">Learn more</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/home-2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>always dedicated</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores doloribus necessitatibus vel voluptate aut illo.</p>
            <p><a href="#" class="btn btn-warning mt-3">Learn more</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/home-3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>True construction</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores doloribus necessitatibus vel voluptate aut illo.</p>
            <p><a href="#" class="btn btn-warning mt-3">Learn more</a></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- about section -->
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="img/about.jpg" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>
                We provide best quality <br />
                services ever
              </h2>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, in quasi? Corrupti, iure voluptatum quis, eligendi ducimus illum perferendis possimus, dicta adipisci neque nobis architecto praesentium quidem magni modi eveniet
                numquam deleniti accusamus sed animi nemo quod enim fugit. Molestias dolorem velit saepe. Eveniet repudiandae sequi eum laborum minima illum suscipit.
              </p>
              <a href="#" class="btn btn-warning">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- services -->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>our services</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur <br />
                adipisicing elit. doloribus, nostrum?
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-subtract"></i>
                <h3 class="card-title">Best quality</h3>
                <p class="load">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel quidem nesciunt voluptates, eos culpa facere iure quisquam tempora est fuga itaque eveniet maxime nisi.</p>
                <button class="btn btn-warning text-dark">Read more</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-slack"></i>
                <h3 class="card-title">sustainability</h3>
                <p class="load">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel quidem nesciunt voluptates, eos culpa facere iure quisquam tempora est fuga itaque eveniet maxime nisi.</p>
                <button class="btn btn-warning text-dark">Read more</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-playstation"></i>
                <h3 class="card-title">integrity</h3>
                <p class="load">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel quidem nesciunt voluptates, eos culpa facere iure quisquam tempora est fuga itaque eveniet maxime nisi.</p>
                <button class="btn btn-warning text-dark">Read more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- portfolio section -->
    <section id="portfolio" class="portfolio section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>our project</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur <br />
                adipisicing elit. doloribus, nostrum?
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/project-1.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Building make</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat odio itaque pariatur molestias officiis est, ab in excepturi dolores velit!</p>
                <button class="btn bg-warning text-dark">Learn more</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/project-2.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Building make</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat odio itaque pariatur molestias officiis est, ab in excepturi dolores velit!</p>
                <button class="btn bg-warning text-dark">Learn more</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/project-3.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Building make</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat odio itaque pariatur molestias officiis est, ab in excepturi dolores velit!</p>
                <button class="btn bg-warning text-dark">Learn more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- team section -->
    <section id="team" class="team section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>our project</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur <br />
                adipisicing elit. doloribus, nostrum?
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-1.jpg" alt="" class="img-fluid rounded-circle" />
                <h3 class="card-title py-2">Jack wilson</h3>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, cupiditate?</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-2.jpg" alt="" class="img-fluid rounded-circle" />
                <h3 class="card-title py-2">Jack wilson</h3>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, cupiditate?</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-3.jpg" alt="" class="img-fluid rounded-circle" />
                <h3 class="card-title py-2">Jack wilson</h3>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, cupiditate?</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-4.jpg" alt="" class="img-fluid rounded-circle" />
                <h3 class="card-title py-2">Jack wilson</h3>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, cupiditate?</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section -->
    <section id="contact" class="contact section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>contact us</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur <br />
                adipisicing elit. doloribus, nostrum?
              </p>
            </div>
          </div>
        </div>
        <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 pb-4">
               <form action="" method="post" class="bg-light p-4.m-auto">
                <div class="row">
                  <div class="col-md-12">
                      <div class="mb-3">
                          <input type="text" class="form-control"name="name" id="" required placeholder="your name">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="mb-3">
                          <input type="email" class="form-control"name="email" id="" required placeholder="your email">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="mb-3">
                          <textarea name="msg" rows="3" required class="form-control" placeholder="your query"></textarea>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-warning btn-lg btn-block mt-3" name="send">send now</button>
              </div>
               </form>
            </div>
        </div>
      </div>
    </section>

    <!-- footer section -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <p class="text-white">All right Reserved @website name</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
    $mail->Body    = "Nama - $nama <br>   Email - $email <br>  message - $msg";


    $mail->send();
    echo "<script>
              alert('pesan telah dikirim');
          </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

