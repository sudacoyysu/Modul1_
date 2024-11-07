<?php

function segitigaSamaSisiTerbalik($n) {
    for ($i = $n; $i >= 1; $i--) {
        // Cetak spasi di sebelah kiri
        for ($j = $n; $j > $i; $j--) {
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
segitigaSamaSisiTerbalik(5);

