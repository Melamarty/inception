FROM debian:buster

RUN apt-get update -y && apt-get install -y php7.3 php-mysql php-fpm wget sendmail

EPOSE 9000

COPY ./conf/wp.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

RUN chmod +x /var/www/wp_script.sh

ENTRYPOINT ["/var/www/wp_script.sh"]

CMD ["/usr/sbon/php-fpm7.3", "--nodaemonize"]