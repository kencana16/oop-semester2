<?php

    //koneksi
    function conn(){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=a221802684", $username, $password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $error) {
            echo "Connection failed: " . $error->getMessage();
        };
        
        return $conn;
    };

    //---------------------------------
    //tutup koneksi database
    function close(){
        global $conn;
        
        $conn = null;
        return $conn;
    }


    //---------------------------------
    //tambah ke database
    function add($nim,$nmMhs,$jkel,$kota,$keterangan){
        $conn =  conn();

        $sql = "INSERT INTO mhs (nim,nmmhs,jkel,kota,ket) VALUES ('$nim','$nmMhs','$jkel','$kota','$keterangan')";
        $smtp = $conn->prepare($sql);
        $smtp->execute();
        
        $conn = close();
    };
    
    
    //---------------------------------
    //update database
    function update($nim,$nmMhs,$jkel,$kota,$keterangan){
        $conn =  conn();

        $sql="UPDATE mhs SET nim='$nim', nmmhs='$nmMhs', jkel='$jkel', kota='$kota', ket='$keterangan' WHERE nim='$nim'  ";
        $smtp = $conn->prepare($sql);
        $smtp->execute();
        
        $conn = close();

    }
    

    //---------------------------------
    //ambil dari database
    function fetch(){

    }


    
?>