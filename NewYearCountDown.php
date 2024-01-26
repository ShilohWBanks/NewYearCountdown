<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      $now = new DateTime();
      $new_year = new DateTime('next year Jan 1st');
      $span = $now -> diff($new_year);
      $md_left = $span->format('%m months, %d days');
      $hms_left = $span->format('%h:%I:%S');
      
      if ($now ->format('MD') == '0101') {
      echo 'Happy New Year!';
      } else if ($now->format('MD') == '1231') {
          echo "$hms_left remaining to the New Year.";
      } else {
          echo "$md_left, and $hms_left remaining to the New Year.";
      }              
        ?>
    </body>
</html>
