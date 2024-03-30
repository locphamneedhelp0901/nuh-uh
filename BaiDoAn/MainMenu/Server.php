<?php
    $Name = $_POST["textName"];
    $Pass1 = $_POST["pass1"];
    $Pass2 = $_POST["pass2"];
    $Email = $_POST["email"];
if ($Name == null && $Pass1 == null && $Pass2 == null && $Email == null) {
        echo "vui long dien thong tin";
        exit();
    } elseif ($Name == null) {
        echo "Thieu ten";
        exit();
    } elseif ($Pass1 == null) {
        echo "Dien mat khau";
        exit();
    } elseif ($Pass2 == null) {
        echo "vui long nhap lai mat khau";
        exit();
    } elseif ($Email == null) {
        echo "Dien email";
        exit();
    } elseif ($Pass1 != $Pass2) {
        echo "Mat khau khong khop";
        exit();
    } else {
        echo "Dang ky thanh cong";
        $sql = "INSERT INTO taikhoan(tentk, pass, email) VALUES ('".$Name."','".$Pass1."','".$Email."');";
        mysqli_query($connect,$sql);
    }