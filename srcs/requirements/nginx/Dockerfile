FROM debian:bullseye

RUN apt-get update && apt-get install -y sudo nginx openssl mariadb-client

RUN openssl genpkey -algorithm RSA -out /etc/nginx/mel-amar.key


RUN openssl req -new -x509 -key /etc/nginx/mel-amar.key -out /etc/nginx/mel-amar.crt -days \
365 -subj "/C=GR/ST=Berlin/L=Berlin/O=DEV LTD/OU=Data/CN=mel-amar@42.fr/emailAddress=mel-amar@42.fr"


COPY nginx.conf /etc/nginx/sites-available/default

CMD ["nginx", "-g", "daemon off;"]
