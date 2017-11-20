
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 24/01/2017 22:17:06
 */
$tc->table_id = "datatable";
$tc->table_class = "table table-striped table-bordered";
$tc->tabela = "atividade";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->cd_atividade;
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->cd_atividade;
    $opcao .= $new->criarHtml();

$tc->add("no_atividade", $example->no_atividade);
$tc->add("bo_atividade", $example->bo_atividade);
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();
//-----------------Listagem--------------------
$listar = Factory::obj()->criar("compomentesListagem");
$listar->conteudo = $tc->output();
$listar->botao = $botao;
$listar->pagina = "Atividades";
print $listar->criarHtml();
