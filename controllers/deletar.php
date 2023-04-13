<?php

$varIdAluno = $_GET["id_aluno"];


include("../models/conexao.php");

mysqli_query($conexao, "DELETE FROM alunos WHERE codigo = $varIdAluno");


header("location:../index.php");

?>