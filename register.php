<?php 

	if (isset($_POST["ime"])) {
		$ime = $_POST["ime"];
		$prezime = $_POST["prezime"];
		$password = $_POST["password"];
		$mail = $_POST["mail"];


		$datoteka ="text.txt";

		$name = fopen($datoteka, "a");

		fwrite($name, $ime.",".$prezime.",".$password.",".$mail."\r\n");

		fclose($name);

		header("Location: index.php");
	}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>InfoArs Završni projekat - Borko Savić</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

<div class="wrapper">
	<?php include 'sidebar.html'; ?>

	<div id="content">

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
				        <i class="glyphicon glyphicon-align-left"></i>
				        <span>Toggle Sidebar</span>
				    </button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Page</a></li>
				        <li><a href="#">Page</a></li>
				        <li><a href="#">Page</a></li>
				        <li><a href="#">Page</a></li>
				    </ul>
				</div>
			</div>
		</nav>
            <h2>Završni projekat početnog PHP kursa - Borko Savić</h2>
            <p>Zadatak glasi: <br> <strong>Napisati php skriptu koja omogućava upload, delete i rename jpg i png slika ne većih od 5MB. Slike smjestati u folder „slike“ koji ste unaprijed kreirali na serveru. Uz korištenje HTML i CSS(koristiti već pripremljen template ili vi napravite vlastiti) unaprijediti izgled i preglednost slika i funkcionalnosti. Skripta može biti bazirana na primjeru koji smo uradili na poslednjem (12.) predavanju.</p>

            <div class="line"></div>

		<form class="form-group col-md-6 " action="register.php" method="post">
			<h2>Unesite podatke za registraciju</h2><br>
			<input class="form-control"  type="text" name="ime" placeholder="Ime" required> <br>
			<input class="form-control"  type="text" name="prezime" placeholder="Prezime" required> <br>
			<input class="form-control"  type="password" name="password" placeholder="Lozinka" required> <br>
			<input class="form-control"  type="text" name="mail" placeholder="e-mail" required> <br>

			<button class="btn btn-primary" type="submit" name="submit">Send</button>
		</form>
	</div>
</div>




        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>