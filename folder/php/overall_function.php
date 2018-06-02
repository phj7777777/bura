<?php

include "../db.php";

function displayNotification(){
    global $con; //global include
    $sql = "SELECT * FROM  latest_new order by a_id desc LIMIT 3"; //only display first 3 from notification
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			echo'
			<div class="col-md-4">
				<a href="article/article.php?id='.$row['a_id'].'" target="_blank">
				  <img class="article_image" src="article/'.$row['a_image'].'" alt="Lights" style="height:300px">
					<h4 class="title">'.$row['a_title'].'</h4>
				</a>
			</div>';	
		}
		
	}
	else{ 
		echo "<h3 class='text-center'>There are no available content....</h3>";
	}   
}
   

    

?>
