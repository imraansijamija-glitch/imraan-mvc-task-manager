# MVC Task Manager

## Opis projekta
MVC Task Manager je jednostavna web aplikacija napravljena u PHP-u koristeći MVC arhitekturu (Model - View - Controller). Aplikacija služi za upravljanje zadacima i omogućava pregled, dodavanje, izmjenu i brisanje taskova.

Projekt je rađen kao projektni zadatak iz predmeta Softver inženjering.

## Korištene tehnologije
- PHP
- MySQL
- HTML
- CSS
- Bootstrap 5
- JavaScript
- XAMPP

## Funkcionalnosti
- prikaz svih taskova
- dodavanje novog taska
- uređivanje taska
- brisanje taska
- povezivanje taskova sa korisnicima
- JavaScript potvrda pri brisanju
- validacija forme

## MVC struktura
Projekt je organizovan kroz sljedeće foldere:

- `config/`
- `controllers/`
- `models/`
- `views/`
- `public/`

## Baza podataka
Baza podataka se zove `mvc_task_manager`.

Sadrži dvije povezane tabele:
- `users`
- `tasks`

Veza između tabela ostvarena je preko stranog ključa `user_id`.

## Pokretanje projekta
1. Pokrenuti Apache i MySQL u XAMPP-u.
2. Otvoriti phpMyAdmin.
3. Kreirati bazu podataka pod nazivom `mvc_task_manager`.
4. Importovati SQL fajl `mvc_task_manager.sql`.
5. Kopirati projekat u `htdocs` folder.
6. Otvoriti aplikaciju u browseru preko:
   `http://localhost/mvc-task-manager/public/`

## Autor
Imraan Sijamija, IV2
