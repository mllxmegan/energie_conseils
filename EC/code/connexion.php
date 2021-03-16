<?php require "connexion-traitement.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeux de cartes</title>
  <script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="big-container">
  <div class="container">
    <div class="inner-container">
      <h1>Château de cartes</h1>
    </div>
    <?php if(!empty($errors)): ?>

    <?php endif; ?>
    </div>
<div class="container">


  <div class="login-form">
    <form action="" method="POST">
      <center><h2>Connexion</h2></center>
      <div class="form-group">
        <div class="icon">
          <i class="fas fa-user-tag"></i>
        </div>
        <div class="input">

        </div>
        <div>
          <input type="text" placeholder="Saisissez votre nom d'utilisateur" name="pseudo">
        </div>
      </div>
      <div class="form-group">
        <div class="icon">
          <i class="fas fa-lock"></i>
        </div>
        <div class="input">

        </div>
        <div>
          <input type="password" placeholder="Saisissez votre mot de passe" name="password" >
        </div>
      </div>
      <div class="form-footer">

        <div class="sub">
          <button type="submit" class="subscribe">Se connecter</button>
        </div>
      </div>

    </form>
  </div>
</div>
</div>

</body>
</html>
