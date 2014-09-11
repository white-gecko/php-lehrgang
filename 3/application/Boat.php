<?php
class My_Boat {
    protected $length;
    private $_vMax;

    public function __construct ($vMax, $length) {
        $this->_vMax = $vMax;
        $this->length = $length;
    }

    public function isLongerThan ($other) {
        if ($this->length > $other->length) {
            return true;
        } else {
            return false;
        }
    }

    public function getSpeed () {
        return $this->_vMax;
    }
}
