<?php
if (!empty($_POST)){
  extract($_POST);
  $valid = true;
  if(empty($name)){
    $valid=false;
    $nameerror="I need your name to receive your message";
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
    $valid=false;
    $emailerror="Please enter a valid email...";
  }
  if(empty($email)){
    $valid=false;
    $emailerror="I need your email to answer";
  }
  if(empty($message)){
    $valid=false;
    $messageerror="I won't be able to answer if your message is empty!";
  }

  if($valid){
    $to = "hsobarne@liv.ac.uk";
    $subject = $name." sent a message";
    $headers = "From: $name <$email>";
    $message = stripslashes($message);
    $name = stripslashes($name);
    if (mail($to,$subject,$message,$headers)) {
      $error = "Your message has been sent. I will reply as quickly as possible
       :)";
      unset($name);
      unset($email);
      unset($message);
    }
    else{
      $error = "Ouch... Sorry, there is a technical problem. Please use my email adress to contact me";
    }
  }
}

?><!DOCTYPE html>
<html>
  <head>
    <link href="./normalize.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./bootstrap-files/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./bootstrap-files/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="./my_website.css">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Poiret One">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Waiting for the Sunrise">
  <title>Liverpool Photo Blog</title>      
  </head>
  <body>
    <div class="whole-header">
      <div class="inner-headblock"
        <h1 id="main_title">
         <a id=title_link href="index.html">Liverpool Vision</a> 
        </h1>
        <h2 id="sub_heading">
          Photographers from around the word
        </h2> 
      </div>
    </div>  
           <ul id="menu_whole">
                    <li class="menu_item"><a href="index.html">Home</a></li>
                    <li class="menu_item"><a href="#">About</a></li>
                    <li class="menu_item"><a href="#"> Portfolio</a></li>
                    <li class="menu_item"><a href="contactpage.html"> Contact</a></li>
            </ul>

  <body>
    <div id="form-main">
      <div id="form-div">
        <form action="mail.php" class="form" id="form1" method="post">
          <p class="name">
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" required value="<?php if(isset($name)) echo $name; ?>"/>
          </p>
      
          <p class="email">
            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" required value="<?php if(isset($email)) echo $email; ?>"/>
          </p>
      
          <p class="text">
           <textarea name="message" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment" required>><?php if(isset($message)) echo $message; ?></textarea>
           <?php if (isset($nameerror))echo "<div id=\"texterror\">$nameerror</div>"; ?>
          <?php if (isset($emailerror))echo "<div id=\"texterror\">$emailerror</div>"; ?>
          <?php if (isset($messageerror))echo "<div id=\"texterror\">$messageerror</div>"; ?>
          <?php if(isset($error)){ echo "<div id=\"validation-message\">$error</div>"; } ?>
          </p>
          <div class="submit">
            <input type="submit" value="SEND" id="button-blue"/>
              <div class="ease"></div>
          </div>
        </form>
    </div>
  </div>
   </body>

</html>