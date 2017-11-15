<?php
  $arr = include 'arr_img.php';
  for ($i = 0;$i<count($arr);$i++):
 ?>
 <div class="galary">
   <a href="?art2=<?=$i?>">
     <img src="<?=$arr[$i]?>" alt="">
   </a>
 </div>
 <?php endfor;?>
