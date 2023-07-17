FROM rogerdz/multi-php-cli:latest

MAINTAINER phanvanbao95@hotmail.com

USER root

#Install ssh
RUN apt-get update && apt-get install -y openssh-server  \
    && systemctl enable ssh.service \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY entrypoint.sh /entrypoint.sh
EXPOSE 22

ENTRYPOINT ["/entrypoint.sh"]

CMD ["bash"]

USER dev
