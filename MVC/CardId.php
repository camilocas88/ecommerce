<?php
require_once('Model.php');

class CardId extends Model {
    public $user_id;
    public $first_name;
    public $last_name;
    public $card_id;
    public $mail;
    public $password;
    public $city;
    public $mails;
    public $role;

    public function __construct()
    {
      $this->db_name = 'lalic170_lalicorera';
    }
    
    public function create(){

    }
    public function read( $card_id = ''){
        $this->query = ($card_id != '')
            ?"SELECT * FROM new_users WHERE card_id = $card_id"
            :"SELECT * FROM new_users";
            
        $this->get_query();
        // var_dump($this->rows);

        $num_rows = count($this->rows);
        // echo $num_rows; 

        $data = array();

        foreach ($this->rows as $key  => $value) {
            // array_push($data, $value);
            $data[$key] = $value;

        }

        return $data;



        // return $this->rows;

        
        

    }
    public function update(){

    }
    public function delete(){

    }

    
}