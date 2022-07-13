<?php
include_once 'Animals.php';// Hen and Cow
include_once 'Farm.php';
include_once 'Funcs.php';


$farm = new Farm();
$cnt = [
    Hen::NAME => [0,1],
    Cow::NAME=> [8, 12]
];
$animals =[
    Hen::NAME => 10,
    Cow::NAME=> 20
];
add_new_animals($farm, $animals, $cnt);
// продукция за 7мь дней
print_r($farm->get_production2(7));
$animals =[
    Hen::NAME => 5,
    Cow::NAME=> 1
];
// добавление новых животных
add_new_animals($farm, $animals, $cnt);
// продукция за 7мь дней
print_r($farm->get_production2(7));
?>
