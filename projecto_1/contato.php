<?php  require_once "conn/Conexao.php";?>
<h1><?php echo (Conexao::getRouteContent("/contato","header"))?></h1>
<form action="/data" method="post">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email">
        <label for="subject">Assunto</label>
        <input type="subject" class="form-control" name="subject" id="subject">
        <label for="message">Assunto</label>
        <textarea type="message" class="form-control" name="message" id="message"></textarea>
    </div>
           <button type="submit" class="btn btn-default">Submit</button>
</form>