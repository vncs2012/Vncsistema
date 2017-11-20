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
}
