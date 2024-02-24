 <?php

require('script.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Registracijska forma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">Kreirajte novi račun</h4>
      
<p class="text-success text-center"><?php echo $register; ?></p> <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?><" method="post">


        <!--//first name//-->
        <div class="form-group">
           <label for="email">Ime</label>
               
<input type="text" class="form-control" placeholder="Unesite Vaše ime" name="first_name" value="<?php echo $set_firstName;?>">

           <p class="err-msg">
            
<?php if($fnameErr!=1){ echo $fnameErr; }?>

           </p>
        </div>

        <!--//Last name//-->
        <div class="form-group">
            <label for="email">Prezime</label>
                
<input type="text" class="form-control" placeholder="Unesite Vaše prezime" name="last_name" value="<?php echo $set_lastName;?>">

            <p class="err-msg"> 
    
<?php if($lnameErr!=1){ echo $lnameErr; } ?>

            </p>
        </div>
        
        <!--// Email//-->
        <div class="form-group">
            <label for="email">Email:</label>
                
<input type="text" class="form-control" id="email" placeholder="Unesite Vaš email" name="email" value="<?php echo $set_email;?>">

            <p class="err-msg">
    
<?php if($emailErr!=1){ echo $emailErr; } ?>

            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label for="pwd">Lozinka:</label>
               
            <input type="password" class="form-control"  placeholder="Unesite lozinku" name="password"
            <p class="err-msg">
                
<?php if($passErr!=1){ echo $passErr; } ?>

            </p>
        </div>

        <!--//Confirm Password//-->
        <div class="form-group">
            <label for="pwd">Potvrda lozinke:</label>
            <input type="password" class="form-control" placeholder="Unesite ponovo lozinku" name="cpassword">
            <p class="err-msg">
                
<?php if($cpassErr!=1){ echo $cpassErr; } ?>

            </p>
        </div>
    
        <button type="submit" class="btn btn-danger" name="submit">Registruj se</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>

</body>
</html>