<?php
include ("../config.php");


switch ($_REQUEST['acao']) {
    case 'cadastrar';
    $_sql = "INSERT INTO animais (nome,) VALUES ('".$_POST['nome']."')";

    $res = $conn ->query($sql);

    if($res==true){
        print"<script> alert('Cadastro com sucesso!');</script>
        print"<script> location.href='./index.php';</script>
    }

}