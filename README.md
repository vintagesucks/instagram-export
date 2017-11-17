# Instagram Export [![Build Status](https://travis-ci.org/vintagesucks/instagram-export.svg?branch=master)](https://travis-ci.com/vintagesucks/instagram-export)

Exports all items on an Instagram profile to JSON using [Instagram-API](https://github.com/mgp25/Instagram-API). Motivated by [this tweet](https://twitter.com/LeaVerou/status/929542539425677312) by Lea Verou.

## Usage

Copy `config.sample.php` to `config.php`, fill out your details and run:

```
composer install --no-dev
```

```
php export.php
```