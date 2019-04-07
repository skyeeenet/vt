# Department website VT
This site was created by order of the Department of Informatics of the Priazovsky State Technical University.
The development team involved a development team of 5 people. The task was divided into front-end and back-end parts.
I participated in both parts.
### Front-End
As a front-end developer, i did the layout of pages, the reactive display of some elements on the site, such as displaying a schedule for each group and so on. I also wrote a script to display the evenness or oddness of the week.
### Back-End
As a back-end developer, i wrote the whole back-end part, from the admin panel and creating the database architecture, to transferring the static layout to the Laravel.
### How can you install this project ?
    1. Download current repository
    2. Extract .zip archive to "domains/project_name" (in case you use Open Server)
    3. Import "DUMP-DB.sql" to your DB
    4. Edit DB options in the file ".env"
        * DB_HOST=127.0.0.1
        * DB_PORT=3306
        * DB_DATABASE=vt (Enter your DB name)
        * DB_USERNAME=root (Enter your DB username)
        * DB_PASSWORD= (Enter your DB user password)
    5. Run Web Server and open "project_name" in browser
### My project supports:
* Editing information on pages from the admin panel
* Dynamic menu editing
* Adding images to the general pool of photos. Automatic image compression and image resolution change depending on the entered values     
* Adding images is possible both locally and by reference
* Implemented message system
* Implemented user role system
* Implemented captcha
* User registration and authorization implemented
* Implemented a user profile system with support for user descriptions, adding profile images and adding social networks
* Implemented adding news
* Optimized site loading speed up to 96-98 points (mobile version) according to google page speed
* Implemented search for news and announcements on the site using laravel scout
* [Summernote](https://summernote.org/) is installed as a text editor
There are more than 20+ features that you can see on your own via running this project on your computer.
### In my project i used:
* Eloquent ORM
* Facades
* Contracts
* Migrations
![PageSpeed Insights](https://scontent.fiev7-1.fna.fbcdn.net/v/t1.0-9/56391604_709559779459966_7247473676654739456_n.jpg?_nc_cat=108&_nc_ht=scontent.fiev7-1.fna&oh=5a7e6f3d87ab5d1963d12f3646d90797&oe=5D44F4B4)
