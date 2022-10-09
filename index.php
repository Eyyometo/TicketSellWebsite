<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BookingTr</title>
<link rel="shortcut icon" type="image/png" href="B1.png"/>
<link rel="stylesheet" href="style2.css?version=<?= time()?>">
</head>

<body >
   <div class="all">
   <div class="navbar">
  <a href="#home"><a href="giris.php"><img src="B.png" alt="" style="width: 205;
  height: 90px;"></a></a>
</div>
   <div class="box" align="center">
	<?php
	session_start();
	if(!isset($_SESSION["oturum"])) {
		header("location:giris.php");
	}
	
?>



<?php
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $class = $course = $subject = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = " Gerekli alan.";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = " Gerekli alan.";
            }else {
               $email = test_input($_POST["email"]);
               
   
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Geçersiz e-posta formatı"; 
               }
            }
            
            if (empty($_POST["course"])) {
               $course = "";
            }else {
               $course = test_input($_POST["course"]);
            }
            
            if (empty($_POST["class"])) {
               $class = "";
            }else {
               $class = test_input($_POST["class"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = " Gerekli alan.";
            }else {
               $gender = test_input($_POST["gender"]);
            }
            
            if (empty($_POST["subject"])) {
               $subjectErr = "1'dan daha fazla seçmelisiniz";
            }else {
               $subject = $_POST["subject"];	
               header("Location:bitis.php");

            }
         }
         
         	function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
		
      <h2> </h2>
      
      <p><span class = "error">* Gerekli alan.</span></p>
      
      <form  method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>

            <td class="adi">Ad:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
			<tr>
               <td class="sou">Soyad:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td class="e">E-posta: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>

			<td class="t">Telefon numarası: </td>
               <td><input type = "text" name = "phone">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
            
				<td class="zip">Posta kodu: </td>
							<td><input type = "text" name = "zip">
								<span class = "error">* <?php echo $emailErr;?></span>
							</td>
							</tr>

		
							<tr>
                        
               <td class="Gender">Cinsiyet:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  
               </td>
            </tr>
           
			

			<td class="in">Check-in tarihi: </td>
							<td><input class="tarihi" type = "date" name = "date">
								<span class = "error">* <?php echo $emailErr;?></span>
							</td>
							</tr>

							<td class="out">Check-out tarihi: </td>
							<td><input class="tarihi" type = "date" name = "date">
								<span class = "error">* <?php echo $emailErr;?></span>
							</td>
							</tr>
			
			<td>Bilet sayısı:</td>
               <td>
                  <select name = "subject[]" size = "4" multiple>
                     <option value = "1">1</option>
                     <option value = "2">2</option>
                     <option value = "3">3</option>
                     <option value = "4">4</option>
                     <option value = "4">5</option>
                     <option value = "6">6</option>
					 <option value = "7">7</option>
					 <option value = "8">8</option>
					 <option value = "9">9</option>
					 <option value = "10">10</option>
                  </select>
               </td>
            </tr>
           
			<tr>
         <td class="e">Paypal e-posta: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
            <tr>
               <td>Kabul ediyorum&nbsp;</td>
               <td><input type = "checkbox" name = "checked" value = "1"></td>
               <?php if(!isset($_POST['checked'])){ ?>
               <span class = "error">* <?php echo "Şartları kabul etmelisiniz";?></span>
               <?php } ?> 
            </tr>
            
         </table>
         <td>
                  <input class="sub" type = "submit" name = "submit" value = "Gönder"> 
               </td>
            </tr>
      </form>
     
	 

	<form action="cikis.php">
   <input class="cikis" type = "submit" name = "submit" value = "Çıkış"> 
               </form>
  
               </div>
               </div>
</body>
</html>