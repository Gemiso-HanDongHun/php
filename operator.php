<?php

Class Car{
    public $color;
    public $model;
    public $size;

    public function __construct($color, $model, $size){
        $this->color = $color;
        $this->model = $model;
        $this->size = $size;
    }

    public function message(){
        echo "내 차는 {$this->color}색 {$this->model} 이며 {$this->size} 이다.";
    }
}
 
    $myCar = new Car("보라", "BMW", "중형" );
    $myCar->message();

?>