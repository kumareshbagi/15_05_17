<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */
   include_once 'conn.php';
    // Escape user inputs for security

     $ename = $_POST['ename'];
$eorg = $_POST['eorg'];
$edesc = $_POST['edesc'];
$evenue = $_POST['evenue'];
$estart = $_POST['estart'];
$eend = $_POST['eend'];
$eurl = $_POST['eurl'];
$eticket = $_POST['eticket'];
$contact = $_POST['contact'];
$eseat = $_POST['eseat'];
$ebanner = $_POST['ebanner'];
$eterms = $_POST['eterms'];

echo"<br/>";
//echo"$ename";

    

    // attempt insert query execution

    $sql = "INSERT INTO EVENTS (ENAME, EORGANIZER, EDESCRIPTION,EVENUE,ESTARTDATE,EENDDATE,EURL,ETICKETPRICE,CONTACTNUMBER,NOOFSEATS,EVENTBANNER,TERMSANDCONDITIONS)
VALUES ('$ename', '$eorg', '$edesc','$evenue','$estart','$eend','$eurl','$eticket','$contact','$eseat','$ebanner','$eterms')";
    if(mysqli_query($conn, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

    }

    

    // close connection

    mysqli_close($conn);

    ?>