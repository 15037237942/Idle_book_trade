<?php
 $path = $_SERVER['PHP_SELF'];
 $arr = explode('/',$path);
 $root = '/'.$arr[1];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <style>
            html,body {
                height:100%;
                width:100%;
                margin: 0px;                
                padding: 0px;
            }
            .foot{
                width: 100%;
                height: 75px;                
                overflow-y:hidden;
            }
            .foot-bg{
                width: 100%;
                height:75px;                
                display: block;
            }
            .foot1{
                font-family: "黑体";
                color:#01afbe;;
                font-size: 12px;
                position: absolute;
                margin-top:-52px;
                left: 38%;
            }

        </style>
	</head>
		<div class="foot">	
            <img src="<?php echo $root?>/home/public/img/long-nav-bg.png" class="foot-bg" />	
            <div class="foot1">			
                <p>
                    Copyright © 
                    <?php
                        echo  date('Y');
                    ?>	
                    WAN GUOYU. All rights reserved.
                </p>
			</div>
		</div>
</html>



