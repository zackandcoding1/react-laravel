## Desenvolvendo um projeto CRUD com React+Laravel
Código-fonte baseado nas vídeo-aulas do canal [Celke Cursos](https://www.youtube.com/playlist?list=PLmY5AEiqDWwAR92sj8_LuTHTHV0yN_ob_). <br>

### Requisitos
* PHP 8.2 ou superior;
* MySQL 8 ou superior;
* Composer;
* Node.js 20 ou superior;

### Como rodar o projeto baixado
Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo ".env" as credenciais do banco de dados.<br>

Para a funcionalidade recuperar senha funcionar, é necessário alterar as credenciais do servidor de envio de e-mail no arquivo .env.<br>
Utilizar o servidor fake durante o desenvolvimento: https://mailtrap.io<br>
TODO:
* Refazer a funcionalidade de recuperar senha utilizando o servidor do IAgentesmtp

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

### Capturas de tela do projeto

![image](https://github.com/user-attachments/assets/7b7380e8-fce2-4b4d-a694-33e4e23d8c39)

![image](https://github.com/user-attachments/assets/10e33f6b-8331-40cb-81b7-e452c4339e5c)

![image](https://github.com/user-attachments/assets/32ea4947-d056-40dd-b9c5-33ac62e994c4)

![image](https://github.com/user-attachments/assets/c5625b3a-eb48-4497-a03c-d685c7b1618d)

![image](https://github.com/user-attachments/assets/40f8425f-414e-45fe-9c26-8af065fa7477)

![image](https://github.com/user-attachments/assets/ad9e5147-6fa6-4e2f-b4da-220d49b880ec)

![image](https://github.com/user-attachments/assets/5806a24f-bf79-4990-90f6-f38d1c702d24)
