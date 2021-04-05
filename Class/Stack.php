<?php
$arrayString = [1,2,3,4,5];
$x = '';

$boolean = true;

while ($boolean) {
    menus();
    print("Choose Operation :");
    $x = trim(fgets(STDIN));
    switch ($x) {
        case 1;
            for($i=5;$i<15;$i++){
                array_push($arrayString,$i);
            }
            foreach ($arrayString as $array){
                echo ($array." ");
            }
            break;
        case 2:
            print_r($arrayString);
            print_r("Enter Delete Index :");
            $item = trim(fgets(STDIN));
            unset($arrayString[$item]);
            foreach ($arrayString as $array){
                echo ($array." ");
            }
            break;
        case 3:
            echo "Count :".count($arrayString);
            break;
        case 4:
            echo("Min :".min($arrayString)).PHP_EOL;
            echo("Max :".max($arrayString)).PHP_EOL;
            break;
        case 5:
            print_r("Enter Search Item :");
            $val = trim(fgets(STDIN));
            $r = array_search($val, $arrayString);
            echo "Index :" . $r . " Value :" . $val;
            break;
        case 6:
            foreach ($arrayString as $item) {
                echo $item.PHP_EOL;
            }
            break;
        case 7:
            echo "Sad to see that you left :( ";
            $boolean = false;
            break;
        default:
            echo "TRY AGAIN ............";
            break;
    }
}


function menus()
{
    print_r("\n");
    print("=================================") . PHP_EOL;
    print("Stack Operations Menu") . PHP_EOL;
    print("=================================") . PHP_EOL;
    print("1.Add a new item") . PHP_EOL;
    print("2.Delete an item") . PHP_EOL;
    print("3.Show number of items") . PHP_EOL;
    print("4.Show min and max items") . PHP_EOL;
    print("5.Find an item") . PHP_EOL;
    print("6.Show all items") . PHP_EOL;
    print("7.Exit") . PHP_EOL;
}





