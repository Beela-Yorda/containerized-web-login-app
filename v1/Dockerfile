FROM httpd:2.4

# Set the working directory
WORKDIR /usr/local/apache2/htdocs/Kali GRP 2 web-app/v1

# Copy the contents of your web application to the container
COPY ./Kali GRP 2 web-app /

# Optionally, set an environment variable
ENV USER Docker-User

# Start the Apache server with the specified configuration
CMD ["httpd-foreground"]

