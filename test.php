<?php
echo "hello world";

    $connection = mysqli_connect('localhost', 'Hackerslord', 'Hackerslord8774', 'php_pizza');

    if(!$connection){
        echo 'Connection is invalid, please try again later bruh';
    }

      //  select from db
      $selecting = 'SELECT email, title, ingredients, id FROM pizza ORDER BY Created_at';

      $res = mysqli_query($connection, $selecting);
  
      $pizzas = mysqli_fetch_all($res, MYSQLI_ASSOC);

        mysqli_free_result($res);
      mysqli_close($connection);
  echo $_SERVER['PHP_SELF'];
    //   print_r($pizzas);
?>