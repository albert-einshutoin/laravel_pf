<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Basement of BBS
I made this for making myself understand more abbout Laravel, using no copy right templetes web form.
You can use this for your studying for basement of your services.

## Overview
For the purpose of studying the functionality, I created muti-login BBS.
Administrator is the only one user who can delete users.
Deployed on sakura VPS. (refer to the following Test web part)

What I struggled with
- made this for showing my skills as much as I can, so some part a bit weird like profile page on a bottom.
- authorisation related.
- deployment from github.

## Usage
As you like.
I didn't make admin registration function for security, so make it tinker or type it on db directory. (refer the following)
```
php artisan tinker
>>> $user = App\User::find(1)
>>> $admin App\Role::create(['name' => 'Admin', 'slug' => 'admin'])
>>> $user->roles()->attach($admin)
```

##Test web
login as admin on testweb
[testweb](http://133.125.57.31/laravel_pf/)
mail : aaa@gmail.com
pw : 12345678

## Installation
Server setting on Virtual Personal Server [VPS]
Using LAMP startup script provided by sakura vps.
```
dnf install https://rpms.remirepo.net/enterprise/remi-release-8.rpm
dnf module disable php
dnf module install php:remi-7.4
dnf install php-bcmath
dnf --enablerepo=remi install composer
composer global require laravel/installer
export PATH="$PATH:$HOME/.composer/vendor/bin"
```
Clone from Github
```
ssh-keygen -t rsa
[ Enter ] 3 times
cat id_rsa.pub → cpoy and paste on github on ssh setting paga
```

## Lisence
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Author
[albert-einshutoin](https://github.com/albert-einshutoin)
