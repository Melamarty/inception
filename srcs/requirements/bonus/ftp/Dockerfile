FROM debian:buster

RUN apt update -y

RUN apt install -y vsftpd

COPY ./tools/script.sh /

CMD ["script.sh"]