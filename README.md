Make .env

Copy .env.example to .env

Export app.sql to local phpmyadmin

email : admin@example.com

password : password123

--RUN--

composer require laravel/ui

php artisan ui vue --auth

npm install

npm run dev

php artisan serve

RUN http://127.0.0.1:8000

-----------------------------------------------------

(IF YOU NEED ADD NEW USER, USE php artisan tinker)

$user = new App\Models\User;

$user->name = 'NewName';

$user->email = 'NewEmail';

$user->password = bcrypt('NewPassword');

$user->save();

exit

-----------------------------------------------------

DRIVE DEMONSTRASI (siapa tau gk sempet clone/cek) : https://drive.google.com/file/d/1Qn9vZdRvtD4KkNw0V1WyckLF4A4hvqZE/view?usp=drive_link
