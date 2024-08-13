<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題11</title>
 </head>
 
 <body>
     <p>
         <?php
         
         $data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
 
         foreach ($data as $value){
            echo $value; .'<br>';
         }
         ?>
    </p>
</body>
</html>