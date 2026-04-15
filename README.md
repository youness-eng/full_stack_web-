# full_stack_web-[README.md](https://github.com/user-attachments/files/26752086/README.md)
# Pharmacie Chaabia — Web Application

A full-stack pharmacy management web application developed as a final-year internship project at **École Supérieure de Technologie d'Oujda** (Mohammed Premier University), in collaboration with **Pharmacie Chaabia**, Nador, Morocco.

---

## Overview

This project addresses a real-world business need: digitising the operations of a traditional brick-and-mortar pharmacy. The application enables patients to submit prescriptions online and schedule pickup appointments, while giving pharmacy staff a centralised dashboard to manage products, orders, users, and communications — all designed with COVID-19 capacity-limiting requirements in mind.

The system supports four distinct user roles, each with a tailored interface and permission set.

---

## Features

### Public (Anonymous Visitor)
- Browse pharmacy product catalogue by category
- View promotions, new arrivals, and featured brands
- Contact the pharmacist via a message form
- Register for a patient account

### Patient / Client
- Authenticated account with personal profile management
- Submit prescription orders and track their status
- Manage personal orders (view, edit, cancel)
- Receive notifications when a prescription is ready for pickup
- Shopping cart with real-time total calculation

### Employee
- Full product management (add, edit, delete; table and grid views)
- Order management with status updates
- Category and brand management
- Internal messaging with pharmacist and patients

### Pharmacist (Admin)
- All employee capabilities
- User account management (create, assign roles, deactivate)
- Access to anonymous visitor messages
- Brand management with logo support
- Complete system overview dashboard

---

## Technology Stack

| Layer | Technologies |
|---|---|
| Frontend | HTML5, CSS3, JavaScript (ES6), jQuery |
| Backend | PHP (Hypertext Preprocessor) |
| Database | MySQL (via XAMPP/phpMyAdmin) |
| Modelling | PowerDesigner (MCD/MLD), Lucidchart (UML diagrams) |
| Dev Environment | Visual Studio Code, XAMPP (Apache + MySQL) |

---

## Database Design

The MySQL database comprises **10 tables**:

- `utilisateurs` — registered user accounts
- `profils` — user role definitions (client, employee, pharmacist)
- `produits` — product catalogue with pricing, descriptions, and stock
- `categories` — top-level product categories
- `sous_categories` — sub-categories
- `sous_sous_categories` — tertiary classification
- `marques` — product brands with logos
- `commandes` — patient orders with status tracking
- `messages_ordonnances` — prescription messages and file attachments
- `messages_pharmacien` — contact messages from anonymous visitors

Relationships were designed using a Conceptual Data Model (MCD) and subsequently translated to a Logical Data Model (MLD) using PowerDesigner.

---

## Project Structure

```
/
├── index.php                  # Main entry point — public-facing site
├── personne/                  # PHP backend (authentication, CRUD logic, session management)
│   ├── client/                # Patient dashboard and order management
│   ├── employe/               # Employee dashboard and management pages
│   └── pharmacien/            # Pharmacist admin panel
├── assets/
│   ├── css/                   # Stylesheets and responsive design
│   ├── js/                    # Client-side JavaScript and jQuery logic
│   └── images/                # Product images, logos, and UI assets
│   └── videos/                # Homepage media content
└── rapport/                   # Internship report, UML diagrams, and data models
```

---

## Installation

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP 7.4+)
- A modern web browser

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/pharmacie-chaabia.git
   ```

2. **Move to the XAMPP web root**
   ```bash
   mv pharmacie-chaabia /path/to/xampp/htdocs/
   ```

3. **Start Apache and MySQL** via the XAMPP Control Panel.

4. **Import the database**
   - Open `http://localhost/phpmyadmin`
   - Create a new database named `pharmacie_chaabia`
   - Import the provided `.sql` file from the `/rapport` folder

5. **Configure the database connection**
   - Open `personne/config.php` (or equivalent connection file)
   - Update the host, username, password, and database name to match your local setup

6. **Access the application**
   ```
   http://localhost/pharmacie-chaabia/index.php
   ```

### Default Credentials (Development)

| Role | Email | Password |
|---|---|---|
| Pharmacist | admin@gmail.com | (set during import) |
| Employee | employee@gmail.com | (set during import) |

---

## Screenshots

### Public Homepage
![Homepage Header](rapport/screenshots/homepage-header.png)
*Navigation bar with pharmacy logo, page links, and search*

![Product Categories](rapport/screenshots/homepage-categories.png)
*Category section showcasing Santé, Hygiène et soins, Phytothérapie, and more*

![New Products](rapport/screenshots/homepage-nouveautes.png)
*New arrivals section with product cards, pricing, and descriptions*

![Promotions](rapport/screenshots/homepage-promotions.png)
*Active promotions displayed with original and discounted prices*

![Brands](rapport/screenshots/homepage-marques.png)
*Featured brand carousel (e.g. Greens Idea)*

![Footer](rapport/screenshots/homepage-footer.png)
*Footer with opening hours, category links, and social media*

### Authentication
![Login Form](rapport/screenshots/login.png)
*Login and registration page with split-panel layout*

![Registration Form](rapport/screenshots/register.png)
*New account registration form*

### Patient Dashboard
![Patient Dashboard](rapport/screenshots/patient-dashboard.png)
*Product catalogue, shopping cart, and order summary for authenticated patients*

![Order Management](rapport/screenshots/patient-orders.png)
*Patient order history with status indicators and action controls*

### Contact Page
![Contact Page](rapport/screenshots/contact.png)
*Contact form with pharmacy address, phone, email, and social links*

### Employee Dashboard
![Employee Dashboard](rapport/screenshots/employee-dashboard.png)
*Admin panel overview with product, order, and message counters (dark theme)*

![Product Management — Table View](rapport/screenshots/employee-products-table.png)
*Product list with category, barcode, brand, stock, and price columns*

![Product Management — Grid View](rapport/screenshots/employee-products-grid.png)
*Alternate card-based product display*

![Order Management](rapport/screenshots/employee-orders.png)
*Order table with client names, totals, and real-time status badges*

![Category Management](rapport/screenshots/employee-categories.png)
*Category table with interest and definition fields*

### Pharmacist Dashboard
![Pharmacist Dashboard](rapport/screenshots/pharmacist-dashboard.png)
*Extended admin panel with user management and anonymous message access*

![User Management](rapport/screenshots/pharmacist-users.png)
*Full user table with role assignment and CRUD actions*

![Brand Management](rapport/screenshots/pharmacist-brands.png)
*Brand grid with logo display (Oral-B, Nuxe, Sensibio, Bioderma, etc.)*

> **Note:** To populate the screenshots above, export the images from the internship report and place them in `rapport/screenshots/` using the filenames shown.

---

## UML Diagrams

The following UML artefacts were produced during the design phase and are available in the `/rapport` folder:

- **Use Case Diagram** — illustrates interactions between all four actors and the system
- **Sequence Diagram: Login** — models the authentication flow including success and failure scenarios
- **Sequence Diagram: Place Order** — models the order submission workflow end-to-end
- **Conceptual Data Model (MCD)** — entity-relationship representation of all data entities
- **Logical Data Model (MLD)** — relational schema generated from the MCD via PowerDesigner

---

## Skills Demonstrated

- **Full-stack web development** using PHP, JavaScript, HTML, and CSS without a framework
- **Relational database design** from conceptual modelling through to physical implementation
- **Role-based access control** with session management in PHP
- **UML modelling** (use cases, sequence diagrams, data models)
- **Responsive UI design** supporting both light and dark themes
- **Agile requirements analysis** from a real client brief (cahier des charges)
- **Cross-functional communication** between developer, pharmacist, and academic supervisor

---

## Context

This application was developed over a **2-month internship** (academic year 2020–2021) at Pharmacie Chaabia, Nador, Morocco, under the supervision of:

- **Academic supervisor:** Prof. Hafida Zrouri — École Supérieure de Technologie d'Oujda
- **Industry supervisor:** Dr. Ahmed El Abdellaoui — Owner, Pharmacie Chaabia

**Programme:** Développeur d'Applications Informatiques  
**Department:** Génie Informatique — École Supérieure de Technologie d'Oujda

---

## Author

**Youness Bouhjar**  
[LinkedIn](https://linkedin.com/in/your-profile) · [GitHub](https://github.com/your-username) · [Email](mailto:your@email.com)
