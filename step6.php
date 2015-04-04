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

foreach($_POST as $field => $value)
		{
    
		if((!empty($_FILES["userfile0"])) && ($_FILES['userfile0']['error'] == 0))
			{
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$filename = basename($_FILES['userfile0']['name']);
				$ext = substr($filename, strrpos($filename, '.') + 1);
				if ((($_FILES["userfile0"]["type"] == "image/gif")
				|| ($_FILES["userfile0"]["type"] == "image/jpeg")
				|| ($_FILES["userfile0"]["type"] == "image/jpg")
				|| ($_FILES["userfile0"]["type"] == "image/pjpeg")
				|| ($_FILES["userfile0"]["type"] == "image/x-png")
				|| ($_FILES["userfile0"]["type"] == "image/png"))
				&& ($_FILES["userfile0"]["size"] < 350000)
				&& in_array($ext, $allowedExts)) #end of file check
					{
						$myFiles = strtolower(preg_replace('/[^a-zA-Z0-9_ -.]/s', '_', $_FILES["userfile0"]["name"]));
						//====If you want to change the name of the File====
						$anyNum = rand(20,500789000); //Will generate a random number between 20and 500789000
						$myFile = $anyNum.$myFiles;
						$newFileName0 = microtime().$myFile;	
					}
				else 
					{
						$error = $field;
					}
			}
		else
			{
				$newFileName0 = "";
			}
	
		if((!empty($_FILES["userfile1"])) && ($_FILES['userfile1']['error'] == 0))
			{
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$filename = basename($_FILES['userfile1']['name']);
				$ext = substr($filename, strrpos($filename, '.') + 1);
				if ((($_FILES["userfile1"]["type"] == "image/gif")
				|| ($_FILES["userfile1"]["type"] == "image/jpeg")
				|| ($_FILES["userfile1"]["type"] == "image/jpg")
				|| ($_FILES["userfile1"]["type"] == "image/pjpeg")
				|| ($_FILES["userfile1"]["type"] == "image/x-png")
				|| ($_FILES["userfile1"]["type"] == "image/png"))
				&& ($_FILES["userfile1"]["size"] < 350000)
				&& in_array($ext, $allowedExts)) #end of file check
					{
						$myFiles = strtolower(preg_replace('/[^a-zA-Z0-9_ -.]/s', '_', $_FILES["userfile1"]["name"]));
						//====If you want to change the name of the File====
						$anyNum = rand(20,500789000); //Will generate a random number between 20and 500789000
						$myFile = $anyNum.$myFiles;
						$newFileName1 = microtime().$myFile;	
					}
				else 
					{
						$error = $field;
					}
			}
		else
			{
				$newFileName1 = "";
			}
	
		if((!empty($_FILES["userfile2"])) && ($_FILES['userfile2']['error'] == 0))
			{
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$filename = basename($_FILES['userfile2']['name']);
				$ext = substr($filename, strrpos($filename, '.') + 1);
				if ((($_FILES["userfile2"]["type"] == "image/gif")
				|| ($_FILES["userfile2"]["type"] == "image/jpeg")
				|| ($_FILES["userfile2"]["type"] == "image/jpg")
				|| ($_FILES["userfile2"]["type"] == "image/pjpeg")
				|| ($_FILES["userfile2"]["type"] == "image/x-png")
				|| ($_FILES["userfile2"]["type"] == "image/png"))
				&& ($_FILES["userfile2"]["size"] < 350000)
				&& in_array($ext, $allowedExts)) #end of file check
					{
						$myFiles = strtolower(preg_replace('/[^a-zA-Z0-9_ -.]/s', '_', $_FILES["userfile2"]["name"]));
						//====If you want to change the name of the File====
						$anyNum = rand(20,500789000); //Will generate a random number between 20and 500789000
						$myFile = $anyNum.$myFiles;
						$newFileName2 = microtime().$myFile;	
					}
				else 
					{
						$error = $field;
					}
			}
		else
			{
				$newFileName2 = "";
			}
	
		if((!empty($_FILES["userfile3"])) && ($_FILES['userfile3']['error'] == 0))
			{
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$filename = basename($_FILES['userfile3']['name']);
				$ext = substr($filename, strrpos($filename, '.') + 1);
				if ((($_FILES["userfile3"]["type"] == "image/gif")
				|| ($_FILES["userfile3"]["type"] == "image/jpeg")
				|| ($_FILES["userfile3"]["type"] == "image/jpg")
				|| ($_FILES["userfile3"]["type"] == "image/pjpeg")
				|| ($_FILES["userfile3"]["type"] == "image/x-png")
				|| ($_FILES["userfile3"]["type"] == "image/png"))
				&& ($_FILES["userfile3"]["size"] < 350000)
				&& in_array($ext, $allowedExts)) #end of file check
					{
						$myFiles = strtolower(preg_replace('/[^a-zA-Z0-9_ -.]/s', '_', $_FILES["userfile3"]["name"]));
						//====If you want to change the name of the File====
						$anyNum = rand(20,500789000); //Will generate a random number between 20and 500789000
						$myFile = $anyNum.$myFiles;
						$newFileName3 = microtime().$myFile;	
					}
				else 
					{
						$error = $field;
					}
			}
		else
			{
				$newFileName3 = "";
			}
			
		if($field == "petName")
			{
				$clean_data['petName']=trim(strip_tags($value));
			}
		if($field == "petDescription")
			{
				$clean_data['petDescription']=trim(strip_tags($value));
			}
		if($field == "maincat")
			{
				$clean_data['maincat']=trim(strip_tags($value));
			}
		if($field == "subcat")
			{
				$clean_data['subcat']=trim(strip_tags($value));
			}
		if($field == "local")
			{
				$clean_data['local']=trim(strip_tags($value));
			}
		}
   if(@sizeof($error) > 0)
   {
      echo "<p style='text-align: center'>Error: Only .jpg, .jpeg, .gif, and .png images under 350Kb are accepted for upload.</p>";
	  extract($clean_data);
	  include("step6a.inc");
	  exit();
   }

if(isset($_POST['maincat']))    #11
{
    $maincat = $_POST['maincat'];
	$ash = $maincat;
	$ash = str_replace('_', ' ', $ash);
}
if(isset($_POST['subcat']))    #11
{
    $subcat = $_POST['subcat'];
	$ashads= $subcat;
	$ashads = str_replace('_', ' ', $ashads);
}
if(isset($_POST['local']))    #11
{
    $local = $_POST['local'];
	$ashsaf = $local;
	$ashsaf = str_replace('_', ' ', $ashsaf);
}
if(isset($_POST['petName']))    #11
{
    $petName = $_POST['petName'];
}
if(isset($_POST['petDescription']))    #11
{
    $petDescription = $_POST['petDescription'];
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
<form enctype="multipart/form-data" action="step7.php" method="post">
<?php
 echo "<h3>Preview of Post</h3>";          #37
 echo "<div class='field'>
        <label>Main Category:</label>
         <b>$ash</b></div>\n"; 
 echo "<div class='field'>
        <label>Sub Category:</label>
         <b>$ashads</b></div>\n";
 echo "<div class='field'>
        <label>Location:</label>
         <b>$ashsaf</b></div>\n";	
 echo "<div class='field'>
        <label>Post Name:</label>
         <b style='word-wrap: break-word'>$petName</b></div>\n";
 echo "<div class='field'>
        <label>Post Description:</label>
         <b style='word-wrap: break-word'>$petDescription</b></div></br>";
if (!empty($newFileName0))
{
copy($_FILES['userfile0']['tmp_name'],'C:\xampp\htdocs\test\upload/'.$newFileName0);
echo '<img src="upload/'.$newFileName0.'" width="400" height="320"/></br>';
}
if (!empty($newFileName1))
{
copy($_FILES['userfile1']['tmp_name'],'C:\xampp\htdocs\test\upload/'.$newFileName1);
echo '<img src="upload/'.$newFileName1.'" width="400" height="320"/></br>';
}
if (!empty($newFileName2))
{
copy($_FILES['userfile2']['tmp_name'],'C:\xampp\htdocs\test\upload/'.$newFileName2);
echo '<img src="upload/'.$newFileName2.'" width="400" height="320"/></br>';
}
if (!empty($newFileName3))
{
copy($_FILES['userfile3']['tmp_name'],'C:\xampp\htdocs\test\upload/'.$newFileName3);
echo '<img src="upload/'.$newFileName3.'" width="400" height="320"/></br>';
}
$today = date("y-m-d");

?>
</br>
<form action="step7.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="userfile0" value="<?php echo "$newFileName0" ?>" />
  <input type="hidden" name="userfile1" value="<?php echo "$newFileName1" ?>" />
  <input type="hidden" name="userfile2" value="<?php echo "$newFileName2" ?>" />
  <input type="hidden" name="userfile3" value="<?php echo "$newFileName3" ?>" />
  <input type='hidden' name='maincat' value='<?php echo $clean_data['maincat'] ?>' />
  <input type='hidden' name='subcat' value='<?php echo $clean_data['subcat'] ?>' />
  <input type='hidden' name='local' value='<?php echo $clean_data['local'] ?>' />
  <input type='hidden' name='petName' value='<?php echo $clean_data['petName'] ?>' />
  <input type='hidden' name='petDescription' value='<?php echo $clean_data['petDescription'] ?>' />
  <input type='hidden' name='datetime' value='<?php echo "$today" ?>' />
  <input type='submit' value='Submit Post' />
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