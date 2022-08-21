<php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Project Band Platform</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="lboard_section">
        <div class="lboard_tabs">
          <div class="tabs">
            <ul>
              <li data-li="today">TOP 5 CODERS</li>
            </ul>
          </div>
        </div>
        <div class="lboard_wrap">
        <div class="lboard_item today" style="">
          <?php
            $server = "localhost";
            $user = "rootuser";
            $password = "123123test";
            $db = "projectband_prod";
            $var = 1;
            // Create connection
            $conn = mysqli_connect($server,$user,$password,$db);
            $sql = "SELECT * FROM students";
            $result = mysqli_query($conn, $sql);
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 5;
                $offset = ($pageno-1) * $no_of_records_per_page;
                $total_pages_sql = "SELECT COUNT(*) FROM students";
                $result = mysqli_query($conn,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $sql = "SELECT * FROM students ORDER BY points DESC LIMIT $offset, $no_of_records_per_page";
                $res_data = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($res_data)){
                    //here goes the data
                //mysqli_close($conn);
              ?>
                    <div class="lboard_mem">
                      <div class="img">
                      <img src="<?php echo $row['profilepicture']; ?>" style="max-height: 100px;width:100px; border-radius:50%;" alt="user_image">
                      </div>
                      <div class="name_bar">
                        <p><span><?php echo $var++?></span><?php echo $row['name']; ?></p>
                        <div class="bar_wrap">
                        <div class="inner_bar" style="width: 100%; background-color:
                          <?php if ($row['points'] >=3000) {
                            echo "#a00";
                          }
                            else if ($row['points'] <= 2999 && $row['points'] >=2600) {
                              echo "#FF2400";
                          }
                          else if ($row['points'] <= 2599 && $row['points'] >=2400) {
                            echo "#f77";
                        }
                        else if ($row['points'] <= 2399 && $row['points'] >=2300) {
                          echo "#B660CD";
                      }
                      else if ($row['points'] <= 2299 && $row['points'] >=2100) {
                        echo "#aaf";
                    }?>
                          "></div>
                        </div>
                      </div>
                      <div class="points"><?php echo $row['points']; ?></div>
                </div>
                    <?php
                }
                ?>
          </div>
        </div>
      </div>
    </div>
    <style>
  th {
    background-color: white;
    color: #000;
    text-align:center;
    font-size : 18px;
}
* {
  box-sizing: border-box;
}
.animated-gradient {
  animation: animateBg 20s linear infinite;
  background-image: linear-gradient(0deg,#d3ffd1,#ffccd1,#f6c7ff,#f4ff9e,#d3ffd1,#ffccd1);
  background-size: 100% 500%;
}
@keyframes animateBg {
  0% { background-position: 0% 0%; }
  100% { background-position: 0% 100%; }
}
body {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  background-image: linear-gradient(
  5deg,
  hsl(314deg 73% 85%) 0%,
  hsl(343deg 100% 85%) 2%,
  hsl(26deg 100% 76%) 4%,
  hsl(50deg 100% 59%) 8%,
  hsl(78deg 93% 67%) 13%,
  hsl(138deg 100% 79%) 47%,
  hsl(170deg 97% 81%) 83%,
  hsl(186deg 78% 85%) 90%,
  hsl(194deg 65% 79%) 94%,
  hsl(201deg 55% 74%) 98%,
  hsl(208deg 46% 69%) 100%
);
}

.img {
  margin: auto;
  text-decoration: none;
  outline: none;
  cursor: pointer;
  position: relative;
  background: #009aff;
  border-radius: 50%;
  animation: pulse 2s ease-out infinite;
}

span {
  margin: auto;
  color: transparent;
  text-shadow: 0 0 0 white;
}

.img::after {
  content: "";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  border-radius: 50%;
  position: absolute;
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0px #bd219194,
      0 0 0 0px #ff077c;
  }
  50% {
    transform: scale(0.95);
  }
  100% {
    box-shadow: 0 0 0 15px rgba(118, 33, 26, 0), 0 0 0 30px rgba(0, 210, 255, 0);
  }
}

  </style>
<table class="table table-hover text-center table-bordered table border='1'" style="">
                    <thead class="thead-light text-#000">
                         <tr>
                             <th class="" style="width: 7vw ;" >Serial</th>
                             <th class="py-3 text-#000 "style="width: 20% ;">Name</th>
                             <th id = "emid" class="py-3 text-#000 "style="width: 30% ;">Achievements</th>
                             <th id = "dtls" class="py-3 text-#000">Band</th> 
                             <th class="py-3 text-#000" >Picture</th>
                         </tr>
                    </thead>
                    <tbody>
    <?php
    $server = "localhost";
    $user = "rootuser";
    $password = "123123test";
    $db = "projectband_prod";
    $var2=1;
    // Create connection
    $conn = mysqli_connect($server,$user,$password,$db);
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM students";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM students ORDER BY points DESC LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
        //mysqli_close($conn);
    ?>
    <tr>
                        <td style="vertical-align: middle;"> <font color=#000 size='4vw'> <?php echo $var2++?> </td>
                        <td style="vertical-align: middle;"> <font color=#000 size='4vw'><b><?php echo $row['name']; ?> </b></td>
                        <td style="vertical-align: middle;"> <font color=#000 size='4vw'><img src="<?php if($row['newbie']){
                            echo "http://localhost/ProjectBand/TEST/Achievements/Welcome-Egg.png";
                            echo '"style=max-height:85px;width:85px;opacity:100%;"';
                            echo " title='New egg in the House!'";
                          } ?>
                          <br><img src="<?php if($row['tencontest']){
                            echo "http://localhost/ProjectBand/TEST/Achievements/TEN CONTEST.png";
                            echo '"style=max-height:85px;width:85px;opacity:100%;"';
                            echo " title='Ten Contests Participation!'";
                          } ?>"</td>
                        <td style="vertical-align: middle; background-color:
                        <?php if ($row['points'] >=3000) {
                            echo "#a00";
                          }
                            else if ($row['points'] <= 2999 && $row['points'] >=2600) {
                              echo "#FF2400";
                          }
                          else if ($row['points'] <= 2599 && $row['points'] >=2400) {
                            echo "#f77";
                        }
                        else if ($row['points'] <= 2399 && $row['points'] >=2300) {
                          echo "#B660CD";
                      }
                      else if ($row['points'] <= 2299 && $row['points'] >=2100) {
                        echo "#aaf";
                    }
                    ?> ">
                    <font id="band" color=#000 size='4vw'><?php echo $row['points']; ?> </td>
                    <td style="
                        <?php if ($row['points'] >=3000) {
                            echo "
                              
                              background-image: linear-gradient(90deg,#aa0000,#b15da2,#aa0000,#b15da2);
                              background-size: 300% 100%;
                            }
                            ";
                          }
                            else if ($row['points'] <= 2999 && $row['points'] >=2600) {
                              echo "
                              
                              background-image: linear-gradient(90deg,#ff2400,#b15da2,#ff2400,#b15da2);
                              background-size: 300% 100%;
                            }
                            ";
                          }
                          else if ($row['points'] <= 2599 && $row['points'] >=2400) {
                            echo "
                              
                              background-image: linear-gradient(90deg,#ff7777,#b15da2,#ff7777,#b15da2);
                              background-size: 300% 100%;
                            }
                            ";
                        }
                        else if ($row['points'] <= 2399 && $row['points'] >=2300) {
                          echo "
                              
                              background-image: linear-gradient(90deg,#b660cd,#b15da2,#b660cd,#b15da2);
                              background-size: 300% 100%;
                            }
                            ";
                      }
                      else if ($row['points'] <= 2299 && $row['points'] >=2100) {
                        echo "
                              
                              background-image: linear-gradient(90deg,#aaaaff,#b15da2,#aaaaff,#b15da2);
                              background-size: 300% 100%;
                            }
                            ";
                    }
                    ?> "><img src="<?php echo $row['profilepicture']; ?>" style="max-height:130px;width:130px;border: 2px solid #fff; border-radius:50%; opacity:85%">
                      
                        <?php   /*
                        if($row['status']==0){  
                        echo "
                        <span style='font-size: 3rem;'>
                        <span style='color: #4BB543; align-items:center;'>
                        <i class='fas fa-user-check fa-sm' title='Person is found!'></i>
                      </span>
                      ";  
                        }else{  
                        echo "
                        <span style='font-size: 3rem;'>
                        <span style='color: #FA113D; align-items:center;'>
                        <a href='https://lostandfoundsys.tawk.help/' style='color: #FA113D;'><i class='fas fa-user-check fa-sm' title='Person is Not found! Report them here.'></i></a>
                      </span>
                        ";
                        }  
                        ?>   
                      </td>
                    </tr>
                    */
                    }

                    ?>
                   </tbody>
                </table>
    
    <ul class="pagination pagination-lg" style="justify-content: space-evenly;">
      <button><li><a href="?pageno=1">First</a></li></button>
      <button><li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a
          href="<?php if($pageno <= 1){ echo '#'; } else { echo "
          ?pageno=".($pageno - 1); } ?>"
          >Previous</a
        >
      </li></button>
      <button><li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a
          href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "
          ?pageno=".($pageno + 1); } ?>"
          >Next</a
        >
      </li></button>
      <button><li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li></button>
    </ul>
<!-- Pagination Button Css -->
<style>
  button {
    position: relative;
    outline: none;
    text-decoration: none;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    text-transform: uppercase;
    height: 45px;
    width: 180px;
    opacity: 1;
    background-color: #ffffff;
    border: 1px solid rgba(22, 76, 167, 0.6);
  }
  button span {
    color: #164ca7;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.7px;
  }
  button:hover {
    animation: rotate 0.7s ease-in-out both;
  }
  button:hover span {
    animation: storm 0.7s ease-in-out both;
    animation-delay: 0.06s;
  }

  @keyframes rotate {
    0% {
      transform: rotate(0deg) translate3d(0, 0, 0);
    }
    25% {
      transform: rotate(3deg) translate3d(0, 0, 0);
    }
    50% {
      transform: rotate(-3deg) translate3d(0, 0, 0);
    }
    75% {
      transform: rotate(1deg) translate3d(0, 0, 0);
    }
    100% {
      transform: rotate(0deg) translate3d(0, 0, 0);
    }
  }
  @keyframes storm {
    0% {
      transform: translate3d(0, 0, 0) translateZ(0);
    }
    25% {
      transform: translate3d(4px, 0, 0) translateZ(0);
    }
    50% {
      transform: translate3d(-3px, 0, 0) translateZ(0);
    }
    75% {
      transform: translate3d(2px, 0, 0) translateZ(0);
    }
    100% {
      transform: translate3d(0, 0, 0) translateZ(0);
    }
  }
</style>
    <script src="scripts.js"></script>
    <!-- partial:index.partial.html -->
    <footer class="new_footer_area bg_color">
      <div class="new_footer_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget company_widget wow fadeInLeft"
                data-wow-delay="0.2s"
                style="
                  visibility: visible;
                  animation-delay: 0.2s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                <p>
                  Don't miss any updates of our new templates and extensions.!
                </p>
                <form
                  action="#"
                  class="f_subscribe_two mailchimp"
                  method="post"
                  novalidate="true"
                  _lpchecked="1"
                >
                  <input
                    type="text"
                    name="EMAIL"
                    class="form-control memail"
                    placeholder="Email"
                  />
                  <button class="btn btn_get btn_get_two" type="submit">
                    Subscribe
                  </button>
                  <p class="mchimp-errmessage" style="display: none"></p>
                  <p class="mchimp-sucmessage" style="display: none"></p>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget about-widget pl_70 wow fadeInLeft"
                data-wow-delay="0.4s"
                style="
                  visibility: visible;
                  animation-delay: 0.4s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                <ul class="list-unstyled f_list">
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Android App</a></li>
                  <li><a href="#">ios App</a></li>
                  <li><a href="#">Desktop</a></li>
                  <li><a href="#">Projects</a></li>
                  <li><a href="#">Our tasks</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget about-widget pl_70 wow fadeInLeft"
                data-wow-delay="0.6s"
                style="
                  visibility: visible;
                  animation-delay: 0.6s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                <ul class="list-unstyled f_list">
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Term &amp; conditions</a></li>
                  <li><a href="#">Reporting</a></li>
                  <li><a href="#">Documentation</a></li>
                  <li><a href="#">Support Policy</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget social-widget pl_70 wow fadeInLeft"
                data-wow-delay="0.8s"
                style="
                  visibility: visible;
                  animation-delay: 0.8s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                <div class="f_social_icon">
                  <a href="#" class="fab fa-facebook"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-linkedin"></a>
                  <a href="#" class="fab fa-pinterest"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_bg">
          <div class="footer_bg_one"></div>
          <div class="footer_bg_two"></div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-7">
              <p class="mb-0 f_400">
                © Project Band by Team HashInclude & <br />Pranjal Pratap Singh
                2022 All rights reserved.
              </p>
            </div>
            <div class="col-lg-6 col-sm-5 text-right">
              <p>
                Made by <i class="icon_heart"></i> people at
                <a
                  href="https://www.canva.com/design/DAFD5G0iowA/xl95jHEoHd2qrzUd4FT0Xg/view?website#2:introducing"
                  target="_blank"
                  >Team HashInclude</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- partial -->
  </body>
</html>
</php>