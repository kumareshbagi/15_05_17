<?php  //Start the Session
session_start();
include_once 'conn.php';
$name = $_POST['name'];
$password = $_POST['password'];
    //echo $name;
//    echo $password;
//if (isset($_POST['login'])) {

    //$email = mysqli_real_escape_string($conn, $_POST['name']);
   // $password = mysqli_real_escape_string($conn, $_POST['password']);
$sql1 = "SELECT * FROM ADMIN WHERE `NAME` = '$name' and PASSWORD = '$password'";
    $result =mysqli_query($conn,$sql1);

    if ($row = mysqli_fetch_assoc($result)) {
       
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['fname'];
        echo "Login Successfully";
       
       
    }
else {
        echo "";
    }
//}
?>
<html>
    <h2>
    Register events: 
    </h2>
    <form action="addevent.php" method="post"  enctype="multipart/form-data">
        <table border="0" width="500" height="20%" align="center" class="demo-table">
        <tr>
            <td>EVENT NAME:</td>
            <td><input type="text"  name="ename"/></td>
        </tr>
<tr>
    <td>EVENT ORAGNIZER:</td>
    <td><input type="text" name="eorg"/></td>
        </tr>
    <tr>
   <tr>
        <td>EVENT DESCRIPTION:</td>
        <td><input type="text"  name="edesc"/></td>
        </tr>
        <td>EVENT VENUE:</td>
        <td><input type="text"  name="evenue"/></td>
        </tr>
    <tr>
        <td>EVENT START DATE:</td>
        <td><input type="text"  name="estart"/></td>
        </tr>   
        <tr>
           
        <td>EVENT END DATE:</td>
        <td><input type="text" name="eend"/></td>
        </tr>
   
        <tr>
        <td>EVENT URL:</td>
        <td><input type="text"  name="eurl"/></td>
        </tr>
   
        
        <tr>
        <td>EVENT TICKET PRICE:</td>
        <td><input type="text"  name="eticket"/></td>
        </tr>
            <tr>
     <tr>
        <td>CONTACT NUMBER:</td>
        <td><input type="text"  name="contact"/></td>
        </tr>
            <tr>

        <td>EVENT NO OF SEATS:</td>
        <td><input type="text"  name="eseat"/></td>
        </tr>
   
       <tr>
            <td>EVENT BANNER:</td>
            <td>     <input type="text"  name="ebanner" ></td>
        </tr>
        
        <tr>
        <td>EVENT TERMS:</td>
        <td><input type="text"  name="eterms"/></td>
        </tr>
        
       
    
            
   
        <tr>
            <td> <input type="submit"  value="submit" name="submit"></td>
</tr>
            </table>
</form>
</html>
