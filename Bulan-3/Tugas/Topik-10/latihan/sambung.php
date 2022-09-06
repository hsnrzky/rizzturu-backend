<?php

class ConnectPDO {
    protected $username = "rizz";
    protected $pass = "040516";

    public function __construct()
    {
        $this->db = new PDO
        ("mysql:host=localhost;dbname=warung", $this->username, $this->pass);
    }
    public function CreateData(){
        //Code
        $namabarang = $_POST["namaBarang"];
        $query = "INSERT INTO brang(namaBarang) VALUES ('$namabarang')";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:post.php");
    }
    public function DeleteData(){
        $id = $_POST["Id"];
        $query = "DELETE FROM brang WHERE Id = $id";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:post.php");
    }
    public function UpdateData(){
        $namabarang = $_POST["namaBarang"];
        $id = $_POST["Id"];
        $query = "UPDATE brang SET namaBarang='$namabarang' WHERE Id = $id";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:post.php");

    }
    public function GetData(){
        $query = "SELECT * FROM brang";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(
            PDO::FETCH_ASSOC
        );
        return $result;
    }
}
$pdo = new ConnectPDO();
if(isset($_POST["submit"])){
    $pdo->CreateData();
}
if(isset($_POST["delete"])){
    $pdo->DeleteData();
}
if(isset($_POST["update"])){
    $pdo->UpdateData();
}