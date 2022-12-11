# Teste Backend API Digimon, DEZ/2022

Repositório destinado ao teste técnico para vaga de Desenvolvedor Backend.


## A aplicação
A aplicação foi desenvolvida utilizando Laravel 9 e Docker.

- As informações sobre o teste podem ser encontradas na raiz, no arquivo 'Teste desenvolvimento.pdf';
- O arquivo .env foi mantido no repositório para facilitar a configuração da aplicação de teste.

Siga as instruções abaixo para conseguir configurar e testar.


## Como configurar
1. Baixe o repositório através de seu terminal na pasta que desejar:
```
git clone https://github.com/Digo8875/test_digimon_api_dez_2022.git
```

2. Acesse a pasta da aplicação, de acordo com o caminho em seu diretório:
```
cd <caminho_do_computador>/test_digimon_api_dez_2022/app_digimon
```

3. Execute o comando Docker para gerar as imagens necessárias e subir o container:
```
docker-compose up --build
```

* Agora a aplicação está configurada e pronta para ser testada

* Caso tenha o PHP 8.1 no computador e não queita subir um container Docker, poderá executar na pasta /app_digimon o comando abaixo.
Assim, um servidor do próprio Laravel será iniciado no lugar do servidor Nginx no Docker
!! Note que a porta para a aplicação também mudará, onde ao invés de localhost:8989 (Nginx) você deverá acessar localhost:8000 (Laravel)
```
php artisan serve
```


## Como acessar a aplicação
1. Devido aos endpoints serem todos GET, você conseguirá acessar a aplicação através do próprio browser, com a porta do servidor Nginx e o basepath da API:
```
localhost:8989/api
```

2. Endpoints

| Verbo  | Endpoint  | Exemplo  |
| ------------- | ------------- | ------------- |
| GET  | /digimons  | localhost:8989/api/digimons  |
| GET  | /digimons/level/{level}  | localhost:8989/api/digimons/level/{level}  |
| GET  | /digimon/name/{name}  | localhost:8989/api/digimon/name/{name}  |


## A aplicação
Com tudo configurado você poderá acessar os endpoints, seja por browser (todos GET) ou alguma ferramenta para realizar requisições Http, como o Postman.


## Análise Backend
Para uma análise mais detalhada, você poderá observar os seguintes arquivos no diretório do Laravel:

- app_digimon
    - app
        - Http 
            - Controllers
                - DigimonApiController.php
        - HttpClient
            - DigimonApiHttpClient.php
    - routes
        - api.php