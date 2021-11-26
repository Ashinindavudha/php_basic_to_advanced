<?php
require 'pageloader.php';
// user crate.php
// user crate function
// function create() {
//     // if the form was submitted
//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//         // include the config file
//         require_once '../../config/config.php';
//         // get the posted data
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         // check if the data is complete
//         if ($name && $email && $password) {
//             // set the data in an array
//             $data = array(
//                 'name' => $name,
//                 'email' => $email,
//                 'password' => $password
//             );
//             // create a new user object
//             $user = new User($data);
//             // create the user
//             if ($user->create()) {
//                 echo 'User created';
//             } else {
//                 echo 'User not created';
//             }
//         } else {
//             echo 'The data is incomplete';
//         }
//     }
// }

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $user = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
//     $result = mysqli_query($conn, $user);
//     if ($result) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $user . "<br>" . mysqli_error($conn);
//     }
// }

$users = $query->insert('users', 'id');
