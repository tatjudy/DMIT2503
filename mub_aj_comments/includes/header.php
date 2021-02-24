<?php
include("mysql_connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>Blog</title>

<link rel="stylesheet" type="text/css" href="includes/style.css">
<!--  jQuery goes here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//console.log("ready...");

		//hide all the text boxes by default
		$(".commenttext").hide();

		//show or hide the correct text box
		$(".commentlink").click(function(e) {
			//console.log("clicked");
			$(".commenttext").hide();
			var commentText = "#" + $(this).attr('data-x');
			//console.log(commentText);
			$(commentText).toggle();
			e.preventDefault();
		});
		$(".commentform").submit(function(e) {

			var thisOne = $(this).children("input").attr("id");  //which text box has the comment
			var textVal = $("#" + thisOne).val(); //lets grab the comment
			var post_id = $(this).attr('data-x');
			//console.log(post_id);
			//console.log(textVal);

			$.ajax({
				type: "POST",
				url: "admin/comment.php",
				data: {
					'comment': textVal,
					'post_id': post_id
				},
				success: function(response) {
					location.reload();
				}
			});

			//console.log("submitted");
			e.preventDefault();
		});
	});
</script>
 
</head>
<body>
<div id="container">
<div id="banner"> 
 Blog
</div>

<div id="content">
<a href="index.php">All Posts</a>
