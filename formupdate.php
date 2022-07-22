<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="updatelogic.php" method="post">
     	<h2>INSERTION</h2>
     	<?php if (isset($POST['error'])) { ?>
     		<p class="error"><?php echo $POST['error']; ?></p>
     	<?php } ?>

          <?php if (isset($POST['success'])) { ?>
               <p class="success"><?php echo $POST['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($POST['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $POST['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($POST['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $POST['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<center><button type="submit">Submit</button></center>
     </form>
</body>
</html>