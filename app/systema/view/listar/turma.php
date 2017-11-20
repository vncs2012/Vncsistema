
<?php

/**
 * Description of teste
 *
 * @author vinicius
 * 24/02/2017 21:37:38
 */
 $tc->table_id = "datatable";
 $tc->table_class = "table table-striped table-bordered";
$tc->tabela = "turma";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->cd_turma;
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->cd_turma;
    $opcao .= $new->criarHtml();

$tc->add("ds_turma", $example->ds_turma);
$tc->add("hr_inicio", $example->hr_inicio);
$tc->add("hr_final", $example->hr_final);
$tc->add("qnt_semanais", $example->qnt_semanais);
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();
//-----------------Listagem--------------------
$listar = Factory::obj()->criar("compomentesListagem");
$listar->conteudo = $tc->output();
$listar->botao = $botao;
$listar->pagina = "Turma";
print $listar->criarHtml();
