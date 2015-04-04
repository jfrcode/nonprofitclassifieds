<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="Author" content="bigger for better" />
<meta name="Robots" content="index,follow" />
<meta name="Description" content="Description" />
<meta name="Keywords" content="personal, charity, small, help, need, home" />
<link rel="stylesheet" type="text/css" href="images/style.css" />
<title>Bigger For Better results</title>
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
					</br>

					<?php
 if (isset($_POST['pagenum']))    
 {    
 $pagenum = $_POST['pagenum'];  
 }    
 else
 {
 $pagenum = $_GET['pagenum'];
 } 
 if (isset($_POST['find']))    
 {    
 $find = $_POST['find']; 
 }   
 elseif (isset($_GET['find']))
 {
 $find = $_GET['find'];
 } 
 else
 {
 $find = "";
 }
 if (isset($_GET['needn']))    
 {    
 $needn = $_GET['needn']; 
 }   
 else
 {
 $needn = "";
 }
 if (isset($_GET['local']))    
 {    
 $locals = $_GET['local']; 
 }   
 else
 {
 $locals = "";
 }
 
 // Connects to your Database 

 mysql_connect("localhost", "", "") or die(mysql_error()); 

 mysql_select_db("test") or die(mysql_error()); 

 //This checks to see if there is a page number. If not, it will set it to page 1 

 if ((!isset($pagenum))) 

 { 

 $pagenum = 1; 

 } 
 
 $find = strtoupper($find); 
 $find = strip_tags($find); 
 $find = trim ($find); 

 $needn = strtoupper($needn); 
 $needn = strip_tags($needn); 
 $needn = trim ($needn);

 $locals = strtoupper($locals); 
 $locals = strip_tags($locals); 
 $locals = trim ($locals); 
 //Here we count the number of results 

 //Edit $data to be your query 
 
 $date2 = date('Y-m-d', strtotime("-1 week"));
	
 if(!empty($find))
 {
 $scond = "(upper (needname) LIKE '%$find%' OR upper (needdescription) LIKE '%$find%')";
 }
 elseif(!empty($needn))
 {
 $scond = "(maincat = '$needn' OR subcat = '$needn')";
 }
 elseif(!empty($locals))
 {
 $scond = "(local = '$locals')";
 }
 else
 {
 header("Location: mainpage.html");
   exit();
 }

 $data = mysql_query("SELECT * FROM need WHERE $scond and datetime >= '$date2'") or die(mysql_error()); 

 $rows = mysql_num_rows($data); 

 if(empty($rows))
 {
 echo "<p style='text-align: center'>This website can't find what you are looking for. Please redefine you search and try again.</p>";
   exit();
 }

 //This is the number of results displayed per page 

 $page_rows = 4; 

 

 //This tells us the page number of our last page 

 $last = ceil($rows/$page_rows); 

 

 //this makes sure the page number isn't below one, or more than our maximum pages 

 if ($pagenum < 1) 

 { 

 $pagenum = 1; 

 } 

 elseif ($pagenum > $last) 

 { 

 $pagenum = $last; 

 } 

 //This sets the range to display in our query 

 $max = 'limit ' .($pagenum - 1) * $page_rows .',' .$page_rows; 
 
 //This is your query again, the same one... the only difference is we add $max into it

 $data_p = mysql_query("SELECT * FROM need WHERE $scond and datetime >= '$date2' $max") or die(mysql_error());

 //This is where you display your query results
 
 while($info = mysql_fetch_array( $data_p )) 

 { 

 echo "<tr><td><a href=entry.php?needid=\"$info[needid]\">".$info{'needname'}."</a></td>"; 
 echo " (<a href=searchresult.php?pagenum=1&local=$info[local]>".$info['local']."</a>) - <a href=searchresult.php?pagenum=1&needn=$info[subcat]>".$info{'subcat'}."</a> ";
 echo date('M d Y', strtotime($info['datetime']));
 echo "<br>";
 echo "<br>";
 } 
 
echo "You have searched for $needn$find$locals.";
 echo "<p>";

 
 // This shows the user what page they are on, and the total number of pages

 echo "<h3> --Page $pagenum of $last-- <p></h3>";

 
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.
 echo"<h2>";
 if ($pagenum == 1) 

 {

 } 

 else 

 {

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1&needn=$needn&find=$find&local=$locals'> <<-First</a> ";

 echo " ";

 $previous = $pagenum-1;

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous&needn=$needn&find=$find&local=$locals'> <-Previous</a> ";

 } 


 //just a spacer

 echo " ---- ";


 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links

 if ($pagenum == $last) 

 {

 } 

 else {

 $next = $pagenum+1;

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next&needn=$needn&find=$find&local=$locals'>Next -></a> ";

 echo " ";

 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last&needn=$needn&find=$find&local=$locals'>Last ->></a> ";

 }
 echo"</h2>";
 ?>  		
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