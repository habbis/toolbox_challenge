#FROM debian:unstable-slim
FROM ubuntu:xenial
# Tell debconf to run in non-interactive mode
ENV DEBIAN_FRONTEND noninteractive
RUN mkdir -p /root/.ssh
COPY .ssh/  /root/.ssh/
COPY start.sh /root/
RUN apt-get  update -y  \ 
     && apt-get upgrade -y \
     && apt-get install -y openssh-server \
     git \
     sudo \
     php \
     php-sqlite3 \
     php-dev \
     #php-xde \
     php-xdebug \
     #     && cd /root/ \
     #&& mv /root/ssh /roo/t.ssh \
     #&& mv .ssh /root/ \
     && chmod 700 /root/.ssh \
     && chmod 644 /root/.ssh/authorized_keys \
     #&& chmod +x /root/start.sh \
     &&  useradd -m -s /bin/bash user \
     && usermod -aG  sudo user \
     && echo "%sudo  ALL=(ALL:ALL) NOPASSWD:ALL" >> /etc/sudoers \
     && cp -r /root/start.sh /home/user/ \
     && cp -r  /root/.ssh /home/user/ \
     && chown user:user /home/user/start.sh \
     && chown user:user -R /home/user/.ssh \
     && mkdir /home/user/toolbox-challenge
EXPOSE 22
EXPOSE 8080
EXPOSE 80
VOLUME ["/home/user/toolbox-challenge"]
VOLUME ["/home/user/dotfiles"]
COPY  dotfiles  /home/user/dotfiles
COPY  toolbox-challenge  /home/user/toolbox-challenge
RUN cp /root/start.sh /usr/local/bin/start.sh && apt-get install -y bash-completion \
      vim \
      tmux \
      curl \
      wget 
USER user
CMD  [ "start.sh" ] 
