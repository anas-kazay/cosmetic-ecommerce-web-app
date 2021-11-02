<?php
session_start();
include_once'includes/function.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Authentification</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="css/styleSignIn.css">
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">SE CONNECTER</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">S'INSCRIRE</label>
    <!----------------------Login Form-------------------------------->

    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
        <div class="group">
          <label for="user" class="label">Email</label>
          <input id="user_email" name="user_email" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">MOT DE PASSE</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> rester connecter</label>
        </div>
        <div class="group">
        <button class="button" type="submit" name="login" >SE CONNECTER</button>
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot"> OUBLIER LE MOT DE PASSE?</a>
        </div>
      </form>
    <!----------------------Register Form-------------------------------->

      <form class="sign-up-htm" action="registration.php" method="POST">
        <div class="group">
          <label for="user" class="label">Nom ET PRÉNOM d'utilisateur</label>
          <input id="user_name" name="user_name" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Email</label>
          <input id="user_email" name="user_email" type="email" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Numero de téléphone</label>
          <input id="user_contact" name="user_contact" type="tel" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">MOT DE PASSE</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirmer MOT DE PASSE</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <button class="button" type="submit" name="register" >S'INSCRIRE</button>
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href='#' ><label for="tab-1" style='cursor:pointer;'>DEJA UN MEMBER?</label></a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>