FROM registry.access.redhat.com/ubi8/ubi:8.0

MAINTAINER Red Hat Training <training@redhat.com>

# DocumentRoot for Apache
ENV DOCROOT=/var/www/html 

RUN   yum install -y --nodocs --disableplugin=subscription-manager httpd 
RUN   yum clean all --disableplugin=subscription-manager -y
RUN   echo "Hello from benk!" > ${DOCROOT}/index.html

# Allows child images to inject their own content into DocumentRoot
RUN echo "print('Hello Benny <3!')" > lori.py

EXPOSE 80

# This stuff is needed to ensure a clean start
RUN rm -rf /run/httpd && mkdir /run/httpd

# Run as the root user
USER root

# Launch httpd
CMD /usr/sbin/httpd -DFOREGROUND
