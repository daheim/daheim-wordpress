FROM tutum/apache-php:latest
MAINTAINER Gergo Ertli <egergo@gmail.com>

ENV WORDPRESS_VER 4.4.1
ENV SITEORIGIN_PANELS_VER 2.2.2
ENV SITEORIGIN_WIDGETS_VER 1.5.6
ENV ARCADE_BASIC_VER 1.0.6
ENV AZURE_STORAGE_VER 2.2
ENV SHORTCODES_ULTIMATE_VER 4.9.9

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
    a2enmod rewrite && \
    chown -R root:root /app

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
    curl -otmp.zip https://downloads.wordpress.org/plugin/shortcodes-ultimate.${SHORTCODES_ULTIMATE_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip && \
    cd /app/wp-content/themes && \
    curl -otmp.zip https://downloads.wordpress.org/theme/arcade-basic.${ARCADE_BASIC_VER}.zip && \
    unzip tmp.zip && \
    rm tmp.zip

RUN rm -rf /etc/apache2/sites-enabled/000-default.conf
COPY wordpress.conf /etc/apache2/sites-enabled/

COPY wp-config.php /app/wp-config.php
COPY .htaccess /app/
COPY run.sh /run.sh
COPY daheim-google-analytics.php /app/wp-content/plugins/
COPY daheim /app/wp-content/themes/daheim

RUN chmod +x /run.sh

# Expose environment variables
ENV DB_HOST **LinkMe**
ENV DB_PORT **LinkMe**
ENV DB_NAME wordpress
ENV DB_USER admin
ENV DB_PASS **ChangeMe**

EXPOSE 80
CMD ["/run.sh"]
