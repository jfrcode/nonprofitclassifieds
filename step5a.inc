				<?php
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
 <title>New Pet Information Form</title>
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
         <b>$subcat</b></div>\n";
 echo "<div class='field'>
        <label>Location:</label>
         <b>$local</b></div>\n";	
		 
 echo "<div class='field'>
          <label>petName:</label>
           <input type='text' name='petName'
             size='66' maxlength='65' value='".@$petName."' /></div>\n";
 
 echo "<div class='field'>
          <label>petDescription:</label>
           <textarea cols='50' rows='5' name='petDescription'
             value='".@$petDescription."'></textarea></div>\n";
?>
<div id="submit">
<input type='hidden' name='newCat' value='<?php echo $maincat ?>' />
<input type='hidden' name='newCat3' value='<?php echo $subcat ?>' />
<input type='hidden' name='newCat4' value='<?php echo $local ?>' />
 <input type='submit' value='Submit Information' />
 <input type='submit' name='newbutton' value='Cancel' />
</div> </form></body></html>