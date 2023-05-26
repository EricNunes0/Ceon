<?php
    $host = "localhost";
    $port = "3000";
    $bd = "ceon";
    $user = "root";
    $password = "";

    $userName = $_POST['name'];
    $userGender = $_POST['gender'];
    $userPhone = $_POST['phone'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    try {
        $con = mysqli_connect($host, $user, $password, $bd);
        if($con) {
            $infosNames = array("Nome", "Gênero", "Telefone", "E-mail", "Senha");
            $infos = array($userName, $userGender, $userPhone, $userEmail, $userPassword);
            for($i = 0; $i <= count($infos) - 1; $i++) {
                if((isset($infos[$i]) && !empty($infos[$i]))) {
                    continue;
                } else {
                    echo "<p class = 'validate-text red'>Você não preencheu o campo: " . $infosNames[$i] . "</p>";
                    mysqli_close($con);
                    return;
                }
            }
            $emailCheck_str = "SELECT * FROM cadastro WHERE email = '$infos[3]'";
            $emailCheck = mysqli_query($con, $emailCheck_str);
            if($emailCheck) {
                if(mysqli_num_rows($emailCheck) > 0) {
                    echo "<p class = 'validate-text red'>E-mail já cadastrado!</p>";
                    mysqli_close($con);
                    return;
                } else {
                    $insertCadastro_str = "INSERT INTO cadastro (nome, sexo, telefone, email, senha) VALUES ('$infos[0]', '$infos[1]', '$infos[2]', '$infos[3]', '$infos[4]')";
                    $insertCadastro = mysqli_query($con, $insertCadastro_str);
                    echo "<p class = 'validate-text green'>Seja bem-vindo, $infos[0]</p>";
                    mysqli_close($con);
                    return;
                };
            } else {
                echo "<p class = 'validate-text red'>Houve um erro ao realizar o cadastro!</p>";
                mysqli_close($con);
                return;
            }
        } else {
            echo "<p class = 'validate-text red'>Não foi possível realizar o cadastro!</p>";
            return;
        };
        mysqli_close($con);
    } catch (PDOException $e) {
        echo "<p class = 'validate-text red'>Não foi possível realizar o cadastro! Tente novamente mais tarde</p>";
        //die($e->getMessage());
    }
?>