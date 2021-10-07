<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">ID</label>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="Name">Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <label for="">Address</label>
<input type="text" name="address" value="<?php echo $address; ?>">
<button class="btn" type="submit" name="save" >Update</button>
    </form>
</body>
</html>