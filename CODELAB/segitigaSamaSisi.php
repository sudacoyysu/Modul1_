<?php

function segitigaSamaSisi($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Cetak spasi di sebelah kiri
        for ($j = $i; $j < $n; $j++) {
            echo " ";
        }
        
        // Cetak bintang
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        
        echo "\n";
    }
}

// Contoh pemanggilan fungsi
segitigaSamaSisi(5);

