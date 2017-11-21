<?php
error_reporting(E_ERROR | E_PARSE);

function diaSemana() {
    $diasema = '';
    $dia = date("N");
    if ($dia == 1) {
        $diasema = "SEGUNDA - FEIRA";
    }
    if ($dia == 2) {
        $diasema = "TERÇA - FEIRA";
    }
    if ($dia == 3) {
        $diasema = "QUARTA - FEIRA";
    }
    if ($dia == 4) {
        $diasema = "QUINTA - FEIRA";
    }
    if ($dia == 5) {
        $diasema = "SEXTA - FEIRA";
    }
    if ($dia == 6) {
        $diasema = "SABADO";
    }
    if ($dia == 7) {
        $diasema = "DOMINGO";
    }
}

function mes($mes) {
    if ($mes == 1) {
        print 'Janeiro';
    }
    if ($mes == 2) {
        print 'Fevereiro';
    }
    if ($mes == 3) {
        print 'Março';
    }
    if ($mes == 4) {
        print 'Abril';
    }
    if ($mes == 5) {
        print 'Maio';
    }
    if ($mes == 6) {
        print 'Junho';
    }
    if ($mes == 7) {
        print 'Julho';
    }
    if ($mes == 8) {
        print 'Agosto';
    }
    if ($mes == 9) {
        print 'Setembro';
    }
    if ($mes == 10) {
        print 'Outubro';
    }
    if ($mes == 11) {
        print 'Novembro';
    }
    if ($mes == 12) {
        print 'Dezembro';
    }
}

function mesAbreviado($mes) {
    if ($mes == 1) {
        print 'Jan';
    }
    if ($mes == 2) {
        print 'Fev';
    }
    if ($mes == 3) {
        print 'Mar';
    }
    if ($mes == 4) {
        print 'Abr';
    }
    if ($mes == 5) {
        print 'Mai';
    }
    if ($mes == 6) {
        print 'Jun';
    }
    if ($mes == 7) {
        print 'Jul';
    }
    if ($mes == 8) {
        print 'Ago';
    }
    if ($mes == 9) {
        print 'Set';
    }
    if ($mes == 10) {
        print 'Out';
    }
    if ($mes == 11) {
        print 'Nov';
    }
    if ($mes == 12) {
        print 'Dez';
    }
}

function espaco($qtd) {
    $index = 0;
    for ($index = 0; $index < $qtd; $index ++) {
        print '&nbsp';
    }
}

function ln($qtd) {
    $index = 0;
    for ($index = 0; $index < $qtd; $index ++) {
        print '<br />';
    }
}

function alerta($mensagem) {
    echo '<script>alert("' . $mensagem . '");</script>';
}

function voltar() {
    echo "<script>history.back();</script>";
}

function direciona($para_url) {
    print '<script>window.location="' . $para_url . '"</script>';
}

function direcionaNovaAba($para_url) {
    print '<script>window.location="' . $para_url . '"</script>';
}

function abrirNovaAba($para_url) {
    ?><script> window.open("<?= $para_url ?>", "nova", "width=800,height=600,'status=no,toolbar=no,menubar=no,location=no")</script><?php
}

function converterMoeda($moeda) {
    return number_format($moeda, 2, ',', '.');
}

function converterMoeda2BD($get_valor) {
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
    return $valor; //retorna o valor formatado para gravar no banco
}

function converterData($data) {
    $data = date("d/m/Y", strtotime($data));
    return $data;
}

function converterDataBanco($data) {
    $data = date("Y-m-d", strtotime($data));
    return $data;
}

function DataDB2BR($datapega) {
    $data = explode('-', $datapega);
    $datacerta = $data [2] . '/' . $data [1] . '/' . $data [0];
    return $datacerta;
}

function DataBR2DB($datapega) {
    $data = explode('/', $datapega);
    $datacerta = $data[2] . '-' . $data[1] . '-' . $data[0];
    return $datacerta;
}

function Timestamp2BR($data) {
    $data_mysql = $data;
    $timestamp = strtotime($data_mysql); // Gera o timestamp de $data_mysql
    return date('d/m/Y', $timestamp);
}

function Timestamp2BRH($data) {
    if (!empty($data)) {

        $data_mysql = $data;
        $timestamp = strtotime($data_mysql); // Gera o timestamp de $data_mysql
        return date('d/m/Y H:i:s', $timestamp);
    } else {
        return $data;
    }
}

function TimestampHora($data) {
    $data_mysql = $data;
    $timestamp = strtotime($data_mysql); // Gera o timestamp de $data_mysql
    return date('H:i:s', $timestamp);
}

function msgExcluir() {
    print "javascript:if(confirm('Deseja excluir esse registro?'))";
}

function msg($msg) {
    print "javascript:if(confirm('" . $msg . "'))";
}

function msgOk() {
    echo "<script>showSuccessToast(); </script>";
}

function msgErro() {
    echo "<script>showErrorToast(); </script>";
}

function limita_caracteres($texto, $limite, $quebra = true) {
    $tamanho = strlen($texto);
    if ($tamanho <= $limite) { // Verifica se o tamanho do texto é menor ou igual ao limite
        $novo_texto = $texto;
    } else { // Se o tamanho do texto for maior que o limite
        if ($quebra == true) { // Verifica a opção de quebrar o texto
            $novo_texto = trim(substr($texto, 0, $limite)) . "...";
        } else { // Se não, corta $texto na última palavra antes do limite
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)) . "..."; // Corta o $texto até a posição localizada
        }
    }
    return $novo_texto; // Retorna o valor formatado
}

function formatarBoAchado($valor) {
    if ($valor == 1) {
        $sit = '<p class="alert alert-info text-center"> Perdido </p>';
    } else {
        $sit = '<p class="alert alert-info text-center"> Achado </p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarBoAtivo($valor) {
    if ($valor == 1) {
        $sit = '<p class="alert alert-success text-center">Ativo</p>';
    } else {
        $sit = '<p class="alert alert-danger text-center"> Inativo </p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarBoAtivoSemCor($valor) {
    if ($valor == 1) {
        $sit = '<p class=""style="color:green">Ativo</p>';
    } else {
        $sit = '<p class="" style="color:red"> Inativo </p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarBoAtivoProduto($valor) {
    if ($valor == 0) {
        $sit = '<p class="alert alert-danger text-center">Inativo</p>';
    } else {
        $sit = '<p class="alert alert-success text-center"> Ativo </p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarBoNoticia($valor) {
    if ($valor == 0) {
        $sit = '<p class="alert alert-danger text-center">Inativo</p>';
    } else {
        $sit = '<p class="alert alert-success text-center"> Ativo </p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarBoSlide($valor) {
    if ($valor == NULL) {
        $sit = '<p class="alert alert-danger text-center">Inativo</p>';
    } else {
        $sit = '<p class="alert alert-success text-center"> Ativo </p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarSexo($valor) {
    if ($valor == 0) {
        $sit = '<p style="background: #0269C2;color: white;" class="alert text-center"> Masculino </p>';
    } else {
        $sit = '<p style="background: #CC0066;color: white;" class="alert alert-danger text-center"> Feminino </p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarBoAtivoPago($valor) {
    if ($valor == 0) {
        $sit = '<p class="alert alert-danger text-center">Devendo</p>';
    } else {
        $sit = '<p class="alert alert-success text-center">Pago</p>';
    }
    $valor = $sit;
    return $valor;
}

function formatarCor($valor) {
    $sit = '<p style="background: ' . $valor . ';color: white;" class="alert text-center"></p>';
    $valor = $sit;
    return $valor;
}

function formatarTipoCompra($valor) {
    if ($valor == 1) {
        $sit = '<img src="assets/img/cartao_credito.png" width="40">';
    } else {
        
    }
    $valor = $sit;
    return $valor;
}

//
// function formatarBoAtivo($valor, $msgZero, $msgUm) {
// if ($valor == 0) {
// $sit = '<p class="alert alert-success text-center"> ' . $msgZero . ' </p>';
// } else {
// $sit = '<p class="alert alert-danger text-center"> ' . $msgUm . ' </p>';
// }
// $valor = $sit;
// return $valor;
// }
function formatarBoAtivoMsg($valor, $msg1, $msg2) {
    if ($valor == 1) {
        $sit = '<p class="alert alert-success text-center">' . $msg1 . '</p>';
    } else {
        $sit = '<p class="alert alert-danger text-center">' . $msg2 . '</p>';
    }
    $valor = $sit;
    return $valor;
}

function MaskTelefone($str) {
    $mask = "(##) ####-####";

    $str = str_replace(" ", "", $str);

    for ($i = 0; $i < strlen($str); $i++) {
        $mask[strpos($mask, "#")] = $str[$i];
    }

    return $mask;
}

function validaCPF($cpf = null) {

    // Verifica se um número foi informado
    if (empty($cpf)) {
        return false;
    }

    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // Verifica se o numero de digitos informados é igual a 11
    if (strlen($cpf) != 11) {
        return false;
    }  // Verifica se nenhuma das sequências invalidas abaixo
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
        return false;
        // Calcula os digitos verificadores para verificar se o
        // CPF é válido
    } else {

        for ($t = 9; $t < 11; $t ++) {

            for ($d = 0, $c = 0; $c < $t; $c ++) {
                $d += $cpf {$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf {$c} != $d) {
                return false;
            }
        }

        return true;
    }
}

function formatarCpf($string, $tipo = "") {
    $string = ereg_replace("[^0-9]", "", $string);
    if (!$tipo) {
        switch (strlen($string)) {
            case 10 :
                $tipo = 'fone';
                break;
            case 8 :
                $tipo = 'cep';
                break;
            case 11 :
                $tipo = 'cpf';
                break;
            case 14 :
                $tipo = 'cnpj';
                break;
        }
    }
    switch ($tipo) {
        case 'fone' :
            $string = '(' . substr($string, 0, 2) . ') ' . substr($string, 2, 4) . '-' . substr($string, 6);
            break;
        case 'cep' :
            $string = substr($string, 0, 5) . '-' . substr($string, 5, 3);
            break;
        case 'cpf' :
            $string = substr($string, 0, 3) . '.' . substr($string, 3, 3) . '.' . substr($string, 6, 3) . '-' . substr($string, 9, 2);
            break;
        case 'cnpj' :
            $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) . '.' . substr($string, 5, 3) . '/' . substr($string, 8, 4) . '-' . substr($string, 12, 2);
            break;
        case 'rg' :
            $string = substr($string, 0, 2) . '.' . substr($string, 2, 3) . '.' . substr($string, 5, 3);
            break;
    }
    return $string;
}

function removerMascara($valor) {
    $pontos = array(
        "(",
        ")",
        ",",
        ".",
        "-",
        " ",
    );
    $result = str_replace($pontos, "", $valor);
    return $result;
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

function validarInject($valor) {
    $texto_senha = trim($valor);
    $texto_senha = str_replace("=", "", $valor);
    $texto_senha = str_replace("*", "", $valor);
    $texto_senha = str_replace("drop", "", $valor);
    $texto_senha = str_replace("insert", "", $valor);
    $texto_senha = str_replace("--", "", $valor);
    $texto_senha = str_replace("'", "", $valor);
    $texto_senha = str_replace(" or ", "", $valor);
    $texto_senha = str_replace("delete", "", $valor);
    $texto_username = str_replace("from", "", $valor);
    $texto_username = str_replace("select", "", $valor);
    $texto_username = str_replace("where", "", $valor);
    $texto_username = str_replace("update", "", $valor);
    $texto_username = str_replace("show", "", $valor);
    $texto_username = str_replace("tables", "", $valor);
    $texto_senha = addslashes($valor);

    $texto_senha = $texto_senha;
    return $texto_senha;
}

function ButtonComentario($valor) {

    $permissao = new logado();
    $permissao->listarUsuario();
//    $sit = '<a target="_BLANK" href="https://disqus.com/home/explore/">
//         <button class="btn" style="padding-right: 15px; padding-left: 15px;">
//         <i class="fa fa-comments-o"></i> Comentarios</button></a>';
    if ($permissao->getCdPermissa() == 2) {
        $sit .= '<a href="?pagina=' . $_REQUEST["pagina"] . '&acao=ativarNoticia&cd_noticia=' . $valor . '">
         <button class="btn" style="padding-right: 15px; padding-left: 15px;">
         <i class="fa fa-check-circle"> Aceitar</i></button></a>';
    }
    return $sit;
}

function ButtonAddSlider($valor) {
    $sit = '<a href="?pagina=' . $_REQUEST["pagina"] . '&acao=iserirSlide&cd_=' . $valor . '">
         <button class="btn" style="padding-right: 15px; padding-left: 15px;">
         <i class="fa fa-user"></i></button></a>';
    return $sit;
}

function ButtonEnviarFoto($valor) {
    $sit .= '<a href="?pagina=' . $_REQUEST["pagina"] . '&acao=IncluirFrom&cd_produto=' . $valor . '">
         <button class="btn" style="padding-right: 15px; padding-left: 15px;">
         <p class="fa fa-cloud"></p></button></a>';
    return $sit;
}

function getUrl($variavel) {
    $search_html = filter_input(INPUT_GET, $variavel, FILTER_SANITIZE_SPECIAL_CHARS);
    return $search_html;
}

function modalBootstrap() {
    ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Informação</h4>
                </div>
                <div class="modal-body"id="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function modalSalvo($msg) {
    ?>
    <div id="static" class="modal fade" tabindex="-1" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true"></button>
                    <h4 class="modal-title">Informação</h4>
                </div>
                <div class="modal-body"id="modal-body">
                    <p>
    <?php print $msg ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn green">OK</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    print '<script> location.href="#static";</script>';
}

function modalMes() {
    ?>
    <div id="static" class="modal fade" tabindex="-1" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true"></button>
                    <h4 class="modal-title">Informação</h4>
                </div>
                <form method='post' action='<?php $action ?>'>
                    <div class="modal-body"id="modal-body">
                        <p>
    <?php include_once 'view/modal/modalMes.php'; ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" data-dismiss="modal" class="btn green">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    print '<script> location.href="#static";</script>';
}

function ultimoDiaDoMes($mes, $ano) {
    $mesd = date("$mes");
    $anod = date("$ano");
    $ultimo_diad = date("t", mktime(0, 0, 0, $mesd, '01', $anod)); // Mágica, plim!

    $dataFinal = date("$ano-$mes-$ultimo_diad");
    return $dataFinal;
}

function uploadImgAlterar($fotoAntiga, $fotoNova, $caminho) {
    $caminhoMenosUm = substr($caminho, 0, -1);
    $sufixo = end(explode("/", $caminhoMenosUm));
    if ($_FILES[$fotoNova]['name'] != "") {
        excluirImagem($fotoAntiga, $caminho);
        $foto = uploadimg($fotoNova, $caminho, "_$sufixo");
        if ($foto['movido'] == true) {
            return $foto['nome_final'];
        } else {
            print json_encode("Erro ao mover imagem");
            die();
        }
    } else {
        return $fotoAntiga;
    }
}

function uploadImgMiniatura($foto, $caminho, $novoCaminho, $no_imagem = array(), $upload = true) {
    if ($upload == true) {
        include('../assets/global/plugins/WideImage/WideImage.php');
    } else {
        include('../../assets/global/plugins/WideImage/WideImage.php');
    }
    foreach ($no_imagem as $value) {
        $imgPrincipal = $caminho . $foto;

        $img = WideImage::load($imgPrincipal);
        /*
          | PARA REDIMENSIONAR UMA IMAGEM
          | Sintaxe: $img->resize(largura, altura,'ajuste opcional','escala opcional');
         */
        $miniatura = $img->resize($value['largura'], $value['altura'], 'outside');
//        $miniatura = $img->crop('20% - 20', '80% - 70', $value['largura'], $value['altura']);
        /*
          | PARA SALVA A NOVA IMAGEM
          | Sintaxe: $miniatura->saveToFile("caminho_da_imagem/novo_nome.extensao");
         */
        $miniImg = $novoCaminho . $value['nome'];
        $miniatura->saveToFile($miniImg);
        $miniatura->destroy();
    }
}

function uploadimg($img, $caminho, $no_diferenciar, $nomeFoto = null) {
//    $IMG = $_FILES['IMG'];

    $targetFolder = $caminho; // Relative to the root
    $verifyToken = md5('unique_salt' . $_POST['timestamp']);
    $tempFile = $_FILES[$img]['tmp_name'];
    if (!isset($tempFile)) {
        print "Img não chegou na função";
    }
    $targetPath = $targetFolder;
//$targetFile = rtrim($targetPath, '/') . '/' . $_FILES['Filedata']['name'];
// Validate the file type
    $fileTypes = array('jpg', 'jpeg', 'jpeg', 'gif', 'png'); // File extensions
    $fileParts = pathinfo($_FILES['Filedata']['name']);

    $extencVideo = array('BRRip', 'HDDVDRip', 'DVDRip', 'R5', 'DVDScr', 'MP3', 'TS', 'RMVB', 'CAM', 'DivX', 'MPEG', 'MKV', 'FLV', 'AVI', 'MOV', 'WMV'); // File extensions
//Pega as Variaveis  
    $nome_foto = $_FILES[$img]['name'];
    $nome_foto = str_replace(" ", "", ( $_FILES[$img]['name']));
    $ext = end(explode(".", $nome_foto));

    $data = date("d_m_y_h_i_s");
//Junta todas as variaveis  
    $completo = "_" . $data . $no_diferenciar . '.' . $ext;
//Pega a Extensão Original  
    $path_parts = pathinfo($nome_foto);

    if ($nomeFoto != null) {
        $nome_final = $nomeFoto . "." . $ext;
    } else {
        $nome_final = $completo;
    }
//Pega o nome do arquivo com ele já modificado
    $targetFile = str_replace('//', '/', $targetPath) . $nome_final;

    $trimimg = str_replace(" ", "", strtolower($_FILES[$img]['name']));

//ini_set( 'display_errors', true );
//error_reporting( E_ALL );
    $movido = false;
    if (in_array($fileParts['extension'], $extencVideo)) {
        if (move_uploaded_file($tempFile, $targetFile)) {
//            print 'movido';
            $movido = true;
        }
    } else {
        $data = date("Y-m-d h:i:s");
        if (move_uploaded_file($tempFile, $targetFile)) {
            $movido = true;
        } else {
            print "erro ao mover imagen";
        }
//        move_uploaded_file($tempFileAPRE, $targetFileApre);
    }
    $resutado = array('nome_final' => $nome_final, 'movido' => $movido);


    return $resutado;
}

function excluirImagem($no_imagem, $caminho) {
    $arquivo = $caminho . $no_imagem; // vamos excluir
    @chmod($arquivo, 0777);
    @unlink($arquivo);
}

function calcula_idade($data_nascimento) {

    $data_nasc = explode('-', $data_nascimento);
    $data = date('Y-m-d');
    $data = explode("-", $data);
    $anos = $data[0] - $data_nasc[0];

    if ($data_nasc[1] >= $data[1]) {
        if ($data_nasc[2] <= $data[2]) {
            return $anos;
        } else {
            return $anos - 1;
        }
    } else {
        return $anos;
    }
}

function noSqlInjection($string) {

    $string = trim($string);
    $string = str_replace("'", "", $string); //aqui retira aspas simples <'>
    $string = str_replace("\\", "", $string); //aqui retira barra invertida<\\>
    $string = str_replace("UNION", "", $string); //aqui retiro  o comando UNION <UNION>

    $banlist = array(" insert", " select", " update", " delete", " distinct", " having", " truncate", "replace", " handler", " like", " as ", "or ", "procedure ", " limit", "order by", "group by", " asc", " desc", "'", "union all", "=", "'", "(", ")", "<", ">", " update", "-shutdown", "--", "'", "#", "$", "%", "¨", "&", "'or'1'='1'", "--", " insert", " drop", "xp_", "*", " and");
    // ---------------------------------------------
    if (preg_match("/[a-zA-Z0-9]+/", $string)) {
        $string = trim(str_replace($banlist, '', strtolower($string)));
    }

    return $string;
}

function tratarSqlInjection($string) {
    $string = noSqlInjection($string);
    $string = validarInject($string);
    return $string;
}

function seeArray(array $ar) {
    print'<pre>';
    var_dump($ar);
    print'</pre>';
}

function redirecionar($caminho) {
    ?> 
    <script language= "JavaScript">
        window.location.href = "<?php print"{$caminho}" ?>"
    </script>
    <?php
}

function redirecionar2($caminho) {
    header("Location:{$caminho}");
}

function quantidadeCaracter($texto) {
    $qtd = strlen($texto);
//    $caracterNoticia = limiteNoticia($qtd);
    if ($qtd <= '30') {
        return 260;
    }
    if ($qtd > '30' && $qtd < 60) {
        return 210;
    } else {
        return 135;
    }
}

function quantidadeCaracterSegundo($texto) {
    $qtd = strlen($texto);

    if ($qtd <= '29') {
        return 190;
    }
    if ($qtd >= '30' && $qtd <= '53') {
        return 150;
    } else {
        return 110;
    }
}

function quantidadeCaracterTerceiro($texto) {
    $qtd = strlen($texto);

    if ($qtd <= '29') {
        return 190;
    }
    if ($qtd >= '30' && $qtd <= '53') {
        return 110;
    } else {
        return 100;
    }
}

function limitarTexto($texto, $limite = 200) {
    $contador = strlen($texto);
    if ($contador >= $limite) {
        $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . "<span style='font-size: 7px!important;'>...</span>";
        return $texto;
    } else {
        return $texto;
    }
}

function sendEmailLinux($nome, $email, $to, $assunto, $msg) {
    $nome = $nome;
    $email = $email;
    $to = $to;
    $subject = $assunto;
    $message = $msg;
    $header = "MIME-Version: 1.0\r\n";
    $header .= "From: {$email} \r\n";
    $header .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $header)) {
        return 0;
    } else {
        print json_encode("Não foi possível enviar email para " . $to);
        return 1;
    }
}

function sendEmail($nome, $email, $to, $assunto, $msg) {
    $nome = $nome;
    $email = $email;
    $to = $to;
    $subject = $assunto;
    $message = $msg;
    $header = "MIME-Version:1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $header .= "From: {$email} \r\n";
    if (mail($to, $subject, $message, $header)) {
        
    } else {
        //print "erro ao enviar email";
    }
}

function calculaTempo($hora_inicial, $hora_final) {
    $i = 1;
    $tempo_total;

    $tempos = array($hora_final, $hora_inicial);

    foreach ($tempos as $tempo) {
        $segundos = 0;

        list($h, $m, $s) = explode(':', $tempo);

        $segundos += $h * 3600;
        $segundos += $m * 60;
        $segundos += $s;

        $tempo_total[$i] = $segundos;

        $i++;
    }
    $segundos = $tempo_total[1] - $tempo_total[2];

    $horas = floor($segundos / 3600);
    $segundos -= $horas * 3600;
    $minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
    $segundos -= $minutos * 60;
    $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);

    $date['h'] = $horas;
    $date['m'] = $minutos;
    $date['s'] = $segundos;

    return $date;
}

function calculaSomaData($data, $acrescenta) {
    $begin = strtotime($data);
    $course_duration = $acrescenta;
    $end = mktime(0, 0, 0, date('m', $begin) + $course_duration, date('d', $begin), date('Y', $begin));
    $date = date('Y-m-d h:m:s', $end);
    return $date;
}

function diaMes($mes) {
    $mes = $mes;      // Mês desejado, pode ser por ser obtido por POST, GET, etc.
    $ano = date("Y"); // Ano atual
    $ultimo_dia = date("t", mktime(0, 0, 0, $mes, '01', $ano));
    $ultimo_dia;
    for ($index = 1; $index <= $ultimo_dia; $index++) {
        $dias[] = $index;
    }
    return $dias;
}

function limita_caracteresGrafico($texto, $limite, $quebra = true) {
    $tamanho = strlen($texto);
    if ($tamanho <= $limite) { // Verifica se o tamanho do texto é menor ou igual ao limite
        $novo_texto = $texto;
    } else { // Se o tamanho do texto for maior que o limite
        if ($quebra == true) { // Verifica a opção de quebrar o texto
            $novo_texto = trim(substr($texto, 0, $limite));
        } else { // Se não, corta $texto na última palavra antes do limite
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)); // Corta o $texto até a posição localizada
        }
    }
    return $novo_texto; // Retorna o valor formatado
}

function custom_shuffle($my_array = array()) {
    $copy = array();
    while (count($my_array)) {
        // takes a rand array elements by its key
        $element = array_rand($my_array);
        // assign the array and its value to an another array
        $copy[$element] = $my_array[$element];
        //delete the element from source array
        unset($my_array[$element]);
    }
    return $copy;
}

function maiusculo($frase) {
    return strtoupper($frase);
}

function corFundo($texto) {
    $sit = '<p class="" style="width:100%;height:50px;background-color:' . $texto . '"></p>';
    return $sit;
}
