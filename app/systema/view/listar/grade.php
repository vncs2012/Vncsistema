
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 13/02/2017 18:24:03
 */
 $tc->table_id = "datatable";
 $tc->table_class = "table table-striped table-bordered";
$tc->tabela = "grade";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->cd_grade;
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->cd_grade;
    $opcao .= $new->criarHtml();

    $tc->add("no_grade", $example->no_grade);
    $tc->add("bo_grade", util::formatarBoAtivo($example->bo_grade));
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();
//-----------------Listagem--------------------
$listar = Factory::obj()->criar("compomentesListagem");
$listar->conteudo = $tc->output();
$listar->botao = $botao;
$listar->pagina = "grade";
print $listar->criarHtml();
