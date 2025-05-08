# Add User Form

## Overview
Add User Form is a simple HTML page with a form to add a user to a "subscribers" table. It collects first name and email, submitting data to `add_user.php` via POST. Includes a note about a database trigger executed before insertion. No styling or client-side validation.

## Features
- **Form**: Captures `fname` (first name) and `email`, both required.
- **Submission**: Sends data to `add_user.php` when "Register Subscriber" is clicked.
- **Trigger Note**: Informs users that a pre-insert trigger runs before adding to the "subscribers" table.
- **Minimal Design**: Basic HTML structure with no CSS.

## Requirements
- Web server with PHP (e.g., Apache with PHP module)
- Browser (e.g., Chrome, Firefox)
- Related file:
  - `add_user.php`: Processes form data and interacts with the database
- Database with a "subscribers" table and a pre-insert trigger

## Setup
1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd <repository-directory>
   ```
2. Ensure the required file is in place:
   - `add_user.php`: Script to handle form submission and database insertion.
3. Set up a database with a "subscribers" table and a pre-insert trigger (not provided).
4. Host the site on a PHP-enabled web server:
   ```bash
   php -S localhost:8000
   ```
   Or configure Apache/Nginx to serve the directory.
5. Access the page at `http://localhost:8000`.

## Usage
1. Open the page in a browser to view the form.
2. **Interface**:
   - **Form**: Enter first name and email, then click "Register Subscriber" to submit.
   - **Note**: Read about the pre-insert trigger for the "subscribers" table.
3. **Actions**:
   - Submit the form to send data to `add_user.php`.
   - The browser enforces required fields; no additional validation.

## File Structure
- `index.html`: Form page for adding a user.
- `add_user.php`: Backend script for processing form data (not included).
- `README.md`: This file, providing project documentation.

## Notes
- The page uses English (`lang` not specified) but includes Polish text (e.g., "Dodaj użytkownika").
- No CSS; consider adding styles for better UX.
- No client-side validation beyond HTML5 `required`; add JavaScript or server-side checks in `add_user.php`.
- The pre-insert trigger is mentioned but not defined; ensure it exists in the database.
- `add_user.php` must handle database insertion and trigger execution.
- Assumes a database (e.g., MySQL) with a "subscribers" table.

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make changes and commit (`git commit -m "Add feature"`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
For questions or feedback, open an issue on GitHub or contact the repository owner.