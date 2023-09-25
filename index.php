
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>my portofolio!</title>
    <style>
      .jumbotron {
        padding-top: 6rem;
      }
      section {
        padding-top: 5rem;
      }
    </style>
  </head>
  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Ahmad Farhannudin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- jumborton -->
    <section class="jumbotron text-center">
      <img src="./img/farhan.jpg" alt="Ahmad farhannudin" width="170" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Ahmad Farhannudin!</h1>
      <p class="lead">Student SMK Wiraswasta cimahi</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L40,90.7C80,117,160,171,240,202.7C320,235,400,245,480,224C560,203,640,149,720,128C800,107,880,117,960,149.3C1040,181,1120,235,1200,224C1280,213,1360,139,1400,101.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir jumborton -->
    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam enim magni nam alias delectus distinctio culpa sit praesentium beatae veritatis.</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit modi praesentium veniam, inventore necessitatibus possimus excepturi velit tempore non omnis, minus nisi voluptatum ipsum blanditiis.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#e2edff"
        fill-opacity="1"
        d="M0,32L30,69.3C60,107,120,181,180,229.3C240,277,300,299,360,298.7C420,299,480,277,540,250.7C600,224,660,192,720,170.7C780,149,840,139,900,154.7C960,171,1020,213,1080,218.7C1140,224,1200,192,1260,154.7C1320,117,1380,75,1410,53.3L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
      ></path>
    </svg> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#e2edff"
        fill-opacity="1"
        d="M0,128L40,154.7C80,181,160,235,240,224C320,213,400,139,480,138.7C560,139,640,213,720,218.7C800,224,880,160,960,117.3C1040,75,1120,53,1200,53.3C1280,53,1360,75,1400,85.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>
    <!-- akhir about -->
    <!-- projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My projects</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/web1.png" class="card-img-top" alt="projects1" />
                <div class="card-body">
                  <p class="card-text">Membuat contoh website <br> responsive <br> <a href="./web1/index.php">klik disini</a></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/ecomerce.bmp" class="card-img-top" alt="projects2" />
                <div class="card-body">
                  <p class="card-text">Membuat website Product buah responsive <br><a href="./Ecomerce/index.php">klik disini</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/travel.bmp" class="card-img-top" alt="projects3" />
                <div class="card-body">
                  <p class="card-text">Membuat website travel responsive <br><a href="./travel/index.php">klik disini</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/login.bmp" class="card-img-top" alt="projects4" />
                <div class="card-body">
                  <p class="card-text">Membuat register /  login sederhana <br> <a href="./Login/index.php">klik disini</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/crud.bmp" class="card-img-top" alt="projects5" />
                <div class="card-body">
                  <p class="card-text">Membuat crud sederhana <br> <a href="./Crud/index.php">klik disini</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,224L30,202.7C60,181,120,139,180,149.3C240,160,300,224,360,245.3C420,267,480,245,540,218.7C600,192,660,160,720,165.3C780,171,840,213,900,218.7C960,224,1020,192,1080,192C1140,192,1200,224,1260,202.7C1320,181,1380,107,1410,69.3L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir projects -->
    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>contact me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Nama lengkap</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="msg"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="send">kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,64L30,90.7C60,117,120,171,180,165.3C240,160,300,96,360,90.7C420,85,480,139,540,165.3C600,192,660,192,720,165.3C780,139,840,85,900,101.3C960,117,1020,203,1080,197.3C1140,192,1200,96,1260,64C1320,32,1380,64,1410,80L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir contact -->
    <!-- footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <!-- Footer -->
    <footer class="bg-primary text-white text-center">
      <p>created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/siifarhann_/?igshid=MWZjMTM2ODFkZg%3D%3D" class="text-white fw-bold">ahmadbfarhannudin</a></p>
    </footer>
    <!-- Footer -->
    <!-- End of .container -->
    <!-- akhir footer -->
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
    $mail->Body    = "Sender name - $nama <br> Sender Email - $email <br> Sender message - $msg";


    $mail->send();
    echo "<script>
              alert('pesan telah dikirim');
          </script>";
} catch (Exception $e) {
    echo "<script>
              alert('pesan gagal dikirim');
          </script>";
}
}
