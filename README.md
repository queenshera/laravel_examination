# Project Setup for Examination
## Run below commmands for setup
- composer update
- copy .env.example .env
- php artisan key:generate
- php artisan config:cache
- php artisan serve
- php artisan test (Run this command after completing project to check errors and result)
- 

## First Exam Test
- Create URLs with endpoint /, /aboutus, /contactus, /contact_submit
- Create controller with name MainController and related functions in it 
- Create views with filename index, aboutus, contactus
- In each page, add page name like in h1 tag Index Page, About Us Page, Contact Us Page
- On Contact Us page, add form names like name, email, phone, message, etc. and post method
- On form submit, page must redirect to /contact_submit URL
