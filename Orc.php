<?php 

    class Orc extends Character{
        private string $_type;
        private int $_damage;

        // Getters

        public function getType() { 
            return $this->_type;
        }
        public function getDamage() { 
            return $this->_damage;
        }

        // Setters
        
        public function setType(string $type) { 
            $this->_type = $type;
        }
        public function setDamage(int $damage) { 
            $this->_damage = $damage;
        }

        //  constructor

        public function __construct(int $health, int $rage, string $type) {
            parent::__construct($health, $rage); 
            
            $this->setType($type);
        }
    

        // get infos orc

        public function getInfosOrc(){
            echo 'Points de vie : ' . $this->getHealth() . '<br>';
            echo 'Points de Rage : ' . $this->getRage() . '<br>';
            echo 'Type : ' . $this->getType() . '<br>';
        }
        // methode attack
        public function attack(){
            $this->setDamage(rand(600,800));  
        }
    }

?>