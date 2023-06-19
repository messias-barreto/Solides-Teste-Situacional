## (Liberfly) Teste Situacional Back End V2 | Conhecimentos Técnicos
Após fazer o clone do Projeto
- cd Solides-Teste-Situacional
- rode o comando **composer install**
- rode o comando **php artisan migrate --seed**
- rode o comando **php artisan serve**

## Rotas
**<p>Authentication</p>**
<p>http://localhost:8000/login  (POST)</p>
<p>funcionalidade: Realiza a authenticação do Usuário</p>

<p>http://localhost:8000/register (POST)</p>
<p>funcionalidade: Cadastrar um novo Usuário</p>

**Users - Rota Autenticada!**
<p>http://localhost:8000/users (GET)</p>
<p>Visualizar todos os Usuários</p>

<p>http://localhost:8000/users/{id} (GET)</p>
<p>Visualiza o Usuário pelo seu ID</p>

**Category - Rota Autenticada!**
<p>http://localhost:8000/category (GET)</p>
<p>Visualiza todas as Categorias</p>

<p>http://localhost:8000/category/{id} (GET)</p>
<p>Visualiza a Categoria pelo seu ID </p>

**Products - Rota Autenticada!**
<p>http://localhost:8000/products (GET)</p>
<p>Visualiza todos os Produtos</p>

<p>http://localhost:8000/products/{id} (GET)</p>
<p>Visualizar todos os Usuários</p>

<p>http://localhost:8000/products/{categoria} (GET)</p>
<p>Visualiza Os Produtos pela Categoria</p>
