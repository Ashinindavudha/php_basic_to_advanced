<?php
echo substr(base_convert(fileperms("home/www"), 10, 8), 3);