<?php
$A = 123;
function Text(){
    global $A;
    echo " Nilai A Dalam Fungsi = $A ";
}
Text();
echo " Nilai A luar Fungsi = $A";
