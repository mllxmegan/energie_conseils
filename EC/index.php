<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ENERGIE CONSEIL</title>
	<script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<?php require 'code/connexion-traitement.php'; ?>

<div class="big-container">
	<div class="container">
		<div class="inner-container">

		<?php if(!empty($errors)): ?>

				<p><b>Votre identifiant/mot de passe est incorrect</b></p>
				<ul>
					<?php foreach ($errors as $error): ?>
							<li><i class="fas fa-times-circle favicon-error"></i><?= $error; ?></li>
					<?php endforeach; ?>
				</ul>

		<?php endif; ?>



		<form action="" method="POST">
			<center><h2>SE CONNECTER</h2></center>
			<div class="form-group">
				<div class="icon">
					<i class="fas fa-user-tag"></i>
				</div>
				<div class="input">
					<label for="pseudo">Pseudo <span class="required">*</span></label>
				</div>
				<div>
					<input type="text" placeholder="Saisissez votre nom d'utilisateur" name="pseudo" required>
				</div>
			</div>
			<div class="form-group">
				<div class="icon">
					<i class="fas fa-lock"></i>
				</div>
				<div class="input">
					<label for="password">Mot de passe <span class="required">*</span></label>
				</div>
				<div>
					<input type="password" placeholder="Saisissez votre mot de passe" name="password" required>
				</div>
			</div>
			<div class="form-footer">

				<div>
					<button type="submit" class="subscribe">Se connecter</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

</body>
</html>
