<?php
// importing database connection 
@include('config/database.php');

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($connection, $_POST['deleted_id']);

        $sql_to_delete = "DELETE FROM pizza WHERE id=$id_to_delete";

        if(mysqli_query($connection, $sql_to_delete)){
            header('Location: index.php');
        }else{
            echo "There's an error with the connection" . mysqli_error($connection);
        }

    }

  if(isset($_GET['id'])){
    
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    // sql
    $sql = "SELECT * FROM pizza WHERE id=$id";
    // result

    $result = mysqli_query($connection, $sql);

    $pizza = mysqli_fetch_assoc($result);

    mysqli_close($connection);
    mysqli_free_result($result);
   
  }

?>
<!DOCTYPE html>
<html lang="en">
<?php  @include('header.php'); ?> <br> <br>
<?php if($pizza): ?>
<div class="card" style="margin: 0 auto;">
        <img src="img/cake2.jpg" title="Delicious pizza" alt="Delicious Pizza" class="card-image">
        <div class="card-content">
            <h3 class="card-title">Title: <b> <?php echo htmlspecialchars($pizza['title']);?></b></h3>
            <p class="card-email">Created By: <b> <?php echo htmlspecialchars($pizza['email']);?></b></p>
            <p class="card-email">Created_at: <b><?php echo htmlspecialchars(date($pizza['Created_at']));?></b> </p>
            <h2>Ingredients :</h2>
            <b class="card-email"><?php echo htmlspecialchars($pizza['ingredients']);?></b>
            
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <input type="hidden" name="deleted_id" value="<?php echo $pizza['id']?>">
                <input type="submit" name="delete" value="delete" class="btn_info" style="margin-left: 120px;">
            </form>
        </div>
</div>
 <?php else: ?>
    <h1>There's no such pizaa here</h1>
 <?php endif; ?>
 <?php  @include('footer.php'); ?>
</html>