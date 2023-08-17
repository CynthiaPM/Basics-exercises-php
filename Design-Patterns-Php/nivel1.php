<?php 


/*codigo original

class Tigger {

private function __construct() {
        echo "Building character..." . PHP_EOL;
    }

public function roar() {
      echo "Grrr!" . PHP_EOL;
       }

}*/

class Tigger {

    private static $instance = null;
    private $counter = 0;

    private function __construct(){

        echo "Building character..." . PHP_EOL;
            
    }

    public static function getIntance(){

        if(self::$instance === null){
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() {
        $this -> counter++;
        echo "Grrr!" . PHP_EOL;
         }

    public function getCounter(){
        return $this->counter;
    }

    
}




?>