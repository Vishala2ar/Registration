<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>

	<link rel="stylesheet" type="text/css" href="fb_style.css">
</head>
<body>
     <!-- The <form> tag is used to create an HTML form. -->
     <!-- specifies where to send the form-data when a form is submitted.

action should be in # or same file name if it is in same page. (or)if it is in different file action should be in that particular file name.
 -->
 <!-- This method is used to transfer data securely using HTTP headers. -->
 <!-- In POST method, values are not visible in the URL. -->

     <form action="fb-check.php" method="post">   
          
  <!-- The <div> tag defines a division or a section in an HTML document. The <div> tag is used as a container for HTML elements - which is then styled with CSS  -->
    
          <div class="container">
     <h1>facebook</h1>
</div>
<div class="row">
     <p>Facebook helps you connect and share with the people in your life.<p>
     </div>

     <?php if (isset($POST['error'])) { ?>
          <p class="error"><?php echo $POST['error']; ?></p>
     <?php } ?>

     <?php if (isset($POST['success'])) { ?>
          <p class="success"><?php echo $POST['success']; ?></p>
     <?php } ?>

<!--  isset() method in PHP to test the form is submitted successfully or not.  -->
<!-- isset() function checks whether a variable is set, which means that it has to be declared and is not NULL. -->
          <label>User Name</label>
         <?php if (isset($POST['user_name'])) { ?>
          <!-- <input type="text"  defines a single-line text field. -->
          <!--  placeholder is a container that is used to display content, such as text, table, clip art, chart, etc -->
               <input type="text" 
                      name="user_name" 
                      placeholder="Name"><br>
               
                      value="<?php echo $POST['user_name']; ?>"><br>
                      <!--echo $POST  used to collect form data after submitting an HTML form with method="post". -->
          
          
                      <?php }else{ ?>
               <input type="text" 
                      name="user_name" 
                      placeholder="Name"><br>
          <?php }?>     


          <label>Email</label>
          <?php if (isset($POST['Email'])) { ?>
               <input type="text" 
                      name="Email" 
                      placeholder="enter your email address"><br>
                     
                      value="<?php echo $POST['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="Email" 
                      placeholder="enter your email address"><br>
          <?php }?>


     	<label>phone</label>
          <?php if (isset($POST['phone'])) { ?>
     	<input type="text" 
                 name="phone" 
                 placeholder="enter your phone number"><br>

                 value="<?php echo $POST['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="phone" 
                      placeholder="enter your phone number"><br>
          <?php }?>


          
          <label>Password</label>
          <input type="password" 
                 name="password" 
                 placeholder="Password"><br>


                 <center><button type="submit">Create New Account</button></center><br>
             
                    <div class="a"><a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0">Forgotten Password</a></div>
                    <hr style="width:100%;text-align:left;margin-left:0">
                    <div class="C_BTN" > 
         <a href="https://www.facebook.com/"> Login </a>
          </div>
          </form>
</body>
</html>
