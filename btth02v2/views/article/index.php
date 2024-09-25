<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?controller=admin&action=index">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=home&action=index">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?controller=admin&action=category">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=admin&action=author">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php?controller=admin&action=article">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=article&action=add" class="btn btn-success">Thêm mới</a>
                <h3 class="text-center text-uppercase fw-bold">Danh sách bài viết</h3>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã</th>
                            <th scope="col">Tiêu Đề</th>
                            <th scope="col">Bài hát</th>
                            <th scope="col">Tác Giả</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Tóm Tắt</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <?php foreach($articles as $row): ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $row['ma_bviet']?></th>
                            <td><?= $row['tieude']?></td>
                            <td><?= $row['ten_bhat']?></td>
                            <td><?= $row['ten_tgia']?></td>
                            <td><?= $row['ten_tloai']?></td>
                            <td><?= $row['tomtat']?></td>
                            <td>
                                <a href="index.php?controller=article&action=edit&ma_bviet=<?= $row['ma_bviet']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="index.php?controller=article&action=del&ma_bviet=<?= $row['ma_bviet']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
                
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>