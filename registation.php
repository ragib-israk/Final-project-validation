  <?php 
session_start();
    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "customer";

    $f1 = $_POST['fname'];
        $f2 = $_POST['lname'];
        $f3 = $_POST['gender'];
        $f4 = $_POST['dof'];
        $f5 = $_POST['address'];
        $f6 = $_POST['uname'];
        $f7 = $_POST['password'];
        $f8 = $_POST['mail'];
        $f9 = $_POST['mobo'];
        $f10 = $_POST['rmail'];


    // Mysqli object-oriented
    $con1 = new mysqli($host, $user, $pass, $db);

    if($con1->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $con1->connect_error;
    }
    else {
        echo "Database Connection Successful!";
        $st1 = $con1->prepare("insert into user (fname, lname, gender,dof,address, uname, password,mail, mobo,rmail) VALUES ( '$f1', '$f2','$f3', '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10')");
       
    
        $status = $st1->execute();

        if($status) {
            echo "Data Insertion Successful.";
        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $con1->error;
        }

    }
    

    $con1->close();
    ?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form action="#" method="POST" onsubmit=" return formValidation()">
    <h1>Registertion-form</h1>
        <table>
        <tr>
            <td><label>firstName: </label></td>
            <td><input type="text" name="fname" class="firstname" ></td>
              
               <span id="fname"></span>

              
        </tr>

        <tr>
            <td><label>lastname: </label></td>
            <td><input type="text" name="lname" class="lastname"></td>
             <span id="lname"></span>
               
        </tr>
        
        
        <tr>
            <td><label>Gender: </label></td>
            <td><input type="radio" name="gender" class="gender">male</td>
             <span id="gender"></span>
              
        </tr>


        <tr>
            <td><label>Gender: </label></td>
            <td><input type="radio" name="gender" class="gender">female</td>
           
            <span id="gender"></span>
        </tr> 

        <tr>
            <td><label>Date of Birth: </label></td>
            <td><input type="date" name="dof" class="dof"></td>
               <span id="dof"></span>
        </tr>

        <tr>
            <td><label>Address: </label></td>
            <td><input type="text" name="address" class="address"></td>
             <span id="address"></span>
        </tr>
<tr>
            <td><label>UserName: </label></td>
            <td><input type="text" name="uname" class="uname"></td>
              <span id="uname"></span>
        </tr>


        
        <tr>
            <td><label>Password: </label></td>
            <td><input type="password" name="password" class="password"></td>
              <span id="password"></span>
        </tr>
        <tr>
            <td><label>Email: </label></td>
            <td><input type="email" name="mail" class="mail"></td>
               <span id="mail"></span>
        </tr>
        <tr>
            <td><label>Mobile Number: </label></td>
            <td><input type="text" name="mobo"class="mobo" ></td>
                <span id="mobo"></span>
        </tr>   
<tr>
            <td><label>RecoveryEmail: </label></td>
            <td><input type="email" name="rmail" class="rmail" ></td>
                <span id="rmail"></span>
        </tr>    




        <tr>
            
            <td align="right">
                 <input type="submit" name="set"> 
                    <input type="reset" name="" value="Reset">
                   
        
        </tr>
        </table>

    
    
    </form>
    
    <form method="go">
        

      <?php
    if(isset($_go["done"]))
{
    echo "<script>location.href='login.php'</script>";
}
 ?>
 </form>


<script src="validation.js"></script>




</body>
</html>