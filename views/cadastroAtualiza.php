<?php include("../models/conexao.php");?>
<?php include("blades/header.php");?>
<?php $varIdAluno = $_GET["id_aluno"];
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = $varIdAluno ");
while($exibe=mysqli_fetch_array($query)){
?>

<div class="container bg-white mt-5 pt-3 ps-3 pb-3 pe-3 rounded-3 shadow-lg">
    <h3 class="pt-3 pb-5">Atualizar</h3>
<form action="../controllers/atualizar.php" method="post">

<input  type="hidden" name="alunoCodigo" value=" <?php echo $exibe[0] ?>">
<br>
<label class="form-label">Nome</label>
    <input class="form-control" type="text" name="alunoNome" value=" <?php echo $exibe[1] ?>">
    <br>
<label class="form-label">Cidade</label>
    <input class="form-control" type="text" name="alunoCidade" value=" <?php echo $exibe[2] ?>">
    <br>
<label class="form-label">Sexo</label>
    <input type="radio" name="alunoSexo" value="m" <?php echo ($exibe[3] == 'm') ? 'checked' : "" ?>> Masculino
    <input type="radio" name="alunoSexo" value="f" <?php echo ($exibe[3] == 'f') ? 'checked' : "" ?>> Feminino
    <br>

    <input class="btn btn-success mt-3" type="submit" value="Atualizar">


</form>
</div>


<?php }?>
<?php include("blades/footer.php");?>