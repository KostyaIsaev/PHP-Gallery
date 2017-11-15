<?php
  $arr = include 'arr.php';
  for ($i = 0;$i<count($arr);$i++):
 ?>
 <div class="statya">
   <h3><?=$arr[$i]['name']?></h3>
   <p><?=$arr[$i]['text']?></p>
   <a href="?art=<?=$arr[$i]['url']?>">Читать дальше</a>
 </div>
 <?php endfor;?>
