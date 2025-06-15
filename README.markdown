# 📝➕ Simple PHP User Adder Form (Frontend) 🐘
_A basic HTML form for adding a user (first name, email) to a "subscribers" table, submitting data to `add_user.php` via POST, with a note about a pre-insert database trigger._

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26.svg?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
[![PHP](https://img.shields.io/badge/PHP-Backend%20Processing-777BB4.svg?logo=php)](https://www.php.net/) <!-- Indicates PHP backend -->

## 📋 Table of Contents
1.  [Overview](#-overview)
2.  [Key Features](#-key-features)
3.  [Screenshots (Conceptual)](#-screenshots-conceptual)
4.  [System & Backend Requirements](#-system--backend-requirements)
5.  [Local Setup & Viewing](#️-local-setup--viewing)
6.  [Form Usage & Interaction](#️-form-usage--interaction)
7.  [File Structure](#-file-structure)
8.  [Important Notes & Considerations](#-important-notes--considerations)
9.  [Contributing](#-contributing)
10. [License](#-license)
11. [Contact](#-contact)

## 📄 Overview

**Simple PHP User Adder Form** is a minimal HTML web page, developed by Adrian Lesniak, designed to capture a user's first name and email address for addition to a "subscribers" database table. The form uses the HTTP POST method to submit data to a backend PHP script (`add_user.php`). A notable feature is a message on the page informing users about a pre-insert database trigger that executes before data is added to the "subscribers" table. The HTML page itself is unstyled and relies on basic HTML5 for form structure and `required` attribute validation.
<br><br>
<p align="center">
  <img src="screenshots/1.gif" width="70%">
</p>


## ✨ Key Features

*   📝 **User Input Form**:
    *   Collects `fname` (First Name) - text input, `required`.
    *   Collects `email` (Email Address) - email input type, `required`.
*   ➡️ **POST Submission**:
    *   Submits the form data to `add_user.php` using the `POST` method when the "Register Subscriber" button is clicked.
*   🔔 **Database Trigger Notification**:
    *   Includes a textual note on the page informing the user that a pre-insert database trigger will be executed on the "subscribers" table before their data is actually inserted.
*   🏛️ **Minimalist HTML Design**:
    *   Basic HTML structure with no custom CSS styling applied.
    *   Relies on default browser rendering for form elements.
*   🇵🇱 **Mixed Language Content**:
    *   The HTML `lang` attribute is not specified, but the form title/header is in Polish (e.g., "Dodaj użytkownika"). Field labels and button text may vary.

## 🖼️ Screenshots (Conceptual)

_Screenshot of the simple HTML form as it appears in a browser, highlighting the input fields, submit button, and the note about the database trigger._

<p align="center">
  <img src="screenshots\1.jpg" width="300"/>
  <img src="screenshots\2.jpg" width="300"/>
  <img src="screenshots\3.jpg" width="300"/>
  <img src="screenshots\4.jpg" width="300"/>
  <img src="screenshots\5.jpg" width="300"/>
  <img src="screenshots\6.jpg" width="300"/>
  <img src="screenshots\7.jpg" width="300"/>
  <img src="screenshots\8.jpg" width="300"/>
  <img src="screenshots\9.jpg" width="300"/>
  <img src="screenshots\10jpg" width="300"/>
  <img src="screenshots\11.jpg" width="300"/>
  <img src="screenshots\12jpg" width="300"/>
</p>

## 🛠️ System & Backend Requirements

### Frontend (This HTML Page):
*   **Web Browser**: Any modern web browser (e.g., Google Chrome, Mozilla Firefox, Safari, Microsoft Edge).

### Backend & Database (Handled by `add_user.php` - **NOT INCLUDED IN THIS HTML FILE**):
*   **Web Server with PHP**: A web server capable of executing PHP scripts (e.g., Apache with `mod_php`, Nginx with PHP-FPM, or using PHP's built-in development server).
*   **`add_user.php` Script**: A PHP script located at the path specified in the form's `action` attribute. This script is responsible for:
    *   Receiving the POSTed `fname` and `email` data.
    *   Connecting to a database.
    *   Performing server-side validation (recommended).
    *   Inserting the data into a "subscribers" table.
    *   Handling any errors during the process.
    *   Providing feedback to the user (e.g., success/error message).
*   **Database System**: A database (e.g., MySQL, PostgreSQL, SQLite) accessible by the PHP script.
*   **"subscribers" Table**: A table within the database designed to store at least first names and email addresses.
*   **Pre-Insert Database Trigger**: A trigger defined on the "subscribers" table that executes *before* an `INSERT` operation. The specific logic of this trigger is external to this HTML form.

## ⚙️ Local Setup & Viewing

1.  **Clone or Download the Repository/Files**:
    ```bash
    git clone <repository-url>
    cd <repository-directory>
    ```
    *(Replace `<repository-url>` and `<repository-directory>` if applicable, or simply download/create `index.html` and `add_user.php` in a local folder).*

2.  **Ensure `add_user.php` is Present**:
    *   Place the `add_user.php` script in the same directory as `index.html` or ensure the `action` attribute in the `<form>` tag of `index.html` points to its correct location.

3.  **Set Up Backend & Database**:
    *   Ensure your PHP-enabled web server is running.
    *   Set up your database with the "subscribers" table and the pre-insert trigger. *This setup is beyond the scope of the HTML file itself.*

4.  **Host or Open the Page**:
    *   Place `index.html` and `add_user.php` in your web server's document root (e.g., `htdocs` for XAMPP/Apache).
    *   Access `index.html` through your web browser via the server (e.g., `http://localhost/your-folder/index.html`).
    *   Alternatively, for quick testing of the PHP backend (if `add_user.php` is in the root of the directory):
        Navigate to the directory in your terminal and run PHP's built-in server:
        ```bash
        php -S localhost:8000
        ```
        Then access `http://localhost:8000` (or `http://localhost:8000/index.html`) in your browser.

## 💡 Form Usage & Interaction

1.  Open `index.html` in your web browser (served via a PHP-enabled web server).
2.  **Interface**:
    *   You will see a simple form with a title (e.g., "Dodaj użytkownika" - Add User).
    *   Input fields for "First Name" (`fname`) and "Email" (`email`).
    *   A submit button labeled "Register Subscriber" (or similar).
    *   A note regarding the pre-insert database trigger.
3.  **Actions**:
    *   Enter your first name in the "First Name" field.
    *   Enter your email address in the "Email" field.
    *   Click the "Register Subscriber" button.
4.  **Submission & Backend Processing**:
    *   The browser will attempt to submit the form data to `add_user.php` using the POST method.
    *   HTML5 `required` attribute will enforce that both fields are filled before submission (basic browser-level validation).
    *   The `add_user.php` script will then process the data, interact with the database (including the execution of the pre-insert trigger), and should ideally return a response page or message to the user indicating success or failure. The behavior after submission is entirely dependent on the implementation of `add_user.php`.

## 🗂️ File Structure

Expected file structure for this component:

*   `index.html`: The HTML file containing the user registration form.
*   `add_user.php`: (**NOT INCLUDED WITH THE HTML FILE ITSELF, but required for functionality**) The backend PHP script that handles form data processing and database interaction.
*   `README.md`: This documentation file.

## 📝 Important Notes & Considerations

*   **Language**: The HTML page has some Polish text (e.g., the form title "Dodaj użytkownika") but the `lang` attribute for the HTML document was not specified in the overview (defaulting or potentially English).
*   **Styling (CSS)**: No custom CSS is applied. The form will render with default browser styles. Adding a stylesheet (`styles.css`) would significantly improve the user experience (UX).
*   **Client-Side Validation**: Only basic HTML5 `required` attribute validation is present. For a better UX and more robust checks (e.g., email format beyond basic type, name patterns), client-side JavaScript validation should be added.
*   **Server-Side Validation**: It is **critical** that `add_user.php` performs thorough server-side validation of all incoming data before interacting with the database to prevent security vulnerabilities (like SQL injection, XSS) and ensure data integrity.
*   **Database Trigger**: The functionality and impact of the "pre-insert trigger" are external to this HTML form and depend entirely on its SQL definition within the database. The note serves only to inform the user.
*   **`add_user.php` Implementation**: The success of this system hinges on a correctly implemented `add_user.php` script that can securely handle database connections, data sanitization, SQL queries, and error management.
*   **Database Setup**: A functional database with the "subscribers" table and the mentioned trigger must be set up independently.

## 🤝 Contributing

Contributions to improve this **Simple PHP User Adder Form** (specifically the `index.html` frontend) are welcome! Ideas include:

*   Adding basic CSS for styling.
*   Implementing client-side JavaScript validation.
*   Improving accessibility.
*   Providing clearer user feedback mechanisms (though much of this depends on `add_user.php`).

1.  Fork the repository.
2.  Create a new branch for your feature (`git checkout -b feature/FormEnhancements`).
3.  Make your changes to `index.html` (and potentially new CSS/JS files).
4.  Commit your changes (`git commit -m 'Feature: Add client-side validation'`).
5.  Push to the branch (`git push origin feature/FormEnhancements`).
6.  Open a Pull Request.

*(Contributions to `add_user.php` would typically be managed within the context of that backend script's development.)*

## 📃 License

This project (the `index.html` form) is licensed under the **MIT License**.
(If you have a `LICENSE` file in your repository, refer to it: `See the LICENSE file for details.`)

## 📧 Contact

Form concept by **Adrian Lesniak**.
For questions or feedback regarding the HTML form, please open an issue on the GitHub repository or contact the repository owner.

---
✨ _A basic building block for user data collection via PHP._
