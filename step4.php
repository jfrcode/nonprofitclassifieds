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
					<?php
if (@$_POST['newbutton'] == "Cancel")                  #6
 {
    header("Location: step1.php");
 }
include("misc.inc");
$cxn = mysqli_connect($host,$user,$passwd,$dbname)
       or die ("Couldn't connect to server");
if(isset($_POST['maincat']))    #11
{
    $maincat = $_POST['maincat'];
}
if(isset($_POST['subcat']))    #11
{
    $subcat = $_POST['subcat'];
	$ashgf = $subcat;
	$ashgf = str_replace('_', ' ', $ashgf);
}
if(isset($_POST['local']))    #11
{
    $local = $_POST['local'];
	$ashfsd = $local;
	$ashfsd = str_replace('_', ' ', $ashfsd);
}
?>
<html>
<head>
 <style type='text/css'>
  <!--
   .field { padding-top: .5em; }
   label { font-weight: bold; float: left; width: 18%;
           margin-right: 1em; text-align: right; }
   #submit { margin-top: 1em; )
  -->
 </style>
</head>
<body>
<form enctype="multipart/form-data" action="step5.php" method="post">
<?php
 echo "<h3>Posting Information</h3>";          #37
 echo "<div class='field'>
        <label>Main Category:</label>
         <b>$maincat</b></div>\n";	 
 echo "<div class='field'>
        <label>Sub Category:</label>
         <b>$ashgf</b></div>\n";
 echo "<div class='field'>
        <label>Location:</label>
         <b>$ashfsd</b></div>\n";	
		 
 echo "<div class='field'>
          <label>Post Name:</label>
           <input type='text' name='petName'
             size='66' maxlength='65' value='".@$petName."' /></div>\n";
 
 echo "<div class='field'>
          <label>Post Description:</label>
           <textarea cols='50' rows='5' maxlength='6000' name='petDescription'
             value='".@$petDescription."'></textarea></div>\n"; # need a word character max
?>
<div id="submit">
<input type='hidden' name='newCat' value='<?php echo $maincat ?>' />
<input type='hidden' name='newCat3' value='<?php echo $subcat ?>' />
<input type='hidden' name='newCat4' value='<?php echo $local ?>' />
 <input type='submit' value='Submit Information' />
 <input type='submit' name='newbutton' value='Cancel' />
</div> </form></body></html>
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