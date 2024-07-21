<?php $title = 'Gotosky'; ?>
<?php $metaTags = 'tag1 tag2'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<style>
.dodolu
{
	margin-top: 120px;
}
</style>
<div class="dodolu">

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
    $x=$i - 5;// $x = $i - 3; // x, for the loop below.  three less than i because we wanna display the last three posts.
    while($i >= $x) {  // loop three times
    echo "<a href=blog.php?post=",$i,">"; 
    $file=fopen("posts/".$i,"r") or exit("Unable to open file!"); // open the file or spew error;
    echo fgets($file)."</a>";
    fclose($file); $i--; //close file; decrement the pointer
    } // end loop

?>
</div>