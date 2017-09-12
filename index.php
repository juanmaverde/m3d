<?php
session_start();
?>

<!-- HTML code from here -->

<!DOCTYPE html>

<!-- @TODO -> pulir detalles responsive design -->
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="styles/styles.css">
   <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Quicksand|Roboto+Condensed" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title> M3D </title>
</head>

<body>
   <div>
      <header class="largeHeaderContainer">
         <div class="logoContainer">
            <a href="index.php"><img class="logo" src="imgs/logoFirstDraft.png" alt="logo" width="115px"></a>
         </div>
         <div class="secondaryMenuContainer">
            <nav>
               <ul class="secondaryMenu">
                  <li><a href="#">STATS</a></li>
                  <li><a href="#">USER STORIES</a></li>
                  <li><a href="contactForm.html">CONTACTO</a></li>
                  <li><a href="faqs.html">FAQ's</a></li>
               </ul>
            </nav>
         </div>
         <div class="mainMenuContainer">
            <nav>
               <ul class="mainMenu">
                  <li><a href="register.php">CREAR CUENTA</a></li>
                  <li><a href="login.php" class="mainMenuFavorite">INGRESO</a></li>
               </ul>
            </nav>
         </div>
      </header>
   </div>
   <main>
      <div class="mainScreenContainer">
         <div class="mottoContainer">
            <div class="motto">
               <h1>EL <span class="primMotto">M<span class="secondMotto">3</span>D</span>ICO QUE BUSCÁS, AHORA!</h1>
            </div>
            <div class="tercMotto">
               <h2>m3d.network</h2>
            </div>
         </div>
         <div class="searchFieldContainer">
            <input class="searchField" type="text" autocomplete="on" autofocus name="search" placeholder="ingrese sus síntomas, especialidad, condición o el apellido / nombre del profesional...">
         </div>
      </div>
      <div class="infogContainer">
         <div class="infog-1">
            <p class="infoP">Crowd-founded</p>
            <img src="imgs/user.png" width="100px" alt="user icon">
         </div>
         <div class="infog-2">
            <p class="infoP">TeleM3D</p>
            <img src="imgs/stethoscope.png" width="100px" alt="stethoscope icon">
         </div>
         <div class="infog-3">
            <p class="infoP">Crowd-sourced</p>
            <img src="imgs/schedule.png" width="100px" alt="schedule icon">
         </div>
         <div class="infog-4">
            <p class="infoP">Turnos en línea</p>
            <img src="imgs/appointment.png" width="100px" alt="appointment icon">
         </div>
         <div class="infoDescContainer">
            <div class="infoDesc">
               <p>Los datos que los usuarios generan dentro de nuestra plataforma mejoran y permiten su mejor adaptación a las necesidades de futuras consultas.</p>
            </div>
            <div class="infoDesc">
               <p>Existen diversas herramientas digitales de complejidad variable que permiten la interacción remota entre usuarios y profesionales.</p>
            </div>
            <div class="infoDesc">
               <p>La intensa y constante colaboración entre los integrantes de la red M3D genera redes que enriquecen globalmente sus ideales.</p>
            </div>
            <div class="infoDesc">
               <p>Puede tomar turnos con el profesional indicado, con la mayor celeridad y sin necesidad de ingresar ningún medio de pago.</p>
            </div>
         </div>

      </div>
   </main>
   <div class="footerContainer">
      <footer></footer>
   </div>
</body>

</html>
