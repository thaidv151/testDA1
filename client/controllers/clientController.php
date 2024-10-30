<?php

class clientController
{
    public $modelClient;
    public function __construct()
    {
        $this->modelClient = new modelClient;
    }
    public function trangChu()
    {
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $user = $this->modelClient->getUser($username);
            require './views/clientViews/trangChu.php';
        } else {
            header('location:' . BASE_URL);
            exit();
        }
    }
    public function logout()
    {
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
            session_unset();
            session_destroy();
            header('location: ' . BASE_URL);
            exit();
        }
    }
    public function thongTinCaNhan(){
        
        $thongTin = $this->modelClient->getUser($_SESSION['username']);
        require './views/clientViews/thongTinCaNhan.php';
        deleteSessionError();
    }
    public function postEditCaNhanQuanTri(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $ho_ten = $_POST['ho_ten'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $dia_chi = $_POST['dia_chi'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $old_img = $_POST['old_img'];

            $hinh_anh = $_FILES['hinh_anh'];
            // LẤy thông tin user từ session
            $user = $this->modelClient->getUser($_SESSION['username']);
            
            $error = [];

            if(isset($hinh_anh) && $hinh_anh['error'] == UPLOAD_ERR_OK){
                if(!empty($old_img)){
                    deleteImg($old_img);
                }
                $new_img = upLoad($hinh_anh, './uploads/');
            }else{
                $new_img = $old_img;
            }
           
            if(empty($ho_ten)){
                $error['ho_ten'] = 'Vui lòng điền dữ liệu này';
             }
            

             if(empty($error)){
               
               $status =  $this->modelClient->upDateTaiKhoanCaNhanAdmin($user['id'], $ho_ten, $so_dien_thoai, $dia_chi, $gioi_tinh, $new_img);
               if($status){
                $_SESSION['success'] = 'Đã đổi mật khẩu thành công';
                $_SESSION['flash'] = true;
                header('location:'. BASE_URL_CLIENT . '?act=thong-tin-ca-nhan');
               }
             }else{
               
                $_SESSION['error'] = $error;
                $_SESSION['flash'] = true;
                header('location:' . BASE_URL_CLIENT . '?act=thong-tin-ca-nhan');
              
             }
         }
    }
    public function postEditmatKhauCaNhan(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $old_pass = $_POST['old_pass'];
            $new_pass = $_POST['new_pass'];
            $confirm_pass = $_POST['confirm_pass'];

            // LẤy thông tin user từ session
            $user = $this->modelClient->getUser($_SESSION['username']);
            
            $error = [];
           $old_pass == $user['mat_khau'] ? $checkPass = true : false;
            if (!$checkPass){
                $error['old_pass'] = 'Mật khẩu người dùng không đúng';
            }
            if ($new_pass !== $confirm_pass){
                $error['confirm_pass'] = 'Mật khẩu xác nhận không đúng';
            }
            if(empty($old_pass)){
                $error['old_pass'] = 'Vui lòng điền dữ liệu này';
             }
            if(empty($new_pass)){
                $error['new_pass'] = 'Vui lòng điền dữ liệu này';
             }
            if(empty($confirm_pass)){
                $error['confirm_pass'] = 'Vui lòng điền dữ liệu này';
             }

             if(empty($error)){
               
               $status =  $this->modelClient->resetPassWord($user['id'], $new_pass);
               if($status){
                $_SESSION['success'] = 'Đã đổi mật khẩu thành công';
                $_SESSION['flash'] = true;
                header('location:'. BASE_URL_CLIENT . '?act=thong-tin-ca-nhan');
               }
             }else{
               
                $_SESSION['error'] = $error;
                
                $_SESSION['flash'] = true;
                header('location:' . BASE_URL_CLIENT . '?act=thong-tin-ca-nhan');
              
             }
         }
    }
}
