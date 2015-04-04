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
$files = glob('C:\xampp\htdocs\test\upload/*'); // get all file names
foreach($files as $file)
{ // iterate files
  if((is_file($file)) && (filemtime($file) <= time()-60*60 ))
    unlink($file); // delete file
}

?>

<form action="step6.php" method="post" enctype="multipart/form-data">
  <h3 style='text-align: center'>Upload images:</h3><br />
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