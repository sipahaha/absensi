<?php 
$host = 'localhost'; 
$dbname = 'db_absensi'; 
$username = 'root'; 
$password = 'sipa2402'; 
    try { 
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    } catch (PDOException $e) { 
        die("Koneksi gagal: " . $e->getMessage()); 
    } 

    if(!function_exists('random')){
        function random($length)
      {
        $data = '1234567890';
        $string = '';
    
          for ($i = 0; $i < $length; $i++) { 
            $pos = rand(0, strlen($data) - 1);
            $string .= $data[$pos];
            if (($i + 1) % 3 == 0 && $i + 1 < $length) {
             $string .= '-';
            }
          }
          return $string;
      }
      }
?>