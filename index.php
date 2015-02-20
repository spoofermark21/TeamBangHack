<?php 
    session_start();

    $error = '';
    if (isset($_SESSION['isLogin'])) {
        header('Location: BarangayMovers/home.php');
    }

    if (isset($_POST['txt_account']) && isset($_POST['txt_password']) && isset($_POST['cmb_brgy'])) {
        $username = $_POST['txt_account'];
        $password = $_POST['txt_password'];
        $resident = $_POST['cmb_brgy'];

        $db_con = mysqli_connect("localhost", "root", "", "barangaymovers");

        if (mysqli_connect_errno()) {
            printf("Connect failed: \n" . mysqli_connect_error());
            exit();
        }

        if ($result = mysqli_query($db_con, "SELECT * FROM resident_details 
                                            WHERE resident_account =  '$username' AND
                                            resident_password = '$password' AND resident_brgy = '$resident'")) {

            /* determine number of rows result set */
            $row_num = mysqli_num_rows($result);
            if ($row_num > 0) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $_SESSION['isLogin'] = '1';
                $_SESSION['user'] =  $row['resident_fname'] . $row['resident_lname'];
                header('Location: BarangayMovers/home.php');
            } else {
                $error = 'Please check inputs and try again.';
            } 
            mysqli_close($db_con);
        }
    } 
    
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BrgyMovers.PH</title>
    <link href="css/style.css", rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="signin-background has-success">
    <div class="container" style="margin-top:60px;">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4"><div class="account-wall">
              <img src="images/logo.png" width="70%" style="margin-left:15%" alt="">
              <form class="form-signin" action="index.php" method="post">
                  <input type="text" value="" name="txt_account" class="form-control" placeholder="Account ID" required autofocus>
                  <input type="password" value="" name="txt_password" class="form-control" placeholder="Password" required>
                  <select class="form-control" name="cmb_brgy">
                    <option name = "brgy" value="brgy">---select barangay---</option>
                    <option name = "Tipolo" value="Tipolo">Tipolo</option>
                    <option name = "Looc" value="Looc">Looc</option>
                    <option name = "Paknaan" value="Paknaan">Paknaan</option>
                    <option name = "Maguikay" value="Maguikay">Maguikay</option>
                    <option name = "Guizo" value="Guizo">Guizo</option>
                  </select>
                  <h6 style = "color:red;"> <?php echo $error; ?> </h6>
                  <button class="btn btn-lg btn-primary1 btn-block" type="submit">Sign in</button>
                  <label class="checkbox pull-left">                 
                  </label>
              </form>
          </div>
        </div>
      </div>
    </div> 
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <script src="css/js/bootstrap.min.js"></script>
</html>
