# docker-lemp

A docker container running Nginx, PHP-FPM 8, Composer, MySQL and PHPMyAdmin.

## Clone the repo

    git clone https://github.com/ahmetkamis/docker-lemp.git
    
## Run the application

    cd docker-lemp
    cd docker
    docker-compose up -d
    
## Hosts

    Web => http://localhost:8000/
    PMA =>  http://localhost:8080/
    MySQL Host => mysqldb
    To connect container MySQL from the Host, use IP : 127.0.0.1 / Port : 8989


## Useful Commands
    docker exec -it akcontainer_php /bin/bash
    
