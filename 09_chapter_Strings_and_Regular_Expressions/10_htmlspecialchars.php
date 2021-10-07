<?php
   $input = "I just can't get <<enough>> of PHP!";
   echo htmlspecialchars($input);

   echo "<br><hr>";

   $str = "this is some <b>bold</b> text.";
   echo htmlspecialchars($str);
   /*
Definition and Usage
The htmlspecialchars() function converts some predefined characters to HTML entities.

The predefined characters are:

& (ampersand) becomes &amp;
" (double quote) becomes &quot;
' (single quote) becomes &#039;
< (less than) becomes &lt;
> (greater than) becomes &gt;
Tip: To convert special HTML entities back to characters, use the htmlspecialchars_decode() function.

   */
?>