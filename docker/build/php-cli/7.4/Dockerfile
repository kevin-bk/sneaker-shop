
FROM rogerdz/php-fpm:7.4-cli

#Install ssh
USER root
RUN apt-get update && apt-get install -y openssh-server  \
    && systemctl enable ssh.service \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

EXPOSE 22
COPY docker-entrypoint-cli.sh /docker-custom-entrypoint.sh
RUN chmod +x /docker-custom-entrypoint.sh
ENTRYPOINT ["/docker-custom-entrypoint.sh"]


#RUN deluser dev
#RUN useradd -ms /bin/bash jekyllskitchen \
#        && echo 'jekyllskitchen  ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers

CMD ["bash"]

USER dev