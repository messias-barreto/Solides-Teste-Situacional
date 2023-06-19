## (Liberfly) Teste Situacional Back End V2 | Conhecimentos Técnicos
Após fazer o clone do Projeto
- cd Solides-Teste-Situacional
- rode o comando **composer install**
- rode o comando **npm install**
- rode o comando **php artisan jwt:secret**
- rode o comando **php artisan migrate --seed**
- rode o comando **php artisan serve**

## Rotas
**<p>Authentication</p>**
<p>http://localhost:8000/api/login  (POST)</p>
<p>funcionalidade: Realiza a authenticação do Usuário</p>

<p>http://localhost:8000/api/register (POST)</p>
<p>funcionalidade: Cadastrar um novo Usuário</p>

**Users - Rota Autenticada!**
<p>http://localhost:8000/users (GET)</p>
<p>Visualizar todos os Usuários</p>

<p>http://localhost:8000/users/%7Bid%7D (GET)</p>
<p>Visualiza o Usuário pelo seu ID</p>

**Category - Rota Autenticada!**
<p>http://localhost:8000/category (GET)</p>
<p>Visualiza todas as Categorias</p>

<p>http://localhost:8000/category/%7Bid%7D (GET)</p>
<p>Visualiza a Categoria pelo seu ID </p>

**Products - Rota Autenticada!**
<p>http://localhost:8000/products (GET)</p>
<p>Visualiza todos os Produtos</p>

<p>http://localhost:8000/products/%7Bid%7D (GET)</p>
<p>Visualizar todos os Usuários</p>

<p>http://localhost:8000/products/%7Bcategoria%7D (GET)</p>
<p>Visualiza Os Produtos pela Categoria</p>

**Exemplo .env**
<p>DB_CONNECTION=mysql</p>
<p>DB_HOST=127.0.0.1</p>
<p>DB_PORT=3306</p>
<p>DB_DATABASE=sou_banco</p>
<p>DB_USERNAME=root</p>
<p>DB_PASSWORD=sua_senha</p>
