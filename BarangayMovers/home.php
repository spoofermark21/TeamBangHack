<?php
    session_start();

    if (!isset($_SESSION['isLogin'])) {
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BRGYmovers.PH</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap/css/clean-blog.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid"  style="background-color:#94EB65; " >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#homepage">BrgyMovers.PH</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#homepage">HOME</a></li>
                    <li><a href="#projectsection">PROJECTS</a></li>
                    <li><a href="#gallerysection">GALLERY</a></li>
                    <li><a href="#aboutUs">ABOUT US</a></li>
                    <li><a href="../functions/logout.php">LOG-OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="page-header" style = "background-image: url('../images/bg.png'); background-size:100%; height: 600px;background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading"><br/>
                        <center><img src="../images/logo.png" width="100%"/></center>
                        <hr class="small"/>
                        <span class="subheading"><font color="white"><center>Our progress as a nation can be no swifter than our progress in education. The human mind is our fundamental resource<br/><br/>- John F. Kennedy</center></font></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="row jumbotron" id="homepage">
        <div class="col-md-3" style="background-color:white; border-radius:10px;"><br/>
               <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Paknaan</a></li>
                  <li><a href="#">Looc</a></li>
                  <li><a href="#">Tipolo</a></li>
                  <li><a href="#">Guizo</a></li>
                  <li><a href="#">Maguikay</a></li>
                  <li><a href="#">Wireless</a></li>
                  <li><a href="#">Subangdako</a></li>
                  <li><a href="#">Paradise</a></li>
               </ul>
        </div>

        <div class="col-md-8" style="border-radius:10px;">
               <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1000">
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="active item">
                              <img src="../images/pic1.jpg" width="100%" height="20%" style="border-radius:10px;" alt="First slide">
                              <div class="container">
                                <div class="carousel-caption">
                                    <h4> Project: Clean Green Project </h4>
                                    <h5> Sponsors: Juan Dela Cruz, Naidy Versoza, Mark Sibi, Lyneth Cutamora</h5>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <img src="../images/pic2.jpg" width="100%" height="20%" style="border-radius:10px;" alt="Second slide">
                              <div class="container">
                                <div class="carousel-caption">
                                  <h4> Project: Coastal Clean-up</h4>
                                  <h5> Sponsors: Juan Dela Cruz, Naidy Versoza, Mark Sibi, Lyneth Cutamora</h5>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <img src="../images/3.jpg" width="100%" height="20%" style="border-radius:10px;" alt="Third slide">
                              <div class="container">
                                <div class="carousel-caption">
                                  <h4> Project: Tree of Life </h4>
                                  <h5> Sponsors: Juan Dela Cruz, Naidy Versoza, Mark Sibi, Lyneth Cutamora</h5>
                               </div>
                              </div>
                            </div>
                          </div>
                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
               </div>
        </div>
    </div>       
    <div class="row" id="projectsection">
        <div class="col-md-12"  style="background-color:#E4E4E4; height:auto;">
            <div class="row">
                <div class="container">
                    <h4  style="float:left;"><br/><br/><br/><br/><font color="darkblue">Upload Concerns</font></h4>
                  <img src="../images/logo.png" width="35%" style="float:right;">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 .col-md-offset-1">
                        <div class="row" style="border-radius:20px;">
                            <div class="col-md-12" style="border-radius:20px;"><br/>
                                <form method="post" action="../functions/upload.php" role="form" enctype="multipart/form-data" class="facebook-share-box">
                                    <div class="share"  style="border-radius:20px;">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" ><i class="fa fa-file"></i>Topic</div>
                                            <div class="panel-body"  style="width: 70%;">
                                                <div class="" >
                                                    <textarea name="title"  cols="40" rows="10" id="status_message" class="form-control message" style="height: 35px; overflow: hidden;" placeholder="Enter title of your concern."></textarea>
                                                </div>
                                            </div>
                                            <div class="panel-heading" ><i class="fa fa-file"></i>Location</div>
                                            <div class="panel-body"  style="width: 70%;">
                                                <div class="">
                                                    <select class="form-control" name="cmb_brgy">
                                                        <option name = "brgy" value="brgy">---select barangay---</option>
                                                        <option name = "Tipolo" value="Tipolo">Tipolo</option>
                                                        <option name = "Looc" value="Looc">Looc</option>
                                                        <option name = "Paknaan" value="Paknaan">Paknaan</option>
                                                        <option name = "Maguikay" value="Maguikay">Maguikay</option>
                                                        <option name = "Guizo" value="Guizo">Guizo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="panel-heading" ><i class="fa fa-file"></i>Description</div>
                                            <div class="panel-body"  style="width: 100%;">
                                                <div class="" >
                                                  <textarea name="description"  cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="Any concerns about your barangay?"></textarea>
                                                </div>
                                            </div>    
                                            <h6 style="color:red;"></h6>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                          <div class="btn-group">
                                                            <input type="file" class="btn btn-primary" name="fileToUpload" />
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group" style="float:right;">                                 
                                                          <input type="submit" name="submit" value="Post" class="btn btn-primary"/>                              
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="container jumbotron" style="border-radius:10px; width: 72%;">
                  <div class="container">
                    <div class="col-md-1 .col-md-offset-1">
                      <img class="profile-img" src="../images/user1.png" alt="" width="100%">
                                  </div>
                    <?php
                         $db_con = mysqli_connect("localhost", "root", "", "barangaymovers");

                        if (mysqli_connect_errno()) {
                            printf("Connect failed: \n" . mysqli_connect_error());
                            exit();
                        }

                        if ($result = mysqli_query($db_con, "SELECT * FROM project_details")) {

                            /* determine number of rows result set */
                            $row_num = mysqli_num_rows($result);
                            if ($row_num > 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                   echo '
                                  <div class="col-md-7 .col-md-offset-1">
                                      <b> ' . 'hello' . '</b><br/>Jun 20, 2017
                                  </div>
                                  
                                  <div class="col-md-12" style="background-color:#B3DDE1  ">
                                      <br/> ' . $row['project_location'] . '<hr/> ' . $row['project_description'] . '
                                      <center><img src=" ../database/uploads/' . $row['project_filename'] . '" width="50%" style="border: solid 1px;"/></center>
                                      <br/><span style = "float:left:"><input type="button" class="btn btn-default"value="Raise concern"/>&nbsp;&nbsp;&nbsp;<font color="blue">160</font>&nbsp;&nbsp;&nbsp;votes<hr/>
                                  </div>';
                                }
                                
                            } 
                            
                        }
                   
                    ?>
                    
                  </div>
            </div>
        </div>
    </div>

    <div class="row" id="gallerysection">
        <div class="col-md-12"  style="background-color:white; height:auto;"> <hr/>
          <div class="container">
            <div class="row" style="background-color:#f6f6;">
              <div class="col-md-9 .col-md-offset-1">
                <div class="row" style="border-radius:10px;">
                  <div class="col-md-12" style="border-radius:20px;">
                    <div class="col-md-5 .col-md-offset-1">
                      <img src="../images/1.jpg" width="100%" style="border-radius:20px;"/><hr/>                  
                      <img src="../images/2.jpg" width="100%" style="border-radius:20px;"/><hr/>                  
                      <img src="../images/3.jpg" width="100%" style="border-radius:20px;"/><hr/>
                    </div>
                  </div>
                </div>
              </div>
            <br/>
            </div>
        </div>
      </div>
    </div>

    <div class="row"  id="aboutUs">
            <footer class="footer" style="background-color:#94EB65; height:550px;">
                <div class ="container-fluid" >
                    <p class="text-muted"><span style ="float:left; margin-top:10px; margin-bottom:10px;"><font color="black">Developed by: Naidy Versoza, Lyneth C. Cutamora, Mark Sibi
                    </span><span style = "float: right;margin-top:10px; margin-bottom:10px;">Hackathon 2015 Team UCLM</span></p>
                </div>
               <div class="jumbotron">
                <center><img src="../images/logo.png" width="20%"/></center>
                 <hr>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <font color="#0b9d1d"><center>The website serves as a portal for all the barangay within a city. It is intended
                          as an informational source of inter-city activities conducted by each barangay. This caters concerns of the residents within the 
                          barangay for the officials to take action to.This website will further serve as an overall evaluator for the most active barangay within the city.</font>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <font color="#0b9d1d"><center>Barangay OFFICIALS:<br/><br/>
                        Barangay Captain: Naidy P. Versoza<br/>
                        Barangay Secretary: Lyneth C. Cutamora<br/>
                        Barangay Treasurer: Mark D. Sibi<br/><br/>
                        Councilors: <br/>
                          Jose Rizal<br/>
                          Andress Bonifacio<br/>
                          Apolinarion Mabini<br/></font>
                    </div>
                  </div>
                </div>
            </footer>
    </div>

    <script src="css/bootstrap/js/jquery.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/clean-blog.min.js"></script>
</body>

</html>
