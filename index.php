<?php

    @include('config/database.php');
    //  select from db
    $selecting = 'SELECT email, title, ingredients, id FROM pizza ORDER BY Created_at';

    $res = mysqli_query($connection, $selecting);

    $pizzas = mysqli_fetch_all($res, MYSQLI_ASSOC);

    // print_r($pizzas);
    mysqli_free_result($res);
    mysqli_close($connection);

?>
<!DOCTYPE html>
<html lang="en">
<?php  @include('header.php'); ?> <br> <br>
 
  <section>
  <div class="pizza_container">
    <?php foreach($pizzas as $piza) : ?>
    <div class="card">
        <img src="img/cake2.jpg" alt="Delicious Pizza" class="card-image">
        <div class="card-content">
            <h3 class="card-title"><?php echo htmlspecialchars($piza['title']);?></h3>
            <p class="card-email"><?php echo htmlspecialchars($piza['email']);?></p>
            <ul class="card-ingredients" style="list-style: none; font-weight: bold;">
                <?php foreach(explode(',', $piza['ingredients']) as $p): ?>
                <li><?php echo htmlspecialchars($p)?></li>  
                <?php endforeach?>
            </ul>
        </div>
        <button class="btn_info"><a href="details.php?id=<?php echo $piza['id'];?>">more info</a></button>
    </div>
    <?php endforeach ?>
</div>

  </section>

<?php  @include('footer.php'); ?>
</html>
