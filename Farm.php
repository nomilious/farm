<?php
include_once 'Funcs.php';
include_once 'Animals.php';// Hen and Cow

class Farm {
    private $animals;
    private $cnt;

    public function __construct() {
        $this->cnt = 0;
        $this->animals = [];
    }
    public function add_animal(Animal $animal) {
        array_push($this->animals, $animal);
        $this->cnt+=1;
    }
    private function get_production() { // get production after 1 day
        $total = [Hen::TYPE => 0, COW::TYPE => 0];
        for($i = 0; $i < $this->cnt; $i++){// through all aniumals
            $total[$this->animals[$i]::TYPE] += $this->animals[$i]->get_random_prod();
        }
        return $total;
    }
    public function get_production2($days) { // after <days> days
        $total = [Hen::TYPE => 0, COW::TYPE => 0];
        for($i = 0; $i < $days; $i++){// through <days> days
            $total = sum2_arr($total, $this->get_production());
        }
        return $total;

    }
}
?>
