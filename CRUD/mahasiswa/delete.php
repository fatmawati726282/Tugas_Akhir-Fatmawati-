<?php

if(isset($_GET['Nim'])) {
    require'../koneksi.php';
    $input_Nim = $_GET['Nim'];

    $query = "DELETE FROM mahasiswa WHERE Nim='$input_Nim'";
    $result = mysqli_query($link, $query);

    
    if ($result){
        // location: no location :
        header('location: index2.php');
    }else{
        echo 'Gagal Disimpan : ', mysqli_error($link);
    }
}


?>