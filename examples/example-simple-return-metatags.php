<?php
    include '../src/gwtdata.php';
    try {
        $email = "username@gmail.com";
        $passwd = "******"; 

        # If hardcoded, don't forget trailing slash!
        $website = "http://www.domain.com/";

        $gdata = new GWTdata();
        if($gdata->LogIn($email, $passwd) === true)
        {
            $results = $gdata->LookupCSVSimple($website, "html-suggestions", "content-problems-type-dl", "\d+probtype", "&probtype=10");
            var_dump($results);
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
?>
