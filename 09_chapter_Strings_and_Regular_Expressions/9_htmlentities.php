<?php
   $advertisement = "Coffee at 'Cafè Française' costs $2.25.";
   echo  htmlentities($advertisement);

   echo "<br><hr>";

   $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
   echo htmlentities($str);

   /* Definition and Usage
The htmlentities() function converts characters to HTML entities.

Tip: To convert HTML entities back to characters, use the html_entity_decode() function.

Tip: Use the get_html_translation_table() function to return the translation table used by htmlentities().
*/
?>