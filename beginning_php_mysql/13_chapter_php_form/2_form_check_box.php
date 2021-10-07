<?php
        if (isset($_POST['submit'])) {
            echo "you like the following languages: <br>";
            if (is_array($_POST['languages'])) {
                foreach ($_POST['languages'] as $language) {
                    $language = htmlentities($language);
                    echo "$language<br>";
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form with check in php</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        What's your favoriate programming language: <br> (chack all that apply) <br>
        <input type="checkbox" name="languages[]" value="csharp">C# <br>
        <input type="checkbox" name="languages[]" value="javascript">javascript <br>
        <input type="checkbox" name="languages[]" value="perl"> Perl <br>
        <input type="checkbox" name="languages[]" value="php"> PHP <br>
        <input type="submit" name="submit" value="Submit!">
</form>
</body>
</html>