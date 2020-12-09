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


This is a web applciation for an address book.

features:
- Add Contacts
- Edit Contacts
- Delete Contacts
- View All Contacts

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


## Screenshots

!['View all' Screenshot](./docs/images/Picture1.png)

<hr/>

!['Add Contact' Screenshot](./docs/images/Picture2.png)

<hr/>

!['View Contact' Screenshot](./docs/images/Picture3.png)

<hr/>

!['Edit Contact' Screenshot](./docs/images/Picture4.png)


# Tasks management ~ Kanban board


!['Kanban board' Screenshot](./docs/images/Picture5.png)
