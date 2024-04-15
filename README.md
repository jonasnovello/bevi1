# Desenvolvimento de API CRUD de Produtos em Laravel

Projeto CRUD (Create, Read, Update, Delete) de produtos desenvolvido em Laravel na versão 7.0. Este projeto permite que você adicione, visualize, atualize e delete produtos de um banco de dados.

## Requisitos

- PHP >= 7.4 >
- Composer 1.10.7 >
- Laravel >= 7.0 >
- Banco de MySQL

## Funcionalidades

1. Listagem de Produtos: Visualize todos os produtos cadastrados.
2. Adição de Produtos: Adicione novos produtos com nome, descrição, preço, status e quantidade em estoque.
3. Edição de Produtos: Atualize as informações de produtos existentes existentes na base de dados.
4. Remoção de Produtos: Delete produtos que não existentes na base de dados.


## Instalação

1. Considerando que você já tenha o composer, artisan, mysql e php instalados em sua máquina, abra o terminal do windows 
(Prompt de Comando, PowerShell, etc) e crie um diretório com o nome bevi em um local de sua preferência. Acesse o 
diretório criado.

2. Clone este repositório:


```bash
git clone https://github.com/jonasnovello/bevi.git
```

3. Abra um terminal (Prompt de Comando, PowerShell, etc) para executar os comandos necessários para rodar o projeto.
4. Acesse pelo terminal a raiz do seu projeto. (Exemplo: C:\wamp64\www\bevi).
5. Execute o comento "composer update" para instalação das bibliotecas.
6. Execute o comando "php artisan serve" para iniciar o servidor.
7. Abra o phpmyadmin através do navegador digitando essa url http://localhost/phpmyadmin/ e crie uma nova base de dados com o 
nome "bevi".
8. Acesse novamente o terminal e execute o comando abaixo para rodar as migrations de criação da tabela products:

```bash
php artisan migrate
```
9. Agora execute o comando abaixo para executar a seeder "ProductSeeder" e popular a tabela products:

```bash
php artisan db:seed
```
## Testes do projeto

Faça o download do Postman nesse link https://www.postman.com/ e faça a instalação dele em seu computador. Caso já tenha ele instalado abra ele para realizar os testes.
Com o postman aberto clique no botão "Import" e selecione a opção "files", procure pela pasta "Postman" que está dentro da raíz do seu projeto e selecione o arquivo Bevi.postman_collection.json para realizar a importação da collection. Será criado uma collection com o nome "Bevi".

*Verifique se o servidor está em executação, caso não esteja, abra o terminal de comando e vá até a raíz do seu projeto e execute o comando:*

```
php artisan serve
```

No Postman faça os seguintes testes:

1. Dentro da Collection Bevi selecione a opção "List" e em seguida na opção "201 - Registrado com sucesso". Clique no botão "Try" para realizar o teste. O resultado do tipo JSON será exibido dentro de "Body > Pretty".
2. Dentro da Collection Bevi selecione a opção "Save" e em seguida na opção "201 - Registrado com sucesso". Clique no botão "Try" para realizar o teste. O resultado do tipo JSON será exibido dentro de "Body > Pretty".
3. Dentro da Collection Bevi selecione a opção "Update" e em seguida na opção "201 - Atualizado com sucesso". Clique no botão "Try" para realizar o teste. O resultado do tipo JSON será exibido dentro de "Body > Pretty".
4. Dentro da Collection Bevi selecione a opção "Delete" e em seguida na opção "200 - Deletado com sucesso". Clique no botão "Try" para realizar o teste. O resultado do tipo JSON será exibido dentro de "Body > Pretty".
