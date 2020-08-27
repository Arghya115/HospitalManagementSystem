<html>
<head><title>Hello</title></head>
<body >
    
    <?php $id = $_POST['id'] ; ?>
    
    <form action = "future_operations_(doctor).php" method="post">
    <input type = "SUBMIT" value = "Show future operations">
    <input type="hidden" name="id" value= "<?php echo $id ; ?>" >

    </form>
    
    
</body
</html>
