<<<<<<< HEAD
<?php
include("include/config.php");
//error_reporting(0);

if(isset($_POST['signup'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['useremail'];
    $mobile = $_POST['usermobile'];
    $password = $_POST['loginpassword'];
    //echo "<br>";
    $hasedpassword = hash('sha256',$password);
   // print_r($_POST);

   $ret = "SELECT * FROM userdata WHERE (username=:uname || useremail=:uemail)";
   $queryt = $dbh -> prepare($ret);
   $queryt->bindParam(':uname',$username,PDO::PARAM_STR);
   $queryt->bindParam(':uemail',$email,PDO::PARAM_STR);
   $queryt-> execute();
   $results = $queryt -> fetchAll(PDO::FETCH_OBJ);

   if($queryt-> rowCount() == 0){
    //echo "xx";
        $sql = "INSERT INTO userdata(fullname,username,useremail,usermobile,loginpassword) VALUES (:fname,:uname,:uemail,:umobile,:upass)";
        $query = $dbh -> prepare($sql);
        $query->bindParam(':fname',$fullname,PDO::PARAM_STR);
        $query->bindParam(':uname',$username,PDO::PARAM_STR);
        $query->bindParam(':uemail',$email,PDO::PARAM_STR);
        $query->bindParam(':umobile',$mobile,PDO::PARAM_STR);
        $query->bindParam(':upass',$hasedpassword,PDO::PARAM_STR);
        $query-> execute();
        $lastInsertId = $dbh->$lastInsertId();
        if($lastInsertId){
                echo "<script type='text/javascript'>";
                echo "alert('ลงทะเบียนสำเร็จแล้ว!');";
                echo "</script>";
        }else{
                echo "<script type='text/javascript'>";
                echo "alert('มีบางอย่างผิดพลาด กรุณาลองใหม่อีกครั้ง');";
                echo "</script>";
        }
   }else{
        echo "<script type='text/javascript'>";
        echo "alert('มีชื่อผู้ใช้หรืออีเมลนี้อยู่แล้ว กรุณาลองใหม่อีกครั้ง');";
        echo "</script>";
   }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">ชมรมคนรักแมว</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>  
      </ul>
    </div>  
  </nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="container">
      <h2>สมัครสมาชิก</h2>
      <form action="#" method="post" >
        <div class="form-group">
          <label for="fullname">ชื่อ:</label>
          <input type="text" class="form-control" id="fullname" placeholder="พิมพ์ชื่อที่นี่" name="fullname" required>
        </div>
        <div class="form-group">
          <label for="username">ชื่อผู้ใช้:</label>
          <input type="text" class="form-control" id="username" placeholder="พิมพ์ชื่อผู้ใช้ที่นี่" name="username" required>
        </div>
        <div class="form-group">
          <label for="useremail">อีเมลล์:</label>
          <input type="email" class="form-control" id="useremail" placeholder="พิมพ์อีเมลล์ที่นี่" name="useremail" required>
        </div>
        <div class="form-group">
          <label for="usermobile">เบอร์โทรศัพท์:</label>
          <input type="text" maxlength="10" pattern="[0-9]{10}" title="ตัวเลขสิบหลักเท่านั้น" class="form-control" id="usermobile" placeholder="พิมพ์เบอร์โทรศัพท์ที่นี่" name="usermobile" required>
        </div>
        <div class="form-group">
          <label for="loginpassword">Password:</label>
          <input type="password" class="form-control" id="loginpassword" placeholder="พิมพ์รหัสผ่านที่นี่" name="loginpassword" required>
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success" name="signup" id="signup">สมัครสมาชิก</button>
      </form>
    </div>
      </div>
    </div>

<style>
        body {
            background-color: #facfad; /* ใส่สีพื้นหลัง */
        }
</style>



</body>
</html>

=======
<?php
include("include/config.php");
error_reporting(0);

if(isset($_POST['signup'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['useremail'];
    $mobile = $_POST['usermobile'];
    $password = $_POST['loginpassword'];
    //echo "<br>";
    $hasedpassword = hash('sha256',$password);
   // print_r($_POST);

   $ret = "SELECT * FROM userdata WHERE (username=:uname || useremail=:uemail)";
   $queryt = $dbh -> prepare($ret);
   $queryt->bindParam(':uname',$username,PDO::PARAM_STR);
   $queryt->bindParam(':uemail',$email,PDO::PARAM_STR);
   $queryt-> execute();
   $results = $queryt -> fetchAll(PDO::FETCH_OBJ);

   if($queryt-> rowCount() == 0){
    //echo "xx";
        $sql = "INSERT INTO userdata(fullname,username,useremail,usermobile,loginpassword) VALUES (:fname,:uname,:uemail,:umobile,:upass)";
        $query = $dbh -> prepare($sql);
        $query->bindParam(':fname',$fullname,PDO::PARAM_STR);
        $query->bindParam(':uname',$username,PDO::PARAM_STR);
        $query->bindParam(':uemail',$email,PDO::PARAM_STR);
        $query->bindParam(':umobile',$mobile,PDO::PARAM_STR);
        $query->bindParam(':upass',$hasedpassword,PDO::PARAM_STR);
        $query-> execute();
        $lastInsertId = $dbh->$lastInsertId();
        if($lastInsertId){
                echo "You have signup successfully";
        }else{
                echo "Have something wrong. Please try again";
        }
   }else{
        echo "Username or Email already exist, Please try again";
   }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>SignUp Page</h2>
  <form action="#" method="post" >
    <div class="form-group">
      <label for="fullname">FullName:</label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter FullName" name="fullname" required>
    </div>
    <div class="form-group">
      <label for="username">UserName:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username" required>
    </div>
    <div class="form-group">
      <label for="useremail">Email:</label>
      <input type="email" class="form-control" id="useremail" placeholder="Enter Email" name="useremail" required>
    </div>
    <div class="form-group">
      <label for="usermobile">Mobile:</label>
      <input type="text" maxlength="10" pattern="[0-9]{10}" title="ตัวเลขสิบหลักเท่านั้น" class="form-control" id="usermobile" placeholder="Enter Mobile" name="usermobile" required>
    </div>
    <div class="form-group">
      <label for="loginpassword">Password:</label>
      <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" name="loginpassword" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success" name="signup" id="signup">Submit</button>
  </form>
</div>

</body>
</html>
>>>>>>> 4ba3092 (first add)
