<?php include("blades/header.php");?>

<div class="container bg-white mt-5 pt-3 ps-3 pb-3 pe-3 rounded-3 shadow-lg">

<h3 class="pb-5">Cadastrar</h3>
<form action="../controllers/cadastrar.php" method="post">
    <label class="form-label">Nome</label>
    <input  class="form-control" type="text" name="alunoNome"> <br>

    <label  class="form-label">Cidade</label>
    <input  class="form-control" type="text" name="alunoCidade"><br>

    <label  class="form-label">Sexo</label> <br>
    <input type="radio" name="alunoSexo" value="m" checked>Masculino
    <input type="radio" name="alunoSexo" value="f">Feminino <br>

    <input class="btn btn-success mt-3" type="submit" value="Cadastrar">


</form>
</div>



<?php
include("blades/footer.php");
?>