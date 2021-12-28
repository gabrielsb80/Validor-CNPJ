# Validor CNPJ

Um simples sistema que faz o cálculo de validação do cnpj e retorna se o cnpj passado é valído ou não

### Tecnologias Usada

- PHP
- Composer


### Composer
Para a aplicação funcionar, é necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes.

Para rodar o composer, basta acessar a pasta do projeto e executar o comando abaixo em seu terminal:
```
composer install
```
Após essa execução uma pasta com o nome vendor será criada na raiz do projeto, após isso coloque o seguinte código no arquivo index.php:


```
require __DIR__."/vendor/autoload.php"
```
