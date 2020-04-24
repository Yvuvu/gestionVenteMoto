<?php
public function login($username, $password){
    $admin = $this->db->prepare('SELECT * FROM admin WHERE username = ?')
    if($admin){
        if($admin->password === md5($password)){
            $_SESSION['auth'] = $admin->id;
            return true;
        }
    }
}

public function logged(){
    return isset($_SESSION['auth']);
}
// traitement
if (!empty($_POST)){
    if(auth->login($_POST['username'], $_POST['password'])){
header('Location: admin.php');
    }else{
        ?>
        <div class="alert alert-danger">
       Identifiants incorrects     
        </div>
        <?php
    }
}
?>