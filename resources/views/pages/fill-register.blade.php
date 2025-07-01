<x-layout-secundario>


<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
  jQuery(function($) {


    jQuery("#cep").mask("00000-000", {
      placeholder: "CEP"
    });
  });

  jQuery(function($) {

    jQuery("#numero").mask("000000", {
      placeholder: "_____"
    });
  });

  jQuery(function($) {
    $("#nascimento").mask('99/99/9999', {
      placeholder: "___ / ___ / ____"
    });
    $("#nascimento").blur(function(event) {
      if ($(this).val().length == 15) {
        $('#nascimento').mask('99/99/9999', {
          placeholder: "___ / ___ / ____"
        });
      } else {
        $('#nascimento').mask('99/99/9999', {
          placeholder: "___ / ___ / ____"
        });
      }
    });
  });

  jQuery(document).ready(function() {

    function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.
      $("#rua").val("");
      $("#bairro").val("");
      $("#cidade").val("");
      $("#uf").val("");
      $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    jQuery("#cep").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep = jQuery(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

          //Preenche os campos com "..." enquanto consulta webservice.
          jQuery("#rua").val("");
          jQuery("#bairro").val("");
          jQuery("#cidade").val("");
          jQuery("#uf").val("");



          //Consulta o webservice viacep.com.br/
          jQuery.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

            if (!("erro" in dados)) {
              //Atualiza os campos com os valores da consulta.
              jQuery("#rua").val(dados.logradouro);
              jQuery("#bairro").val(dados.bairro);
              jQuery("#cidade").val(dados.localidade);
              jQuery("#uf").val(dados.uf);
              document.getElementById('cep').style.border = "1px solid #2e29bc";
              document.getElementById('cep').style.background = "#fff";
              document.getElementById('msg_cep').style.display = 'none';
              controle_cep = '1';
              var element = document.getElementById("cep");
              element.classList.remove("erro");
              element.classList.add("sucesso");



              if (dados.logradouro.length > 1) {
                var element = document.getElementById("rua");
                element.classList.remove("erro");
                document.getElementById('rua').style.color = "#333";
                document.getElementById('rua').style.background = "#eaeaea";
                document.getElementById('rua').style.border = "1px solid #333";
                document.getElementById('rua').readOnly = true;
              } else {
                document.getElementById('rua').style.background = "#fff";
                document.getElementById('rua').readOnly = false;
              }



              if (dados.bairro.length > 1) {
                var element = document.getElementById("bairro");
                element.classList.remove("erro");
                document.getElementById('bairro').style.color = "#333";
                document.getElementById('bairro').style.background = "#eaeaea";
                document.getElementById('bairro').style.border = "1px solid #333";
                document.getElementById('bairro').readOnly = true;
              } else {
                document.getElementById('bairro').style.background = "#fff";
                document.getElementById('bairro').readOnly = false;
              }

              // console.log(dados.localidade.length);

              var element = document.getElementById("cidade");
              element.classList.remove("erro");

              if (dados.localidade.length > 1) {
                document.getElementById('cidade').style.color = "#333";
                document.getElementById('cidade').style.background = "#eaeaea";
                document.getElementById('cidade').style.border = "1px solid #333";
                document.getElementById('cidade').readOnly = true;
              } else {
                document.getElementById('cidade').readOnly = true;
                document.getElementById('cidade').style.background = "#fff";
              }

              // console.log(dados.uf.length);
              if (dados.uf.length > 1) {
                var element = document.getElementById("uf");
                element.classList.remove("erro");
                document.getElementById('uf').style.background = "#eaeaea";
                document.getElementById('uf').style.color = "#333";
                document.getElementById('uf').style.border = "1px solid #333";
                document.getElementById('uf').readOnly = true;
              } else {
                document.getElementById('uf').readOnly = false;
                document.getElementById('uf').style.background = "#fff";
              }
              //Não deixa editar

            } //end if.
            else {
              //CEP pesquisado não foi encontrado.
              limpa_formulário_cep();


              document.getElementById('cep').style.border = "1px solid #a8002c";
              document.getElementById('cep').style.background = "#fff";
              document.getElementById('msg_cep').style.display = 'block';
              controle_cep = '0';
              var element = document.getElementById("cep");
              element.classList.remove("sucesso");
              element.classList.add("erro");

              document.getElementById('rua').readOnly = false;
              document.getElementById('bairro').readOnly = false;
              document.getElementById('cidade').readOnly = false;
              document.getElementById('uf').readOnly = false;


            }
          });
        } //end if.
        else {
          //cep é inválido.
          limpa_formulário_cep();
          document.getElementById('cep').style.border = "1px solid #a8002c";
          document.getElementById('cep').style.background = "fff";
          document.getElementById('msg_cep').style.display = 'block';
          controle_cep = '0';
          var element = document.getElementById("cep");
          element.classList.remove("sucesso");
          element.classList.add("erro");

          document.getElementById('rua').readOnly = false;
          document.getElementById('bairro').readOnly = false;
          document.getElementById('cidade').readOnly = false;
          document.getElementById('uf').readOnly = false;

        }
      } //end if.
      else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
        document.getElementById('msg_cep').style.display = 'none';
        controle_cep = '0';
        var element = document.getElementById("cep");
        element.classList.remove("sucesso");
        element.classList.add("erro");

        document.getElementById('rua').readOnly = false;
        document.getElementById('bairro').readOnly = false;
        document.getElementById('cidade').readOnly = false;
        document.getElementById('uf').readOnly = false;

      }
    });
  });

  function checaSemNumero() {

    if (document.getElementById('sn').checked) {
      document.getElementById('numero').readOnly = true;
      document.getElementById('numero').value = "";
      document.getElementById('numero').style.background = '#f2eeea';
      var element = document.getElementById("numero");
      element.classList.remove("erro");

    } else {
      document.getElementById('numero').readOnly = false;
      document.getElementById('numero').style.background = '#fff';


    }
  }

  function checaNumero() {
    var numero = $("#numero").val();
    /// var numero = document.getElementById('numero').value;

    if (numero.length > 5) {
      //console.log(numero.length);
      var element = document.getElementById("numero");
      element.classList.remove("sucesso");
      element.classList.add("erro");
      document.getElementById('msg_n_correto').style.display = 'block';
    } else {
      document.getElementById('msg_n_correto').style.display = 'none';
      var element = document.getElementById("numero");
      element.classList.remove("erro");
      element.classList.add("sucesso");

    }

    teste_numero = /^[0-9]*$/.test(numero);


    if (teste_numero == false) {

      var element = document.getElementById("numero");
      element.classList.remove("sucesso");
      element.classList.add("erro");
      document.getElementById('msg_n_letra').style.display = 'block';

    } else {
      document.getElementById('msg_n_letra').style.display = 'none';
      var element = document.getElementById("numero");
      element.classList.remove("erro");
      element.classList.add("sucesso");
    }

  }


  function checaIdade() {
    var nascimento = $("#nascimento").val();

    const dataAtual = new Date();
    const anoAtual = dataAtual.getFullYear();
    const mesAtual = dataAtual.getMonth() + 1;
    const diaoAtual = dataAtual.getDay();

    data_nascimento = nascimento.split("/");
    ano_nascimento = data_nascimento[2];
    mes_nascimento = data_nascimento[1];
    dia_nascimento = data_nascimento[0];

    nova_nascimento = data_nascimento[2] + "-" + data_nascimento[1] + "-" + data_nascimento[0];

    nova_data = anoAtual + "-" + mesAtual + "-" + diaoAtual;

    //console.log(nova_data);
    //console.log(nova_nascimento);

    const d1 = nova_nascimento;
    const d2 = nova_data;
    const diffInMs = new Date(d2) - new Date(d1)
    const diffInDays = diffInMs / (1000 * 60 * 60 * 24);

    if (diffInDays < 6574) {
      document.getElementById('msg_idade').style.display = 'block';
      controle_idade = '0';
      var element = document.getElementById("nascimento");
      element.classList.remove("sucesso");
      element.classList.add("erro");
      //console.log("menor deidade");
      //console.log(diffInDays);
    } else {
      controle_idade = '1';
      document.getElementById('msg_idade').style.display = 'none';
      var element = document.getElementById("nascimento");
      element.classList.remove("erro");
      element.classList.add("sucesso");
      //console.log("maior de idade");
    }

    //console.log(d1);
    //console.log(d2);

  }


  function save() {

    var id_site = $("#id_site").val()

    var cep = $("#cep").val();
    var rua = $("#rua").val();
    var numero = $("#numero").val();
    var compl = $("#compl").val();
    var bairro = $("#bairro").val();
    var cidade = $("#cidade").val();
    var uf = $("#uf").val();
    var genero = $("#genero").val();
    var menor_idade = $("#menor_idade").val();



    if (rua.length < 3) {
      document.getElementById('msg_rua').style.display = 'block';
      var controle_rua = '0';
      var element = document.getElementById("rua");
      element.classList.remove("sucesso");
      element.classList.add("erro");
    } else {
      document.getElementById('msg_rua').style.display = 'none';
      var controle_rua = '1';
      var element = document.getElementById("rua");
      element.classList.remove("erro");
      element.classList.add("sucesso");
    }

    if (bairro.length < 2) {
      document.getElementById('msg_bairro').style.display = 'block';
      var controle_bairro = '0';
      var element = document.getElementById("bairro");
      element.classList.remove("sucesso");
      element.classList.add("erro");
    } else {
      document.getElementById('msg_bairro').style.display = 'none';
      var controle_bairro = '1';
      var element = document.getElementById("bairro");
      element.classList.add("sucesso");
    }

    if (cidade.length < 3) {
      document.getElementById('msg_cidade').style.display = 'block';
      var controle_cidade = '0';
      var element = document.getElementById("cidade");
      element.classList.remove("sucesso");
      element.classList.add("erro");
    } else {
      document.getElementById('msg_cidade').style.display = 'none';
      var controle_cidade = '1';
      var element = document.getElementById("cidade");
      element.classList.add("sucesso");
    }


    if ((controle_cep == 1) && (controle_rua == 1) && (controle_bairro == 1) && (controle_cidade == 1)) {
      //Exibe o loading
      var element = document.getElementById("loader");
      element.classList.remove("oculta_loading");
      element.classList.add("exibe_loading");
      var vUrl = "endereco.php";

      var vData = {
        id_site: id_site,
        cep: cep,
        rua: rua,
        numero: numero,
        compl: compl,
        bairro: bairro,
        cidade: cidade,
        uf: uf,
        genero: genero
      };

      $.post(
        vUrl, //Required URL of the page on server
        vData,
        function(response, status) {
          //Oculta o Loading
          var element = document.getElementById("loader");
          element.classList.add("oculta_loading");

          if (status == "success") {
            // pegando os dados jSON
            var obj = jQuery.parseJSON(response);
            var id_site_resposta = obj.id_site;
            var debug = obj.debug;


            if (menor_idade == 1) {
              window.location = 'parabens.php?id_site=' + id_site;
              //window.location='sucesso.php?id_site='+id_site;
            } else {
              window.location = 'parabens.php?id_site=' + id_site;
            }


          }
        }
      );


    }



  }
</script>

    <section class="section mt-5">
        <div class="container">

            <div style="text-align:center" class="section-title">
                <h4 style="color:#8b0404">
                    Atenção
                </h4>
            
                <p style="font-size:20px;"><i>Olá <b>Samuel</b>, Falta pouco para completar o seu cadastro!</i></p>


            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8 ">

                    <form method="post" role="form" class="php-email-form">
                        <input type="hidden" name="id_site" id="id_site" value="id">

                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label style="color:#333; font-weight:400; ">CEP</label>
                                <input style="border:1px solid#cecece; height:50px; color:#333; font-weight:500;" type="text" name="cep" id="cep" class="form-control" required>
                            </div>
                            <div class="col-md-9 form-group ">
                                <label style="color:#333; font-weight:400;">Rua</label>
                                <input style="border:1px solid#cecece; height:50px; color:#333; font-weight:500;" type="text" class="form-control" name="rua" id="rua" placeholder="rua" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 form-group">
                                <label style="color:#333; font-weight:400;">Numero</label>
                                <input style="border:1px solid#cecece; height:50px; color:#333; font-weight:500;" type="text" name="numero" id="numero" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label style="color:#333; font-weight:400;">Complemento</label>
                                <input style="border:1px solid#cecece; height:50px; color:#333; font-weight:500;" type="text" class="form-control" name="compl" id="compl" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label style="color:#333; font-weight:400;">Bairro</label>
                                <input style="border:1px solid#cecece; height:50px; color:#333; font-weight:500;" type="text" class="form-control" name="bairro" id="bairro" required>
                                <input type="hidden" name="uf" id="uf">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7 form-group">
                                <label style="color:#333; font-weight:400;">Cidade</label>
                                <input style="border:1px solid#cecece; height:50px; color:#333; font-weight:500;" type="text" name="cidade" id="cidade" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group" style="text-align:center ;">

                                <button style="background-color: 910319;" onclick="save();" type="button" class="btn btn-primary btn-lg btn-block pb_btn-pill ">Salvar</button>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-12 form-group">
                                <div class="div_loader">
                                    <div id="loader" class="oculta_loading">
                                        <div class="loader "></div>
                                        <i style="font-size:12px; text-align:center;">Estamos verificando seu email, aguarde...</i>
                                    </div>
                                </div>

                                <div id="msg_cep" name="msg_cep" style="color:#a61f23;display: none;  text-align:left;">
                                    <i> <i class="fa fa-check"></i> Digite o <b>CEP</b> corretamente.</i>
                                </div>

                                <div id="msg_rua" name="msg_rua" style="color:#a61f23;display: none; text-align:left;">
                                    <i><i class="fa fa-check"></i> Digite o nome da <b>RUA</b> corretamente.</i>
                                </div>

                                <div id="msg_numero" name="msg_numero" style="color:#a61f23;display: none;  text-align:left;">
                                    <i> <i class="fa fa-check"></i> Digite o <b> NÚMERO </b> da residência corretamente.</i>
                                </div>

                                <div id="msg_compl" name="msg_compl" style="color:#a61f23;display: none;  text-align:left;">
                                    <i> <i class="fa fa-check"></i> Importante: para residência sem número é obrigatorio informar o complemento.</i>
                                </div>

                                <div id="msg_bairro" name="msg_bairro" style="color:#a61f23;display: none;  text-align:left;">
                                    <i> <i class="fa fa-check"></i> Digite o <b> BAIRRO </b> corretamente.</i>
                                </div>


                                <div id="msg_cidade" name="msg_cidade" style="color:#a61f23;display: none;  text-align:left;">
                                    <i> <i class="fa fa-check"></i> Digite a <b> CIDADE </b> corretamente.</i>
                                </div>

                                <div id="msg_uf" name="msg_uf" style="color:#a61f23;display: none;  text-align:left;">
                                    <i><i class="fa fa-check"></i> Digite o Estado</i>
                                </div>

                                <div id="msg_nascimento" name="msg_nascimento" style="color:#a61f23;display: none;  text-align:left;">
                                    <i> <i class="fa fa-check"></i> Digite a <b>DATA DE NASCIMENTO</b> corretamente. formato (dd/mm/aaaa)</i>
                                </div>

                                <div id="msg_idade" name="msg_idade" style="color:#a61f23;display: none;  text-align:left;">
                                    <i> <i class="fa fa-check"></i> O Sr(a) parece ser menor de idade!</i>
                                </div>
                            </div>

                        </div>



                </div>

                </form>

            </div>
            <div class="col-lg-2">


            </div>

        </div>
        </div>
        </div>
    </section><!-- End Contact Section -->


</x-layout-secundario>