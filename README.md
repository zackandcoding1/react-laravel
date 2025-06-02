## Desenvolvendo um projeto com React+Laravel

### Sequencia para criar o projeto
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

Executar as bibliotecas Node.js.
```
npm run dev
```

Inicar o projeto criado com Laravel.
```
php -S 127.0.0.1:8000 -t public
```

Acessar no navegador URL.
``` 
http://127.0.0.1:8000/
```

Criar seed.
```
php artisan make:seeder UserSeeder
```

Cadastrar registro de teste.
```
php artisan db:seed
```