<?php
    include "../db.php"
	$conn = mysqli_connect("localhost", "root", "", "last") or die(); 
	$count2 = $_POST['commentNewCount']; //count2 use to define how much notification shown when button clicked
			$sql = "SELECT * FROM latest_new  order by a_id desc LIMIT $count2";
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
	
?>