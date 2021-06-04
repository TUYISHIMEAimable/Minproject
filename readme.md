# Minproject
 This is our Minproject with TUYISHIME Aimable and NTAGISANIMANA Penina
 
 our project is called universal onlineticket system
 TUYISHIME Aimable:18RP10039
 NTAGISANIMANA Penina:18RP01125

1.Overview of our system (uko system ikora)
Universal Online Ticket Management System (UOTMS) is a web based system that can assists the information of  Online Ticket during its handling in the ticket.
With this system, the user of this system can key in the result of Passengers that has been conducted 
to each of the Ticket received by the passengers. And also this system is developed by using laravel 8.0
via this system Volunteer are able to be registered as passenger and also his\her record is managed properly.
2.Structure of our Project
This Project accommodate in Three parts of MVC:
 First is Models:
Our Model Directory contains:
*taskads.php
*Passangerinfor.php
*index.php
*user.php
Controllers"
*Directory in Controller:
*Auth
*Middleware
files:
* Puth: pp\Http\Controllers this is puth for controller Directory
* ProjectController: this Controller helps to control passangers either register, update, delete of record.
* Passangerinfor.php:manages store of Passengers in database either retrieve of record;
*HomeController:manage home page

## Views (Front-end view):
#Directories:
auth:
*Layouts:
app.blade.php
Head.blade.php
*Projects:
index.blade.php
create.blade.php
Edit.blade.php
update.blade.php
show.blade.php
layout.blade.php
Views:
index.blade.php
create.blade.php
edit.blade.php
layout.blade.php
show.blade.php
 .blade.php
##Picture Directory:
-includes the pictures show how system it works by pictures
-this pictures includes how system works step by step
from index page up to admin page same as video.

3.Installation and running our project using laravel8.0 framework
 Laravel Universal Online Ticket Management System
* Laravel Framework 8.0
* Bootstrap 5
*We have downloaded xampp with php version 7.3
   First step:
    Installation of xampp
    ->Open local disk C
    ->Click on xampp
    ->Start(apache & mysql)
   Second step:
    Downloading of a composer
    ->Open local disk C
    ->Click on xampp
    ->Click on MYphpAdmin and then next
 Third step: 
    Installation of laravel8
    ->Enter laravel through browser
    ->click install 
    ->choose version 8.x
    ->installation via composer
    ->copy this Artisan CLI's serve command:composer create project laravel/laravel          
    ->open local disk C
    ->click on xamp
    ->click on htdocs
    ->Online Transport Reservation system(through this path command prompt is where it is opened)
    ->then paste composer create project laravel/laravel->then laravel is installed successful->then check laravel
N.B: In order to access our project first, you must be able to login as admin and then enter username and password, then click login button, directly you begin access our system (Universal Online Ticket Management System).
4. Laravel Universal Online Ticket Management System Author:
*  Aimable TUYISHIME:18RP0
* Penina NTAGISANIMANA:18RP01125
