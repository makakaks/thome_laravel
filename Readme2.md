create

composer install
cp .env.example .env

สร้าง database + แก้ชื่อ databse ใน .env
php artisan key:generate
php artisan migrate
php artisan storage:link
npm install
npm run dev
php artisan serve