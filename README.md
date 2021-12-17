# Instagram Export
[![Build Status](https://github.com/vintagesucks/instagram-export/workflows/Build/badge.svg)](https://github.com/vintagesucks/instagram-export/actions) [![Dependabot](https://badgen.net/badge/Dependabot/enabled/green?icon=dependabot)](https://dependabot.com/) ![PHP](https://img.shields.io/badge/PHP-%5E8.0-blue.svg) [![All Contributors](https://img.shields.io/badge/all_contributors-2-orange.svg?style=flat-round)](#contributors)

Exports all items on an Instagram profile to JSON using [Instagram-API](https://github.com/vintagesucks/instagram-export/tree/master/packages/mgp25/instagram-php). Motivated by [this tweet](https://twitter.com/LeaVerou/status/929542539425677312) by Lea Verou.

## Prerequisites

* [PHP](https://www.php.net/) 8.0 or 8.1
* [Composer](https://getcomposer.org/)

## Setup

Clone or download this repository to get started.

Copy `.env.example` to `.env`, fill out your account details and run:

```
composer install
```

## Usage

```
php instagram export:json <username>
```

## Demo

![Demo](https://raw.githubusercontent.com/vintagesucks/instagram-export/master/example.gif)

## Contributors

Thanks goes to these wonderful people ([emoji key](https://github.com/all-contributors/all-contributors#emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore -->
| [<img src="https://avatars0.githubusercontent.com/u/13335308?v=4" width="100px;" alt="Nikolas Evers"/><br /><sub><b>Nikolas Evers</b></sub>](https://nikol.as)<br />[💻](https://github.com/vintagesucks/instagram-export/commits?author=vintagesucks "Code") [🚧](#maintenance-vintagesucks "Maintenance") | [<img src="https://avatars1.githubusercontent.com/u/175836?v=4" width="100px;" alt="Lea Verou"/><br /><sub><b>Lea Verou</b></sub>](http://lea.verou.me)<br />[🐛](https://github.com/vintagesucks/instagram-export/issues?q=author%3ALeaVerou "Bug reports") [💻](https://github.com/vintagesucks/instagram-export/commits?author=LeaVerou "Code") [🤔](#ideas-LeaVerou "Ideas, Planning, & Feedback") |
| :---: | :---: |
<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://github.com/all-contributors/all-contributors) specification. Contributions of any kind welcome!
