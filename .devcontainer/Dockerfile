ARG VARIANT=7.3
FROM mcr.microsoft.com/vscode/devcontainers/php:${VARIANT}

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions bcmath
