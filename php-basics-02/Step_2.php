<?php
function greaterThan($num) {
    if ($num > 30) {
        echo "$num is greater than 30.\n";
    } else if ($num > 20) {
        echo "$num is greater than 20.\n";
    } else if ($num > 10) {
        echo "$num is greater than 10.\n";
    } else {
        echo "$num is less than 10.\n";
    }
}
