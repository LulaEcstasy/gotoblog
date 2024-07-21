<?php $title = 'Gotosky'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<style>

.postcontainer
{
    border: 10px double rgba(0, 0, 0, 0.2);
	    border-color: #E9A8EA;
		    background-color: rgba(0, 0, 0, 0.2);
  padding: 5px;
text-align: center;
position:center;
margin: auto;
padding-left: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-top: 10px;
}
.posttest {
border: 10px double rgba(0, 0, 0, 0.2);
border-color: #b1a6b1; 
border-width: 10px; 
padding: 5px; 
text-align: center; 
position: center; 
margin: auto; 
padding-left: 10px; 
padding-right: 10px; 
padding-bottom: 10px; 
padding-top: 10px; 
margin-bottom: 20px; 
width: 80%;
}

.dodolu
{
	margin-top: 120px;
}
eciepecie {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px; 
display: flex;
      }

a:link {
  color: white;
}

/* visited link */
a:visited {
  color: Lightblue;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}
</style>
<div class="dodolu">
<div class="eciepecie">
<?php
    // Figure out how many blog posts there are on server
    // integer i used for incrementing
    $i = 0; 
    $dir = 'posts/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // loads three most recent post titles (first lines of files in blag/)
    $x=$i - 4;// $x = $i - 3; // x, for the loop below.  three less than i because we wanna display the last three posts.
    while($i >= $x) {  // loop three times
    echo "<a href=blog.php?post=",$i,">"; 
    $file=fopen("posts/".$i,"r") or exit("Unable to open file!"); // open the file or spew error;
    echo fgets($file)."</a>";
    fclose($file); $i--; //close file; decrement the pointer
    } // end loop

?>
</div>
</div>
