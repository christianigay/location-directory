# Setup Guide
install to load classes in Application directory:
composer install

run server:
php -S localhost:8189

visit url or the declared BASE_URL in constant.php: 
http://127.0.0.1:8189


# Summary of approach and decision
This project structure was developed to serve as a foundation for creating simple PHP applications following the Model–View–Controller (MVC) architecture.

I designed this setup both for use in my own projects (such as small-scale cron jobs or lightweight PHP systems) and as a teaching tool when guiding learners during bootcamps.

The goal is to maintain clean code organization, separation of concerns, and scalability, while still being simple enough for beginners to understand and extend.