 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>

   <form action="PHP/controller/insertuser.php"  method="post">
     <fieldset>
       <legend>make new user:</legend>
      User name:<br>
       <input type="text" name="username" value="insert name"><br>
       User email:<br>
       <input type="text" name="usermail" value="insert@email.com"><br>

       User password:<br>
        <input type="text" name="userpassword" value="1234"><br><br>
       <input type="submit" value="Submit">
     </fieldset>
   </form>

<?php include "PHP/view/showall.php"; ?>


 </body>

 </html>
