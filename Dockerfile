FROM php
RUN docker-php-ext-install mysqli

WORKDIR /app
ADD . ./

EXPOSE 8888
CMD [ "-S", "0.0.0.0:8888" ]