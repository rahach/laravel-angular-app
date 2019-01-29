FROM nginx:1.10

ADD nginx.conf /etc/nginx/conf.d/default.conf

RUN apt-get update && apt-get install nano
