## Bem vindo ao Projeto dotGroup

***
* **PHP** 7.3.2
* **Laravel Framework** 5.8.3
* **MySQL** 5
***

Testes da API
Testes realizados com **POSTMAN** 6.7.4 [https://www.getpostman.com/](https://www.getpostman.com/)
> `Dentro da pasta PUBLIC do projeto exite o arquivo: TesteBDRpostman.json (com as configurações dos testes)`

***

Foram criados arquivos de MIGRATION (para geração da tabela do banco)
Criar banco **bdr**

***

* **Incialização do PROJETO:**
* composer install
* composer update
* php artisan migrate
* php artisan serve

***
* Arquivo dos métodos (https://github.com/lucasgollner/dotGroup/blob/master/app/Http/Controllers/Controller.php)
* Método da Questão 01: http://localhost:8000/questaoUm
* Método da Questão 02: http://localhost:8000/questaoDois
* Método da Questão 03: http://localhost:8000/questaoTres
***

Métodos da Questão 4 (API)

* View de visualização das Tarefas: http://localhost:8000/tarefa

* > `GET    : http://127.0.0.1:8000/api/tarefa/`
* > `DELETE : http://127.0.0.1:8000/api/tarefa/{ID_DA_TAREFA}`
* > `POST   : http://127.0.0.1:8000/api/tarefa/ --- JSON: 
{
	"tarefas_titulo":"Quinta TAREFA",
	"tarefas_texto":"Teste para DOT",
	"tarefas_usuario":"lucasgollner"
}`
* > `PUT    : http://127.0.0.1:8000/api/tarefa/{ID_DA_TAREFA} --- JSON: 
{
	"tarefas_titulo":"Quinta TAREFA alterada",
	"tarefas_texto":"Teste para DOT",
	"tarefas_usuario":"lucasgollner"
}`

