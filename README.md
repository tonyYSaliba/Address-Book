[![SonarCloud](https://sonarcloud.io/images/project_badges/sonarcloud-white.svg)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)

[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=bugs)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=code_smells)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=coverage)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=duplicated_lines_density)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=ncloc)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=sqale_rating)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=reliability_rating)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=security_rating)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=sqale_index)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=tonyYSaliba_Address-Book&metric=vulnerabilities)](https://sonarcloud.io/dashboard?id=tonyYSaliba_Address-Book)

# Address Book

## Introduction


This is an Address Book Web Application.

Features:
- Add Contacts
- Edit Contacts
- Delete Contacts
- View All Contacts

## Installation Instructions

to clone the repository and install all required modules
``` 
>> git clone https://github.com/tonyYSaliba/Address-Book.git
>> cd address_book
>> composer install

```

Edit your .env file to configure your database
```
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/address_book_db"

```

to create the database and its tables 
```
>> php bin/console doctrine:database:create
>> php bin/console make:migration
>> php bin/console doctrine:migrations:migrate

```
## Architecture

The application was developed using the Model-View-Controller (MVC) design pattern.

Tools used:
- Symfony 5
- Doctrine with MySQL
- Twig
- PHP 7
- SonarCloud (for code quality)
- PHPUnit and Xdebug (for unit testing and coverage)
- GIT
- Trello (for task management)
  
## Controller Routes
- **GET** ``` contact/ ```
  - Route to view All contacts
- **GET | POST** ``` contact/new ```
  - Route to add a contact
- **GET** ``` contact/{id}```
  - Route to read a contact
  - **id** is an integer and it is the id of a contact
- **GET | POST**  ```contact/{id}/edit```
  - Route to edit a contact
- **DELETE** ```contact/{id}```
  - Route to delete a contact
  - **id** is an integer and it is the id of a contact


## Database

- Table ```CONTACT``` - contains **id, firt_name, last_name, street_address, zip_code, city, phone_number, birth_date, email_address, picture_url, country**


PS: for more details please read [DesignDocument.md](./docs/DesignDocument.md)

## Screenshots

!['View all' Screenshot](./docs/images/Picture1.png)

<hr/>

!['View all' Screenshot](./docs/images/Picture6.png)

<hr/>

!['View Contact' Screenshot](./docs/images/Picture3.png)

<hr/>

!['Edit Contact' Screenshot](./docs/images/Picture4.png)


# Task Management ~ Kanban board


!['Kanban board' Screenshot](./docs/images/Picture5.png)
