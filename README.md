# Additional Instructions the app

Challenge 1: 
    please use 1_programming_challenges.php file.

Challenge 2: Creating and Designing APIs (PHP)
    I de-prioritize to as the last item to do as in the laravel challenge also included making APIs.
    However, with the time allowed in this test was not allowed me to start this one

Challenge 3: 
    please use working_with_database_queries.php to checkout the SQL commands


Laravel challenge are prioritize as follow
Challenge 7: Database Schema and Seeding
Challenge 4: Building APIs
Challenge 5: Automated Testing
    You can find the laravel project under "impactlab-test-app". Please follow the setup process.

    Setup:
        1. in command-line interface run "composer install"
        2. optionally you can run following command "npm install && npm run build".
        3. copy ".env.example" to ".env" and update the Database related settings
        4. run following command for db migration and seeding. "php artisan migrate:fresh --seed"


    You can use following cURL commands to test the APIs
    
    1. Get All products
        curl --location --request GET 'http://127.0.0.1:8000/api/products' \
        --header 'Cache-Control: no-cache' \
        --header 'Accept: application/json' \
        --header 'Accept-Encoding: gzip,deflate' \
        --header 'Connection: keep-alive'


    2. Create order
        curl --location --request POST 'http://127.0.0.1:8000/api/orders' \
        --header 'Content-Type: multipart/form-data' \
        --header 'Cache-Control: no-cache' \
        --header 'Accept: application/json' \
        --header 'Accept-Encoding: gzip,deflate' \
        --header 'Connection: keep-alive' \
        --form 'customer="1"' \
        --form 'notes="First order"' \
        --form 'products[]="1"' \
        --form 'quantities[]="1"' \
        --form 'products[]="2"' \
        --form 'quantities[]="1"' \
        --form 'products[]="3"' \
        --form 'quantities[]="2"'


    3. Delete a user
        curl --location --request DELETE 'http://127.0.0.1:8000/api/users/2' \
        --header 'Cache-Control: no-cache' \
        --header 'Accept: application/json' \
        --header 'Accept-Encoding: gzip,deflate' \
        --header 'Connection: keep-alive'


    For the Automated testing, it's allowed me a small amount of time to start. However I'd to taken little extra time to finishes the first testing task.
    use this command to run it "php artisan test --filter ProductTest"


Challenge 6: Automating Infrastructure Setup
    Time isn't allow me to do this as well. Therefore, I'll briefly explain how to setup a server using Laravel Forge

    1. Sign-in to Forge
    2. Start Creating a server
    3. Chose server provider. DigitalOcean, AWS, Hetzner, etc...
    4. Choose the name for the server, server size and region & etc... and finish the setup
    5. After server deployed, you can choose the laravel code. There is a option to select code from repository. Choose a repository is best for do the CI/CD later

    6. If we want to use continues integration/continues deployment we can use webhooks. So each time when we commit something to the selected git branch, the deployment will be automatically triggered.


    Time doesn't allow me to create "Task 3: Implement a scheduled process using Laravel’s task scheduler"

