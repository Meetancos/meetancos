# Projeto Meetancos

## Pré Requisitos

- docker (19+)

- docker-compose (1.25+)

## Serviços

- Site

### Site

Tecnologias: PHP

Descrição: Site do grupo

## Como Iniciar

1) Clonar o projeto do github: 

`git clone git@github.com:Meetancos/meetancos.git`

2) Entra na pasta: 

`cd meetancos`

2) Criar os arquivos  de .env:  

- `cp .env.example .env`

- `cp site/.env.example site/.env`

3) Fazer build no docker do projeto:
 
 `docker-compose build` 

4) Subir no docker o projeto: 

`docker-compose up -d`

## Como Acessar

Site - https://localhost:4455
    
## Como parar o projeto

Execute `docker-compose down`
