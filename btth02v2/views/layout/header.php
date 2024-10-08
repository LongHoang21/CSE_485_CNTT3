<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo2.png" alt="" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="index.php?controller=home&action=index">TRANG CHỦ</a>
                        </li>
                    </ul>
                    <div class="navbar-nav">
                        <li class="nav-item d-flex align-items-center">
                            <?php
                            session_start(); // Bắt đầu session
 
                            if (isset($_SESSION['username'])) {
                                // Hiển thị tên người dùng và nút đăng xuất
                                echo "<p class='m-0'>Xin chào, " . $_SESSION['username'] . "!</p>";
                                echo "<a href='index.php?controller=logout&action=logout' class='btn btn-danger ms-2' aria-curent='page'>Thoát</a>";
                            } else {
                                // Hiển thị nút đăng nhập nếu chưa đăng nhập
                                echo "<a href='index.php?controller=signin&action=signin' class='btn btn-primary' aria-curent='page'>Đăng nhập</a>";
                            }
                            ?>
                        </li>
                    </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
                </div>
            </div>
        </nav>
        
    </header>
</body>
</html>