<?php
function printData() {
    for ($i=1; $i <= 100; $i++) {
        switch ($i) {
             case $i%3==0 && $i%5==0: echo "Linianos\n";
                 break;
            case $i%3==0: echo "Linio\n";
                 break;
            case $i%5==0: echo "IT\n";
                 break;
            default: echo $i. "\n";  
        }
    }
}

printData();

?>
