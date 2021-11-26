<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>person name is <?= ucwords($personBio['name']) ;?></li>
        <li>person age is <?= $personBio['age'];?></li>
        <li>person name is <?= $personBio['isMarried'];?></li>
        <li>he is 
            <?php if ($personBio["isMarried"]) : ?>
                married
                <?php else: ?>
            
            <?php endif ?>
        </li>


    </ul>
</body>
</html>