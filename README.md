# REST-API - Docker

REST-API Backend (Symfony4 + FOSREST-Bundle).  
Communication goes via JSON.  

Development-Enviroment: Docker. 
  

## SET UP THE PROJECT (Tested on Ubuntu(Linux))

1. build the containers:  
  
  run docker-compose up  

2. wait for the end of build-process 
  
3. if database container is fully build up:  
  1. go into the root of the local repo folder and run following commands:
  2. chmod +x setup.sh
  3. ./setup.sh  
 
4. your project should be available at these url:  
  
  127.0.3.2  - docker-backend.test  



## Use 

1. If you Change the Settings (docker-compose.yaml, setup.sh etc.), run:  
   
   docker-compose restart

2. Have a break in the development:
  
    //root of homestead 
    
    //stop box  
    vagrant halt
    
    //continue developing  
    vagrant up  

##3 put symfony4 backend into folder ./backend

stop:
docker-compose stop

Continue:
docker-compose start


delete:
docker-compose down
cleandocker.sh