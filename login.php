<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="styles/styles.css">
   <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Quicksand|Roboto+Condensed" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title> M3D | Ingreso </title>
</head>

<body>
   <div>
      <header class="largeHeaderContainer">
         <div class="logoContainer">
            <a href="index.html"><img class="logo" src="imgs/logoFirstDraft.png" alt="logo" width="115px"></a>
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
                  <li><a href="register.html">CREAR CUENTA</a></li>
                  <li><a href="login.html" class="mainMenuFavorite">INGRESO</a></li>
               </ul>
            </nav>
         </div>
      </header>
   </div>
   <main>
      <div class="loginContainer">
         <p>Complete sus datos de ingreso</p>
         <div class="loginForm">
            <form action="index.html" method="post">
               <input type="text" name="user" value="" placeholder="Nombre de usuario">
               <input type="password" name="pass" value="" placeholder="Contraseña">
               <div class="submitContainer">
                  <input type="submit" name="submit" value="Enviar">
               </div>
            </form>
         </div>
         <div class="redirectToRegister">
               <p>Aún no tengo cuenta, quiero crear una!</p>
            <div class="redirectToRegisterLink">
               <a href="register.html">Registrarme</a>
            </div>
         </div>
      </div>

   </main>
   <div class="footerContainer">
      <footer></footer>
   </div>
</body>

</html>
