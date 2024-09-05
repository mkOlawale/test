<?php
    $connection = mysqli_connect('localhost', 'Hackerslord', 'Hackerslord8774', 'php_pizza');

    if(!$connection){
        echo 'Connection is invalid, please try again later bruh';
    }

      //  select from db
      $selecting = 'SELECT email, title, ingredients, id FROM pizza ORDER BY Created_at';

      $res = mysqli_query($connection, $selecting);
  
      $pizzas = mysqli_fetch_all($res, MYSQLI_ASSOC);
    //   print_r($pizzas);
?>