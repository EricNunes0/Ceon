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

    $userName = $_POST['name'];
    $userGender = $_POST['gender'];
    $userPhone = $_POST['phone'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    try {
        $dsn = "mysql:host=$host;dbname=$bd;charset=$charset;port=$port";
        $con = new PDO($dsn, $user, $password, $options);
        if($con) {
            echo "<h1>CHEGUEI</h1>";
            $infosNames = array("Nome", "Gênero", "Telefone", "E-mail", "Senha");
            $infos = array($userName, $userGender, $userPhone, $userEmail, $userPassword);
            for($i = 0; $i <= count($infos) - 1; $i++) {
                if((isset($infos[$i]) && !empty($infos[$i]))) {
                    continue;
                } else {
                    echo "<p class = 'validate-text red'>Você não preencheu o campo: " . $infosNames[$i] . "</p>";
                    $con = null;
                    return;
                }
            }
            $emailCheck_str = "SELECT * FROM cadastro WHERE email = '$infos[3]'";
            $emailCheck = $con->query($emailCheck_str);
            if($emailCheck) {
                if($emailCheck->rowCount() > 0) {
                    echo "<p class = 'validate-text red'>E-mail já cadastrado!</p>";
                    $con = null;
                    return;
                } else {
                    $insertCadastro_str = "INSERT INTO cadastro (nome, sexo, telefone, email, senha) VALUES ('$infos[0]', '$infos[1]', '$infos[2]', '$infos[3]', '$infos[4]')";
                    $insertCadastro = $con->query($insertCadastro_str);
                    echo "<p class = 'validate-text green'>Seja bem-vindo, $infos[0]</p>";
                    $con = null;
                    return;
                };
            } else {
                echo "<p class = 'validate-text red'>Houve um erro ao realizar o cadastro!</p>";
                $con = null;
                return;
            }
        } else {
            echo "<p class = 'validate-text red'>Não foi possível realizar o cadastro!</p>";
            return;
        };
        $con = null;
    } catch (PDOException $e) {
        echo "<p class = 'validate-text red'>Não foi possível realizar o cadastro! Tente novamente mais tarde</p>";
        //die($e->getMessage());
    }
?>