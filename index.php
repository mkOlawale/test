<?php

    $products = [
        ['name' => 'shirt', 'price' => 500],
        ['name' => 'ewu', 'price' => 50],
        ['name' => 'Trouser', 'price' => 1000],
        ['name' => 'ankara', 'price' => 120],
        ['name' => 'buba', 'price' => 210]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<?php  @include('header.php'); ?> <br> <br>
 
  <section>
  <div class="pizza_container">
    <div class="card">
        <img src="img/cake2.jpg" alt="Delicious Pizza" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Pepperoni Pizza</h3>
            <p class="card-email">contact@pizzashop.com</p>
            <p class="card-price">$15.99</p>
            <p class="card-ingredients">
                <strong>Ingredients:</strong> Pepperoni, mozzarella, tomato sauce, olive oil, oregano.
            </p>
        </div>
    </div>

    <div class="card">
        <img src="img/cake6.jpg" alt="Delicious Pizza" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Pepperoni Pizza</h3>
            <p class="card-email">contact@p.com</p>
            <p class="card-price">$15.99</p>
            <p class="card-ingredients">
                <strong>Ingredients:</strong> Pepperoni, mozzarella, tomato sauce, olive oil, oregano.
            </p>
        </div>
    </div>


</div>

  </section>

<?php  @include('footer.php'); ?>
</html>
