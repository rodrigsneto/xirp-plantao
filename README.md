# XIRP-Plantão: Sistema de Gerenciamento de Plantões

O  **XIRP-Plantão**  é um sistema desenvolvido para facilitar o gerenciamento da lista de plantões e plantonistas em uma empresa. Ele foi criado com o objetivo de tornar o processo mensal de escalas de plantão mais eficiente e organizado. Seu projeto é construído em  **PHP**, utilizando o framework  **Laravel**, e o banco de dados **MySQL**.

Você pode visualizar o sistema hospedado em um servidor de hospedagem compartilhada aqui neste link abaixo.
[xirp-plantao.rodrigsneto.com](https://xirp-plantao.rodrigsneto.com).

## Funcionalidades Principais

1.  **Cadastro de Plantonistas:**

    -   O sistema permite o cadastro de plantonistas, incluindo informações como nome, cargo, setor e outras relevantes.
    -   Os dados dos plantonistas são armazenados no banco de dados para fácil acesso e gerenciamento.
2.  **Criação de Escalas de Plantão:**
    
    -   Os administradores podem criar escalas de plantão mensais.
    -   As escalas incluem informações sobre os dias de plantão, plantonistas designados e quaisquer observações.
3.  **Atendimento Interno e Externo:**
    
    -   Cada plantão pode ser designado um “plantonista interno” e um “plantonista externo”.
    -   O atendimento interno é realizado pelos plantonistas internos, enquanto o atendimento externo é feito pelos plantonistas externos.
4.  **Cadastro de Atendimentos Externos:**
    
    -   Os plantonistas internos registram os atendimentos externos realizados durante os plantões pelos antendentes externos.
    -   Cada atendimento externo inclui informações como cliente atendido, responsável pela empresa, contato e assunto da visita técnica.
5.  **Visualização e Edição de Escalas:**
    
    -   Os usuários podem visualizar as escalas de plantão em formato de lista.
    -   Os administradores podem editar as escalas, adicionar ou remover plantonistas conforme necessário.
6.  **Notificações e Lembretes:**
    
    -   O sistema envia notificações automáticas para os plantonistas sobre seus próximos plantões.
    -   Lembretes podem ser configurados para evitar esquecimentos ou conflitos de horários.

## Requisitos do Sistema

-   **PHP 8.2 ou superior**
-   **Laravel 11.2**
-   **MySQL 8.2 ou superior**

## Instalação

1.  Clone o repositório do GitHub:
    
    ```
    git clone https://github.com/rodrigsneto/xirp-plantao.git
    
    ```
    
2.  Instale as dependências do Laravel:
    
    ```
    composer install
    
    ```
    
3.  Configure o arquivo  `.env`  com as informações do seu banco de dados:
    
    ```
    DB_CONNECTION=mysql
    DB_HOST=seu-host
    DB_PORT=3306
    DB_DATABASE=seu-banco-de-dados
    DB_USERNAME=seu-usuario
    DB_PASSWORD=sua-senha
    
    ```
    
4.  Execute as migrações para criar as tabelas no banco de dados:
    
    ```
    php artisan migrate
    
    ```
    
5.  Inicie o servidor local:
    
    ```
    php artisan serve
    
    ```
    
6.  Acesse o sistema em http://localhost:8000
    

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues, enviar pull requests ou sugerir melhorias.

----------

**XIRP-Plantão**  é um projeto desenvolvido por Rodrigues Neto.

🌱 Esperamos que o sistema facilite o gerenciamento de plantões na sua empresa! Caso precise de ajuda ou tenha alguma dúvida, não hesite em entrar em contato. 😊