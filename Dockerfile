FROM php:8.3-cli-alpine

RUN apk add gcc g++ make cmake gfortran libffi-dev openssl-dev libtool

WORKDIR /srv

