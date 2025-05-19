<?php 
    $severname = "localhost";
    $database = "akademik";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($severname, $username, $password, $database);

    function ambildata($query) {
        $conn = $GLOBALS['conn'];
        $hasil = mysqli_query($conn, $query);
        $data = [];
        while ($baris = mysqli_fetch_assoc($hasil)) {
            $data[] = $baris;
        }
        return $data;
        
    }

    function ceklogin()
    {
        if (!isset($_SESSION['login'])) {
            header("Location: login.html");
        }
    }

?>