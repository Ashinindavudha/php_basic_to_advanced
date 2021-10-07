<?php
require_once('1_connection.php');


$sql = "INSERT INTO users(firstname, lastname, email) VALUES('Ashin', 'Indavudha', 'ashin@gmail.com'),
('Myo', 'Khing', 'myokhing@gmail.com'),
('lin', 'thu', 'linthu@gmail.com'),
('Mg', 'AungThu', 'aungthu@gmail.com'),
('Ko', 'Myo', 'komyo@gmail.com')
";


if ($conn->query($sql) === TRUE) {
    echo "user table ထဲကို ဒေတာထဲ့တာ အောင်မြင်ပါသည်";
}else{
    echo " Error ဒေတာထဲ့တာ မအောင်မြင်ပါ" . "<br>" .$conn->error;
}
