<?php
require_once "helpers/Conexao.php";

$notFound = "<h4>Results not found</h4>";

if(isset($_GET["search"]) && $_GET["search"] != ""){
    $searchVal = $_GET["search"];
    $result = Conexao::getAnyRoute($searchVal);
    if(empty($result)){
        echo $notFound;
        return;
    }

echo "<h2>Resultados de pesquisa</h2></h2><ul class=\"list-group\">";
    foreach ($result as $element) {
        $route = str_replace('/','',$element['rota']);
        $text = $element['conteudo'];
        echo "<li class=\"list-group-item\"><a href=\"{$route}\">{$text}</a></li>";
    }
echo '</ul>';
} else {
    echo $notFound;
}