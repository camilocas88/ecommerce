<?php

// class DB {

//     private $host;
//     private $db;
//     private $user;
//     private $password;
//     private $charset;

    // public function __construct()
    // {
    //   $this->host       ="mysql:host=localhost;dbname=lalic170_lalicorera;";
    //   $this->db         ="lalic170_lalicorera";
    //   $this->user       ="root";
    //   $this->password   ="";
    //   $this->charset    ="array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')";
      
    // }

//     public function connect(){
    
//       try{
          
//           $connection = new PDO($this->host,$this->user,$this->password,$this->charset);
//           $options = [
//               PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//               PDO::ATTR_EMULATE_PREPARES   => false,
//           ];
           
//           return $pdo;
//           echo "conectado";

//       }catch(PDOException $e){
//           print_r('Error connection: ' . $e->getMessage());
//       }   
//   }
// }



// $server = 'mysql:host=localhost;dbname=test;';
// $username = 'root';
// $password ='';
// $database= 'lalic170_lalicorera';
// $charset = 'utf8mb4';

// try{
//   $conn = new PDO ($server,$username,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
  
// }catch(PDOException $e){
//   die('Conexion fallida: ' . $e->getMessage());
// }


// $server = 'mysql:host=localhost;dbname=test;';
// $username = 'root';
// $password ='';
// $database= 'lalic170_lalicorera';
// $charset = 'utf8mb4';

// class conexion {
//   public static function conectar(){
//     try{
//       $cn = new PDO("mysql:host=localhost;dbname=lalic170_lalicorera;","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
      
//       return $cn;
//     }catch(PDOException $e){
//       die('Conexion fallida: ' . $e->getMessage());
//     }
//   }
// }

// conexion::conectar();

/* PDO database connection */
class DB {
  private $connection;
  private static $_instance;
  private $dbhost = "localhost"; // Ip Address of database if external connection.
  private $dbuser = "root"; // Username for DB
  private $dbpass = ""; // Password for DB
  private $dbname = "lalic170_lalicorera"; // DB Name
  /*
  Get an instance of the Database
  @return Instance
  */	
  public static function getInstance(){
    if(!self::$_instance) {
          self::$_instance = new self();
       }
      return self::$_instance;
    }
  // Constructor
  private function __construct() {
    try{
    $this->connection = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Error handling
    }catch(PDOException $e){
      die("Failed to connect to DB: ". $e->getMessage());
    }
  }
  // Magic method clone is empty to prevent duplication of connection
  private function __clone(){}
  
  // Get the connection	
  public function getConnection(){
    return $this->connection;
  }
}
$db = DB::getInstance();
$conn = $db->getConnection();




?>
