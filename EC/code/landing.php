<?php
	session_start();
	if(!isset($_SESSION['auth'])){
		header('Location: ../index.php');
		exit();
	}
?>

<?php require "landing-traitement.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Espace membre</title>
</head>
<body class="land">

<div class="inner-container landing-inner-container">
	<h1>Donnees clients GRDF</h1>
	<?php if(!empty($errors) && ($update == false) && ($delete = false)): ?>

	<?php endif; ?>
</div>
<div class="already-subscribed">
	<center><a href="deconnexion.php"><button>Déconnexion</button></a></center>
</div>
<div class="searchdiv">
	<center><label for="site-search">Identifiant PCE:</label>
<input class="cher" type="search" id="site-search" name="q"
       aria-label="Search through site content"></br>

<button class="cherche">Chercher</button></center>
</div>


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <div class="row-categorieaccordeon">
          <h4 class="panel-title">
          Notre Histoire
          </h4>
    </div>
  </a>
  </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body texteaccordeon">
				<table>
    <thead>
        <tr>
            <th colspan="2">The table header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>The table body</td>
            <td>with two columns</td>
        </tr>
    </tbody>
</table>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <div class="row-categorieaccordeon">

          <h4 class="panel-title">
          Notre savoir-faire
          </h4>
              </div>
            </a>
  </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body texteaccordeon">
				<table>
    <thead>
        <tr>
            <th colspan="2">The table header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>The table body</td>
            <td>with two columns</td>
        </tr>
    </tbody>
</table>

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <div class="row-categorieaccordeon">
        <h4 class="panel-title">
          Notre Charte qualité
        </h4>
    </div>
  </a>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body texteaccordeon">
				<table>
    <thead>
        <tr>
            <th colspan="2">The table header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>The table body</td>
            <td>with two columns</td>
        </tr>
    </tbody>
</table>

      </div>
    </div>
  </div>
</div>
</div>


<div class="container-table little-screen">

</div>

<!--formulaire-->







<!--création de profil-->
<?php if(isset($_SESSION['message'])): ?>
	<?php
		echo "<div class='alert-table'>" . $_SESSION['message'] . "</div>";
		unset($_SESSION['message']);
	?>
<?php endif; ?>

<?php if(($delete == false) && ($update == false)): ?>


<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	 integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
 </script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	 integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
 </script>
</body>
</html>
