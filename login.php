<?php
session_start();
$poruka="";

if(isset($_POST['submit'])){
	//ako su korisnickoIme i lozinka popunjeni 
	if(!empty($_POST['korisnickoIme'])&& !empty($_POST['lozinka'])){
		
		if($_POST['korisnickoIme']=="administrator" && $_POST['lozinka']=="admin123"){
			$_SESSION['imeKorisnika']=$_POST['korisnickoIme'];
		//redirect - redirekcija na drugu stranicu
		header('Location:index1.html');
			
		}else{
			$poruka="Korisnicko ime ili lozinka nisu ispravni!";
		}
		
		
	}else{
		$poruka="Molimo vas unesite Ime i Lozinku";
	}
	
}

?>
<!doctype html>
<html>
<head>
<title>Login forma</title>
<link rel="stylesheet" href="style.css">
<style>
body {
  background-image: url('Login_background.jpg');
  background-repeat: no-repeat;
  background-position:relative;
  
}
</style>
</head>
<body>
     
	<nav>
		<ul>
		
			<li><a href="index1.html" style="color:white">Pocetna Strana</a>
			
		</ul>
	</nav>
	
	<div class="container">
	
		<h3>Sistemi za logovanje</h3>
		<!--  -->
			<form class="forma" method="POST" action="<?php $_SERVER['PHP_SELF']?>">
			
				<h4><?php echo $poruka; ?> </h4>
				<div>
				<input type="text" name="korisnickoIme" placeholder="Unesite vase ime">
				</div>
				
				<div>
				<input type="text" name="lozinka" placeholder="Unesite vasu lozinku">
				</div>
				
				<p class="submit"><input type="submit" name="submit" value="Uloguj se"></p>
			</form>		

</body>
</html>