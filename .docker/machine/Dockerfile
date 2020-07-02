FROM php:7.4-cli

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get install -y git zip unzip && \
    apt-get -y autoremove && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /app

RUN curl https://get.symfony.com/cli/installer > /tmp/installer.sh && bash /tmp/installer.sh
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony