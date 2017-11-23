function excluir(arquivo,rotina,modulo,cd) {
        console.log("entrou")
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
            formData.append("rotina", rotina);
            formData.append("modulo", modulo);
            formData.append("codigo", cd);
    
            jQuery.ajax({
                type: 'POST',
                mimeType: "multipart/form-data",
                url: 'app/classes/controller/controllerModel.php',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false
            }).done(function (html) {
                if (html.success === "ok") {
                    modalRedirecionarSuccess("excluir",rotina,modulo);           
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
    function sub(arquivo, acao,rotina,modulo,cd='') {
       
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
        formData.append("codigo", cd);


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
                if (acao === 'incluir') {
                    modalRedirecionarError("Erro ao salvar");
                }
                if (acao === 'alterar') {
                    modalRedirecionarError("Erro ao alterar");
                }
            } else {
                if (html.success == 'ok') {
                        modalRedirecionarSuccess(acao,rotina,modulo);
                   
                } else {
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
    function modalRedirecionarSuccess(evento,rotina,modulo) {
        // $("#info-cadastro").notify(msg,{ globalPosition: 'top center', className: 'success' });
        // window.setInterval(function(){
            location.href = "?m=" +modulo+ "&r="+rotina+"&a=listar&e="+evento;
        //   }, 0)
        // var svg = '<div class="row"><div class="col-md-2" style="padding-right: 0px;"><div class="loader"><svg viewBox="25 25 50 50"><circle class="loader__background" cx="50" cy="50" r="20" stroke-width="3"/><circle class="loader__rotation" cx="50" cy="50" r="20" fill="none" stroke-width="4"/><path class="loader__path" d="m48,58l11,-16" stroke-dasharray="23" stroke-dashoffset="23"/><path class="loader__path" d="m48,58l-8,-6" stroke-dasharray="10" stroke-dashoffset="10"/></svg></div> </div><div class="col-md-9"><span class="msg_svg">'+msg+'</span></div></div>';        
        // sucessoSVG();
        // $('.modal-body').html(svg);
        // $('#myModal').modal('show');
        // $('#myModal').on('hidden.bs.modal', function () {
            // location.href = "?m=" +modulo+ "&r="+rotina+"&a=listar";
        // })
    }
    function modalRedirecionarError(msg) {
        $.notify(msg,{ globalPosition: 'top center', className: 'error' });
     }

     function sucessoSVG(){
        var loader = document.getElementsByClassName('loader')
        
        document.addEventListener('click', function(){
          toggleClass('done', loader[0])
        })
        
        window.setInterval(function(){
          toggleClass('done', loader[0])
        }, 1000)
        
        function toggleClass(toggleClassName, target) {
          var currentClassName = ' ' + target.className + ' '
          if (~currentClassName.indexOf(' ' + toggleClassName + ' ')) {
            target.className = currentClassName.replace(' ' + toggleClassName + ' ', ' ').trim()
          } else {
            target.className = (currentClassName + ' done').trim()
          }
        }
     }