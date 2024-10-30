<?php 
require './views/layout/header.php';
require './views/layout/navbar.php';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 mt-5">
                    <h1 class="alert alert-primary">Quản lý tài khoản cá nhân</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img style="width:150px; height:150px;" src="<?= BASE_URL . $thongTin['hinh_anh'] ?>" class="avatar img-circle" alt="avatar" onerror="this.onerror=null; this.src= 'data:image/jpeg;base64,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'">
                        <h6 class="mt-2">Họ tên: <?= $thongTin['ho_ten'] ?></h6>
                        <h6 class="mt-2">Chức vụ: <?= $thongTin['chuc_vu_id'] == 1 ? 'admin' : 'client' ?></h6>


                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">

                    <h3>Thông tin cá nhân</h3>
                    <form action="<?= BASE_URL_CLIENT . '?act=post-sua-thong-tin-ca-nhan' ?>" method="POST" enctype="multipart/form-data">
                    <input type="text" name="old_img" value="<?= $thongTin['hinh_anh'] ?>" hidden>
                        <div class="form-group">
                            <label class="col-lg-12 control-label">Họ và tên:</label>
                            <?php if (isset($_SESSION['error']['ho_ten'])) { ?>
                                <p class=" text-danger"> <?= $_SESSION['error']['ho_ten'] ?></p>

                            <?php } ?>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="ho_ten" value="<?= $thongTin['ho_ten'] ?>">
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="col-lg-12 control-label">Số điện thoại:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="so_dien_thoai" value="<?= $thongTin['so_dien_thoai'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 control-label">Địa chỉ:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="dia_chi" value="<?= $thongTin['dia_chi'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 control-label">Ảnh đại diện:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="file" name="hinh_anh">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 control-label">Giới tính:</label>
                            <div class="col-lg-12">
                                <select name="gioi_tinh" class="col-lg-12 form-control" id="">
                                    <option <?= $thongTin['gioi_tinh'] == 1 ? 'selected' : '' ?> value="1">Nam</option>
                                    <option <?= $thongTin['gioi_tinh'] == 2 ? 'selected' : '' ?> value="2">Nữ</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Lưu">

                            </div>
                        </div>
                    </form>
                    <hr>
                    <h3>Đổi mật khẩu</h3>
                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a>
                            <i class="fa fa-coffee"></i>
                            <?= $_SESSION['success'] ?>
                        </div>

                    <?php } ?>


                    <form action="<?= BASE_URL_CLIENT . '?act=post-sua-mat-khau-ca-nhan' ?>" method="POST">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mật khẩu cũ:</label>
                            <?php if (isset($_SESSION['error']['old_pass'])) { ?>
                                <p class=" text-danger"> <?= $_SESSION['error']['old_pass'] ?></p>

                            <?php } ?>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="old_pass">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mật khẩu mới:</label>
                            <?php if (isset($_SESSION['error']['new_pass'])) { ?>
                                <p class=" text-danger"> <?= $_SESSION['error']['new_pass'] ?></p>

                            <?php } ?>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="new_pass">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Xác nhận mật khẩu:</label>
                            <?php if (isset($_SESSION['error']['confirm_pass'])) { ?>
                                <p class=" text-danger"> <?= $_SESSION['error']['confirm_pass'] ?></p>

                            <?php } ?>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="confirm_pass">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Lưu">


                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <hr>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- footer  -->
<?php include './views/layout/footer.php' ?>
<!-- end footer  -->

<!-- Page specific script -->

<!-- Code injected by live-server -->

</body>

</html>