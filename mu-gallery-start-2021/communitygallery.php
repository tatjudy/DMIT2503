<?php

include ("includes/header.php");

?>
<div class="row">
	<div class="col-md-12 clearfix">
		<h1>Gallery</h1>
		
		<?php 
        
        $result = mysqli_query($con, "SELECT * FROM users") or die (mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $user_id = $row['user_id'];
            $user_name = $row['user_name'];
            $filter = $_GET['filter'];
            switch($filter) {
                case("usergallery"):
                    $queryfilter = "WHERE mugallery.author_id = users.user_id";
                    $msg = "$user_name images";
                    break;
            }
    
            echo "<h1>$msg</h1>";
            echo "\n<div class=\"user-gallery\">";

            echo "\n<h2>$user_name</h2>";
            ?>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?filter=usergallery">More by <?php echo $user_name; ?></a>
            <?php
            echo "\n<div class=\"flex-container\">";
            //get the gallery images
            $result2 = mysqli_query($con, "SELECT * FROM mugallery WHERE author_id = '$user_id'") or die (mysqli_error($con));

            while($row = mysqli_fetch_array($result2)){ 
                $filename =  $row['filename'];
				$title =  $row['title'];
                $id =  $row['id'];
                echo "\n<div class=\"thumb\">";
				echo "\n\t<a href=\"display.php?id=$id\"><img src=\"images/thumbs-square/$filename\" class=\"img-thumbnail\"></a>";
				echo "<div class=\"thumb-title\">$title</div>";
				echo "\n</div>";
            }
            echo "\n</div>";

            echo "\n</div>\n\n";
        }

		?>
		 <br style="clear:both">
	</div>
	
</div>

<?php

include ("includes/footer.php");
?>