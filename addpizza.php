<?php

// i will be pushing errors to an associative array from here

$email = $title = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');
  if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        $errors['email'] = "an email is required";
    }else{
        // $our_email = htmlspecialchars($_POST['email']);
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "A valid email address is required";
        }
    }
    if(empty($_POST['title'])){
        $errors['title'] = "pizza is required";
    }else{
        // $our_email = htmlspecialchars($_POST['title']);
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/' ,$title)){
            $errors['title'] = "Title must be letter and space only";
        }
    }
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = "at least one ingredents is required";
    }else{
        // $our_email = htmlspecialchars($_POST['email']);
        $ingredients = $_POST['ingredients'];
        // the regular expression is not correct
        // it is requesting for comma and space while i have already use coma seperated already
        if(!preg_match('/^([a-zA-Z\s]+) (,*\s*[a-zA-Z\s]*$/' ,$ingredients)){
            $errors['ingredients'] = " ingredients must be comma seperated list";
        }
    }

    if(array_filter($errors)){
        echo "There's an error";
    }else{
        header('Location: index.php');
    }
    
  }

?>
<!DOCTYPE html>
<html lang="en">
<?php  @include('header.php'); ?> <br> <br>
<div class="form-container">
        <h2>Add the Rceipe</h2>
        <form action="addpizza.php" method="POST">
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email)?>" placeholder="Enter your email">
                <div style="color: red;"><?php echo $errors['email'];?></div>
            </div>
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title)?>" placeholder="Enter recipe title">
                <div style="color: red;"><?php echo $errors['title'];?></div>
            </div>
            <div class="input-group">
                <label for="ingredients">Ingredients</label>
                <input id="ingredients" name="ingredients" value="<?php echo htmlspecialchars($ingredients)?>" placeholder="List ingredients here" rows="5" />
                <div style="color: red;"><?php echo $errors['ingredients'];?></div>
            </div>
            <div class="input-group">
                <button type="submit" name="submit">Submit Recipe</button>
            </div>
        </form>
    </div>

<?php  @include('footer.php'); ?>
</html>