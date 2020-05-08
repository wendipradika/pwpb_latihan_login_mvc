<?php  
class Register_model{

    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data){
        $nama = htmlspecialchars($data['nama']);
        $username = htmlspecialchars($data['username']);
        $password = md5($data['password']);

        $query = "INSERT INTO user VALUES ('','$nama','$username','$password')";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
}