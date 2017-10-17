<?php 
class Mentor { 
    // Properties
    public $first_name  = ''; 
    public $last_name = ''; 
    public $email = ''; 
    public $skype = ''; 
    public $title = ''; 
    public $company = ''; 
    public $location = ''; 
    public $many_years = ''; 
    public $interested = false;
    public $tech_non_tech = ''; 
    
    // Methods
    function insertMentor($mentor) { 
       
    } 

    function getAllMentors(){
        // connect to DB
        // Select * from tables; 
    }

    function getMentorById($id){
        // connect to DB
        // Select * from tables where id = $id
    }

    function getMentorName(){

    }
} 
?>