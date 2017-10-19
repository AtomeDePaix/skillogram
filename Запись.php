<?php
    require ('header.php');
?>
<?php

  $date = date('H:i:s');
file_put_contents('date.txt', $date, FILE_APPEND | LOCK_EX);

  function getUserName($first_name, $last_name = null) {
    $result = $first_name;
      if ($last_name) {
          $result = $result . ' ' . $last_name;
      }
      return $result;
         {
      return trim($first_name . ' ' . $last_name);
      }
    }

  echo getUserName ('');
?>
<div class="form">
   <form entype="miltipart/form-data" metod="post">
      Имя
      <input type="text" name="Имя" required placeholder="Ваше имя"/>
      Фамилия
      <input type="text" name="Фамилия" />
   </form>
</div>

?>

<?php 
//var_dump($_FILES);
file_put_contents('test.txt', json_encode($_FILES));

//var_dump(json_decode(file_get_contents('test.txt')));

if (!file_exists('images/photos')){
    mkdir ('images/photos', 0777, true);
}

if($_FILES['photo'] && file_exists($_FILES['photo']['tmp_name']))
  {
   $filename = $_FILES['photo']['name']; //photo003.png
   $tmp = explode('.', $filename); //['photo003', 'png']
   $extension = end($tmp);
   $allowed_extension = ['jpg', 'png', 'jpeg', 'bmp'];
     if (!in_array($extension, $allowed_extension)) {
     	die('Неверный тип файла!');
     }
   $path = 'images/photos/photo.' . $extension;
   move_uploaded_file($_FILES['photo']['tmp_name'], $path);
   $text=$_POST;
}
?>
<div class="form">
   <form action="" method="post" enctype="multipart/form-data">
	   <input type="file" name="photo" />
   </form>
</div>
<div class="form">
   <form action="" method="post" enctype="multipart/form-data">
     Комментарий
     <input type="text" name="post_text" maxlength="300"/><br/>
     <input type="submit" value="Опубликовать" />
   </form>
</div>
<?php
    require ('footer.php');
?>

