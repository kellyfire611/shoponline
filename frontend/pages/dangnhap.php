<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopOnline | Mua bán điện thoại Cần Thơ</title>
    <link href="/shoponline/assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shop online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/shoponline/frontend/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/shoponline/frontend/pages/gioithieu.php">Giới thiệu</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/shoponline/frontend/pages/dangnhap.php" tabindex="-1" aria-disabled="true">Đăng nhập</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>


<main role="main">
<div class="container">

    <form name="frmDangNhap" method="post" action="">
    <div class="form-group">
        <label for="username">Tên đăng nhập</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Nhập tên đăng nhập">
        <small id="usernameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" name="btnDangNhap" class="btn btn-primary">Đăng nhập</button>
    </form>

    <?php
    if(isset($_POST['btnDangNhap'])) //Tuc la nguoi dung da bam nut Dang nhap
    {
        $tendangnhap = $_POST['username'];
        $matkhau = $_POST['password'];

        if($tendangnhap == 'admin' && $matkhau == '123456') {
            echo 'Bạn đã đăng nhập thành công';
            //header('Location: http://sss/shoponline/frontend/'); // URL tuyet doi
            header('Location: ./../index.php'); // URL tuyet doi
        } else {
            echo 'Sai thông tin đăng nhập.';
        }
    }
    ?>
</div>
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="{{ site.url }}/">Visit the homepage</a> or read our <a href="{{ site.baseurl }}/docs/{{ site.docs_version }}/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>

<script src="/shoponline/assets/vendor/jquery/jquery.min.js"></script>
<script src="/shoponline/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>