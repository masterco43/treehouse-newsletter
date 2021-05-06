<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1>Treehouse Challenge</h1>


<h4>Set up:</h4>
1)Download the application from git.<br/>
2)Create an env file, example used on my end is the .env.example file.<br/>
3)If not using a product similar to xamp, change the database settings to match your own. Note that steps 5 and 6 can be skipped if the env points to the database treehouse_sample that treehouse_sample.sql was made from<br/>
4)Run "composer install" to set up vendor folder.<br/>
5)Run "php artisan db:create treehouse_sample" to create the db.<br/>
6)Run "php artisan db:seed" to use the seeder file given in the challenge.<br/>
7)Run "php artisan migrate" to set up datables.<br/>
8)Run "php artisan serve" to start up the server.<br/>
9)Go to http://localhost:8000/ to begin testing!<br/>
<br/><br/>

As for the report challenge they were added to the project, but to have them easter to see in the READ ME:
1)"SELECT associations.name as association_name, companies.name as company_name, domains.domain as domain FROM sites 
            join associations on sites.association = associations.id 
            join domains on domains.site = sites.id 
            join companies on sites.company = companies.id 
            WHERE associations.name = 'Basement Systems, Inc.' AND sites.is_supercharged = 1 AND domains.is_primary = 1 AND domains.is_deleted = 0 AND sites.is_deleted = 0"<br/>
2)"SELECT associations.name as association_name, companies.name as company_name, sites.name as site_name from sites 
            join associations on sites.association = associations.id join companies on sites.company = companies.id 
            where sites.is_deleted = 0 AND sites.id not in (Select domains.site from domains)"<br/>
3)"SELECT sites.id as site_id, sites.name as site_name from sites join domains on domains.site = sites.id where sites.is_deleted = 0 and domains.is_deleted = 1 GROUP BY sites.id"<br/>
