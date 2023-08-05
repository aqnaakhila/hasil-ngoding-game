<?php
echo "Welcome To Trash Game\n";
while(true){
    echo "====== Game Tebak Angka ======\n";
    echo "Tebak sebuah angka antara 1 dan 9! \n";
    $computer = rand(1,9);
    echo "Masukan Tebakanmu : ";
    $player = trim(fgets(STDIN));
    if($player == $computer){
        echo "Selamat Anda Menang, Angka yg Benar adalah $computer. \n";
        exit;
    }else{
        echo "Anda Kalah, Silahkan coba lagi, Angka yg Benar adalah $computer. \n";
    }
}