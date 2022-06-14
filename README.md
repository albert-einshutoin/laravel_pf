<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# :clipboard: Author's skills are at the bottom / 技術関連は最下段に記載してあります :clipboard:
# Basement of BBS
I made this for making myself understand more about Laravel, using no copy right templetes web form.
You can use this for your studying for basement of your services if you want.
Laravelの理解度を上げるために、著作権フリーのウェブテンプレートを使用しそれをもとに作成しました。
サービス開発や勉強のために気軽に使ってください。

## Overview
For the purpose of studying laravel functionality, I created muti-login BBS.
Administrator is the only one user who can delete users.
Deployed on sakura VPS. (refer to the following Test web part)

What I struggled with
- made this for showing my skills as much as I can, so some part a bit weird like profile page on a bottom.
- authorisation related.
- deployment from github.
- it's easy, once I get what's vps settings like, but till then I didn't expect  this differences between local development and server development.

マルチログイン掲示板を効率的にReadableに書いてみました。
Admin UserはUserの削除等が行えるようになってます。
さくらVPSにてデプロイをしたました。

詰まった点
- スキルを見せると言う点に置いてプロファイルページにauthで削除できる部分などを残しています。
- 認証やハッシュ方法などで詰まりました。
- Githubからcloneしてデプロイするのが初めてとういことで不慣れなため難しさを感じました。
- VPSの設定周りを一度ある程度理解すれば簡単ですが、ローカルと異なる部分がここまであるとは想像していませんでした。

## Usage
As you like.
I didn't make admin registration function for security, so make it tinker or type it on db directory. (refer the following)
Adminを作れるのはtinkerからとなっています。下記を参照してください。
```
php artisan tinker
>>> $user = App\User::find(1)
>>> $admin App\Role::create(['name' => 'Admin', 'slug' => 'admin'])
>>> $user->roles()->attach($admin)
```

## [Test Web](http://133.125.57.31/laravel_pf/)
[Test Web](http://133.125.57.31/laravel_pf/) を置いています。Adminとしてログインする場合は下記を使用してください。
login as admin on [Test Web](http://133.125.57.31/laravel_pf/)
↓↓↓↓ if you want to login as admin user at testweb ↓↓↓↓
- name : Admin User
- mail : aaa@gmail.com
- pw : 12345678

## Installation
Server setting on Virtual Personal Server [VPS]
Using LAMP startup script provided by sakura vps.
さくらVPSのLAMPスタートアップスクリプトを使用してからの設定になります。
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
cat id_rsa.pub → cpoy and paste on github on ssh setting page
```

## Lisence
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Author
[albert-einshutoin](https://github.com/albert-einshutoin)

#### Author skill experiences
| Lang / System | Version | Ability |
| --- | ---- | ---- |
| PHP | 7.4 | (Development of a site with login functionality) / ログイン機能を持つサイトの開発 |
| Python | 2.7, 3.9 | (Development of simple software including algorithms) / アルゴリズムを含む簡易的なソフトの開発 |
| PINE | v5 | (Development of a simple indicator with reference to doc) / docを参考に簡単なインジケーターの開発 |
| Golang | 1.14 | (Basement of lang) / 基礎程度 |
| FW |
| Laravel | 7.3 | (Development of bulletin board site with multi-login function) / マルチログイン機能の掲示板サイト開発
| Flask | 2.0 | (Development of a site with login functionality) / ログイン機能を持つサイトの開発 |
| DB |
|  MySQL | 8.0 |
| MariaDB | 10.3.28 |
| Editor |
| Vim |
| VSCode |
| Environment |
| LAMP |

##### What I made before
- Creating a bulletin board using only PHP and HTML
[ PHP、HTMLのみで掲示板の作成 ]
- Creating a multi-login bulletin board in Laravel and deploying it from Github on a VPS
[ Laravelでマルチログイン掲示板の作成、VPSにてGithubからデプロイ ]
- Snake game in Python
[ Pythonでスネークゲーム ]
- Automated Crypto trading software using Python, PINE, and GCP
[ Python、PINE、GCPを利用したCryptoの自動売買ソフト ]
- Automated trading and backtesting software using Python, BybitAPI
[ Python、BybitAPIを使用した自動売買ソフト、バックテストソフト ]
- Instagram automation and analysis software using Python, InstagramGraphAPI, and Selenium
[ Python、InstagramGraphAPI、Seleniumを使用したInstagram自動化・分析ソフト ]
- Restaurant reservation website using Laravel (under development)
[ Laravelを使用した飲食予約サイト(開発中) ]

