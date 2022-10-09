<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php print $row->nome; ?>">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="Email" class="form-control" name="email" value="<?php print $row->email; ?>">
    </div>
    <div class="mb-3">
        <label for="">Password</label>
        <input type="password" class="form-control" name="senha" required>
    </div>
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" class="form-control" name="data_nasc" value="<?php print $row->data_nascimento; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>