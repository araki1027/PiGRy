環境構築
１．git clone git@github.com:Estra-Coachtech/laravel-docker-template.git
２．cd PiGRy
３．docker-compose up -d --build

Laravel環境構築
１．docker-compose exec php bash
２．composer install
３．cp .env.example .env
４．DB_HOST=mysql
　　DB_DATABASE=laravel_db
  　DB_USERNAME=laravel_user
  　DB_PASSWORD=laravel_pass
   に変更
５．php artisan key:generate

使用技術
laravel : 8.83.29
php : 8.1.33
mysql : 8.0.26

ER図
https://drive.google.com/file/d/1Gw6HrZatXXADHpSQKN8JVMnBl8fDOXf-/view?usp=sharing
