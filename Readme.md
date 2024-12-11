# CRUD Laravel Application (Containerized)


This Project is a Laravel CRUD Application packaged with Docker . 


## Pre-Requisites

--Docker version (v27.3.1) (Docker Engine version)
--Docker Compose version (v2.29.7-desktop.1)

## How to Run 
1 - Clone the Repository : 

          git clone https://github.com/UmerJaved-spacedome/Laravel-CRUDAppusingDocker.git
          cd Laravel-CRUDAppusingDocker

2 - Build And Run the Containers : 

          docker compose up --build 

3 - Access the Application in the Browser : 

         Web application: http://localhost:8080 or localhost:8080/{{Desired Route as out web.php is set to Perform Routing }}    
                         ### Refer to the routes/web.php in the project directory to check the routes and perform testing in the container. 

         phpMyAdmin: http://localhost:8001


Final Recommendations and Practices : 
            Pull my successful built image : 
                umerjaved/laravelcrudapp
                               

IF Queries Exist please feel free to reach out to me at 
      amlazydev.i@gmail.com
      
