<?php
class Config{
    static public function getBaseURL(){
        return "http://localhost:8080/phpmyadmin/db_structure.php?server=1&db=lalic170_lalicorera";
        // return "https://www.lalicorera.com/";
    }

    static public function getBaseSecureURL(){
        
        return "http://localhost:8080/phpmyadmin/db_structure.php?server=1&db=lalic170_lalicorera";
        
		// return "https://www.lalicorera.com/";	
    }
    
    static public function getUsuarioSQL(){
		return "root";
		// return "lalic170";		
    }
    
    static public function getContrasenaSQL(){
		return "";	
		// return "1A63R.86";	
    }
    
    static public function getDatabaseSQL(){
		return "lalic170_lalicorera";		
	}  
}