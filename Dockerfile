FROM tutum/apache-php:latest
MAINTAINER Gergo Ertli <egergo@gmail.com>

ENV WORDPRESS_VER 4.3.1
ENV SITEORIGIN_PANELS_VER 2.2.1
ENV SITEORIGIN_WIDGETS_VER 1.5.4
ENV ARCADE_BASIC_VER 1.0.6

WORKDIR /
RUN apt-get update && \
    apt-get -yq install mysql-client curl unzip && \
    rm -rf /app && \
    curl -0L http://wordpress.org/wordpress-${WORDPRESS_VER}.tar.gz | tar zxv && \
    mv /wordpress /app && \
    rm -rf /app/wp-content/plugins/* && \
    rm -rf /app/wp-content/themes/* && \
    rm -rf /var/lib/apt/lists/*

RUN sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf
RUN a2enmod rewrite
ADD wp-config.php /app/wp-config.php

WORKDIR /app/wp-content/plugins
RUN curl -otmp.zip https://downloads.wordpress.org/plugin/siteorigin-panels.${SITEORIGIN_PANELS_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip

WORKDIR /app/wp-content/plugins
RUN curl -otmp.zip https://downloads.wordpress.org/plugin/so-widgets-bundle.${SITEORIGIN_WIDGETS_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip

WORKDIR /app/wp-content/themes
RUN curl -otmp.zip https://downloads.wordpress.org/theme/arcade-basic.${ARCADE_BASIC_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip

COPY daheim /app/wp-content/themes/daheim

WORKDIR /
ADD run.sh /run.sh
RUN chmod +x /*.sh

# Expose environment variables
ENV DB_HOST **LinkMe**
ENV DB_PORT **LinkMe**
ENV DB_NAME wordpress
ENV DB_USER admin
ENV DB_PASS **ChangeMe**

EXPOSE 80
VOLUME ["/app/wp-content/uploads"]
CMD ["/run.sh"]
