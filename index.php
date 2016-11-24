<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="Js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="styleIndex.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Skol-Chatt</title>
    <script>
    $(document).ready(function() {
    $("#loginText").click(function() {
    $("#SignUpDiv").hide();
    $("#LoginDiv").show();
    });
    $("#signText").click(function() {
    $("#LoginDiv").hide();
    $("#SignUpDiv").show();
    });
    });
    </script>
  </head>
  <body>
  <div class="alwaystop">
    <header>
      <h1>Välkommen till Skol-chatten</h1>
      <?php
      if(isset($_GET['error'])){
      ?>
      <tr>
        <td></td><td><span style="color:red" class="red">ERROR 404</span></td>
      </tr>
      <?php } ?>
      <?php
      if(isset($_GET['error2'])){
      ?>
      <tr>
        <td></td><td><span style="color:red" class="red">Användarnamnet är redan upptaget</span></td>
      </tr>
      <?php } ?>
      <?php
      if(isset($_GET['error3'])){
      ?>
      <tr>
        <td></td><td><span style="color:red" class="red">Email är redan upptagen</span></td>
      </tr>
      <?php } ?>
      <?php
      if(isset($_GET['error4'])){
      ?>
      <tr>
        <td></td><td><span style="color:red" class="red">Anvandärnamn och email upptagen</span></td>
      </tr>
      <?php } ?>
      <?php
      if(isset($_GET['success'])){
      ?>
      <tr>
        <td></td><td><span style="color:green" class="green">Ditt konto skapades</span></td>
      </tr>
      <?php } ?>
    </header>
  </div>
    <div id="LoginDiv">
      <h2>Logga in</h2>
      <form method="post" action="pages/UserLogin.php">
        <label for="email">Email</label>
        <br>
        <input type="email" name="UserMailLogin"/>
        <br>
        <label for="password">Lösenord</label>
        <br>
        <input type="password" name="UserPasswordLogin"/>
        <br>
        <input type="submit" value="Logga in"/>
      </form>
      <button id="signText" > Skapa konto </button>
    </div>
    <div id="SignUpDiv">
      <h2>Skapa konto</h2>
      <form method="post" action="pages/InsertUser.php">
        <label for="text">Användarnamn</label>
        <br>
        <input type="text" name="UserName"/>
        <br>
        <label for="userMail">Email</label>
        <br>
        <input type="email" name="UserMail"/>
        <br>
        <label for="UserPassword">Lösenord</label>
        <br>
        <input type="password" name="UserPassword"/>
        <br>
        <input type="submit" value="Skapa konto"/>
      </form>
      <button id="loginText"> Logga in </button>
    </div>
    <footer><p>| Oleg Tarkov | Zaven Hambardzumyan | Patryk Rybaczek | © 2016 |</p></footer>
  </body>
</html>