<?php
class sortarr
{
    protected $_arraysort;
    public function __construct(array $arraysort)
     {
        $this->_arraysort = $arraysort;
     }
    public function funcarray()
     {
        $sorted = $this->_arraysort;
        sort($sorted);
        return $sorted;
      }
}
$sortarray = new sortarr(array(11, -2, 4, 35, 0, 8, -9));
print_r($sortarray->funcarray());
?>