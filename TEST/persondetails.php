<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:600|Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./persondetails.css">
<link rel="icon" href="./favicon.svg">
</head>
<body>
<style>
    /* Cool infinite background scrolling animation.
 * Twitter: @kootoopas
 */
/* Exo thin font from Google. */
@import url(https://fonts.googleapis.com/css?family=Exo:100);
/* Background data (Original source: https://subtlepatterns.com/grid-me/) */
/* Animations */
@-webkit-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-moz-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-o-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-webkit-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@-moz-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@-o-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
/* Main styles */
body {
  margin-top: 13.5rem;
  color: #999;
  font: 400 16px/1.5 exo, ubuntu, "segoe ui", helvetica, arial, sans-serif;
  text-align: center;
  /* img size is 50x50 */
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
  -webkit-animation: bg-scrolling-reverse 0.92s infinite;
  /* Safari 4+ */
  -moz-animation: bg-scrolling-reverse 0.92s infinite;
  /* Fx 5+ */
  -o-animation: bg-scrolling-reverse 0.92s infinite;
  /* Opera 12+ */
  animation: bg-scrolling-reverse 0.92s infinite;
  /* IE 10+ */
  -webkit-animation-timing-function: linear;
  -moz-animation-timing-function: linear;
  -o-animation-timing-function: linear;
  animation-timing-function: linear;
}
body::before {
  content: "Candidate Profile";
  font-size: 8rem;
  font-weight: 400;
  font-style: normal;
}
  </style>
<!-- partial:index.partial.html -->
<?php
if(isset($_POST['submit'])){
    session_start();
    // File upload configuration 
    $_POST['submit'];
    $email = $_POST['submit'];
    $server = "localhost";
    $user = "rootuser";
    $password = "123123test";
    $db = "projectband_prod";
    // Create connection
    $conn = mysqli_connect($server,$user,$password,$db);
    $sql = "SELECT * FROM students WHERE email = '$email'";
    $res_data = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($res_data)){
          //here goes the data   //mysqli_close($conn);
          $_SESSION['name'] = $row['name'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['image'] = $row['profilepicture'];
          $_SESSION['desc'] = $row['points'];
          $_SESSION['id'] = $row['id'];
          $_SESSION['newbie'] = $row['newbie'];
          $_SESSION['plot'] = $row['plot'];
          $_SESSION['favlang'] = $row['language'];
          $_SESSION['favtech'] = $row['tech'];
          $_SESSION['cpp'] = $row['cpp'];
          $_SESSION['clang'] = $row['clang'];
          $_SESSION['java'] = $row['java'];
          $_SESSION['javascript'] = $row['javascript'];
          $_SESSION['php'] = $row['php'];
          $_SESSION['python'] = $row['python'];
      }
      echo "<title>",$_SESSION['name'];}?>'s Details</title>
<div class="container" style="<?php if($_SESSION["desc"] >=3000) {
                              echo 'background-image: linear-gradient(90deg,#aa0000,#b15da2,#aa0000,#b15da2);
                              background-size: 300% 100%;';
                              }
                              else if($_SESSION['desc'] <= 2999 && $_SESSION['desc'] >=2600) {
                              echo 'background-image: linear-gradient(90deg,#ff2400,#b15da2,#ff2400,#b15da2);
                              background-size: 300% 100%;';
                              }
                              else if($_SESSION['desc'] <= 2599 && $_SESSION['desc'] >=2400) {
                                echo 'background-image: linear-gradient(90deg,#ff7777,#b15da2,#ff7777,#b15da2);
                                background-size: 300% 100%;';
                                }
                                else if($_SESSION['desc'] <= 2399 && $_SESSION['desc'] >=2300) {
                                  echo 'background-image: linear-gradient(90deg,#b660cd,#b15da2,#b660cd,#b15da2);
                                  background-size: 300% 100%;';
                                  }
                                  else if($_SESSION['desc'] <= 2299 && $_SESSION['desc'] >=2100) {
                                    echo 'background-image: linear-gradient(90deg,#aaaaff,#b15da2,#aaaaff,#b15da2);
                                    background-size: 300% 100%;';
                                    }
                                    else if($_SESSION['desc'] <= 2099 && $_SESSION['desc'] >=1900) {
                                      echo 'background-image: linear-gradient(90deg,#800080,#b15da2,#800080,#b15da2);
                                      background-size: 300% 100%;';
                                      }
                                      else if($_SESSION['desc'] <= 1899 && $_SESSION['desc'] >=1600) {
                                        echo 'background-image: linear-gradient(90deg,#0101a2,#b15da2,#0101a2,#b15da2);
                                        background-size: 300% 100%;';
                                        }
                                        else if($_SESSION['desc'] <= 1599 && $_SESSION['desc'] >=1400) {
                                          echo 'background-image: linear-gradient(90deg,#03a8a8,#b15da2,#03a8a8,#b15da2);
                                          background-size: 300% 100%;';
                                          }
                                          else if($_SESSION['desc'] <= 1399 && $_SESSION['desc'] >=1200) {
                                            echo 'background-image: linear-gradient(90deg,#008000,#b15da2,#008000,#b15da2);
                                            background-size: 300% 100%;';
                                            }
                                            else if($_SESSION['desc'] <= 1199) {
                                              echo 'background-image: linear-gradient(90deg,#808080,#b15da2,#808080,#b15da2);
                                              background-size: 300% 100%;';
                                              }
                              ?>">

  <section id="Profile" style="<?php if($_SESSION["desc"] >=3000) {
                              echo 'background-image: linear-gradient(90deg,#aa0000,#b15da2,#aa0000,#b15da2);
                              background-size: 300% 100%;';
                              }
                              else if($_SESSION['desc'] <= 2999 && $_SESSION['desc'] >=2600) {
                                echo 'background-image: linear-gradient(90deg,#ff2400,#b15da2,#ff2400,#b15da2);
                                background-size: 300% 100%;';
                                }
                                else if($_SESSION['desc'] <= 2599 && $_SESSION['desc'] >=2400) {
                                  echo 'background-image: linear-gradient(90deg,#ff7777,#b15da2,#ff7777,#b15da2);
                                  background-size: 300% 100%;';
                                  }
                                  else if($_SESSION['desc'] <= 2399 && $_SESSION['desc'] >=2300) {
                                    echo 'background-image: linear-gradient(90deg,#b660cd,#b15da2,#b660cd,#b15da2);
                                    background-size: 300% 100%;';
                                    }
                                    else if($_SESSION['desc'] <= 2299 && $_SESSION['desc'] >=2100) {
                                      echo 'background-image: linear-gradient(90deg,#aaaaff,#b15da2,#aaaaff,#b15da2);
                                      background-size: 300% 100%;';
                                      }
                                      else if($_SESSION['desc'] <= 2099 && $_SESSION['desc'] >=1900) {
                                        echo 'background-image: linear-gradient(90deg,#800080,#b15da2,#800080,#b15da2);
                                        background-size: 300% 100%;';
                                        }
                                        else if($_SESSION['desc'] <= 1899 && $_SESSION['desc'] >=1600) {
                                          echo 'background-image: linear-gradient(90deg,#0101a2,#b15da2,#0101a2,#b15da2);
                                          background-size: 300% 100%;';
                                          }
                                          else if($_SESSION['desc'] <= 1599 && $_SESSION['desc'] >=1400) {
                                            echo 'background-image: linear-gradient(90deg,#03a8a8,#b15da2,#03a8a8,#b15da2);
                                            background-size: 300% 100%;';
                                            }
                                            else if($_SESSION['desc'] <= 1399 && $_SESSION['desc'] >=1200) {
                                              echo 'background-image: linear-gradient(90deg,#008000,#b15da2,#008000,#b15da2);
                                              background-size: 300% 100%;';
                                              }
                                              else if($_SESSION['desc'] <= 1199) {
                                                echo 'background-image: linear-gradient(90deg,#808080,#b15da2,#808080,#b15da2);
                                                background-size: 300% 100%;';
                                                }
                              ?>">

    <div id="user" class="text-center">
      <div id="img"><img id="img" src="<?php echo $_SESSION['image'];?>"></div>
      <div id="name">
        <h1><?php echo $_SESSION['name'];?></h1>
        <div class="progress">
        <div class="progress">
              <?php if($_SESSION['desc'] >=3000) {
                echo '<div role="progressbar" style="background: #a00;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>TOP #1 BAND [ETERNAL FLAME]</b></div>';
              }
                else if ($_SESSION['desc'] <= 2999 && $_SESSION['desc'] >=2600) {
                  echo '<div role="progressbar" style="background: #FF2400;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>TOP #2 BAND [INFINITY]</b></div>';
              }
              else if ($_SESSION['desc'] <= 2599 && $_SESSION['desc'] >=2400) {
                echo '<div role="progressbar" style="background: #f77;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>TOP #3 BAND [ULTRA INSTINCT]</b></div>';
            }
            else if ($_SESSION['desc'] <= 2399 && $_SESSION['desc'] >=2300) {
              echo '<div role="progressbar" style="background: #B660CD;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
          }
          else if ($_SESSION['desc'] <= 2299 && $_SESSION['desc'] >=2100) {
            echo '<div role="progressbar" style="background: #aaf;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
        }
        else if ($_SESSION['desc'] <= 2099 && $_SESSION['desc'] >=1900) {
          echo '<div role="progressbar" style="background: #800080;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
      }
      else if ($_SESSION['desc'] <= 1899 && $_SESSION['desc'] >=1600) {
        echo '<div role="progressbar" style="background: rgb(1,1,162,0.80);width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
    }
    else if ($_SESSION['desc'] <= 1599 && $_SESSION['desc'] >=1400) {
      echo '<div role="progressbar" style="background: #03a8a8;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
  }
  else if ($_SESSION['desc'] <= 1399 && $_SESSION['desc'] >=1200) {
    echo '<div role="progressbar" style="background: #008000;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
}
else if ($_SESSION['desc'] <= 1199) {
  echo '<div role="progressbar" style="background:#808080;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>[ NEW KID IN THE TOWN ] BAND</b></div>';
}
                ?>
            </div>
        <h4><?php echo $_SESSION['desc'],' Unique ID = ',$_SESSION['id'];?></h4>
      </div>
      <?php if($_SESSION['newbie'] == 1){
        echo '<div id="social"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-check fa-stack-1x" title="Person is Verified!"></i></span></a></div><style>
        i[class*="2x"] {
            color: green;
        }</style>';
      } else{
        echo '<div id="social"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-times fa-stack-1x" title="Person is Unverified!"></i></span></a></div>
        <style>
        i[class*="2x"] {
            color: red;
        }</style>';
      }
      ?>
    </div>
    <div id="content">
      <div id="navigation">
        <ul role="tablist" class="nav nav-tabs nav-justified">
          <li role="presentation"><a href="#about" role="tab" data-toggle="tab"><i class="fa fa-user fa-3x"></i></a></li>
          <li role="presentation"><a href="#skills" role="tab" data-toggle="tab"><i class="fa fa-eye fa-3x"></i></a></li>
          <li role="presentation"><a href="#contact" role="tab" data-toggle="tab"><i class="fa fa-envelope-o fa-3x"></i></a></li>
        </ul>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
        <div class="tab-content">
          <div id="about" role="tabpanel" class="tab-pane fade">
            <h2>Details of <?php echo $_SESSION['name']; ?>:</h2>
            <h3>Band Score : <?php echo $_SESSION['desc'];?></p></h2>
            <h3>My favorite languages :</h3>
            <p style="font-size: 22px;
    color: #fffffff5;"><?php echo $_SESSION['favlang'];?></p>
            <style>
              .grid-container {
                display: grid;
                grid-template-columns: auto auto auto;
                background-color: #ead3d3;
                padding: 10px;
                margin: -50px;
              }
              .grid-item {
                background-color: rgb(255 255 255 / 98%);
                border: 1px solid rgba(0, 0, 0, 0.8);
                padding: 20px;
                font-size: 30px;
                text-align: center;
              }
              </style>
            <div class="grid-container">
              <div class="grid-item"><?php if($_SESSION['clang']){ echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" style="max-height: 133px;min-height: 133px;"/>';} else { echo '
            <i class="devicon-c-plain" style="font-size : 70px;"></i>
          ','Inactive';}?></div>
              <div class="grid-item"><?php if($_SESSION['cpp']){ echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" style="max-height: 133px;min-height: 133px;"/>';} else { echo '
            <i class="devicon-cplusplus-plain" style="font-size : 70px;"></i>
            ','Inactive';}?></div>
            <div class="grid-item"><?php if($_SESSION['java']){ echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" style="max-height: 133px;min-height: 133px;"/>';} else { echo '
            <i class="devicon-java-plain" style="font-size : 70px;"></i>
          ','Inactive';}?></div>
            <div class="grid-item"><?php if($_SESSION['python']){ echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original-wordmark.svg" style="max-height: 133px;min-height: 133px;"/>';} else { echo '
            <i class="devicon-python-plain" style="font-size : 70px;"></i>
          ','Inactive';}?></div>
            <div class="grid-item"><?php if($_SESSION['javascript']){ echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" style="max-height: 133px;min-height: 133px;"/>';} else { echo '
            <i class="devicon-javascript-plain" style="font-size : 70px;"></i>
          ','Inactive';}?></div>
            <div class="grid-item"><?php if($_SESSION['php']){ echo '<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" style="max-height: 133px;min-height: 133px;"/>';} else { echo '
            <i class="devicon-php-plain" style="font-size : 70px;"></i>
          ','Inactive';}?></div>
            </div>
            <p style="font-size: 22px;
    color: #fffffff5; margin-top: 70px;"><strong>Achievements Unlocked</strong></p>
            <h3>My favorite technologies :</h3>
            <p style="font-size: 22px;
    color: #fffffff5;"><?php echo $_SESSION['favtech'];?></p>
          <div>
            <?php echo $_SESSION['plot']; ?>
          </div>
          <div id="skills" role="tabpanel" class="tab-pane fade">
            <h3><?php echo $_SESSION['name']; ?>'s Band</h3>
            <h4><?php echo $_SESSION['name']; ?> is Verified & Band score is <?php echo $_SESSION['desc']; ?></h4>
            <div class="progress">
              <?php if($_SESSION['desc'] >=3000) {
                echo '<div role="progressbar" style="background: #a00;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>TOP #1 BAND [ETERNAL FLAME]</b></div>';
              }
                else if ($_SESSION['desc'] <= 2999 && $_SESSION['desc'] >=2600) {
                  echo '<div role="progressbar" style="background: #FF2400;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>TOP #2 BAND [INFINITY]</b></div>';
              }
              else if ($_SESSION['desc'] <= 2599 && $_SESSION['desc'] >=2400) {
                echo '<div role="progressbar" style="background: #f77;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>TOP #3 BAND [ULTRA INSTINCT]</b></div>';
            }
            else if ($_SESSION['desc'] <= 2399 && $_SESSION['desc'] >=2300) {
              echo '<div role="progressbar" style="background: #B660CD;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
          }
          else if ($_SESSION['desc'] <= 2299 && $_SESSION['desc'] >=2100) {
            echo '<div role="progressbar" style="background: #aaf;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
        }
        else if ($_SESSION['desc'] <= 2099 && $_SESSION['desc'] >=1900) {
          echo '<div role="progressbar" style="background: #800080;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
      }
      else if ($_SESSION['desc'] <= 1899 && $_SESSION['desc'] >=1600) {
        echo '<div role="progressbar" style="background: rgb(1,1,162,0.80);width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
    }
    else if ($_SESSION['desc'] <= 1599 && $_SESSION['desc'] >=1400) {
      echo '<div role="progressbar" style="background: #03a8a8;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
  }
  else if ($_SESSION['desc'] <= 1399 && $_SESSION['desc'] >=1200) {
    echo '<div role="progressbar" style="background: #008000;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
}
else if ($_SESSION['desc'] <= 1199) {
  echo '<div role="progressbar" style="background:#808080;width: 100%; color:#fff;font-size: 20px;" class="progress-bar" background-color:=""><b>BAND</b></div>';
}
                ?>
            </div>
            </div>
          </div>
          <div id="contact" role="tabpanel" class="tab-pane fade">
            <h3>Contact Details Provided :</h3>
            <form action="https://formsubmit.co/b1a729e69eb62b3755794a531c5fcbaf" method="POST" />
              <div class="form-group">
                <input type="hidden" name="_cc" value="<?php echo $_SESSION['email'];?>">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_autoresponse" value="Thank you for contacting!">
                <label for="name">Name <small>Required</small></label>
                <input id="name" required="required" type="text" placeholder="Your Name" class="form-control input-lg"/>
                <label for="email">Email <small>Required</small></label>
                <input id="email" required="required" type="email" placeholder="Email Address" class="form-control input-lg"/>
                <label for="text">Message <small>Required | 280 Character Limit</small></label>
                <textarea id="text" name="message" required="required" placeholder="Type Your Message Here" rows="3" maxlength="280" class="form-control input-lg"></textarea>
                <button type="submit" class="btn btn-default btn-lg">Send a Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<style>
    /* Footer */

    .footer {
    position:fixed;
    bottom:0;
    left:0;
    width:100%;
    height: 60px;
    background-color: rgba(218, 213, 240, 0.30);
    }
    .footer-text-left {
    padding: 15px;
    font-size: 25px;
    padding-left: 40px;
    float: left;
    word-spacing: 20px;
    }
    .footer:hover {
    background-color:rgba(218, 213, 240, 0.73);
    }
    a.menu:hover {
        font-size: 22px;
    }
    .fa-cog:hover {
    color: #ac7ed6;
    }
    .fa-home:hover {
    color: #ac7ed6;
    }
    </style>
    <div class="footer">
    <p class="footer-text-left">
    <a href="./home.php" class="menu"><i class="fa fa-home" aria-hidden="true" title="Home" style="font-size:28px"></i></a>
    <a href="./searchpeople.php" class="menu"><i class="glyphicon glyphicon-search aria-hidden="true" title="Person Finder" style="font-size:25px"></i></a>
    <a href="./aboutpranjal.php" class="menu"><i class="glyphicon glyphicon-info-sign aria-hidden="true" title="About Pranjal" style="font-size:25x"></i></a>
    <a href="https://github.com/yyppsk/Lost-and-Found-Reporting-Platform" class="menu"><i class="fa fa-github aria-hidden="true" title="Github Repo" style="font-size:28px"></i></a>
    
  </p>
</div>
</body>
</html>