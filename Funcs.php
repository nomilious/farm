<?php
function sum2_arr($arr1, $arr2) {
    foreach (array_keys($arr1) as $name)
        $arr1[$name] += $arr2[$name];
    return $arr1;
}
function add_new_animals($farm, $animals, $cnt) {
    foreach($animals as $animal => $quantity) {
        for($i = 0; $i< $quantity; $i++) {
        	$className = ucfirst($animal);
            $farm->add_animal(new $className($cnt[$animal]));
        }
    }
}
?>
