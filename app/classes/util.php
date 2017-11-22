<?php
class util
{
    public function formatarBoAtivo($valor)
    {
        $fr ="<p class='alert alert-success text-center' style='margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;' >Ativo</p>";
        if ($valor == 0) {
            $fr ="<p class='alert alert-danger text-center' style='margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;'>Inativo</p>";
        }
        return $fr;
    }
    public function getUrl($variavel) {
        $search_html = filter_input(INPUT_GET, $variavel, FILTER_SANITIZE_SPECIAL_CHARS);
        return $search_html;
    }
    
    function converterCaracterPM($string) {
        $texto = ucwords(strtolower($string));
        $filtro = array(
            'Da ' => 'da ',
            'Das ' => 'das ',
            'De ' => 'de ',
            'Dos ' => 'dos '
        );
        $txt_final = strTr($texto, $filtro);
        return $txt_final;
    }
}
