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
if (@$_POST['newbutton'] == "Cancel")
{
foreach($_POST as $field => $value)
{
		if($field == "userfile0")
        {
          $rid0=trim(strip_tags($value));
        }
		if($field == "userfile1")
        {
          $rid1=trim(strip_tags($value));
        }
		if($field == "userfile2")
        {
          $rid2=trim(strip_tags($value));
        }
		if($field == "userfile3")
        {
          $rid3=trim(strip_tags($value));
        }
}
		if($rid0 != "")
		{
			unlink('C:\xampp\htdocs\test\upload/'.$rid0);
			echo"$rid0";
		}
		if($rid1 != "")
		{
			unlink('C:\xampp\htdocs\test\upload/'.$rid1);
			echo"$rid1";
		}
		if($rid2 != "")
		{
			unlink('C:\xampp\htdocs\test\upload/'.$rid2);
			echo"$rid2";
		}
		if($rid3 != "")
		{
			unlink('C:\xampp\htdocs\test\upload/'.$rid3);
			echo"$rid3";
		}	
   header("Location: step1.php");
}

include("misc.inc");
$cxn = mysqli_connect($host,$user,$passwd,$dbname)
       or die ("Couldn't connect to server");

foreach($_POST as $field => $value)
{
    
        if($field == "petName")
        {
          $clean_data['needname']=trim(strip_tags($value));
        }
		if($field == "petDescription")
        {
          $clean_data['needdescription']=trim(strip_tags($value));
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
		if($field == "datetime")
        {
          $clean_data['datetime']=trim(strip_tags($value));
        }
		if($field == "userfile0")
        {
          $photo1=trim(strip_tags($value));
        }
		if($field == "userfile1")
        {
          $photo2=trim(strip_tags($value));
        }
		if($field == "userfile2")
        {
          $photo3=trim(strip_tags($value));
        }
		if($field == "userfile3")
        {
          $photo4=trim(strip_tags($value));
        }
	
}

if (!empty($photo1))
{
$kfile1 = $photo1;
rename('C:\xampp\htdocs\test\upload/'.$photo1,'C:\xampp\htdocs\test\keep/'.$kfile1);
$clean_data['photo1']=$kfile1;
}
if (!empty($photo2))
{
$kfile2 = $photo2;
rename('C:\xampp\htdocs\test\upload/'.$photo2,'C:\xampp\htdocs\test\keep/'.$kfile2);
$clean_data['photo2']=$kfile2;
}
if (!empty($photo3))
{
$kfile3 = $photo3;
rename('C:\xampp\htdocs\test\upload/'.$photo3,'C:\xampp\htdocs\test\keep/'.$kfile3);
$clean_data['photo3']=$kfile3;
}
if (!empty($photo4))
{
$kfile4 = $photo4;
rename('C:\xampp\htdocs\test\upload/'.$photo4,'C:\xampp\htdocs\test\keep/'.$kfile4);
$clean_data['photo4']=$kfile4;
}

foreach($clean_data as $field => $value)               #62
{ 
   if(!empty($value))
   {
      $fields_form[$field] = 
         strip_tags(trim($value));
      $fields_form[$field] = 
           mysqli_real_escape_string($cxn,
                $fields_form[$field]);
   }
}
?>
<html>
<head><title>Add Pet</title></head>
<body>
<?php
 $field_array = array_keys($fields_form);
 $fields=implode(",",$field_array);
 $query = "INSERT INTO need ($fields) VALUES (";
 foreach($fields_form as $field => $value)             #93 need edit for date
 {
	  
      $query .= "'$value' ,";
	  
 }
 $query .= ") ";
 $query = preg_replace("/,\)/",")",$query);
 $result = mysqli_query($cxn,$query)
      or die ("Couldn't execute query");
 $needid = mysqli_insert_id($cxn);
 $query = "SELECT * from need WHERE needid='$needid'";
 $result = mysqli_query($cxn,$query)
       or die ("Couldn't execute query.");
 $row = mysqli_fetch_assoc($result);
 extract($row);
 
 

 echo "Thank you for submitting your post. If you want you can look at <a href='entry.php?needid=$row[needid]'>your post</a> or you can <a href='step1.php'>submit another post</a>.<br />\n";
?>
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