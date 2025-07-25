ARG os=10.0.20250606
ARG image=devbase
FROM aursu/php81build:${os}-${image}

RUN curl -sSL https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
