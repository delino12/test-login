# test-login
Laravel Multi Login Authentication

# database Setup
Make sure you create databse and change the database config inside .env file or better still
databse name for this test is called "custom_db", you can create yours to fit in.

After running composer install 
After generating keys...

# installation
Then run artisan migration to setup database

# first step
go to the url param https://localhost:8000/install
this will install admin 

# second step
login as admin using the admin route param eg. https://127.0.0.1:8000/admin/login
login as user using the admin route param eg. https://127.0.0.1:8000/login

# security
admin has types and level for now the super admin here is "omega"
has right to create others and delete other admin
