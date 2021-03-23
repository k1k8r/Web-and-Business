FROM ubuntu:16.04
RUN apt -y update
RUN apt -y install apache2
RUN apt -y install git
RUN rm /var/www/html/index.html
RUN git clone https://github.com/k1k8r/Web-and-Business.git /var/www/html
CMD ["/usr/sbin/apache2ctl" , "-DFOREGROUND"]
EXPOSE 80
