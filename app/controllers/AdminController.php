<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
       
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_taikhoan($_GET['id']);
            }

            include "taikhoan/update.php";
            break;


        case 'updatetk':
            if (isset($_POST['capnhattk']) && ($_POST['capnhattk'])) {
                $role = $_POST['role'];
                $id = $_POST['id'];
                update_taikhoan($id, $role);
                $thongbao = "Cập nhật thành công";
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 1)) {
                delete_taikhoan($_GET['id']);
            } else {
                echo '<script>alert("Không thể xóa tài khoản quản trị !")</script>';
            }

            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

    }}
?>