<!doctype html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="B1.png"/>
<meta charset="utf-8">
<title>BiletuX | Giris</title>
<link rel="stylesheet" href="style.css?version=<?= time()?>">
</head>

<body>
<div class="navbar">
  <a href="#home"><a href="giris.php"><img src="B.png" alt="" style="
;width: 20;
  height: 80px;"></a></a>
</div>
</a>

<div align="center" class="co" >

	<div class="box" align="center">

	<div class="card" align="center" >
		
	  <form  action="" method="post" class="container">

		<h2>Giriş Yapın ve Bilet Alın</h2>
		<table align="center">
			<tr>
				<td >Kullanıcı Adı :&nbsp;&nbsp;&nbsp;&nbsp; </td>
				<td ><input type="text" name="isim" /></td>
			</tr>
			<tr > 
				<td align="left">Şifre : </td>
				<td><input type="password" name="sifre" /> </td>
			</tr>	
			<tr>
				<td></td>
				<td><input class="sub" type="submit"></td>
			</tr>
		</table>
	</form>
</div>
</div>

<?php
	
	if($_POST) {
		
		session_start();
		$isim = $_POST["isim"];
		$sifre = $_POST["sifre"];
		if($isim == "admin" and $sifre == "1234") {
			$_SESSION["oturum"] = true;
			$_SESSION["kullanici"] = $isim;
			echo "<div class='c2'>Başarıyla Giriş yaptınız,Yönlendiriliyorsunuz...</div>";
			header("refresh:2; url=index.php");
			
		}else {
			echo "<div class='cc'>Kullanıcı adınız veya şifreniz yanlış.</div>";
		}
		
		
		
	}
	
	?>
</div>
	
</body>
</html>