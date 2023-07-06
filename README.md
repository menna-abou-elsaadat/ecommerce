
1- git clone repo
2- run composer update
3- create database and update .env database configurations
4- run php artisan migrate --seed (admin user will be created with email: admin@gmail.com and password: password)
5- run project you can user admin user or use register link to create a new user

Adding products Cycle

1- user add product button to add products to the app
2- Go to products list to view all the products
3- click on details link from the product row to view product details
4- From product details you can add the desired quantity of product to the cart
5- you can view the cart from view cart button
6- you can update product quantity or remove a product from the cart page

========================================================================================

Database Structure

1- users table (id, name, email, password, role (user|admin))

2- Products table (id, name, price, image_name, quantity, description, uuid)

3- Cart table (id, user_id)

4- Cart_products (id, cart_id, product_id, quantity)


========================================================================================
