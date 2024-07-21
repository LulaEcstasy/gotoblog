<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<style>
.dodolu
{
	margin-top: 130px;
}
</style>
<div class="dodolu">

<?php
if(isset($_GET["post"])){
	$num = $_GET["post"];
	$file=fopen("posts/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
    	echo fread($file, filesize("posts/".$num));   
    	fclose($file); $num--; //close file; decrement the pointer
    }else{
	  // Figure out how many blog posts there are on server
  	  // integer num used for incrementing
 	   $num = 0;
 	   $dir = 'posts/';
 	   if ($handle = opendir($dir)) {
 	       while (($file = readdir($handle)) !== false){
 	           if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
 	               $num++;
       	 }
	    }

	while($num >= 1) {  // loop to read all the blog posts
   		$file=fopen("posts/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
    		echo fread($file,filesize("posts/".$num))."<br /><br />";
    		fclose($file); $num--; //close file; decrement the pointer
    	} // end loop
    }


?>
