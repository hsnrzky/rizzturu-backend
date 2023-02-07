<?php
session_start();
class ConnectPDO {
    protected $username = "rizz";
    protected $pass = "040516";

    public function __construct()
    {
        $this->db = new PDO
        ("mysql:host=localhost;dbname=TuruDx", $this->username, $this->pass);
    }
    public function CreateAccount(){
        $nama = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $query = "INSERT INTO user(username,email,password) VALUES ('$nama','$email','$pass')";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:inde.php");
    }
    public function LoginAccount(){
        $nama = $_POST['username'];
        $pass = $_POST['password'];
        $query = "SELECT * FROM user WHERE username = '$nama'";
        $data = $this->db->prepare($query);
        $data->execute();
        if(!is_null($_POST["ingat"])){
            setcookie("user",$_POST['username'],time()+ 86400,"/");
            setcookie("pass",$_POST['password'],time()+ 86400,"/");
            }        
        if($data->fetch(PDO::FETCH_ASSOC)['password'] == $pass){
            header("Location:inde.php");
        } else{
        
            header("location:login.php?error=");
        }
    }
    public function CreateArt(){
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $isi = $_POST['isi'];
        $nama = $_SESSION['username'];
        $query = "INSERT INTO artikel(judul,kategori,isi,username) VALUES ('$judul','$kategori','$isi','$nama')";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:inde.php");
    }
    public function GetMine(){
        $id = $_GET['id'];
        $query = "SELECT * FROM artikel WHERE id = '$id'";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(
            PDO::FETCH_ASSOC
        );
        return $result;

    }
    public function EditArt(){
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $isi = $_POST['isi'];
        $id = $_POST['id'];
        $query = "UPDATE artikel SET `judul`='$judul',`kategori`='$kategori',`isi`='$isi' WHERE id = '$id'";
        $data = $this->db->prepare($query);
        $data->execute();

        header("location:inde.php");
    }
    public function DeleteArt($id){
        $query = "DELETE FROM artikel WHERE id ='$id'";
        $data = $this->db->prepare($query);
        $data->execute();

        header("location:inde.php");

    }
    public function LogoutAccount(){
        session_start();
        session_destroy();
        setcookie("user","",time()-86400,"/");
        setcookie("pass","",time()-86400,"/");

        // header("location:login.php");
    }
    public function GetData(){
        $query = "SELECT * FROM artikel";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(
            PDO::FETCH_ASSOC
        );
        return $result;
    }
    public function GetEmail(){
        $nama = $_SESSION["username"];
        $query = "SELECT email FROM user WHERE username = '$nama'";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetch(
            PDO::FETCH_ASSOC
        );
        return $result["email"];
    }
    public function GetArt(){
        $nama = $_SESSION["username"];
        $query = "SELECT * FROM artikel WHERE username ='$nama'";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetch(
            PDO::FETCH_ASSOC
        );
        return $result;

    }

}
$pdo = new ConnectPDO();
if (isset($_POST["create"])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $pdo->CreateAccount();
}
if(isset($_POST["buat"])){
    $pdo->CreateArt();
}
if(isset($_POST["login"])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $pdo->GetEmail();
    $pdo->LoginAccount();
}
if(isset($_POST["edit"])){
    $pdo->EditArt();
}
// if(empty($_SESSION['username'])){
//     $_SESSION['username'] = $_POST['username'];
//     $_SESSION['email'] = $_POST['email'];   
// }