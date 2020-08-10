<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Dados Pessoais</li>
                <li>Endereço</li>
                <li>Quase lá</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Cadastro Para Cambista</h2>
                <h3 class="fs-subtitle">Preecha todos os dados</h3>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

                <input type="text" name="nomecomp" id="campo1" placeholder="Nome Completo*" required/>
</br>
                <input id="campo2"  type="text" name="cpf"  data-mask-format="cpf" placeholder="CPF*" required/>

</br>
                <input type="text" name="Dt" data-mask-format="date" 
 id="campo3" placeholder="Data De nascimento*" required/>
</br>

<div>
<input type="text" data-mask-format="phone" name="contato" id="campo4" placeholder="Numero para Contato*" required/>
</br>

<input type="text" data-mask-format="phone" name="contato" id="campo5" placeholder="Contato para referência 1*"/></div>
<select style="margin-top:-5%;"  name="" class="345">
                              <option disabled selected>Grau de parentesco?</option>
                              <option value="Amigo">Amigo</option>
<option value="Familia">Familia</option>
<option value="Vizinho">Vizinho</option>
                          </select>
                          <input style="visibility:hidden;  " id="campo6" type="text" name="contato" placeholder="Grau de parentesco"/>
<input style=" "  id="campo7"data-mask-format="phone" type="text" name="contato" placeholder="Contato para referência 2*"/>
<select style="margin-top:-5%;" name="" class="3452">
                              <option disabled selected>Grau de parentesco?</option>
                              <option value="Amigo">Amigo</option>
<option value="Familia">Familia</option>
<option value="Vizinho">Vizinho</option>
                          </select>
                          <input style="visibility:hidden;  " id="campo8" type="text" name="contato" placeholder="Grau de parentesco"/>



<!--codigo ajax pegando dados dos inputs-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script type="text/javascript">
function inserir_registo()
{

    //dados a enviar, vai buscar os valores dos campos que queremos enviar para a BD
    var dadosajax = {
        'campo1' : $("#campo1").val(),
        'campo2' : $("#campo2").val(),
        'campo3' : $("#campo3").val(),
        'campo4' : $("#campo4").val(),
        'campo5' : $("#campo5").val(),
        'campo6' : $("#campo6").val(),
        'campo7' : $("#campo7").val(),
        'campo8' : $("#campo8").val(),
        'campo9' : $("#campo9").val(),
        'campo10' : $("#campo10").val(),
        'campo11' : $("#campo11").val(),
        'campo12' : $("#campo12").val(),
        'campo13' : $("#campo13").val(),
        'campo14' : $("#campo14").val(),
    };
    pageurl = 'grava.php';
    //para consultar mais opcoes possiveis numa chamada ajax
    //http://api.jquery.com/jQuery.ajax/
    $.ajax({
	
        //url da pagina
        url: pageurl,
        //parametros a passar
        data: dadosajax,
        //tipo: POST ou GET
        type: 'POST',
        //cache
        cache: false,
        //se ocorrer um erro na chamada ajax, retorna este alerta
        //possiveis erros: pagina nao existe, erro de codigo na pagina, falha de comunicacao/internet, etc etc etc
        error: function(){
            alert('Erro: Inserir Registo!!');
        },
        //retorna o resultado da pagina para onde enviamos os dados
        success: function(result)
        { 
            //se foi inserido com sucesso
            if($.trim(result) == '1')
            {
				alert("O seu registo foi inserido com sucesso!");
            }
            //se foi um erro
            else
            {
                alert("Ocorreu um erro ao inserir o seu registo!");
            }

        }
    });
}
</script>


<!--fim codigo ajax-->

<select name="" class="3453">
                              <option disabled selected>Onde nós  conheceu? </option>
                              <option value="Casa das Apostas">Casa das Apostas</option>
<option value="Instagram">Instagram</option>
<option value="Facebook">Facebook</option>
<option value="Indicação de amigo">indicação de amigo</option>
                          </select>
                          
                          </br>
<input style="visibility:hidden;" id="campo9" type="text" name="contato" placeholder="Onde nos  conheceu?"/>
                <input id="button"   type="button"  disabled name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Precisamos do seu Endereço</h2>
                <h3 class="fs-subtitle">preencha corretamente com seu endereço</h3>
                <input id="campo10" type="text" name="twitter" placeholder="Endereço Completo" required/>
                <input type="text" name="facebook" id="campo11" placeholder="Bairro" required/>
                
                <input  id="campo12" type="text" name="gplus" placeholder="Estado" required/>

<input id="campo13"  type="text" name="cep" placeholder="Cep" data-mask-format="zipcode" required/>

<input id="campo14" type="text" name="cidade" Placeholder="Cidade"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input id="button2" disabled type="submit" o name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Precisamos  de algumas fotos</h2>
                <h3 class="fs-subtitle">só  serão  aceitas fotos tiradas na hora</h3>

<div class="wrapper">
  <input type="file" capture="camera" accept="image/*" id="file-input" required>
  <label for="file-input">
    <i class="far fa-id-badge"></i>
    <span>Tire foto da frente do seu RG</span>
  </label>
  </div>
  <div class="wrapper">
  <input type="file" capture="camera" accept="image/*" id="file-input" required>
  <label for="file-input">
  <i class="far fa-id-card"></i>
  <span>Tire foto do verso do seu RG</span>
  </label>
  </div>
  
  <div class="wrapper">
  <input type="file" capture="camera" accept="image/*" id="file-input" required>
  <label for="file-input">
  <i class="fas fa-camera"></i>
  <span>Tire selfie segurando seu Rg</span>
  </label>
  </div>
  
 <div class="wrapper">
 <input type="file" capture="camera" accept="image/*" id="file-input" required>
 <label for="file-input">
 <i class="fas fa-video"></i>
 <span>Faça  um video segurando seu Rg</span>
 </label>
 </div>
 
 <div class="wrapper">
 <input type="file" capture="camera" accept="image/*" id="file-input" required>
 <label for="file-input">
 <i class="fas fa-scroll"></i>
 <span>Tire selfie de um papel de energia ou água</span>
 </label>
 </div>
 
 <div class="wrapper">
 <input  type="file"  accept="image/*" id="file-input" class="ultcam"  required>
 <label for="file-input">
 <i class="fas fa-share-alt-square"></i>
 <span>Tire print das redes socias</span>
 </label>
 </div>
  
 <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
 <input id="button3"  name="next"  value="Enviar" type="submit" class="next action-button"  onclick="inserir_registo()"/>

                
            </fieldset>
            <fieldset>
            <h2 class="fs-title">Cadastro Realizado com sucesso <i style="color:green;" class="fas fa-chevron-circle-down"></i></h2>
            <h3 class="fs-subtitle">Obrigado Por se Cadastrar</h3>
            
        </form>
        
    </div>
</div>
<!-- /.MultiStep Form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>




</body>
</html>