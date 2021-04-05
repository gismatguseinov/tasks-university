<?php
/*
 * Copyright (c) 2020. Qismat Huseynov
 */
require 'Class\Queue.php';


$queue = new SplQueue();
$boolean = true;

while($boolean){
    menus();
    $var = trim(fgets(STDIN));
    switch ($var){
        case 1:
            print_r("Enter count elements :");
            $count = trim(fgets(STDIN));
            for($i=0;$i<$count;$i++){
                print_r("Enter Element :");
                $element = trim(fgets(STDIN));
                $queue->unshift($element);
            }
            break;
        case 2:
            print_r("Enter count elements :");
            $count = trim(fgets(STDIN));
            for($i=0;$i<$count;$i++){
                print_r("Enter Element :");
                $element = trim(fgets(STDIN));
                $countArr = $queue->count();
                $queue->add($countArr,$element);
            }
            break;
        case 3:
            $queue->dequeue();
            break;
        case 4:
            unset($queue[($queue->count()-1)]);
            break;
        case 5:
            foreach ($queue as $key => $item){
                echo "\t[".$key."=>".$item."]\n";
            }
            break;
        case 6:
            $boolean = false;
            break;
    }
}


function menus(){
    print_r(
    "1.Insert at the front end\n2.Insert at the rear end\n3.Delete from front end\n4.Delete from rear end\n5.Display\n6.Quit\nChoose :"
    );
}
