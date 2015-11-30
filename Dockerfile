FROM tutum/apache-php:latest
MAINTAINER Gergo Ertli <egergo@gmail.com>

ENV WORDPRESS_VER 4.3.1
ENV SITEORIGIN_PANELS_VER 2.2.1
ENV SITEORIGIN_WIDGETS_VER 1.5.4
ENV ARCADE_BASIC_VER 1.0.6
ENV AZURE_STORAGE_VER 2.2

WORKDIR /
RUN apt-get update && \
    apt-get -yq install mysql-client curl unzip && \
    rm -rf /app && \
    curl -0L http://wordpress.org/wordpress-${WORDPRESS_VER}.tar.gz | tar zxv && \
    mv /wordpress /app && \
    rm -rf /app/wp-content/plugins/* && \
    rm -rf /app/wp-content/themes/* && \
    rm -rf /var/lib/apt/lists/* && \
    sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf && \
    a2enmod rewrite

RUN cd /app/wp-content/plugins && \
    curl -otmp.zip https://downloads.wordpress.org/plugin/siteorigin-panels.${SITEORIGIN_PANELS_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip && \
    curl -otmp.zip https://downloads.wordpress.org/plugin/so-widgets-bundle.${SITEORIGIN_WIDGETS_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip && \
    curl -otmp.zip https://downloads.wordpress.org/plugin/windows-azure-storage.${AZURE_STORAGE_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip && \
    cd /app/wp-content/themes && \
    curl -otmp.zip https://downloads.wordpress.org/theme/arcade-basic.${ARCADE_BASIC_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip

COPY wp-config.php /app/wp-config.php
COPY daheim /app/wp-content/themes/daheim
COPY run.sh /run.sh
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
