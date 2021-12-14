# docker_lemp

A docker container running Nginx, PHP-FPM 8, Composer, MySQL and PHPMyAdmin.

## Clone the repo

    git clone https://github.com/ahmetkamis/docker_lemp.git
    
## Run the application

    cd docker_lemp
    cd docker
    docker-compose up -d
    
## Hosts

    Web => http://localhost:8000/
    PMA =>  http://localhost:8080/
    MySQL Host => mysqldb


## Useful Commands
    docker exec -it akcontainer_php /bin/bash
    