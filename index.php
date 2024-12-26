<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">ชมรมคนรักแมว</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>  
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <img src="img/p1.jpg" alt="รูปภาพ" width="300">
      <br><p>ก็แค่คนๆนึงที่ชื่นชอบแมว มาเป็นเพื่อนกันนะเมี้ยว!</p></br>
    </div>
    <div class="col-sm-8">
      <h2>ชมรมคนชอบแมว</h2>
      <h5>พื้นที่ของคนที่มีแมวในหัวใจ พูดคุยกันเรื่องการเลี้ยงดู แชร์รูปตลกๆ</h5>
      <img src="img/c6.png" class="float-left" alt="Cinque Terre" width="300" height="300"> 
      &nbsp;
      &nbsp;
      <img src="img/c8.png" class="float-center" alt="Cinque Terre" width="300" height="300"> 
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
<p>จัดทำโดย น.ส.กานต์ชนา เรืองนาราบ ชั้นปีที่ 2 (เทียบโอน) สาขาวิทยาการคอมพิวเตอร์</p>

<style>
        body {
            background-color: #facfad; /* ใส่สีพื้นหลัง */
        }
</style>

</div>

</body>
</html>
