<?php 
    include("models/conexao.php");
    include("views/blades/header.php");
?>
<div class="container bg-white mt-5 pt-3 ps-3 pb-3 pe-3 rounded-3 shadow-lg">
    <h1>Sistema Crud</h1>
    <a class="btn btn-success" href="views/cadastro.php">Cadastrar</a>
    <hr>

<form action="index.php" method="post">
    <input class="form-control" type="text" size="25" name="buscar">
</form>

<?php
    if(empty($_POST["buscar"])) {
        echo "Nenhum resultado";
    } else {
        $varBuscar = $_POST["buscar"];
?>

<table class="table table-bordered table-striped table-hover" width="500px">
    <tr>
        <td><b>Frase</b></td>
        <td><b>Editar</b></td>
        <td><b>Excluir</b></td>
    </tr>

    <?php
        $query = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome LIKE '%$varBuscar%'");
        while ($exibe = mysqli_fetch_array($query)) {
            $vogal = ($exibe[3] == "m") ? "o" : "a"; 
    ?>
    
    <tr>
        <td>
            <?php echo strtoupper($vogal) . " alun$vogal <b>". $exibe[1] ."</b> mora na cidade de <b>". $exibe[2] ."</b>."?>  
        </td>
        <td><a class="btn btn-primary" href="views/cadastroAtualiza.php?id_aluno=<?php echo $exibe[0]?>">Editar</a></td>
        <td><a class="btn btn-danger" href="controllers/deletar.php?id_aluno=<?php echo $exibe[0]?>">Excluir</a></td>
    </tr>

    <?php } ?>
</table>

<?php } ?>
</div>
<?php include("views/blades/footer.php"); ?>