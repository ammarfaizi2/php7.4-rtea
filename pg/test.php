<?php

$runtime = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();

$future = $runtime->run(function(){
    for ($i = 0; $i < 500; $i++) {
        echo "*";
        sleep(1);
    }
    return "easy";
});

$future2 = $runtime2->run(function(){
    for ($i = 0; $i < 500; $i++) {
        echo "|";
        sleep(1);
    }
    return "easy";
});
