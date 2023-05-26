<?php
    $host = "localhost";
    $port = "3000";
    $bd = "ceon";
    $user = "root";
    $password = "";

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    try {
        $con = mysqli_connect($host, $user, $password, $bd);
        if($con) {
            $infosNames = array("E-mail", "Senha");
            $infos = array($userEmail, $userPassword);
            for($i = 0; $i <= count($infos) - 1; $i++) {
                if((isset($infos[$i]) && !empty($infos[$i]))) {
                    continue;
                } else {
                    echo "<p class = 'validate-text red'>Você não preencheu o campo: " . $infosNames[$i] . "</p>";
                    mysqli_close($con);
                    return;
                }
            }
            $emailCheck_str = "SELECT nome, email, senha FROM cadastro WHERE email = '$infos[0]'";
            $emailCheck = mysqli_query($con, $emailCheck_str);
            if($emailCheck) {
                if(mysqli_num_rows($emailCheck) == 0) {
                    echo "<p class = 'validate-text red'>E-mail não cadastrado!</p>";
                } else {
                    $bool = mysqli_fetch_row($emailCheck);
                    if($userPassword == $bool[2]) {
                        echo "<p class = 'validate-text green'>Seja bem-vindo, " . $bool[0] . "</p>";
                        mysqli_close($con);
                        return;
                    } else {
                        echo "<p class = 'validate-text red'>Senha incorreta</p>";
                        mysqli_close($con);
                        return;
                    }
                };
            } else {
                echo "<p class = 'validate-text red'>Erro interno</p>";
                mysqli_close($con);
                return;
            }
        } else {
            echo "<p class = 'validate-text red'>Não foi possível realizar o login!</p>";
            
        };
        mysqli_close($con);
    } catch (PDOException $e) {
        echo "<p class = 'validate-text red'>Não foi possível realizar o login! Tente novamente mais tarde</p>";
        //die($e->getMessage());
    }
?>