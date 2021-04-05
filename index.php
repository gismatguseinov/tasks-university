<?php
/*
 * Copyright (c) 2020. Qismat Huseynov
 */
require 'Class\Queue.php';
$queue = new Queue();
$x = '';
$boolean = true;
while($boolean){
    print_r("1.Insert\n2.Delete\n3.Display the element at the front\n4.Display all elements of the queue\n5.Quit\nSelect :");
    $x = trim(fgets(STDIN));
    switch ($x){
        case 1:
            print_r("Enter count elements :");
            $count = trim(fgets(STDIN));
            for($i=0;$i<$count;$i++){
                print_r("Enter Element :");
                $element = trim(fgets(STDIN));
                $queue->enqueue($element);
            }
            $queue->show();
            break;
        case 2:
            $queue->clearQueue();
            break;
        case 3:
            print_r("In Progress...").PHP_EOL;
            break;
        case 4:
            $queue->show();
            break;
        case 5:
            $boolean = false;
            print_r("Sad to see that you left :( ");
    }
}
function menus(){
    print_r(
        "1.Insert\n2.Delete\n3.Display the element at the front\n4.Display all elements of the queue\n5.Quit\nSelect Any Operations :"
    );
}




