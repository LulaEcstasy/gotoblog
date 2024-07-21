<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

?>


* {box-sizing: border-box;}

.bg-img {
  /* The image used */
background: url('../img/neeeww.jpg');
  min-height: 64px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 0;
  width: 100%;
  padding: 0;
  overflow: hidden;
  top: 0;
  list-style-type: none;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
    bottom: 0;
	    padding-top: 0;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
