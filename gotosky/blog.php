<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<style>

.dodolu
{
	margin-top: 130px;
}


.postcontainer {
border: 10px double rgba(0, 0, 0, 0.2);
border-color: #b1a6b1; 
border-width: 10px; 
padding: 5px; 
text-align: left; 
position: center; 
margin: auto; 
padding-left: 10px; 
padding-right: 10px; 
padding-bottom: 10px; 
padding-top: 1px; 
margin-top: -20px; 
margin-bottom: 20px;
width: auto;
color: #6d828f;
}


.posttest {
border: 10px double rgba(0, 0, 0, 0.2);
border-color: #b1a6b1; 
border-width: 10px; 
padding: 5px; 
text-align: center; 
position: center; 
margin: auto; 
padding-left: 1px; 
padding-right: 1px; 
padding-bottom: 1px; 
padding-top: 1px; 
margin-bottom: 20px; 
width: auto;
font-style: italic;
font-size: 2.0rem;
color: #3c5463;
}


</style>
<div class="dodolu">
<div class="cont">
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
