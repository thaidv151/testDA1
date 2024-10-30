<?php
    class modelClient{
        public $conn;

        public function __construct()
        {
            $this->conn = connectDB();

        }
        public function getUser($username){
            try{
                $sql = "SELECT * FROM tai_khoans WHERE ten_dang_nhap = :username";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([
                    ':username' => $username,
                ]);
                return $stmt->fetch();
            }catch(Exception $e){
                echo "ERROR".$e->getMessage();
             
            }
        }
        public function upDateTaiKhoanCaNhanAdmin(
            $id,
            $ho_ten, 
            $so_dien_thoai, 
            $dia_chi, 
            $gioi_tinh, 
            $hinh_anh
            ){
                try {
                    $sql = "UPDATE tai_khoans 
                    SET 
                        ho_ten = :ho_ten,
                        so_dien_thoai = :so_dien_thoai,
                        dia_chi = :dia_chi,
                        gioi_tinh = :gioi_tinh,
                        hinh_anh = :hinh_anh
                      
        
               WHERE id = :id";
                    $stmt = $this->conn->prepare($sql);
                    $stmt->execute(
                        [
                            ':id' => $id,
                            ':ho_ten' => $ho_ten,
                            ':so_dien_thoai' => $so_dien_thoai,
                            ':gioi_tinh' => $gioi_tinh, 
                            ':dia_chi' => $dia_chi,
                            ':hinh_anh' => $hinh_anh
                        ]
                    );
                    return true;
                } catch (Exception $e) {
                    echo "ERORR" . $e->getMessage();
                }
            }
            public function resetPassword(
                $id, 
                $mat_khau)
           {
                try {
                    $sql = "UPDATE tai_khoans 
                    SET 
                        
                        mat_khau = :mat_khau
                       
                    
                    WHERE id = :id";
                    $stmt = $this->conn->prepare($sql);
                    $stmt->execute(
                        [
                            ':id' => $id,
                            ':mat_khau' => $mat_khau
                           
                        ]
                    );
                    return true;
                } catch (Exception $e) {
                    echo "ERORR" . $e->getMessage();
                }
            }
        








        
    }



