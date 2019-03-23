<?php 

class Masuk extends Controller{
    public function index(){
		$data['judul']='Masuk';
		$this->view('templates/header',$data);
		$this->view('home/masuk',$data);
		$this->view('templates/footer');
    }
    
    public function login(){
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data['user']=$this->model('Akun_model')->getPembeliByUsername($username);

            if($data['user']){
                if($data['user']['password']===$password){
                    session_start();
                    $_SESSION['user'] =  $data['user'];
                    header('Location:'.BASEURL.'/home');
                    exit;
                }
            }
        }
    }

}