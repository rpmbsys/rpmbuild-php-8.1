ARG os=10.1.20251126
ARG image=devbase
FROM ghcr.io/rpmbsys/php81build:${os}-${image}

LABEL org.opencontainers.image.source=https://github.com/rpmbsys/rpmbuild-php-8.1

RUN curl -sSL https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
