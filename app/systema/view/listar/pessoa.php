
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 11/01/2017 00:07:55
 */
$tc->table_id = "datatable";
$tc->table_class = "table table-striped table-bordered";
$tc->tabela = "pessoa";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->cd_pessoa;
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->cd_pessoa;
    $opcao .= $new->criarHtml();

$tc->add(no_pessoa, $example->no_pessoa);
$tc->add(email, $example->email);
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();

$listar = Factory::obj()->criar("compomentesListagem");
$listar->conteudo = $tc->output();
$listar->botao = $botao;
$listar->pagina = "Pessoas";
print $listar->criarHtml();
