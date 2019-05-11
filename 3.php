<?php
function getName() { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < 32; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

function cetak($num){
    $prevData = null;
    for($j = 0;$j < $num;$j++){
        $newData = getName();
        if($newData != $prevData){
            $prevData = $newData;
            echo $newData."<br/>";
        }else{
            //jika prevData dan newData sama, code akan mengulang inisialisasi dari index yang sama.
            $j--;        
        }            
    }
}
cetak(2);
?>
