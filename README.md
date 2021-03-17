## About this project
This project is created as a part of the "API Development for Beginners" workshop. It is a very basic setup of an API
built in Laravel, with only a few basic setups done. During the workshop, this API will be worked out into a complete 
working system.

## Setup
To get the API running on your system, you'll need to have Docker running, and preferably a Git client installed. If
you have no access to a Git client, download the ZIP file containing the source code.

To clone the repository, run the following command: `git clone https://github.com/ypho/library.git`

After that, the only thing you have to do is building the Docker containers with: `docker-compose up`

When the containers are up, open a new terminal tab, and run the following commands:
- Installing all composer packages: `docker-compose exec api composer install`
- Creating a new database: ` docker-compose exec api php artisan migrate:fresh`
- Seeding the database: `docker-compose exec api php artisan db:seed`
  
These commands are executed from within the Docker container, so it is not necessary to have PHP or Composer installed 
on your host system.
  
### API
When all Docker containers are built and running, the website and API can be found at http://127.0.0.1:8081.

### Documentation
The specification of the API are defined in a yaml file, located at `resources/spec/apispec.yaml`. We use ReDoc to 
generate a full documentation of the API, based on this specification.

When all Docker containers are built and running, the apidocs can be found at: http://127.0.0.1:8080/

### Mock server
For testing the API, we use Prism to create a mock server of the API.

When all Docker containers are built and running, the mockserver can be found at http://127.0.0.1:3100
