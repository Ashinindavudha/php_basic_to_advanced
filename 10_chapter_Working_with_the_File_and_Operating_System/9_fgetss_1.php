<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("test.htm","r");
echo fgetss($file);
fclose($file);
?>
<!-- Technical Details
Return Value:	A single line read from the file on success, FALSE on EOF or error
PHP Version:	4.0+ -->

</body>
</html>