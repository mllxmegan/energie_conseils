<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Gestionnaire de données clients GRDF</title>
</head>
<body>
<?php require 'inc/connexion_traitement.php'; ?>
<div class="big-container">
	<div class="container">
		<div class="inner-container">
			<h1 class="big_title">Données clients GRDF</h1>
		</div>
    <?php if(!empty($errors)): ?>
			<div class="alert">
				<p><b>Votre identifiant ou votre mot de passe est incorrect</b></p>
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
