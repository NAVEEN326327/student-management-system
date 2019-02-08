<!DOCTYPE HTML>
<html lang="en_US">
   <head>
       <meta charset="UTF-8">
       <title> Student Mangement System</title>
      <style>
          h2{
             color: white;
              text-shadow: 2px 2px 4px #000000;
          }
          h1{
             color:brown;
              text-shadow: 3px 3px 5px slateblue;
          }
          h3{
                color:brown;
            
              text-shadow: 3px 3px 5px slateblue;
          
          }
          body{ 
               background-color: beige;
              
               background-image: url("img_tree.png");
               background-repeat: no-repeat;
          }
          .header {
    background-color: #F1F1F1;
    text-align: center;
    padding: 20px;
}
     
          /* The navbar container */
.topnav {
    overflow: hidden;
    background-color: blue;
    padding-right: 0px;
    padding-top: .1px;
    padding-bottom: .1px;
}

/* Navbar links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    margin-right: 1px;
}

/* Links - change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
    
   
}
          .b {
            
              margin-left: auto;
          }

          #hel{
              color: blue;
              text-align: left;
              padding-left: 50px;
              
          }
          #he{
              padding-left: 150px;
              
          }
          #hell{
              padding-left: 0px;
          }
         
       </style>
    </head>
    
    <body>
       
     <h2 class="topnav" align="right" style="margin-right:60px;"><a href="login.php"> Admin Login</a></h2>
          
    <h1 class="topnav a"  align="center">Welcome to Student Management System</h1>
     
        <form id="he"  method="post" action"index.php">
       
        
        
           <td  colspan="2" align="left"> <h3 id="hell" align="left" >Student Information </h3>
         
         
          Choose Standard
              
                      <select name="std" required>Choose Semester : 
                          <option value="1">1st</option>
                          <option value="2">2nd</option>
                          <option value="3">3rd</option>
                          <option value="4">4th</option>
                          <option value="5">5th</option>
                          <option value="6">6th</option>
                          <option value="7">7th</option>
                          <option value="8">8th</option>
                    
                      </select>
            </td>      <br>
            <br>
         
         <tr>
            <td align="left">Enter Rollno</td>
               <td> <input type="text" name="rollno" required></td>
         </tr>
        <br>
            <br>
            <tr>
           <td colspan="2" align="center"><input class="b" type="submit" name="submit" vlaue="Show Info" ></td>
         </tr>
          
       
            
        </form>
        </div>
        <h1 id="hel">Summary </h1>
    </body>


</html>