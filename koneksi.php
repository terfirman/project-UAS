<?php
    class Koneksi{
        private $server = "localhost";
        private $username = "id6072170_mahasiswa";
        private $password = "";
        private $db = "id6072170_uasweb";

        function getKoneksi(){
            return new mysqli($this->server, $this->username, $this->password, $this->db);
        }

    }
    
    
?>