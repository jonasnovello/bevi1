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
