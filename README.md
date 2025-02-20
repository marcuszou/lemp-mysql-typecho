# Dockerize Nginx, MariaDB and PHP for Projects

by Marcus Zou | 14 Feb 2025 | 3 minutes Reading - 20 minutes Mimicking



## Intro

It's been a while since I decided to migrate my Blog from [LAMP](https://www.ibm.com/think/topics/lamp-stack)+[WordPress](https://www.ibm.com/think/topics/lamp-stack) to [LEMP](https://www.geeksforgeeks.org/what-is-lemp-stack/)+[Typecho](https://typecho.org). Then this is a wrap-up of what I have accomplished in the last few days.



## Prerequisites

- Linux: Debian or Ubuntu preferred, WSL2 distro works well
- Docker Engine/Desktop installed



## Quick-Start

1. Git clone my repo: https://github.com/marcuszou/lemp-typecho.git.

   ```shell
   git clone https://github.com/marcuszou/lemp-typecho.git
   ```

2. Finetune the `docker-compose.yml` as needed.

   ```shell
   sudo chown -R $USER:$USER ./lemp-typecho
   cd lemp-typecho
   nano docker-compose.yml
   ```

3. Fire up the docker containers. 

   ```shell
   docker compose up -d
   ```

   Docker will pull down the relevant images and start the containers, which will take some time.

4. Access the website via http://localhost:8080 or http://127.0.0.1:8080.



## Detailed Notes: How to dockerize this LEMP Stack

A detailed note can be found at [Step-by-Step Guide](Step-by-Step-Guide-LEMP.md). Feel free to distribute if you find it helpful.



## Tech Stack and Notes

* This repo provides containers with Tech Stack:
    * __Linux__: Debian/Ubuntu is preferred, but it shouldn't matter much as far as you have a Docker Engine/Desktop installed
    * __Nginx__:latest (could select nginx: alpine for a smaller sized container)
    * __MariaDB__:10.11 (LTS, selected) or MariaDB:11.4 (LTS) or MySQL:8.0.40-Debian
    * __PHP__:8.1-FPM (customized with quite a bunch of PHP extensions)
* Code in the `www` directory will be mapped into the Nginx container at `/var/www/html`
* Nginx will grab code from the `www` directory.
    * By default, `www/html/index.php` will provide you a `phpinfo()` report once mapped.
    * Current `Typecho` blog system is served at `www/typecho/index.php` after mapping.
* If you want to use this repo for your dev, it is suggested you customize per your own project.



## Security Warning

* There are default passwords for MariaDB's `root` user and `dbmgr` user specified in `docker/docker-compose.yml`.
* You are strongly recommended to edit this line to replace `rootPass!2024` with a value known to you:

  ```shell
  MYSQL_ROOT_PASSWORD: rootPass!2024
  ```
* This docker configuration has not been security consolidated. Expose it to public networks at your own risk!



## License

* MIT
