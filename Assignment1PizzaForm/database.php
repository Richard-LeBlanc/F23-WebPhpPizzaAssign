<?php
    class database{

        public $connection; //public so the connection can be made from each webpage.
        
        // Connect to the server, and output any error that occurs
        function __construct(){
            $this -> connection = mysqli_connect('172.31.22.43','Richard200182873', '6iG35kFj7Y', 'Richard200182873');
            if(mysqli_connect_error()){
                die("Failed to connect to the server; no data, no pizza. " . mysqli_connect_error());
            }
        }

        //insert statement for Mysql, send a message if the record doesn't properly submit.

        public function createRecord($first_name, $last_name, $address, $phone_number, $email){
            $query = "INSERT INTO pizzaDeliveries(first_name, last_name, address, phone_number, email) VALUES('$first_name', '$last_name', '$address','$phone_number', '$email')";
            $res = $this ->connection -> query($query);  
            if($res){
                return true;
            }else{
                echo "<p>Creation of record failed.</p>";
                return false;
            }
        }
        
        // ensure that the values are not hiding anything
        public function sanitize($var){
            $return = $this -> connection -> real_escape_string($var);
            return $return;
        }
    }
?>