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
      <h1>Gestions des données clients</h1>
    </div>
    <?php if(!empty($errors)): ?>
      <div class="alert">
        <p><b>Il semblerait que l'identification ait échouée</b></p>
        <ul>
          <?php foreach ($errors as $error): ?>
              <li><i class="fas fa-times-circle favicon-error"></i><?= $error; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    </div>
    <div class="container">
            <div class="wrapper fadeInDown">
  <div id="formContent">
            <h2 class="connecter_title">Se connecter</h2>
    <!-- Login Form -->
    <form action="" method="post">
    <i class="fas fa-user"></i><input type="text" id="login" class="fadeIn second" name="pseudo" placeholder="Votre identifiant">
    <i class="fas fa-lock"></i> <input type="password" id="password" class="fadeIn third" name="password" placeholder="Votre mot de passe">
      <input type="submit" class="fadeIn fourth" value="Se connecter">
    </form>

  </div>
</div>
</div>
</div>
  
</body>
</html>