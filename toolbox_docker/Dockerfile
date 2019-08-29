FROM debian:unstable-slim 
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
     #     && cd /root/ \
     #&& mv /root/ssh /roo/t.ssh \
     #&& mv .ssh /root/ \
     && chmod 700 /root/.ssh \
     && chmod 644 /root/.ssh/authorized_keys \
     #&& chmod +x /root/start.sh \
     &&  useradd -m -s /bin/bash userboy \
     && usermod -aG  sudo userboy \
     && echo "%sudo  ALL=(ALL:ALL) NOPASSWD:ALL" >> /etc/sudoers \
     && cp -r /root/start.sh /home/userboy/ \
     && cp -r  /root/.ssh /home/userboy/ \
     && chown userboy:userboy /home/userboy/start.sh \
     && chown userboy:userboy -R /home/userboy/.ssh \
     && mkdir /home/userboy/toolbox-challenge
EXPOSE 22
EXPOSE 8080
EXPOSE 80
COPY toolbox-challenge /home/userboy/toolbox-challenge
RUN cp /root/start.sh /usr/local/bin/start.sh && apt-get install -y bash-completion \
      vim \
      tmux \
      curl \
      wget 
USER userboy
CMD  [ "start.sh" ] 
