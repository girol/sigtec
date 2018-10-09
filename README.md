# SIGTEC

## Sistema de Gestão de Chamados técnicos

Refatoração do antigo sistema feito em Codeigniter. A sua primeira versão se encontra aqui: [SisDF](https://github.com/df-ffclrp/SisDF).

Como o framework não recebe atualizações a um bom tempo, foi decidida a migração para o Laravel. Utilizada a versão **5.5** do framework pelo motivo de ser LTS e já utilizar o PHP nativo do servidor de produção.

## Informações de Deploy

Necessário `composer` instalado na máquina e PHP 7.0+

Rodar:

```bash
composer install
```

Faça deploy dos assets do AdminLTE utilizando o wrapper:

```bash
php artisan deploy:assets
```