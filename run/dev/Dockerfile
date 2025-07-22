ARG os=9.6.20250531
ARG image=devbase
FROM aursu/php81build:${os}-${image}

RUN curl -sSL https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
