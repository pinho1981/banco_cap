# Desafio Banco Capgemini
-----------------------------------------
# API

Foi utilizado o terminal Git Bash.
A ferramenta cliente de SQL utilizada foi DBeaver.
Composer foi instalado para gerenciar as dependências do PHP.

#### Roteiro do projeto
Dentro do terminal, criar o projeto _banco_cap_ com o comando:
	**composer create-project --prefer-dist laravel/laravel banco_cap**

Dentro da pasta _banco_cap_ exeecutar o comando:
    **composer install**

Continuando no terminal, para gerar uma chave do projeto, executar o comando:
    **php artisan key:generate**

Dentro da pasta _banco_cap/database_ criar um arquivo **database.sqlite**, esse arquivo será o banco de dados SQLite. Depois de criado esse arquivo, executar o comando **php artisan migrate** para migrar o dados ao banco. Vale salientar que o drive ao banco de dados SQLite tem que estar ativo.

Para geração de dados randômicos/automáticos, executar:
    **php artisan tinker**
    
Depois executado o comando acima, abrirá um terminal _Psy Shell_, para gerar 5 clientes, por exemplo, executar o comando:
    **factory(App\User::class, 5)->create()**
    
Assim que for gerado os clientes, para sair do shell, basta executar o comando **exit**.

Para verificar a API em funcionamento, execute o comando **php artisan serve**, assim, inicializará o servidor, normalmente tendo endereço como http://127.0.0.1:8000 para acessar a API no navegador.

Para melhorar a visualização de retorno dos dados da API, se preferir, pode instalar a extensão JSON Formatter. Um outro método de visualizar esses dados de forma "pretty", é utilizando o site https://jsonformatter.org/json-pretty-print, bastando copiar e colar os dados trazidos pela API.