<?php
require "conn.php";
class login extends conn{
           
            public function cekLogin($username,$password){
                  $sql="select * from login where user='$username' and pass='$password' ";
                  
                  $smtp = $this->conn->prepare($sql);
                  $smtp->execute();
                  
                  if($smtp->rowCount() > 0){
                        $_SESSION['susername'] = $username;
                        header("location:homeadmin.php");
                  }else{
                        echo "login GAGAL....<br/> <a href='login.php'>ulangi</a>";
                  }
            }
            
            public function logout(){
                  session_start();

                  session_unset();
                  
                  session_destroy();
                  
                  header("location:../login/login.php");
            }
      }
      
      ?>