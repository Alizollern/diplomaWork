## Centralized Database of Prescription Medicines

This project is a centralized database of prescription medicines. It was created using the PHP programming language and the Laravel framework.

## Installation

In order to run the project, you need to follow these steps:

    1.Clone the repository to your local computer:
    ``` git clone https://github.com/Alizollern/diplomaWork ```
    2.Install all the necessary dependencies using Composer:
    ``` composer require simplesoftwareio/simple-qrcode ```
    3.Copy the .env.example file and rename it to .env. Then fill in the required fields, including the connection to the database.
    ```cp .env.example .env```
    4.Generate the application key:
    ```php artisan key:generate```
    5.Perform database migrations:
    ```php artisan migrate```
    6.Start the local server:
    ```php artisan serve```
    7.Open a browser and go to http://localhost:8000
 ## UTILIZATION
 After installing and launching the project, you will be able to use it to store and manage information about prescription medications. The database stores data about medicines, prescriptions, doctors and patients, as well as comments on prescriptions.

You can use the built-in functionality to add, edit and delete data in the database, as well as to search and filter data.
