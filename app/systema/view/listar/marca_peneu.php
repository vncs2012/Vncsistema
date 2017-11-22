
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 22/11/2017 12:02:57
 */
 $tc->table_id = "datatable";
 $tc->table_class = "table table-striped table-bordered";
$tc->tabela = "marca_peneu";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->cd_marca_peneu;
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->cd_marca_peneu;
    $new->no_arquivo = $route->no_arquivo;
    $new->cd_rotina = $route->cd_rotina;
    $new->cd_modulo = $route->cd_modulo;
    $opcao .= $new->criarHtml();

$tc->add("Marcas", $example->no_marca_peneu);
$tc->add("Status", util::formatarBoAtivo($example->bo_ativo));
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();
//-----------------Listagem--------------------
$listar = Factory::obj()->criar("compomentesListagem");
$listar->conteudo = $tc->output();
$listar->botao = $botao;
$listar->pagina = "Marca de Peneus";
print $listar->criarHtml();
