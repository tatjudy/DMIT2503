
<?php
// Note that there is NO design in this page (other than embedded tags that will be styled at the master page). No doctype, <head>, <style>, etc.


require("mysql_connect.php");

// DEFAULT QUERY: RETRIEVE EVERYTHING
$result = mysqli_query($con,"SELECT * FROM cd_catalog_class") or die (mysqli_error($con));

// FILTERING YOUR DB: On your own....If $_GET vars are present, please use them to filter your DB results (genre, year, decade, label). You can just redefine the previous query.
$displayby = $_REQUEST['displayby'];
$displayvalue = $_REQUEST['displayvalue'];

if(isset($displayby) && isset($displayvalue)) {
	$result = mysqli_query($con,"SELECT * FROM cd_catalog_class WHERE $displayby LIKE '$displayvalue'") or die (mysqli_error($con));
}

while ($row = mysqli_fetch_array($result)) {
	/// This should out put artist names: On your own....create thumbnail views with images, album names, etc.
	$artist = ($row['artist']);
	$title = ($row['title']);
	$artwork = ($row['artwork']);
	
	echo "<div class=\"thisCD\">\n";
	
	echo " <span class=\"displayInfo\">". $artist ."</span><br />\n";
	echo "\n  <span class=\"displayInfo\">". $title ."</span><br />\n";
	//echo "\n  <img src="$artwork" />\n";
	echo "\n</div>\n";
}

?>


