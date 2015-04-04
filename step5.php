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
include("misc.inc");                                  #10
$cxn = mysqli_connect($host,$user,$passwd,$dbname)
       or die ("Couldn't connect to server");
foreach($_POST as $field => $value)                   #13
{
  if(empty($value))                                   #15 needs editing for other variables
  {
    if($field == "petName" or $field == "petDescription")
    {
        $blank_array[] = $field;
    }
  }
  else                                                #22
    {
        if($field == "petName")
        {
          $clean_data['petName']=trim(strip_tags($value));
        }
		if($field == "petDescription")
        {
          $clean_data['petDescription']=trim(strip_tags($value));
        }
        if($field == "newCat")
        {
          $clean_data['maincat']=trim(strip_tags($value));
        }
        if($field == "newCat3")
        {
          $clean_data['subcat']=trim(strip_tags($value));
        }
        if($field == "newCat4")
        {
          $clean_data['local']=trim(strip_tags($value));
        }
	}
}
if(@sizeof($blank_array)>0) #41
{
      echo "<p style='text-align: center'><b>You must enter both the name and
                  the description of the post</b></p>\n";
   extract($clean_data);
   include("step5a.inc");
   exit();
}

$files = glob('C:\xampp\htdocs\test\upload/*'); // get all file names
foreach($files as $file)
{ // iterate files
  if((is_file($file)) && (filemtime($file) <= time()-60*60 ))
    unlink($file); // delete file
}

?>

<form action="step6.php" method="post" enctype="multipart/form-data">
  <h3>Upload images:</h3>
  <p style='text-align: center'>You can upload up to four jpg images and each image must be less than 350kb big.</p>
  <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
  <input name="userfile0" type="file" /><br />
  <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
  <input name="userfile1" type="file" /><br />
  <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
  <input name="userfile2" type="file" /><br />
  <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
  <input name="userfile3" type="file" /><br />
  <input type='hidden' name='maincat' value='<?php echo $clean_data['maincat'] ?>' />
  <input type='hidden' name='subcat' value='<?php echo $clean_data['subcat'] ?>' />
  <input type='hidden' name='local' value='<?php echo $clean_data['local'] ?>' />
  <input type='hidden' name='petName' value='<?php echo $clean_data['petName'] ?>' />
  <input type='hidden' name='petDescription' value='<?php echo $clean_data['petDescription'] ?>' />
  <input type='submit' value='Done with images' />
  <input type='submit' name='newbutton' value='Cancel' />
</form>
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