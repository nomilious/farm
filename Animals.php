<?php
include_once 'Animal.php';
class Hen extends Animal {
    const NAME = "hen";
    const TYPE = "eggs";
    public function __construct($diapasones){
        // name('cow'), min(m), max(mx), production_type('milk'){}
        $this->MAX = $diapasones[1];
        $this->MIN= $diapasones[0];

    }
}
class Cow extends Animal {
    const NAME = "cow";
    const TYPE = "milk";
    public function __construct($diapasones){
        // name('cow'), min(m), max(mx), production_type('milk'){}
        $this->MAX = $diapasones[1];
        $this->MIN= $diapasones[0];

    }
}
?>
