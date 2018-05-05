<?php
//require_once 'cores/Utils.php';
//require_once 'cores/Users.php';
require_once 'cores/Conexion.php';
class MyClass {

    private $ID;
  
    private function setID($ID) {
      $this->ID = $ID;
    }
  
    private function getID() {
      return $this->ID;
    }
  
  
    public function __set($name,$value) {
      switch($name) { //this is kind of silly example, bt shows the idea
        case 'ID': 
          return $this->setID($value);
      }
    }
  
    public function __get($name) {
      switch($name) {
        case 'ID': 
          return $this->getID();
      }
    }
  
  }

//$object = new MyClass();
//$object->ID = 'foo'; //setID('foo') will be called
$db = new db();

$id = $db->NewUser('GNR092','123456','Gener','Can','9911154479');
$db->CreateProfile($id,'Gener','Can','9911154479')


//$user->GetUserForName('GNR092');

?>