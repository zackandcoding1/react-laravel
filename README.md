## Desenvolvendo um projeto com React+Laravel

### Requisitos
* PHP 8.2 ou superior;
* MySQL 8 ou superior;
* Composer;
* Node.js 20 ou superior;

### Como rodar o projeto baixado
Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo ".env" as credenciais do banco de dados.<br>

Instalar as dependências do PHP.
```
composer install
```

Instalar as dependências do Node.js.
```
npm install
```

Gerar a chave no arquivo .env.
```
php artisan key:generate
```

Executar as migrations para criar a base de dados e as tabelas.
```
php artisan migrate
```

Cadastrar registro de teste.
```
php artisan db:seed
```

Inicar o projeto criado com Laravel (terminal 1).
```
php -S 127.0.0.1:8000 -t public
```

Executar as bibliotecas Node.js (terminal 2).
```
npm run dev
```

Acessar no navegador a URL.
```
http://127.0.0.1:8000
```

### Sequência para criar o projeto
Criar o projeto com Laravel.
```
composer create-project laravel/laravel .
```

Instalar o Breeze.
```
composer require laravel/breeze --dev
```

Publicar a autenticação, rotas, controllers e outros recursos para a aplicação
```
php artisan breeze:install
```

* Selecionar React com Breeze, digitar "react".
* Selecionar recurso opcionai, digitar "dark".
* Selecionar framework para teste, digitar "1".

Executar as migrations para criar a base de dados e as tabelas.
```
php artisan migrate
```

Instalar as dependências do Node.js.
```
npm install
```

Iniciar o projeto criado com Laravel (terminal 1).
```
php -S 127.0.0.1:8000 -t public
```

Executar as bibliotecas Node.js (terminal 2).
```
npm run dev
```

Acessar no navegador a URL.
``` 
http://127.0.0.1:8000
```

Criar seed.
```
php artisan make:seeder UserSeeder
```

Cadastrar registro de teste.
```
php artisan db:seed
```

### Como usar o GitHub
Verificar a versão do GIT.
```
git -v
```

Baixar os arquivos do GitHub.
```
git clone -b <branch_nome> <repositorio_url> .
git clone https://github.com/zackandcoding1/react-laravel.git .
```

Verificar a branch.
```
git branch
```

Baixar as atualizações do projeto.
```
git pull
```

Adicionar todos os arquivos modificados no staging area - área de preparação.
```
git add .
```

Adicionar uma descrição ao commit. O comando -m permite que insira a mensagem de commit diretamente na linha de comando.
```
git commit -m "Descrição do commit"
```

Enviar os commits locais para o repositório remoto.
```
git push <remote> <branch>
git push origin main
```