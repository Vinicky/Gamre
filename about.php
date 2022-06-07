<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>O nás</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>O nás</h3>
   <p> <a href="home.php">Domů</a> / O nás </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Proč nakupovat u nás?</h3>
         <p>Zboží vystavené přímo na prodejně. Okamžitá výměna zboží, nebo vrácení peněz v 14ti denní lhůtě po koupi. Zaručená kvalita zboží.</p>
         <p>Rádi pomůžeme s výběrem, a odpovíme na vaše otázky.</p>
         <a href="contact.php" class="btn">Kontaktuj nás</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Recenze zákazníků</h1>

   <div class="box-container">

      <div class="box">
         <p>V obchodě poradili se vším, co jsem potřeboval. Velice příjemný personál. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Patrik Netěšil</h3>
      </div>

      <div class="box">
         <p>Narazila jsem na závadový kus zboží, reklamace proběhla bez problémů.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Markéta Novotná</h3>
      </div>

      <div class="box">
         <p>Zboží připraveno k odběru v řádu hodin, jsem velice spokojen.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Jakub Nový<h3>
      </div>

      <div class="box">
         <p>S obchodem jsem velice spokojen. Těším se na další nákup.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Martik Kohoutek</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Partneři</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/google.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Google</h3>
      </div>

      <div class="box">
         <img src="images/microsoft.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Microsoft</h3>
      </div>

      <div class="box">
         <img src="images/asus.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Asus</h3>
      </div>

      <div class="box">
         <img src="images/lenovo.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Lenovo</h3>
      </div>

      <div class="box">
         <img src="images/acer.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Acer</h3>
      </div>

      <div class="box">
         <img src="images/realme.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Realme</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>