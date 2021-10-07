<?php
    /* Because the authentication prompt needs to be invoked twice,
       embed it within a function.
    */

    function authenticate_user() 
    {
        header('WWW-Authenticate: Basic realm="Secret Stash"');
        header("HTTP/1.0 401 Unauthorized");
        exit;
    }

    /* If $_SERVER['PHP_AUTH_USER'] is blank, the user has not yet been
       prompted for the authentication information.
    */
    if (! isset($_SERVER['PHP_AUTH_USER'])) {
        authenticate_user();
    }else{

        $db = new mysqli("localhost", "root", "", "mysql_basic");
        //var_dump($db->error);
        $stmt = $db->prepare("SELECT username, pswd FORM logins WHERE username=? AND pswd= ?");
        //var_dump($stmt);
        $stmt->bind_param('ss', $_SERVER['PHP_AUTH_USER'], password_hash($_SERVER['PHP_AUTH_PW'], PASSWORD_DEFAULT));
        $stmt->execute();
        $stmt->store_result();
        //$stmt->close();
        if($stmt->num_rows == 0)
        authenticate_user(); 
    }