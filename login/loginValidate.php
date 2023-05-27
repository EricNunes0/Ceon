<?php
    /*$host = "localhost";
    $port = "3000";
    $bd = "ceon";
    $user = "root";
    $password = "";*/

    $host = "containers-us-west-89.railway.app";
    $port = "7334";
    $bd = "railway";
    $user = "root";
    $password = "i5lhyU3pMqUFNWo1x8Kh";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $charset = 'utf8mb4';

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    try {
        $dsn = "mysql:host=$host;dbname=$bd;charset=$charset;port=$port";
        $con = new PDO($dsn, $user, $password, $options);
        if($con) {
            $infosNames = array("E-mail", "Senha");
            $infos = array($userEmail, $userPassword);
            for($i = 0; $i <= count($infos) - 1; $i++) {
                if((isset($infos[$i]) && !empty($infos[$i]))) {
                    continue;
                } else {
                    echo "<p class = 'validate-text red'>Você não preencheu o campo: " . $infosNames[$i] . "</p>";
                    $con = null;
                    return;
                }
            }
            $emailCheck_str = "SELECT nome, email, senha FROM cadastro WHERE email = '$infos[0]'";
            $emailCheck = $con->query($emailCheck_str);
            if($emailCheck) {
                if($emailCheck->rowCount() == 0) {
                    echo "<p class = 'validate-text red'>E-mail não cadastrado!</p>";
                } else {
                    $bool = $emailCheck->fetch();
                    if($userPassword == $bool[2]) {
                        echo "<p class = 'validate-text green'>Seja bem-vindo, " . $bool[0] . "</p>";
                        $con = null;
                        session_start();
                        $_SESSION['name'] = $bool[0];
                        $_SESSION['email'] = $bool[1];
                        header("location: ../index.php");
                        return;
                    } else {
                        echo "<p class = 'validate-text red'>Senha incorreta</p>";
                        $con = null;
                        return;
                    }
                };
            } else {
                echo "<p class = 'validate-text red'>Erro interno</p>";
                $con = null;
                return;
            }
        } else {
            echo "<p class = 'validate-text red'>Não foi possível realizar o login!</p>";
            
        };
        $con = null;
    } catch (PDOException $e) {
        echo "<p class = 'validate-text red'>Não foi possível realizar o login! Tente novamente mais tarde</p>";
        //die($e->getMessage());
    }
?>