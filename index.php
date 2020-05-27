<?php

session_start();

if(isset($_SESSION['imeKorisnika'])){
	
	$korisnik=$_SESSION['imeKorisnika'];
		echo"<a href='logout.php>Logout</a>";
}else{
	$korisnik="gost";
	 

?>
<a href='login.php'>Molimo vas da se ulogujete</a>
<?php

}
?>

<h1>Dobrodosli<?php ?></h1>