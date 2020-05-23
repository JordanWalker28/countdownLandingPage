<?php
  if (isset($_POST['submit'])) {
    $from = $_POST['email'];
    $to = 'jordanswalker28@gmail.com';
    $subject = "Email signup";
    $body = "please sign me up";

    if(!$_POST['email']) {
      $emailError = '<div class="text-danger">Please entar a valid email address</div>';
    }

    if(!$emailError) {
      mail ($to, $subject, $body, $from); {
        $result = '<div class="text-success">Thank you, we will keep in touch!</div>';
      }
    }

  }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    </head>

    <body>

      <section id="logo">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
                <img src="img/my-logo.png" class="img-fluid"/>
            </div>
          </div>
        </div
      </section>

      <section id="intro">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>I'm working hard, i'll be ready in...</p>
            </div>
          </div>
        </div>
      </section>

      <section id="counter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="countdown"><p id ="countdown"></div>
            </div>
          </div>
        </div>
      </section>

      <section id="icons">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="list-inline">
                <a href="https://www.facebook.com/jordan.walker.79677471/" target="blank"><li class="list-inline-item"><i class="fab facebook fa-facebook fa-3x"></i></li></a>
                <a href="https://www.instagram.com/jordanw_2801/" target="blank"><li class="list-inline-item"><i class="fab instagram fa-instagram fa-3x"></i></li></a>
                <a href="https://github.com/JordanWalker28" target="blank"><li class="list-inline-item"><i class="fab github fa-github fa-3x"></i></li></a>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="signup">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <form class="form-inline" role="form" method="post" action="#signup">
                  <input type="email" class="form-control form-control-sm" name ="email" placeholder="email address">
                  <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Sign-Up</button>
                </form>

                <?php echo $emailError;?>
                <?php echo $result; ?>
                
            </div>
          </div>
        </div>
      </section>

      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/countdown.js"></script>

    </body>
</html>
