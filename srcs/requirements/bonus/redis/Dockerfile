FROM debian:buster

RUN apt-get update -y && apt install -y redis-server -y
RUN echo "maxmemory 256mb" >> /etc/redis/redis.conf && echo "maxmemory-policy allkeys-lru" >> /etc/redis/redis.conf

CMD ["redis-server", "--protected-mode", "no"]