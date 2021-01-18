<!-- - Crea e modellizza classi per gestire i prodotti di uno shop.
- Come fatto in classe questa mattina creare una classe generale e poi creare altre classi che estendono questa classe generale.
- Eseguire poi degli output istanziando oggetti delle varie classi.
Sfruttate questa occasione per giocare anche con le keyword di accesso (public, protected, private)  -->
<?php

    class Product{
        //Properties
        public $name;
        public $code;
        public $price;
        public $type;
        public $color;
        

        //construct
        public function __construct($name,$code,$price,$type,$color){
            $this->$name = $name;
            $this->$code = $code;
            $this->$price = $price;
            $this->$type = $type;
            $this->$color = $color;
        }

        //methods
        public function printName(){
            return $this->name;
        }
        public function printPrice(){
            return $this->price;
        }
    }