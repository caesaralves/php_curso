<?php
require_once "helpers/Conexao.php";

if(isset($_GET['rota']) && isset($_GET['campo']) && isset($_POST["update"])) {
    Conexao::updateRouteContent($_GET['rota'], $_GET['campo'], $_POST["update"]);
    echo "<H4 style='color:green'>Conteudo atualizado</H4>";
}

$result = Conexao::getAllPages();

echo "<h2>Seleccione a pagina para editar</h2><ul class=\"list-group\">";
foreach ($result as $element) {
    $text = $element['conteudo'];
    echo "<li class='list-group-item'><a href='/editar?rota={$element['rota']}&campo={$element["nome_campo"]}'> {$text} </a></li>";

}
echo '</ul>';

if(isset($_GET['rota']) && isset($_GET['campo'])) {
    $pageToEdit = Conexao::getRouteContent($_GET['rota'], $_GET['campo']);

    echo "
<div>
    <h3>Editar</h3>
    <form  method=\"post\">
     <div class=\"input-group\">
      <input type=\"text\" name='update' class=\"form-control\" value='{$pageToEdit}'>
      <span class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\">Guardar</button>
      </span>
    </div><!-- /input-group -->
    </form>
</div>
";
}
?>