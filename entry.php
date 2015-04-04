<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="Author" content="bigger for better" />
<meta name="Robots" content="index,follow" />
<meta name="Description" content="Description" />
<meta name="Keywords" content="personal, charity, small, help, need, home" />
<link rel="stylesheet" type="text/css" href="images/style.css" />
<title>Bigger For Better Submit</title>
</head>
<body>
	<div id="bg">
		<div id="sadrzaj">
			<div id="toplinks">
				<a href="http://localhost/test/tou.html">Terms of Use</a>
				<a href="http://localhost/test/legal.html">Legal</a>
				<a href="http://localhost/test/privacy.html">Privacy Policy</a>
				<a href="http://localhost/test/contact.html">Contact</a>
			</div>

			<div id="zaglavlje">
				<div id="titleh">
					<div><a href="http://localhost/test/mainpage.html">Corporate Logo Here</a></div>
				</div>
			</div>

			<div id="navigacija">
				<ul>
					<li><a href="http://localhost/test/step1.php">Submit Post</a></li>
					<li><form name="search" method="post" action="searchresult.php">
					Search for: <input type="text" name="find" />
					<input type="hidden" name="searching" value="yes" />
					<input type="hidden" name="pagenum" value="" />
					<input type="submit" name="search" value="Search" />
					</form></li>
					<li><a href="http://localhost/test/donortips.html">Donor Tips</a></li>
					<li><a href="http://localhost/test/avoid.html">Avoid Scams and Fraud</a></li>
					<li><a href="http://localhost/test/safety.html">Personal Safety</a></li>
					<li><a href="http://localhost/test/prohibited.html">Prohibited Content</a></li>
				</ul>
			</div>

			<div id="clanci">
				
					<p>
<html>
<body>
<div id="dkjdfhdfskj">
<div id="jjvcngfcdxv" style='text-align: center'>
<form action='flagging.php' method='post'>
<p>
<input type="radio" name="pmod" value="jxc">miscategorized
<input type="radio" name="pmod" value="bgfg">prohibited
<input type="radio" name="pmod" value="sdfhg">spam
<?php $sdjd = $_GET['needid']?>
<input type='hidden' name='pmodid' value='<?php echo $sdjd ?>' />
<input type='submit' value='Submit Category' />
</p>
</form>
</div><hr><br>
<?php
 include("misc.inc");
 $cxn = mysqli_connect($host,$user,$passwd,$dbname)
        or die ("couldn't connect to server");
 /* Select pets of the given type */
 $query = "SELECT * FROM need 
             WHERE needid={$_GET['needid']}"; 	#26
 $result = mysqli_query($cxn,$query)
           or die ("Couldn't execute query.");

 while($row = mysqli_fetch_assoc($result))            #36
 {
	$kdsj = date('M d Y', strtotime($row['datetime']));
	$ash = $row['maincat'];
	$ash = str_replace('_', ' ', $ash);
	$ashad = $row['subcat'];
	$ashad = str_replace('_', ' ', $ashad);
   /* display row for each pet */
   echo "<p>$ash</p>";
   echo"<p style='padding-left: 50px'>$ashad</p><br><br>";
   echo "<b style='font-size: 1.4em'>{$row['needname']}</b><br><br>";		
   echo "{$row['needdescription']}<br><br>";
   echo "<p>Posting ID: {$row['needid']}</p>";
   echo "<p style='padding-left: 50px'>Date Created:$kdsj</p><br><br>";
   /* display picture if pet does not come in colors */
   if ($row['photo1'] != "" or $row['photo2'] != "" or $row['photo3'] != "" or $row['photo4'] != "")
 {
 echo "<b style='text-align: center'>Click on any picture to see a larger version.</b><br>";
 }
   
   if ($row['photo1'] != "")
   {
      echo "<a href='http://localhost/test/keep/{$row['photo1']}'
                          border='0'>
                  <img src='http://localhost/test/keep/{$row['photo1']}' 
                   border='0' width='100' height='80' />
                </a><br>";
   }  
   if ($row['photo2'] != "")
   {
      echo "<a href='http://localhost/test/keep/{$row['photo2']}'
                          border='0'>
                  <img src='http://localhost/test/keep/{$row['photo2']}' 
                   border='0' width='100' height='80' />
                </a><br>";
   }  
   if ($row['photo3'] != "")
   {
      echo "<a href='http://localhost/test/keep/{$row['photo3']}'
                          border='0'>
                  <img src='http://localhost/test/keep/{$row['photo3']}' 
                   border='0' width='100' height='80' />
                </a><br>";
   }  
   if ($row['photo4'] != "")
   {
      echo "<a href='http://localhost/test/keep/{$row['photo4']}'
                          border='0'>
                  <img src='http://localhost/test/keep/{$row['photo4']}' 
                   border='0' width='100' height='80' />
                </a><br>";
   }  
 }
?>
</div>
</body></html>
					</p>
					
										
			</div>

			<div id="desna_rubrika">
    	
				<div id="podaci">
    				<p>Copyright > <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
					<a href="http://validator.w3.org/check?uri=referer">XHTML 1.0 Strict!</a></p>
    				<p>&copy; <a href="#">Yoursite.com</a> > Designed by <a href="mailto:luka@solucija.com">Luka Cvrk</a>
					</p>	
    			</div>
			</div>

			
		</div>
	</div>
</body>
</html>