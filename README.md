<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Habitto

**Habitto** é um sistema de hábitos onde a pessoa pode registrar seus hábitos diários e acompanhar sua rotina de forma simples e organizada.

## Sobre o projeto

A ideia do Habitto é ajudar o usuário a criar e manter bons hábitos. Com ele, é possível:

- Cadastrar os hábitos que deseja acompanhar.
- Registrar, dia após dia, se cada hábito foi cumprido.
- Acompanhar o histórico e a evolução da própria rotina.

## Tecnologias

- [Laravel](https://laravel.com) (PHP)
- Banco de dados (MySQL)
- HTML e CSS no frontend

## Como executar o projeto

```bash
# Clone o repositório
git clone <url-do-repositorio>
cd habitto

# Instale as dependências
composer install

# Configure o ambiente
cp .env.example .env
php artisan key:generate

# Execute as migrations
php artisan migrate

# Inicie o servidor local
composer run dev
```

Depois, acesse `http://127.0.0.1:8000/` no navegador.

---

## Sobre o Laravel

O Laravel é um framework de aplicações web com sintaxe expressiva e elegante. Ele facilita tarefas comuns em projetos web, como:

- [Sistema de rotas simples e rápido](https://laravel.com/docs/routing).
- [Container de injeção de dependência poderoso](https://laravel.com/docs/container).
- Múltiplos back-ends para armazenamento de [sessão](https://laravel.com/docs/session) e [cache](https://laravel.com/docs/cache).
- [ORM de banco de dados](https://laravel.com/docs/eloquent) expressivo e intuitivo.
- [Migrations](https://laravel.com/docs/migrations) independentes de banco de dados.
- [Processamento robusto de jobs em segundo plano](https://laravel.com/docs/queues).
- [Broadcast de eventos em tempo real](https://laravel.com/docs/broadcasting).

## Aprendendo Laravel

O Laravel possui a [documentação](https://laravel.com/docs) mais completa entre os frameworks web modernos, além de uma ótima biblioteca de vídeos no [Laracasts](https://laracasts.com).

## Contribuindo

Obrigado por considerar contribuir! O guia de contribuição do Laravel está na [documentação](https://laravel.com/docs/contributions).

## Licença

O framework Laravel é um software open-source licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).