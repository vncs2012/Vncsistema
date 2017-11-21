<?php
class util
{
    public function formatarBoAtivo($valor)
    {
        $fr ="<p class='alert alert-success text-center' >Ativo</p>";
        if ($valor == 0) {
            $fr ="<p class='alert alert-danger text-center'>Inativo</p>";
        }
        return $fr;
    }

    public function redirecionar($url){
        ?>
        <script language= "JavaScript">
            location.href="<?=$url?>"
        </script>
        <?php
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
