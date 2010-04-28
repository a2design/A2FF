<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Cadastro</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<link rel="stylesheet" type="text/css" href="../snippets/cadastro.css" media="all" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="Cadastro RSS" href="#" />	
</head>
<body id="">
<h2>Cadastro</h2>
<p class="subtitulo">Preencha o cadastro abaixo para poder avaliar as informações e comentar os serviçoes prestados.</p>
<form id="formCadastro" action="#">
	<fieldset>	
		<div id="campo01" class="linha">
			<label for="nome">
				<span>Nome*</span>
				<input name="nome" id="nome" type="text" class="inputText" value="Digite seu nome" onfocus="if (this.value=='Digite seu nome') this.value=''"/>
			</label>
			<label for="email">
				<span>E-mail*</span>
				<input name="email" id="email" type="text" class="inputText" value="Digite seu e-mail" onfocus="if (this.value=='Digite seu e-mail') this.value=''"/>
			</label>
		</div>
		<div id="campo02" class="linha">
			<label for="senha1">
				<span>Senha*</span>
				<input name="nome" id="senha1" type="password" class="inputText" value="Digite sua senha" onfocus="if (this.value=='******') this.value=''"/>
			</label>
			<label for="senha2">
				<span>Confirmar Senha*</span>
				<input name="email" id="senha2" type="password" class="inputText" value="Confirme sua senha" onfocus="if (this.value=='******') this.value=''"/>
			</label>
		</div>
		<div id="campo03" class="linha">
			<label for="pais">
				<span>País :</span>
				<input name="pais" id="pais" type="text" class="inputText" value="Digite o país em que vive" onfocus="if (this.value=='Digite o país em que vive') this.value=''"/>
			</label>
			
			<label for="cep">
				<span>CEP :</span>
				<input name="cep" id="cep" type="text" class="inputText" value="Digite o seu CEP" onfocus="if (this.value=='Digite o seu CEP') this.value=''"/>
			</label>
			
			<p id="cepfield" class="verificaCep">
				<a class="botao" href="#" id="buscaCep">Verificar</a>	
			</p>				
		</div>

		<div id="campo04" class="linha">
			<label for="endereco">
				<span>Endereço :</span>
				<input name="endereco" id="endereco" type="text" class="inputText" value="Digite o seu endereço" onfocus="if (this.value=='Digite o seu endereço') this.value=''"/>
			</label>
			<label for="numero">
				<span>Número :</span>
				<input name="numero" id="numero" type="text" class="inputText" value="--" onfocus="if (this.value=='--') this.value=''"/>
			</label>
		</div>

		<div id="campo05" class="linha">
			<label for="complemento">
				<span>Complemento :</span>
				<input name="complemento" id="complemento" type="text" class="inputText" value="--" onfocus="if (this.value=='--') this.value=''"/>
			</label>
		
			<label for="bairro">
				<span>Bairro :</span>
				<input name="bairro" id="bairro" type="text" class="inputText" value="--" onfocus="if (this.value=='--') this.value=''"/>
			</label>
		</div>

		<div id="campo06" class="linha">
			<label for="state">
				<span>Estado :</span>					
				<span id="state">
					<select>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AP">AP</option>	
						<option value="AM">AM</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>	
						<option value="MA">MA</option>
						<option value="MT">MT</option>
						<option value="MS">MS</option>
						<option value="MG">MG</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>	
						<option value="PR">PR</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RO">RO</option>	
						<option value="RR">RR</option>
						<option value="RS">RS</option>
						<option value="SC">SC</option>
						<option selected="selected" value="SP">SP</option>
						<option value="SE">SE</option>
						<option value="TO">TO</option> 
             		</select>								
				</span>
			</label>
			<label for="city">
				<span>Cidade :</span>
				<span id="city">
					<select class="selectOne" name="formContatoCidade" id="formContatoCidade">
						<option value="Selecione a Cidade" selected="selected">Selecione a Cidade</option> 
						<option value="São Puaulo">São Paulo</option> 
					</select>
					
				</span>
			</label>
		</div>

		<div id="campo07" class="linha">
			<label for="telefone">
				<span>Telefone :</span>
				<input name="ddd" id="ddd_tel" type="text" class="inputText" value="--" onfocus="if (this.value=='--') this.value=''"/>
				<input name="tel" id="telefone" type="text" class="inputText" value="--" onfocus="if (this.value=='--') this.value=''"/>
			</label>
			<label for="celular">
				<span>Celular :</span>
				<input name="ddd" id="ddd_cel" type="text" class="inputText" value="--" onfocus="if (this.value=='--') this.value=''"/>
				<input name="cel" id="celular" type="text" class="inputText" value="--" onfocus="if (this.value=='--') this.value=''"/>
			</label>
		</div>
		<div id="campo08" class="linha">
			<input type="checkbox" name="noticias" id="noticias" class="input_check"/>
			<span>Receber o <a href="#">Informativo SP Notícias</a> por e-mail</span>
			<label for="enviar">
			   <input type="submit" name="enviar" id="enviar" value="Enviar" class="inputEnviar"/>
			</label>
		</div> 
	</fieldset>
</form>
</body>
</html>

