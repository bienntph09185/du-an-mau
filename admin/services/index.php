<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$getservicesQuery = "select * from services";
$services = queryExecute($getservicesQuery, true);

?>

<!DOCser html>
<html>
<head>
    <?php include_once '../_share/style.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php include_once '../_share/header.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '../_share/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Quản trị dịch vụ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= ADMIN_URL . 'dashboard' ?>">Dashboard</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-10 col-offset-1">
                        <!-- Filter  -->
                    </div>
                    <!-- Danh sách users  -->
                    <table class="table table-stripped">
                        <thead>
                        <th>ID</th>
                        <th>dịch vụ</th>
                        <th>Giá (USD)</th>

                        <th>
                            <a href="<?php echo ADMIN_URL . 'services/add-form.php' ?>" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus"></i> Thêm</a>
                        </th>
                        </thead>
                        <tbody>
                        <?php foreach ($services as $ser): ?>
                            <tr>
                                <td><?php echo $ser['id'] ?></td>
                                <td><?php echo $ser['name'] ?></td>
                                <td><?php echo $ser['price']?></td>
                                <td>
                                    <a href="<?php echo ADMIN_URL . 'services/edit-form.php?id=' . $ser['id'] ?>"
                                       class="btn btn-sm btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a href="<?php echo ADMIN_URL . 'services/remove.php?id=' . $ser['id'] ?>"
                                       class="btn-remove btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once '../_share/footer.php'; ?>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include_once '../_share/script.php'; ?>
<script>
    $(document).ready(function(){
        $('.btn-remove').on('click', function () {
            var redirectUrl = $(this).attr('href');
            Swal.fire({
                title: 'Thông báo!',
                text: "Bạn có chắc chắn muốn xóa tài khoản này?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => { // arrow function es6 (es2015)
                if (result.value) {
                    window.location.href = redirectUrl;
                }
            });
            return false;
        });
        <?php if(isset($_GET['msg'])):?>
        Swal.fire({
            position: 'bottom-center',
            icon: 'warning',
            title: "<?= $_GET['msg'];?>",
            showConfirmButton: false,
            timer: 1500
        });
        <?php endif;?>
    });
</script>
</body>
</html>