FROM docker.elastic.co/elasticsearch/elasticsearch:7.6.2

MAINTAINER rogerdz88@hotmail.com

RUN bin/elasticsearch-plugin install -b analysis-icu \
    && bin/elasticsearch-plugin install -b analysis-phonetic