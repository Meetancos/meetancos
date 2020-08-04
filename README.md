# Projeto Meetancos

## Pré Requisitos

- docker (19+)

- docker-compose (1.25+)

*Caso não consiga rodar o docker sem ser root execute*

`sudo usermod -aG docker ${USER}`

## Serviços

- Site

### Site

Tecnologias: PHP

Descrição: Site do grupo

## Como Iniciar

1. Clonar o projeto do github: 

`git clone git@github.com:Meetancos/meetancos.git`

2. Entra na pasta: 

`cd meetancos`

3. Criar os arquivos  de .env:  

- `cp .env.example .env`

- `cp site/.env.example site/.env`

4. Fazer build no docker do projeto:
 
 `docker-compose build` 

5. Subir no docker o projeto: 

`docker-compose up -d`

6. Instalar a ferramenta composer caso ainda não a tenha instalado e atualizar as dependências:

**Instalação**
- `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
- `php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Instalador válido, prossiga!'; } else { echo 'O Instalador está corrompido, tente baixá-lo novamente'; unlink('composer-setup.php'); } echo PHP_EOL;"`
- `php composer-setup.php`
- `php -r "unlink('composer-setup.php');"`
- `sudo mv composer.phar /usr/local/bin/composer`

**Atualizar os pacotes**
- `cd site`
- `composer update -o`

## Como Acessar

Site - https://localhost:4455
    
## Como parar o projeto

Execute `docker-compose down`
