<?php
      require "conn.php";

      class mhs extends conn{

            public function create($nim,$nmMhs,$jkel,$kota,$keterangan){
          
                  $sql = "INSERT INTO mhs (nim,nmmhs,jkel,kota,ket) VALUES ('$nim','$nmMhs','$jkel','$kota','$keterangan')";
                  $smtp = $this->conn->prepare($sql);
                  $smtp->execute();
                  
                  $this->close();
            }

            public function read($nim=''){
                  if($nim==''){
                        $sql = "select * from mhs order by nim";
                  }else if(!$nim==''){
                        $sql = "select * from mhs where nim ='$nim'";
                  }

                  $smtp = $this->conn->prepare($sql);
                  $smtp->execute();
                  
                  $this->close();

                  return $smtp;
                  
            }

            public function update($nim,$nmMhs,$jkel,$kota,$keterangan){
                  $sql="UPDATE mhs SET nim='$nim', nmmhs='$nmMhs', jkel='$jkel', kota='$kota', ket='$keterangan' WHERE nim='$nim'  ";
                  $smtp = $this->conn->prepare($sql);
                  $smtp->execute();
                  
                  $this->close();
            }

            public function delete($qnim){
                  $sql="DELETE FROM mhs WHERE nim ='$qnim'";
	
                  //simpan ke database
                  $smtp=$this->conn->prepare($sql);
                  $smtp->execute();
                  
                  //tutup koneksi
                  $this->close();
                  
                  //kembali ke form
                  header ("location: updateMhs.php");
            }

      }

      $mhs = new mhs; //membuat objek dari class diatas
?>