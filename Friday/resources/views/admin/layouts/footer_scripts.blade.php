<script>
    var noTableData = '{{trans('admiko.noTableData')}}';
    var tableInfo = '{{trans('admiko.tableInfo')}}';
    var dragDropTableInfo = '{{trans('admiko.dragDropTableInfo')}}';
    var lengthMenu = {!!config("admiko_config.length_menu_table_JS")!!};
    var csrf_token = "{{ csrf_token() }}";
    var mapStartZoom = {{config('admiko_config.map_start_zoom')}};
    var mapStarLatitude = {{config('admiko_config.map_star_latitude')}};
    var mapStarLongitude = {{config('admiko_config.map_star_longitude')}};
    /*Admiko Global Search*/
    var AdmikoGlobalSearchUrl = '{{route("admin.admiko_global_search")}}';
    var searchTypeMore = '{{trans('admiko.search_type_more')}}';
    var searchNoResults = '{{trans('admiko.search_no_results')}}';
    var searchError = '{{trans('admiko.search_error')}}';
</script>

<script> /*SELECT2*/
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            dropdownParent: $('#myModal')
        });   
    });
</script>

<script> /* CASCADE FILL MATRIZ DE RISCOS */
    function cascadeselectid(){
        var idprocesso = document.getElementById("id_no_data_mapping").value;
        document.getElementById('nome_do_ativo_ou_processo').value = idprocesso;
        document.getElementById('descrio').value = idprocesso;
        document.getElementById('departamento').value = idprocesso;
        document.getElementById('terceiro').value = idprocesso;
        document.getElementById('dados_pessoais_coletados').value = idprocesso;
        document.getElementById('finalidade').value = idprocesso;
        document.getElementById('categoria_de_dados').value = idprocesso;
        document.getElementById('titular_de_dados').value = idprocesso;
        document.getElementById('categoria_do_titular').value = idprocesso;
        document.getElementById('prazo_de_reteno').value = idprocesso;
        document.getElementById('base_legal').value = idprocesso;
        //console.log(idprocesso);
}
</script>

<script> //Calculo de Risco
    $(function() {
        $(".DropChange").change(function(){
          var probabilidade = $('#probabilidade').val();
          var impacto = $('#impacto').val();
    
        var resp = probabilidade.split("");
        var resi = impacto.split("");
    
          var riskVal = ((resp[0] * 1) * (resi[0] * 1));
          $('#riskVal').val(riskVal);
    
          $('#position').val(resp[0] + resi[0]);
    
          if (riskVal <= 3) { risco_inerente = "Baixo"} //Baixo 
            else if (riskVal <= 6) { risco_inerente = "M??dio"} //M??dio
            else if (riskVal <= 12) { risco_inerente = "Alto" } //Alto
            else { risco_inerente = "Extremo" }
            $('#risco_inerente').val(risco_inerente);
    
    
              var riscotest = $('#risco_inerente').val();
            $('#riscotest').val(riscotest);
    
            if (risco_inerente == "Baixo") {
            $("#risco_inerente").css("background", '#a3c989');
        }else if (risco_inerente == "M??dio"){
            $("#risco_inerente").css("background", '#ffff99');
        }else if (risco_inerente == "Alto") {
            $("#risco_inerente").css("background", '#f4b084');
        }else {
            $("#risco_inerente").css("background", '#ff7171');
        }
    
        if (probabilidade == '1'){
            $("#probabilidade").css("background", '#c2dbb2');
        }else if (probabilidade == '2'){
            $("#probabilidade").css("background", '#a3c989');
        }else if (probabilidade == "3"){
            $("#probabilidade").css("background", '#ffff99');
        }else if (probabilidade == "4") {
            $("#probabilidade").css("background", '#f4b084');
        }else {
            $("#probabilidade").css("background", '#ff7171');
        }
        if (impacto == '1'){
            $("#impacto").css("background", '#c2dbb2');
        }else if (impacto == '2'){
            $("#impacto").css("background", '#a3c989');
        }else if (impacto == "3"){
            $("#impacto").css("background", '#ffff99');
        }else if (impacto == "4") {
            $("#impacto").css("background", '#f4b084');
        }else {
            $("#impacto").css("background", '#ff7171');
        }
        });
      });
    </script>

<script> //Calculo de Risco
    $(function() {
        $(".DropChange1").change(function(){
          var probabilidade_residual = $('#probabilidade_residual').val();
          var impacto_residual = $('#impacto_residual').val();
    
        var resp = probabilidade_residual.split("");
        var resi = impacto_residual.split("");
    
          var riskVal = ((resp[0] * 1) * (resi[0] * 1));
          $('#riskVal').val(riskVal);
    
          $('#position').val(resp[0] + resi[0]);
    
          if (riskVal <= 3) { risco_residual = "Baixo"} //Baixo 
            else if (riskVal <= 6) { risco_residual = "M??dio"} //M??dio
            else if (riskVal <= 12) { risco_residual = "Alto" } //Alto
            else { risco_residual = "Extremo" }
            $('#risco_residual').val(risco_residual);
    
    
              var riscotest = $('#risco_residual').val();
            $('#riscotest').val(riscotest);
    
            if (risco_residual == "Baixo") {
            $("#risco_residual").css("background", '#a3c989');
        }else if (risco_residual == "M??dio"){
            $("#risco_residual").css("background", '#ffff99');
        }else if (risco_residual == "Alto") {
            $("#risco_residual").css("background", '#f4b084');
        }else {
            $("#risco_residual").css("background", '#ff7171');
        }
    
        if (probabilidade_residual == '1'){
            $("#probabilidade_residual").css("background", '#c2dbb2');
        }else if (prob_residual == '2'){
            $("#probabilidade_residual").css("background", '#a3c989');
        }else if (probabilidade_residual == "3"){
            $("#probabilidade_residual").css("background", '#ffff99');
        }else if (probabilidade_residual == "4") {
            $("#probabilidade_residual").css("background", '#f4b084');
        }else {
            $("#probabilidade_residual").css("background", '#ff7171');
        }
        if (impacto_residual == '1'){
            $("#impacto_residual").css("background", '#c2dbb2');
        }else if (impacto_residual == '2'){
            $("#impacto_residual").css("background", '#a3c989');
        }else if (impacto_residual == "3"){
            $("#impacto_residual").css("background", '#ffff99');
        }else if (impacto_residual == "4") {
            $("#impacto_residual").css("background", '#f4b084');
        }else {
            $("#impacto_residual").css("background", '#ff7171');
        }
        });
      });
    </script>

<script type="text/javascript">
    var risk = ['Vazamento, altera????o ou destrui????o de dados de forma acidental ou il??cita.', 
                'Tratar dados sem utilizar medidas t??cnicas e administrativas para proteg??-los.', 
                'Vazamento de dados no ambiente do terceiro.', 
                'Reten????o irregular de dados pessoais ap??s cumprir sua finalidade.', 
                'N??o informar ou informar finalidade diversa da destina????o dos dados ao titular.', 
                'Tratamento de dados pessoais sem o devido consentimento do titular e/ou respons??vel legal.', 
                'Impossibilidade de atendimento das solicita????es do titular do dado pessoal.', 
                'Coleta excessiva de dados pessoais.', 
                'Impossibilidade de responder ?? ANPD em caso de incidentes.'];

    var eventorisco = ['Vazamento, altera????o ou destrui????o de dados de forma acidental ou il??cita.', 
                'Tratar dados sem utilizar medidas t??cnicas e administrativas para proteg??-los.', 
                'Vazamento de dados no ambiente do terceiro.', 
                'Reten????o irregular de dados pessoais ap??s cumprir sua finalidade.', 
                'N??o informar ou informar finalidade diversa da destina????o dos dados ao titular.', 
                'Tratamento de dados pessoais sem o devido consentimento do titular e/ou respons??vel legal.', 
                'Impossibilidade de atendimento das solicita????es do titular do dado pessoal.', 
                'Coleta de dados al??m da sua finalidade.', 
                'Impossibilidade de responder ?? ANPD em caso de incidentes.'];
    var causa = ['Armazenamento de documentos no servidor de e-mail. Armazenar de forma inadequada dados pessoais. Aus??ncia de controle e restri????o de acesso. Usar dados para finalidade alheia.', 
                'Armazenamento de documentos pessoais no servidor de arquivos sem controle de acesso. Armazenamento de documentos pessoais em arquivo f??sico sem controle de acesso. Armazenar de forma inadequada dados pessoais.', 
                'Fragilidade na avalia????o de terceiros sobre quest??es de privacidade e seguran??a.', 
                'Aus??ncia de pol??tica de descarte.', 
                'Utiliza????o de dados pessoais para fins alheios aos informados.', 
                'Utiliza????o de dados pessoais sem consentimento. Tratar dados com autoriza????o gen??rica. Comunica????o indesejada.', 
                'Aus??ncia de  procedimento formal para exclus??o de dados. N??o cumprir com as solicita????es do titular.', 
                'Coleta de dados al??m da sua finalidade.', 
                'Aus??ncia de procedimento de resposta a incidentes de seguran??a da informa????o.'];
    var categoriarisco = ['Seguran??a Digital', 
                'Seguran??a Digital', 
                'Seguran??a Digital', 
                'Privacidade', 
                'Privacidade', 
                'Privacidade', 
                'Privacidade', 
                'Privacidade', 
                'Privacidade'];
    var consequencia = ['A????es individuais dos titulares. Aplica????o de san????es previstas no artigo 52 da LGPD.', 
                'A????es individuais dos titulares. Aplica????o de  san????es previstas no artigo 52 da LGPD. Incidentes de seguran??a ou tratamento indevido de dados pessoais.', 
                'A????es individuais dos titulares. Aplica????o de san????es previstas no artigo 52 da LGPD.', 
                'A????es individuais dos titulares. Aplica????o de san????es previstas no artigo 52 da LGPD.', 
                'A????es individuais dos titulares. Aplica????o de san????es previstas no artigo 52 da LGPD.', 
                'Den??ncia do titular do dado para a ANPD sobre a dificuldade de exigir seus direitos, previstos na LGPD e, consequentemente, sobre tratamento irregular, j?? que n??o h?? consentimento. A????es individuais dos titulares. Aplica????o de san????es previstas no artigo 52 da LGPD.', 
                'A????es individuais dos titulares. Aplica????o de san????es previstas no artigo 52 da LGPD.', 
                'Aplica????o de  san????es previstas no artigo 52 da LGPD.', 
                'Aplica????o de  san????es previstas no artigo 52 da LGPD.'];

    var plano = ['Redesenho de processo: Evitar o compartilhamento desnecess??rio de dados e documentos. Implementar controle e restri????o de acesso somente ??s pessoas autorizadas. Elabora????o de treinamentos para conscientiza????o e educa????o de colaboradores e terceiros: Todos os funcion??rios da organiza????o e, quando pertinente, fornecedores e terceiros devem receber treinamento apropriado em conscientiza????o e atualiza????es regulares nas pol??ticas e procedimentos organizacionais relevantes para as suas fun????es.', 
                'Pol??tica de Privacidade e Seguran??a da Informa????o: Elaborar pol??tica de Seguran??a da Informa????o para evitar que os colaboradores possam compartilhar dados pessoais com pessoas n??o autorizadas. Controle e restri????o de acesso: Implementar controle e restri????o de acesso somente ??s pessoas autorizadas.', 
                'An??lise de riscos de terceiros: Elaborar uma avalia????o de terceiros com foco em quest??es de privacidade de dados pessoais e seguran??a da informa????o. Avalia????o contratual: Incluir cl??usula de prote????o de dados pessoais no contrato com o terceiro envolvido.', 
                'Pol??tica de Reten????o e Descarte: Elabora????o e implementa????o de uma pol??tica de reten????o e descarte de dados pessoais.', 
                'Ger??nciamento de Consentimento: A organiza????o deve coletar consentimento de forma livre, informada e inequ??voca pela qual o titular concorda com o tratamento dos seus dados para todas as finalidades.', 
                'Ger??nciamento de Consentimento: A organiza????o deve coletar consentimento de forma livre, informada e inequ??voca pela qual o titular concorda com o tratamento dos seus dados para todas as finalidades.', 
                'Direito do titular: Elaborar um fluxograma para atendimento das requisi????es dos titulares no prazo m??ximo de 15 dias. Ao receber o requerimento do titular, ?? necess??rio analisar sua viabilidade, de acordo com a finalidade e a base legal do tratamento dos dados pessoais. Ao responder o titular do dado, inform??-lo se foi poss??vel atender seu requerimento ou justificar de forma fundamentada a sua impossibilidade. ', 
                'Resposta a incidentes de seguran??a: Criar procedimentos de resposta ?? ANPD em caso de incidentes de seguran??a da informa????o.', 
                'Resposta a incidentes de seguran??a: Criar procedimentos de resposta ?? ANPD em caso de incidentes de seguran??a da informa????o.'];
    var fund = ['LGPD - Art. 6?? As atividades de tratamento de dados pessoais dever??o observar a boa-f?? e os seguintes princ??pios: VIII - preven????o: ado????o de medidas para prevenir a ocorr??ncia de danos em virtude do tratamento de dados pessoais. ISO 27001 - A.10.8.1  - Pol??ticas e procedimentos para troca de informa????es', 
                'LGPD - Art. 6?? As atividades de tratamento de dados pessoais dever??o observar a boa-f?? e os seguintes princ??pios: VII - seguran??a: utiliza????o de medidas t??cnicas e administrativas aptas a proteger os dados pessoais de acessos n??o autorizados e de situa????es acidentais ou il??citas de destrui????o, perda, altera????o, comunica????o ou difus??o. ISO 27001 - A.15.2 -  Conformidade com normas e poli??ticas de seguranc??a da informac??a??o e conformidade te??cnica', 
                'LGPD - Art. 50. Os controladores e operadores, no ??mbito de suas compet??ncias, pelo tratamento de dados pessoais, individualmente ou por meio de associa????es, poder??o formular regras de boas pr??ticas e de governan??a que estabele??am as condi????es de organiza????o, o regime de funcionamento, os procedimentos, incluindo reclama????es e peti????es de titulares, as normas de seguran??a, os padr??es t??cnicos, as obriga????es espec??ficas para os diversos envolvidos no tratamento, as a????es educativas, os mecanismos internos de supervis??o e de mitiga????o de riscos e outros aspectos relacionados ao tratamento de dados pessoais. ISO 27001 - A.6.2.1 - Identifica????o dos riscos relacionados com partes externas', 
                'LGPD - Art. 16. Os dados pessoais ser??o eliminados ap??s o t??rmino de seu tratamento, no ??mbito e nos limites t??cnicos das atividades, autorizada a conserva????o para as seguintes finalidades. ISO 27701 - A.7.4.7 - Reten????o ISO 27701 - A.7.4.8 - Descarte', 
                'LGPD - Art. 6?? As atividades de tratamento de dados pessoais dever??o observar a boa-f?? e os seguintes princ??pios: VIII - preven????o: ado????o de medidas para prevenir a ocorr??ncia de danos em virtude do tratamento de dados pessoais. ISO 27001 - A.10.8.1  - Poli??ticas e procedimentos para troca de informac??o??es.', 
                'LGPD - Art. 7?? O tratamento de dados pessoais somente poder?? ser realizado nas seguintes hip??teses: I - mediante o fornecimento de consentimento pelo titular. ISO 27701 - A.7.3.4 - Fornecendo mecanismos para modificar ou cancelar o consentimento.', 
                'LGPD - Art. 18. O titular dos dados pessoais tem direito a obter do controlador, em rela????o aos dados do titular por ele tratados, a qualquer momento e mediante requisi????o. LGPD - Art. 19.  A confirma????o de exist??ncia ou o acesso a dados pessoais ser??o providenciados, mediante requisi????o do titular: II - por meio de declara????o clara e completa, que indique a origem dos dados, a inexist??ncia de registro, os crit??rios utilizados e a finalidade do tratamento, observados os segredos comercial e industrial, fornecida no prazo de at?? 15 (quinze) dias, contado da data do requerimento do titular. ISO 27701 - A.7.3.1 - Determinando e cumprindo as obriga????es para os titulares de DP.', 
                'LGPD - Art. 48. O controlador dever?? comunicar ?? autoridade nacional e ao titular a ocorr??ncia de incidente de seguran??a que possa acarretar risco ou dano relevante aos titulares. ISO 27701 - 6.13.1 Gest??o de incidentes de seguran??a da informa????o e melhorias.', 
                'LGPD - Art. 48. O controlador dever?? comunicar ?? autoridade nacional e ao titular a ocorr??ncia de incidente de seguran??a que possa acarretar risco ou dano relevante aos titulares. ISO 27701 - 6.13.1 Gest??o de incidentes de seguran??a da informa????o e melhorias.'];

  var arraylength = risk.length;
  var i;
  var options = '';

  options += '<option value="default">Escolha o Risco</option>';
  for(i = 0; i < arraylength; i++)
    options += '<option value="'+risk[i]+'">'+risk[i]+'</option>';
  
  document.getElementById('risk').innerHTML = options.toString();
  document.getElementById('risk').selectedIndex = 0;
  getNumber();
  
  function getNumber(){
	var index = document.getElementById('risk').selectedIndex;
	
	if(index == 0){
		document.getElementById('eventos_de_risco').value = "";
        document.getElementById('causas').value = "";
        document.getElementById('categoria_de_risco').value = "";
        document.getElementById('consequncias').value = "";
        document.getElementById('planos_de_ao_para_implementao_de_controles').value = "";
        document.getElementById('fundamentao').value = "";
	} else {
		document.getElementById('eventos_de_risco').value = eventorisco[index-1];
        document.getElementById('causas').value = causa[index-1];
        document.getElementById('categoria_de_risco').value = categoriarisco[index-1];
        document.getElementById('consequncias').value = consequencia[index-1];
        document.getElementById('planos_de_ao_para_implementao_de_controles').value = plano[index-1];
        document.getElementById('fundamentao').value = fund[index-1];
	}
  }
</script>

<script src="{{ asset('assets/admiko/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/admiko/vendors/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/admiko/vendors/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/admiko/vendors/datepicker/moment.min.js') }}"></script>
<script src="{{ asset('assets/admiko/vendors/datepicker/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/admiko/vendors/select2/js/select2.full.js') }}"></script>
<script src="{{ asset('assets/admiko/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admiko/vendors/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/admiko/vendors/listjs/list.min.js') }}"></script>
<script src="{{ asset('assets/admiko/js/global.js') }}"></script>
<script src="{{ asset('assets/admiko/js/index_start.js') }}"></script>
<script src="{{ asset('assets/admiko/js/form_start.js') }}"></script>
<script src="{{ asset('assets/admiko/js/form_validate.js') }}"></script>
<script src="{{ asset('assets/admiko/js/avatar.js') }}"></script>
@if(config('admiko_config.google_map_api_key'))
    <script src="//maps.googleapis.com/maps/api/js?key={{config('admiko_config.google_map_api_key')}}&callback=startGoogleMaps" async defer></script>
@endIf
@if(config('admiko_config.bing_map_api_key'))
    <script>
        var bingKey = "{{config('admiko_config.bing_map_api_key')}}";
    </script>
    <script type='text/javascript' src='//www.bing.com/api/maps/mapcontrol?callback=startBingMaps' async defer></script>
@endIf
@yield('footerCode')
