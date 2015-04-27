<?php
class My_Boat {
    protected $length;
    private $_vMax;
    private $_op;

    public function __construct ($vMax, $length, $op = 'hallo') {
        $this->_vMax = $vMax;
        $this->length = $length;
        $this->op = $op;
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
