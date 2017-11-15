<?php
  include ('pages/header.php');
 ?>
<div class="content">
  <?php
    $routes = [
      'home'=>'./pages/home.php',
      'content'=>'./pages/content.php',
      'contact'=>'./pages/contact.php',
      'img'=>'./pages/galary.php'
    ];
    $my_page = @$_GET['page'];
    if (empty($my_page)) $routes['home'];
    else if (isset($routes[$my_page])) {include $routes[$my_page];
      } else {
       echo '404';
   }
   ?>
   <?php
     $arr = include './pages/arr.php';
     $my_art = @$_GET['art'];
     $num_art = substr_replace($my_art,'',0,3);
     $num_text = $num_art - 1;
     if (isset($arr[$num_text])) :
    ?>
    <div class="item">
      <h1><?php echo $arr[$num_text]['name'] ?></h1>
      <p><?php echo $arr[$num_text]['text'] ?></p>
    </div>
    <?php
      endif;
     ?>
     <?php
       $arr2 = include './pages/arr_img.php';
       $my_img = @$_GET['art2'];
      //  $num_art = substr_replace($my_art,'',0,3);
      //  $num_img = $my_img - 1;
       if (isset($arr2[$my_img])) :
      ?>
      <div class="img">
        <img src="<?= $arr2[$my_img] ?>" alt="">
      </div>
      <?php
        endif;
       ?>
</div>
<?php
  include ('./pages/footer.php');
 ?>
