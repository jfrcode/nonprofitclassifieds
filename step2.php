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
<head>
 <style type='text/css'>
 <!--
  #new { border: thin solid; margin: 1em 0; padding: 1em; }
  #radio { padding-bottom: 1em; }
  .field { padding-top: .5em; }
  label { font-weight: bold ; }
  #new label { width: 20%; float: left; 
               margin-right: 1em; text-align: right; }
  #new input { margin-left: 0 }
 -->
 </style> 
</head>

 <h3>Please choose a category for the posting.</h3>
 <p style='text-align: center'>Never ask for, or recieve money orders, checks, or credit from the postings.</p>
<?php
 include("misc.inc");
 $cxn = mysqli_connect($host,$user,$passwd,$dbname)
        or die ("couldn't connect to server");
if ($_POST['maincat'] == "Creativity")
$mskhfd = "2";
if ($_POST['maincat'] == "Environment")
$mskhfd = "3";
if ($_POST['maincat'] == "Animals")
$mskhfd = "4";
if ($_POST['maincat'] == "Education")
$mskhfd = "5";
if ($_POST['maincat'] == "Community")
$mskhfd = "6";
if ($_POST['maincat'] == "Health")
$mskhfd = "7";
if ($_POST['maincat'] == "Personal")
$mskhfd = "8";
if ($_POST['maincat'] == "International")
$mskhfd = "9";

$query="SELECT maincategory FROM maincategory
						WHERE catsort=$mskhfd
                        ORDER BY mainid";
$result = mysqli_query($cxn,$query)
           or die ("Couldn't execute query.");
 /* Display form for selecting pet type */
 echo "<form action='step3.php' 
                method='post'>\n";
 $counter=0;
 while($row = mysqli_fetch_assoc($result))	#46
 {
    extract($row);
    echo "<label><input type='radio' name='subcat'  
                        value='$maincategory'";
           if($counter == 0)	#51
           { 
              echo " checked='checked'";
           }
	$ash = $maincategory;
	$ash = str_replace('_', ' ', $ash);	   
    echo " />$ash </label><br>";	#55
    $counter++;	#56
 }
 
?>
<input type="hidden" name="maincat" value="<?php echo $_POST['maincat']; ?>">
<input type='submit' value='Submit Category' />
<input type='submit' name='newbutton' value='Cancel' />
</form></body></html>
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