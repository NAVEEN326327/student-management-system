<?php
session_start();

     if(isset($_SESSION['uid']))
     {
         echo "" ;
     }
     else
     {
         header ("location: ../login.php");
     }
     
?>

<?php
    include('header.php');
    include('titlehead.php');
?>

 
<br>


<form method="post" action="addstudent.php" enctype="multipart/form-data">
    <table>
        
        <tr>
            <th>Roll No</th>
           <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
        </tr>
        
        <tr>
            <th>Full Name</th>
           <td><input type="text" name="name" placeholder="Enter name" required></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter city" required></td>
        </tr>
        
        <tr>
            <th>Contact no</th>
            <td><input type="text" name="pcon" placeholder="Enter the Contact no" required></td>
        </tr>
        
        <tr>
            <th>Semester</th>
            <td><input type="number" name="std" placeholder="Enter Standard" required></td>
        </tr>
        
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required></td>
        </tr>
        
        <tr>
           <td colspan="2" align="center"> <input type="submit" name="submit" value="Submit"> </td>
        </tr>

    </table>
   </form>

 

<?php
     if(isset($_POST['submit']))
     {
         include('../dbcon.php');
         $rollno=$_POST['rollno'];
         $name=$_POST['name'];
         $city=$_POST['city'];
         $pcon=$_POST['pcon'];
         $std=$_POST['std'];
         $imagename = $_FILES['simg']['name'];
         $tempname =$_FILES['simg']['tmp_name'];
         
         move_uploaded_file($tempname,"../dataimg/$imagename");
         
         $qry="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES('$rollno' , '$name' , '$city' , '$pcon' , '$std','$imagename' )";
         $run=mysqli_query($con,$qry);
         echo $qry;
         if($run==true)
         {
               ?>
               <script>
                   alert('Data Inserted Successfully.');
               </script>
               <?php
         }
     }
?>