
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 16/11/2017 15:11:55
 */
 $tc->table_id = "datatable";
 $tc->table_class = "table table-striped table-bordered";
$tc->tabela = "penalidade";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->cd_penalidade;
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->cd_penalidade;
    $opcao .= $new->criarHtml();

    $tc->add("Penalidade", $example->no_penalidade);
    $tc->add("Valor", $example->vl_penalidade);
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();
//-----------------Listagem--------------------
$listar = Factory::obj()->criar("compomentesListagem");
$listar->conteudo = $tc->output();
$listar->botao = $botao;
$listar->pagina = "Penalidade Motorista";
print $listar->criarHtml();
