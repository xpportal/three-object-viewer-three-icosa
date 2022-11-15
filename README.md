# three-object-viewer-three-icosa

[![Built With Plugin Machine](https://img.shields.io/badge/Built%20With-Plugin%20Machine-lightgrey)](https://pluginmachine.com)

## Installation - NOTE THIS README IS FOR LOCAL DEVELOPMENT. For instructions about installing the plugin visit: https://3ov.xyz/openbrush-support/ 

- Git clone:
    - `git clone git@github.com:antpb/three-object-viewer-three-icosa.git`
- Install javascript dependencies
    - `yarn`


## Local Development Environment

A [docker-compose](https://docs.docker.com/samples/wordpress/)-based local development environment is provided.

- Start server
    - `docker-compose up -d`
- Acess Site
    - [http://localhost:6040](http://localhost:6040)
- WP CLI
    - Run any WP CLI command in container:
        - `docker-compose run wpcli wp ...`
    - Setup site with WP CLI
        - `docker-compose run wpcli wp core install --url=http://localhost:6040 --title="three-object-viewer-three-icosa" --admin_user=admin0 --admin_email=something@example.com`
        - `docker-compose run wpcli wp user create admin admin@example.com --role=administrator --user_pass=pass`


There is a special phpunit container for running WordPress tests, with WordPress and MySQL configured.

- Enter container
    - `docker-compose run phpunit`
- Composer install
    - `composer install`
- Test
    - `composer test:wordpress`

