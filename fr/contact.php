<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Vivre et Aimer'; 
        $to = 'vivreetaimercoaching@gmail.com'; 
        $subject = 'Vivre et Aimer Message de '.$name;
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Veuillez entrer votre nom';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Mettez une adresse email valide';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Entrez votre message';
        }


 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Merci! Je resterai en contact</div>';
    } else {
        $result='<div class="alert alert-danger">Désolé y avait une erreur d&#39;envoyer votre message . Veuillez réessayer plus tard</div>';
    }
}
    }
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--/.bootstrap necessities/fonts/css/js files-->
  <title>Vivre et Aimer</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
  <script src="../js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="../Slider/js/jssor.js"></script>
  <script type="text/javascript" src="../Slider/js/jssor.slider.js"></script>
  <script type="text/javascript" src="../js/slider.js"></script>
  <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" href="../css/favicon.ico" sizes="192x192">
  <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,800italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
</head>
<body>
 <script src="../js/jqBootstrapValidation.js"></script>
 <script src="../js/contact_me.js"></script>



   <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <!---done to make it resposnive for smaller screens-->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#viv-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

        <!--this is where the brand rests-->
      <a class="navbar-brand" href="index.html"><img src='../css/fleurdelis.png' heigth='20px' width='20px'></a>
     <a class="navbar-brand" href="index.html">Vivre &amp; Aimer</a>
      <a class="navbar-brand" href="index.html"><img src='../css/fleurdelis.png' heigth='20px' width='20px'></a>
      </div><!--/.navbar head-->

    
    <div class="collapse navbar-collapse" id = "viv-navbar">
      <ul class="nav navbar-nav"> 
        <li class="current"><a href="index.html">Accueil</a></li>
        <li class="divider-vertical"></li>
        <li><a href="lifecoaching.html">Lifecoaching</a></li>
        <li><a href="overmij.html">Qui suis je?</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Langues <i class="fa fa-globe"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="../en/contact.php">English</a></li>
            <li><a href="../nl/contact.php">Nederlands</a></li>
            <li><a href="#">Français</a></li>

          </ul>
        </li>
    </ul>


    </div>
  </div>

  </div>


  </nav><!--/.navbar-->
  <div class="splash-screen">
    <div class="container-fluid">
      <div class = "row">
        <div class="col-md-6 col-md-offset-2 ">
          <h1 class="tag-line">Contact</h1>
        </div>
      </div>
      <div class = "row">
        <div class="col-md-6 col-md-offset-6">
          <h2 class = "tag-line2">Pour me joindre:</h2>
        </div>
      </div>
    </div>
  </div>


  <!--container start-->
   <div class="container-fluid main-content doc">
 <!-- Contacts -->
 <div id="contacts" style="margin-top:20px;">
   <div class="row">  
     <!-- Alignment -->
  <div class="col-sm-offset-3 col-sm-6">
     <!-- Form itself -->
          <form class="form-horizontal" role="form" method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Prénom et Nom" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 
  </div>
      </div>
    </div>
   </div>
  
  
 <!-- JS FILES -->


</div>
    <div class="footer">
      <div class="container-fluid">
        <div class="row">
        <div class='col-md-11 col-md-offset-1 footer-begin'>
             <p><strong>Contactez nous</strong></p>
             </div>
          <div class="col-md-2 col-md-offset-1 footer-info"><strong>
            <a href="https://www.facebook.com/patricia.quessada.9" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a>
          </div>
          <div class="col-md-2 footer-info" >
            <a href="https://www.linkedin.com/pub/patricia-quessada/18/a83/199" target="_blank"><i class="fa fa-linkedin-square"></i> Linkedin</a>
          </div>
          <div class="col-md-3 footer-info">
            <a href="mailto:vivreetaimercoaching@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i> vivreetaimercoaching@gmail.com</a>
          </div>
          <div class="col-md-2 footer-info col-md-offset-1">
            <a href="#"><i class="fa fa-mobile"></i> 06&#45;39217820</a>
          </strong></div>
        </div>
    </div>
</div>






</body>
</html>
