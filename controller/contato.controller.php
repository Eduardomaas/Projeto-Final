
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Oxygen&display=swap" rel="stylesheet">
	<link href="../view/css/bootstrap" rel="stylesheet">

	<title>Portal do Usuário</title>
  </head>
  <body>
  <div class="contact">
            <form class="frame">
              <label class="">
                Seu nome:
                <input type="text" name="name" id="name" placeholder="Digite seu Nome" required />
              </label>
              <label class="">
                Seu Email:
                <input type="email" name="name" id="name" placeholder="@email.com" required />
              </label>
              <label class="">
                <label class="">
                    Seu Telefone:
                    <input type="text" name="telefone" id="telefone" placeholder="(00) 0000-0000" required />
                  </label>
                  <label class="">
                    <div class="form-group col-md-4">
                        <label for="inputEstado">Seu Estado:</label>
                        <select id="inputEstado" class="form-control">
                            <name="estados-brasil">
                                <option >Selecione seu estado...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            
                        </select>
                      </div>
                      <label class="">
                        <label class="">
                            Sua Cidade:
                            <input type="text" name="Cidade" id="Cidade" placeholder="Digite sua cidade" required />
                          </label>
              <label class="">
                Mande sua Menssagem:
                <textarea name="message" rows="4" placeholder="Escreva sua Menssagem" required></textarea>
              </label>
              <div class="text-center add-sm-top">
                <button class="limpar" type="reset"><i class="fa fa-times"></i> &nbsp; Limpar</button>
                <button class="enviar" type="submit"><i class="fa fa-envelope"></i> &nbsp; Enviar</button>
              </div>
            </form>
          </div>
          
          <div class="fwpolice">
           TecFast
          </div>

    <article>
	<div class="container">
		<div class="row">
			<div class="col-md-12"><h2>Dados do seu cliente</h2></div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<?php
            
            include '../model/contato.class.php';
            include '../util/util.class.php';
            
            $u1 = new Util();
           
            $nome = $_POST['txtnome'];
            $email = $_POST['txtemail'];
            $telefone = $_POST['txttelefone'];
            
            if(empty($nome) || empty($email) || empty($telefone)){
              echo 'Preencha os campos';
              
            }else if(!$u1->validarEmail($email)){
              echo 'E-mail fora de padrão';
           
            }else if(!$u1->testarExpressaoRegular('/^[A-Za-zÀ-Úà-ú ]{2,30}$/',$nome)){
              echo 'Nome fora do formato';

          }else if(!$u1->testarExpressaoRegular('/^[0-9]{5}-[0-9]{4}$/',$telefone)){
              echo 'Telefone fora do padrão';
            }else{

              
              $c1 = new Contato($nome,$email,$telefone);
              echo $c1;

              echo '<hr><h3>Exemplo de alterar com método mágico: </h3>';

              
              $c1->nome = 'Teste de Exibição de dados';
              echo '<p>Mostrando que o dado foi alterado: '
                  .$c1->nome.
                  '<br>Mostrando todos os dados: '.$c1.'</p>';
            }
         ?>
				</div>
				<div class="col-md-6"></div>
				
			</div>
		</div>

	</div>
</article>
  
  </section>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>