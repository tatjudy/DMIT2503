
<?php
// Note that there is NO design in this page (other than embedded tags that will be styled at the master page). No doctype, <head>, <style>, etc.


require("mysql_connect.php");

// DEFAULT QUERY: RETRIEVE EVERYTHING
$result = mysqli_query($con,"SELECT * FROM cd_catalog_class") or die (mysqli_error($con));
$result2 = mysqli_query($con,"SELECT * FROM musicians") or die (mysqli_error($con));

// FILTERING YOUR DB: On your own....If $_GET vars are present, please use them to filter your DB results (genre, year, decade, label). You can just redefine the previous query.
$displayby = $_REQUEST['displayby'];
$displayvalue = $_REQUEST['displayvalue'];

$displayby2 = $_REQUEST['displayby2'];
$displayvalue2 = $_REQUEST['displayvalue2'];

if(isset($displayby) && isset($displayvalue)) {
	$result = mysqli_query($con,"SELECT * FROM cd_catalog_class WHERE $displayby LIKE '$displayvalue'") or die (mysqli_error($con));
}

else if(isset($displayby2) && isset($displayvalue2)) {
	$result2 = mysqli_query($con,"SELECT * FROM musicians WHERE $displayby2 LIKE '$displayvalue2'") or die (mysqli_error($con));
}

while ($row = mysqli_fetch_array($result)) {
	/// This should out put artist names: On your own....create thumbnail views with images, album names, etc.
	$artist = ($row['artist']);
	$title = ($row['title']);
	$artwork = ($row['artwork']);
	
	echo "<div class=\"thisCD\">\n";
	echo "<img src=\"artwork/thumbs100/$artwork\" class=\"cdImage\">";
	echo " <span class=\"displayInfo\">". $artist ."</span><br />\n";
	echo "\n  <span class=\"displayInfo\"><b>". $title ."</b></span><br />\n";
	//echo "\n  <img src="$artwork" />\n";
	echo "\n</div>\n";
}

// while ($row = mysqli_fetch_array($result2)) {
// 	/// This should out put artist names: On your own....create thumbnail views with images, album names, etc.
// 	$name = ($row['name']);
// 	$description = ($row['description']);
	
// 	echo "<div class=\"this-artist\">\n";
// 	echo " <h2><span class=\"displayInfo\">". $name ."</span><br /></h2>\n";
// 	echo "\n<p=\"displayInfo\">". $description ."</p>\n";
// 	echo "\n</div>\n";
// }

?>


