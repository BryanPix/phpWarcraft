<?php 
  
  class Hero extends Character{

    // Attibuts
    private string $_name;
    private string $_weaponName;
    private int $_weaponDamage;
    private string $_shieldName;
    private int $_shieldValue;
    private int $_damage;

    // Getters 
    
    public function getName(){
        return $this->_name;
    }
    public function getWeaponName(){
        return $this->_weaponName;
    }
    public function getWeaponDamage(){
        return $this->_weaponDamage;
    }
    public function getShieldName(){
        return $this->_shieldName;
    }
    public function getShieldValue(){
        return $this->_shieldValue;
    }

    //Setters
    
    public function setName(string $name){
        $this->_name = $name;
    }
    public function setWeaponName(string $weaponName){
        $this->_weaponName = $weaponName;
    }
    public function setWeaponDamage(int $weaponDamage){
        $this->_weaponDamage = $weaponDamage;
    }
    public function setShieldName(string $shieldName){
        $this->_shieldName = $shieldName;
    }
    public function setShieldValue(int $shieldValue){
        $this->_shieldValue = $shieldValue;
    }


    // construct
    public function __construct(int $health, int $rage,string $name, string $weaponName,  int $weaponDamage, string $shieldName, int $shieldValue){

        parent::__construct($health, $rage);

        $this->setName($name);
        $this->setWeaponName($weaponName);
        $this->setWeaponDamage($weaponDamage);
        $this->setShieldName($shieldName);
        $this->setShieldValue($shieldValue);

    }

    // get infos Hero
    public function getInfos()
    {
        echo 'Points de vie : ' . $this->getHealth() . '<br>';
        echo 'Points de Rage : ' . $this->getRage() . '<br>';
        echo 'Nom : ' . $this->getName() . '<br>';
        echo 'Nom de l\'arme : ' . $this->getWeaponName() . '<br>';
        echo 'dégats de l\'arme : ' . $this->getWeaponDamage() . '<br>';
        echo 'Nom du bouclier : ' . $this->getShieldName() . '<br>';
        echo 'Points de vie du bouclier : ' . $this->getShieldValue() . '<br>';
    }

    // creation methode beAttacked

    public function beAttacked(int $_attackValue)
    {
    $realDamage = $_attackValue - $this->getShieldValue();
    $this->setHealth($this->getHealth() - $realDamage);
    } 
}
?>