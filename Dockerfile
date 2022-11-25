FROM php:8.1.12-cli-bullseye

RUN apt-get update && apt-get install git unzip -y

COPY --from=composer:2.4.4 /usr/bin/composer /usr/bin/composer
ENV PATH="${PATH}:/var/www/.composer/vendor/bin"

ENTRYPOINT ["tail", "-f", "/dev/null"]
