## Sistema de Chat Online

#### Tecnologias utilizadas

- Front-end

* HTML
* CSS
* Javascript

Demais tecnologias: JQuery e Font Awesome.

- Back-end

* PHP
* MySQL

#### Sobre o projeto

Trata-se de um pequeno sistema de chat online que pode ser facilmente implementado em qualquer sistema web.

A ideia desse chat é ser utilizado dentro de alguma intranet coorporativa, onde os funcionários possam trocar mensagens entre si em tempo real.

Lembrando que toda a ideia de "login" nesse sistema foi feito através de SESSIONs para que os testes sejam possíveis. Quem baixar este projeto deverá implementar um sistema de login, nível de usuário, cadastro de salas, etc. Além de poder modificar o front-end ao seu gosto.

Desenvolvi este chat com muito carinho e espero que alguém mais possa usá-lo.

#### Como utilizar

Primeiramente você deve ter um servidor MySQL instalado na sua máquina e um bom SGBD (recomendo o Workbench).

Abra seu SGBD e insira a query que está no arquivo "bancodedados.sql". Após isso, o banco estará funcionando.

Há dois arquivos que precisam ser editados:

 - config.php (na pasta raíz)
 - main.js (dentro da pasta js/)
 
 No arquivo config você irá colocar informações de banco de dados: usuário, senha e host
 
 Já no arquivo main.js você irá editar a variável "path" com o seu host
 
 Após isso basta rodar um servidor PHP (utilizo o Apache) e rodar a aplicação
 
 
 Qualquer coisa, estou à disposição para tomar um café =)
