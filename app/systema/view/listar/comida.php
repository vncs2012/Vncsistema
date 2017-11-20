<?php
$tc->table_id = "list1";
$tc->table_class = "conteudoTabela mdl-data-table mdl-js-data-table mdl-shadow--2dp ";
$tc->tabela = "comida";


foreach ($listagem as $example) {
    $new = Factory::obj()->criar("compomentesButtonAlterar");
    $new->value = $example->cd_pessoa;
    $opcao = $new->criarHtml();
    $new = Factory::obj()->criar("compomentesButtonExcluir");
    $new->value = $example->cd_pessoa;
    $opcao .= $new->criarHtml();

    $tc->add("Pessoa", $example->no_pessoa);
    $tc->add("Nascimento", $example->dt_nascimento);
    $tc->add("email", $example->email);
    $tc->add("Cpf", $example->nu_cpf);
    $tc->add("Opções", $opcao);
}

$i = Factory::obj()->criar("compomentesBotton");
$botao = $i->criarHtml();
?>

<div style="width: 100%; height: 15%;">
    <div style="width: 50%; float: left">
        <h3 style="margin-left: 15%;"><?php print $pagina->no_pagina; ?></h3>
    </div>
    <div style="width: 50%; float: left">
        <?php print $botao; ?>
    </div>
</div>
<hr />
<div class="mdl-grid">
    <div class='tabelaLista'>
        <?php echo $tc->output(); ?>
    </div>
<?php

?>
</div>
