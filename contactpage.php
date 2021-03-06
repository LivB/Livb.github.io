<!DOCTYPE html>
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
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
          </p>
      
          <p class="email">
            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
          </p>
      
          <p class="text">
           <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
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