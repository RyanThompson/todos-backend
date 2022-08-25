## Introduction

A simple todos application backend powered by the [Streams API](https://streams.dev/docs/api/introduction).

### Frontend Options

Besides the Blade front-end that is included, you may also be interested in:

- [Todos Frontend (React)](https://github.com/laravel-streams/todos-react-app)

## Getting Started

- Clone this repository locally.
- Run `composer install` within the project.
- Run `cp .env.example .env` and adjust as needed.
- Run `php artisan key:generate` to secure your install.
- Use `php artisan serve` to start your local server.

### Your First Todo

The API is now ready to use:

```curl
curl --location --request POST 'http://127.0.0.1:8000/api/streams/todos/entries' \
--header 'Content-Type: application/json' \
--data-raw '{
    "title": "Your first todo!",
    "description": "Remember to do the one thing."
}'
```

## The Basics

This backend uses a single `todos` stream configured to use flat-file JSON data by default.

The stream definition and the corresponding data can be found in the `/streams` directory.

### Committing Data

To version control your data, delete the `/streams/data/.gitignore` file.

### Using A Laravel Database

To use a Laravel supported database first update the stream configuration:

```json
// streams/todos.json
{
    "config": {
        "source": {
            "type": "database",
            "table": "todos"
        }
    }
}
```

Then, run the database migration:

```bash
php artisan migrate --path=database/migrations
```

### Other Storage Options

You may choose any supported [source adapter](https://streams.dev/docs/core/sources) for your data storage.
