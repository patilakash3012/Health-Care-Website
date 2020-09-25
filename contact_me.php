<?php
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $email=$_POST['email'];
           $phone=$_POST['phone'];
          $message=$_POST['message'];

          $to='sanketbkulkarni6413@gmail.com';
          $subject='Feedback Form';
          $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Your feedback is: "."\n\n".$message;
          $headers="From: ".$email;

          if(mail($to ,$subject , $message , $headers)){
             echo "<h1>Sent Successfully ! Thank You"." ".$name."Thank  you for your valuable feedback!</h1>";
            }
          else{
            echo "Something went wrong!";
         }
          }

  ?>
