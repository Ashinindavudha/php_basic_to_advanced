<?php
   $entities = get_html_translation_table(HTML_ENTITIES);
   $translate = array_flip($entities);
   $string = "La pasta &eacute; il piatto pi&uacute; amato in Italia";
   echo strtr($string, $translate); 


   echo "<br><hr>";

   echo strtr("Hilla Warld", "ia", "eo");
   /*
   Definition and Usage
The strtr() function translates certain characters in a string.

Note: If the from and to parameters are different in length, both will be formatted to the length of the shortest.
*/
?>