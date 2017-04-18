<div class="form-group {{ $errors->has('disponivel') ? 'has-error' : ''}}">
    {!! Form::label('disponivel', 'Disponível ?', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('disponivel', ['Disponível', 'Indisponível'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('disponivel', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tipoImovel') ? 'has-error' : ''}}">
    {!! Form::label('tipoImovel', 'Tipo do Imóvel', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('tipoImovel', ['Casa', 'Apartamento'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipoImovel', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('locacaoVenda') ? 'has-error' : ''}}">
    {!! Form::label('locacaoVenda', 'Locação ou Venda', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('locacaoVenda', ['Locação', 'Venda', 'Locação / Venda'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('locacaoVenda', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nomeEdificio') ? 'has-error' : ''}}">
    {!! Form::label('nomeEdificio', 'Nome do Edifício', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeEdificio', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeEdificio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('numeroAptCasa') ? 'has-error' : ''}}">
    {!! Form::label('numeroAptCasa', 'Número do Apartamento / Casa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('numeroAptCasa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('numeroAptCasa', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tamanhoTerreno') ? 'has-error' : ''}}">
    {!! Form::label('tamanhoTerreno', 'Tamanho do Terreno', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tamanhoTerreno', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tamanhoTerreno', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('terrenoProprio') ? 'has-error' : ''}}">
    {!! Form::label('terrenoProprio', 'Terreno Próprio ?', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('terrenoProprio', ['Sim', 'Não'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('terrenoProprio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('marinha') ? 'has-error' : ''}}">
    {!! Form::label('marinha', 'Marinha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('marinha', ['Sim', 'Não'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('marinha', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('numeroAndares') ? 'has-error' : ''}}">
    {!! Form::label('numeroAndares', 'Número de Andares', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('numeroAndares', null, ['class' => 'form-control']) !!}
        {!! $errors->first('numeroAndares', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qtAptAndar') ? 'has-error' : ''}}">
    {!! Form::label('qtAptAndar', 'Apartamentos por Andar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('qtAptAndar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('qtAptAndar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
    {!! Form::label('endereco', 'Endereço', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
        {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('bairro') ? 'has-error' : ''}}">
    {!! Form::label('bairro', 'Bairro', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bairro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cidade') ? 'has-error' : ''}}">
    {!! Form::label('cidade', 'Cidade', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cidade', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cep') ? 'has-error' : ''}}">
    {!! Form::label('cep', 'CEP', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cep', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qtdQuartos') ? 'has-error' : ''}}">
    {!! Form::label('qtdQuartos', 'Quantidade de Quartos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('qtdQuartos', null, ['class' => 'form-control']) !!}
        {!! $errors->first('qtdQuartos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qtdSuites') ? 'has-error' : ''}}">
    {!! Form::label('qtdSuites', 'Quantidade de Suítes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('qtdSuites', null, ['class' => 'form-control']) !!}
        {!! $errors->first('qtdSuites', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qtdBanheiros') ? 'has-error' : ''}}">
    {!! Form::label('qtdBanheiros', 'Quantidade de Banheiros', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('qtdBanheiros', null, ['class' => 'form-control']) !!}
        {!! $errors->first('qtdBanheiros', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('varanda') ? 'has-error' : ''}}">
    {!! Form::label('varanda', 'Varanda', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('varanda', ['Sim', 'Não'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('varanda', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('terraco') ? 'has-error' : ''}}">
    {!! Form::label('terraco', 'Terraço', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('terraco', ['Sim', 'Não'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('terraco', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('areaUtil') ? 'has-error' : ''}}">
    {!! Form::label('areaUtil', 'Área Útil', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('areaUtil', null, ['class' => 'form-control']) !!}
        {!! $errors->first('areaUtil', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('itensLazer') ? 'has-error' : ''}}">
    {!! Form::label('itensLazer', 'Itens de Lazer', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('itensLazer', null, ['class' => 'form-control']) !!}
        {!! $errors->first('itensLazer', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tempoConstrucao') ? 'has-error' : ''}}">
    {!! Form::label('tempoConstrucao', 'Ano de Construção', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tempoConstrucao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tempoConstrucao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('valorCondominio') ? 'has-error' : ''}}">
    {!! Form::label('valorCondominio', 'Valor do Condomínio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('valorCondominio', null, ['class' => 'form-control']) !!}
        {!! $errors->first('valorCondominio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('valorIptu') ? 'has-error' : ''}}">
    {!! Form::label('valorIptu', 'Valor do IPTU', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('valorIptu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('valorIptu', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('posicaoSol') ? 'has-error' : ''}}">
    {!! Form::label('posicaoSol', 'Posição em relação ao Sol', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('posicaoSol', ['Norte', 'Sul', 'Leste', 'Oeste'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('posicaoSol', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qtdGaragens') ? 'has-error' : ''}}">
    {!! Form::label('qtdGaragens', 'Quantidade de Garagens', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('qtdGaragens', null, ['class' => 'form-control']) !!}
        {!! $errors->first('qtdGaragens', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tipoGaragens') ? 'has-error' : ''}}">
    {!! Form::label('tipoGaragens', 'Tipo das Garagens', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('tipoGaragens', ['Coberta', 'Descoberta', 'Presa', 'Solta', '1 Presa e 1 Livre', '1 Presa e 2 Livres', '4 Vagas'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipoGaragens', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeProprietario') ? 'has-error' : ''}}">
    {!! Form::label('nomeProprietario', 'Nome do Proprietário', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeProprietario', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeProprietario', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('emailProprietario') ? 'has-error' : ''}}">
    {!! Form::label('emailProprietario', 'Email do Proprietário', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('emailProprietario', null, ['class' => 'form-control']) !!}
        {!! $errors->first('emailProprietario', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foneProprietario') ? 'has-error' : ''}}">
    {!! Form::label('foneProprietario', 'Fone do Proprietário', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('foneProprietario', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foneProprietario', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('valorVenda') ? 'has-error' : ''}}">
    {!! Form::label('valorVenda', 'Valor da Venda', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('valorVenda', null, ['class' => 'form-control']) !!}
        {!! $errors->first('valorVenda', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('valorLocacao') ? 'has-error' : ''}}">
    {!! Form::label('valorLocacao', 'Valor da Locação', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('valorLocacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('valorLocacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeConstrutora') ? 'has-error' : ''}}">
    {!! Form::label('nomeConstrutora', 'Nome da Construtora', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeConstrutora', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeConstrutora', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('percentualComissao') ? 'has-error' : ''}}">
    {!! Form::label('percentualComissao', 'Percentual da Comissão', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('percentualComissao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('percentualComissao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('quemIndicou') ? 'has-error' : ''}}">
    {!! Form::label('quemIndicou', 'Quem Indicou', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('quemIndicou', null, ['class' => 'form-control']) !!}
        {!! $errors->first('quemIndicou', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foneQuemIndicou') ? 'has-error' : ''}}">
    {!! Form::label('foneQuemIndicou', 'Fone de Quem Indicou', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('foneQuemIndicou', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foneQuemIndicou', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('outrasInformacoes') ? 'has-error' : ''}}">
    {!! Form::label('outrasInformacoes', 'Outras Informações', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textArea('outrasInformacoes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('outrasInformacoes', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dataCaptacao') ? 'has-error' : ''}}">
    {!! Form::label('dataCaptacao', 'Data da Captação', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('dataCaptacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dataCaptacao', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Adicionar', ['class' => 'btn btn-primary', 'id' => 'btnAtualizarImovel']) !!}
        <input id="testeBtn" onCLick="submitTeste()" value="Enviar" class="btn btn-primary" />
    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type='text/javascript'>

    $(document).ready(function(){
        $('select[name="locacaoVenda"]').change(function(){
            if($(this).val() == '0'){
                $("#valorVenda").parent().parent().fadeOut(1);
                $("#valorVenda").val("-");
                $("#percentualComissao").parent().parent().fadeOut(1);
                $("#percentualComissao").val("-");
                

                $("#valorLocacao").parent().parent().fadeIn(1);
                $("#valorLocacao").val("");
            }else if($(this).val() == '1'){
                $("#valorLocacao").parent().parent().fadeOut(1);
                $("#valorLocacao").val("-");

                $("#valorVenda").parent().parent().fadeIn(1);
                $("#valorVenda").val("");
                $("#percentualComissao").parent().parent().fadeIn(1);
                $("#percentualComissao").val("");
            }else if($(this).val() == '2'){
                $("#valorLocacao").parent().parent().fadeIn(1);
                $("#valorLocacao").val("");

                $("#valorVenda").parent().parent().fadeIn(1);
                $("#valorVenda").val("");
                $("#percentualComissao").parent().parent().fadeIn(1);
                $("#percentualComissao").val("");
            }
        });

    });

    $('#btnAtualizarImovel').hide();
    
    function submitTeste(){
        if($("#nomeEdificio").val() == ""){
            $("#nomeEdificio").val("-");
        } 
        
        if($("#numeroAptCasa").val() == ""){
            $("#numeroAptCasa").val("-");
        }
        
        if($("#tamanhoTerreno").val() == ""){
            $("#tamanhoTerreno").val("-");
        }
        
        if($("#numeroAndares").val() == ""){
            $("#numeroAndares").val("0");
        }
        
        if($("#qtAptAndar").val() == ""){
            $("#qtAptAndar").val("0");
        }
        
        if($("#endereco").val() == ""){
            $("#endereco").val("-");
        }
        
        if($("#bairro").val() == ""){
            $("#bairro").val("-");
        }
        
        if($("#cidade").val() == ""){
            $("#cidade").val("-");
        }
        
        if($("#cep").val() == ""){
            $("#cep").val("-");
        }
        if($("#qtdQuartos").val() == ""){
            $("#qtdQuartos").val("0");
        }
        
        if($("#qtdSuites").val() == ""){
            $("#qtdSuites").val("0");
        }
        
        if($("#qtdBanheiros").val() == ""){
            $("#qtdBanheiros").val("0");
        }
        
        if($("#areaUtil").val() == ""){
            $("#areaUtil").val("-");
        }
        
        if($("#itensLazer").val() == ""){
            $("#itensLazer").val("-");
        }
        
        if($("#tempoConstrucao").val() == ""){
            $("#tempoConstrucao").val("-");
        }
        
        if($("#valorCondominio").val() == ""){
            $("#valorCondominio").val("-");
        }
        
        if($("#valorIptu").val() == ""){
            $("#valorIptu").val("-");
        }
        
        if($("#qtdGaragens").val() == ""){
            $("#qtdGaragens").val("0");
        }
        
        if($("#nomeProprietario").val() == ""){
            $("#nomeProprietario").val("-");
        }
        
        if($("#emailProprietario").val() == ""){
            $("#emailProprietario").val("-");
        }
        
        if($("#foneProprietario").val() == ""){
            $("#foneProprietario").val("-");
        }
        
        if($("#valorVenda").val() == ""){
            $("#valorVenda").val("-");
        }
        
        if($("#valorLocacao").val() == ""){
            $("#valorLocacao").val("-");
        }
        
        if($("#nomeConstrutora").val() == ""){
            $("#nomeConstrutora").val("-");
        }
        
        if($("#percentualComissao").val() == ""){
            $("#percentualComissao").val("-");
        }
        
        if($("#quemIndicou").val() == ""){
            $("#quemIndicou").val("-");
        }
        
        if($("#foneQuemIndicou").val() == ""){
            $("#foneQuemIndicou").val("-");
        }
        
        if($("#outrasInformacoes").val() == ""){
            $("#outrasInformacoes").val("-");
        }

        if($("#dataCaptacao").val() == ""){
            $('#dataCaptacao').val('2000-01-01');
        }

        //$("#formCadastroImoveis").submit();
        $('#btnAtualizarImovel').click();
        
    }
</script>
