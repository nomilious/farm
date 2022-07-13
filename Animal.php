<?php
abstract class Animal {
    protected $MIN;
    protected $MAX;
    public const TYPE = self::TYPE;
    public const NAME = self::NAME;
    public function  get_random_prod(){
        return rand($this->MIN, $this->MAX);
    }
}
?>
