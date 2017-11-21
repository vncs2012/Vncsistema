function excluir(arquivo, codigo) {
    
        var excluir = confirm("Deseja excluir esse registro?");
        if (excluir) {
            $("#load").show();
            var Self = this;
    
            if (Self.working) {
                return;
            }
            Self.working = true;
    
            var formData = new FormData();
            formData.append("acao", "excluir");
            formData.append("arquivo", arquivo);
            formData.append("cd", codigo);
    
            jQuery.ajax({
                type: 'POST',
                mimeType: "multipart/form-data",
                url: 'model/acao/controller.php',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false
            }).done(function (html) {
                if (html.success === "ok") {
                    modalRedirecionarSuccess("Excluido com sucesso");
                    
                } else {
                    modalRedirecionarError("Erro ao excluir");
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                modal(errorThrown);
    
            }).complete(function () {
                Self.working = false;
                $("#load").hide();
            });
    
            return true;
        }
        else {
            return false;
        }
    
    }
    function sub(arquivo, acao,rotina,modulo) {
       
        $("#load").show();
        var Self = this;
    
        if (Self.working) {
            return;
        }
        Self.working = true;
    
        var formData = new FormData($("#form")[0]);
        formData.append("acao", acao);
        formData.append("arquivo", arquivo);
        formData.append("rotina", rotina);
        formData.append("modulo", modulo);


        $.ajax({
            type: 'POST',
            mimeType: "multipart/form-data",
            url: 'app/classes/controller/controllerModel.php',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false
        }).done(function (html) {
            console.log(html.success);
        //    var res = JSON.parse(html);
            if (html.hasOwnProperty("erro")) {
                if (acao === 'Incluir') {
                    modalRedirecionarError("Erro ao salvar");
                }
                if (acao === 'Alterar') {
                    modalRedirecionarError("Erro ao alterar");
                }
            } else {
                if (html.success == 'ok') {
                    console.log("Html Sucesso");
                    if (acao == 'incluir') {
                        modalRedirecionarSuccess("Salvo com sucesso",rotina,modulo);
                    }
                    if (acao == 'alterar') {
                        modalRedirecionarSuccess("Alterado com Sucesso");
                    }
                } else {
                    console.log("EEntrou ok")
                    modal(html);
                }
            }
    
        }).fail(function (jqXHR, textStatus, errorThrown) {
            modalRedirecionarError("Erro ao inserir. " + errorThrown);
    
        }).complete(function () {
            Self.working = false;
            $("#load").hide();
        });
    
    }
    function getUrlVars() {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    function modal(msg) {
        $('.modal-body').html(msg);
        $('#myModal').modal('show');
    }
    function modalRedirecionarSuccess(msg,rotina,modulo) {
        $('.modal-body').html("<img src='imagens/alert/success.svg' width='40px'> "+msg);
        $('#myModal').modal('show');
        $('#myModal').on('hidden.bs.modal', function () {
            location.href = "?r=" +modulo+ "&p="+rotina+"&a=listar";
        })
    }
    function modalRedirecionarError(msg) {
        $('.modal-body').html("<img src='imagens/alert/error.svg' width='40px'> "+msg);
        $('#myModal').modal('show');
     }