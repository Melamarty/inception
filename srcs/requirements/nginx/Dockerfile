FROM debian:buster

RUN apt-get update -y && apt-get install -y nginx openssl

expose 443

COPY ./conf/nginx.conf /etc/nginx/sites-enabled/default
COPY ./tools/nginx_script.sh /var/www

RUN chmod +x /var/www/nginx_script.sh

ENTRYPOINT /var/www/nginx_script.sh

CMD ["nginx", "-g", "daemon off;"]

# -p 443:443