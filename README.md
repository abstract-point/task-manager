# Task Manager
###  Statuses
[![Actions Status](https://github.com/abstract-point/php-project-57/actions/workflows/main-check.yml/badge.svg)](https://github.com/abstract-point/php-project-57/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/1c948fdeaf5cba6c5101/maintainability)](https://codeclimate.com/github/abstract-point/php-project-57/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/1c948fdeaf5cba6c5101/test_coverage)](https://codeclimate.com/github/abstract-point/php-project-57/test_coverage)

## Description

A simple task manager, designed for efficient planning and task management, supported user registration and authorization

### System requires for local development
- [PHP](https://www.php.net/) ^8.1
- [Composer](https://getcomposer.org/download/)
- Node.js (v16+) & NPM (6+)
- SQLite

### Local setup
```shell
make setup # set up the project
make start # start server at http://127.0.0.1:8000
make test # ru tests
```
After starting the server, you can access the index page of the task manager by navigating to the following URL in your web browser:
```text
http://127.0.0.1:8000
```
### Production
The production version of the application is deployed and can be accessed at the following URL:
```text
https://task-manager.ivandev.pro
```
[CLICK](https://ivandev.pro/task-manager)
