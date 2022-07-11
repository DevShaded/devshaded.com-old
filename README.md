<p><a href="https://devshaded.com" target="_blank"><img src="./docs/images/logo.png" width="200"></a></p>

## About DevShaded.com
This project is the official portfolio for [DevShaded](https://github.com/DevShaded). This project has a collection of useful things to know about DevShaded. It also has project's that are related to DevShaded, and it also hosts the official website for my Discord bot [Bob Watts](https://github.com/DevShaded/Bob-Watts).

## Setting up the project
Here is the section on how to set up the project, and run it properly.

### Requirements
This projects requires a few things to have to be installed on your computer.
```
MYSQL Server
Node.js v16x (or higher)
PM2 (Node Process Manager)
```

### Installing dependencies
To install the dependencies, run the following commands:
```bash
composer install
```

```bash
npm install
```

### Environment variables
To set up the environment variables, we need to follow these simple steps:
1. Copy the contents of the `.env.example`
2. Create a new file called `.env`, and paste the contents of the `.env.example` into it.
3. Set up the database information in the `.env` file.
4. Create a new database with `utf8mb4_unicode_ci` as a collation.
5. Run `php artisan key:generate` to generate a new session key for the application.

**Do not ever upload the `.env` file as it contains private credentials.**

### Running the migration files and database seeds
To run the migration files and database seeds, run the following commands:
```bash
php artisan migrate
```

```bash
php artisan db:seed
```

## Running the application
### PRODUCTION
To run the application in production mode, run the following commands:
```bash
npm run build
```

Since we are using ssr (server side rendering), we need to run the following command in the background:
```bash
node /storage/ssr/ssr.js
```
Or we can use this command instead with `pm2`:
```bash
pm2 start /storage/ssr/ssr.js --watch
```

### DEVELOPMENT
To run the application in development mode, run the following commands:
```bash
npm run build
```

Since we are using ssr (server side rendering), we need to run the following command in the background:
```bash
node /storage/ssr/ssr.js
```

Then we need to run the dev command:
```bash
npm run dev
```

And for the last command we need to run the following command:
```bash
php artisan serve
```
