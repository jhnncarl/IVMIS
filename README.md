# Intelligent Visitor Management Information System Kiosk for EVSU-Ormoc Campus

## Scope Clarification
This project is a standalone kiosk for visitors only. It does not include admin or security personnel login screens in the kiosk itself. Those roles may exist in a separate back-office system outside the kiosk flow.

## Project Goal
The kiosk should allow a visitor to:
- choose a purpose of visit
- enter personal information
- generate or capture a visitor record
- check in quickly and securely
- optionally print or display a pass

## Initial Project Structure

```text
IVMIS/
├─ config/
│  └─ database.php
│
├─ database/
│  ├─ schema.sql
│  └─ seed.sql
│
├─ public/
│  ├─ index.php
│  ├─ visitor-form.php
│  ├─ confirmation.php
│  ├─ success.php
│  ├─ assets/
│  │  ├─ css/
│  │  │  └─ style.css
│  │  ├─ js/
│  │  │  └─ app.js
│  │  └─ images/
│  │     └─ .gitkeep
│  │
├─ src/
│  ├─ Database/
│  │  └─ Connection.php
│  ├─ Visitor/
│  │  └─ VisitorManager.php
│  ├─ Services/
│  │  └─ VisitorService.php
│  └─ Helpers/
│     └─ Sanitizer.php
│
├─ templates/
│  ├─ header.php
│  ├─ footer.php
│  └─ kiosk-layout.php
│
├─ .gitignore
├─ composer.json
├─ package.json
├─ README.md
└─ .env.example
```

## Built for kiosk workflow
- Welcome screen
- Purpose selection
- Visitor details form
- ID or guest validation
- Check-in confirmation
- Visitor record storage
- Optional reporting export for a separate admin system

## Excluded from the kiosk scope
- Admin login page
- Security personnel login page
- Internal officer dashboard inside the kiosk
- Complex role-based access management in the kiosk interface

## Technology Stack
- PHP for server-side processing
- MySQL for visitor records
- HTML, CSS, and JavaScript for kiosk UI
- Optional: Bootstrap or a custom kiosk-friendly theme

## Milestones
1. Define kiosk workflow and data model
2. Create landing and form pages
3. Build visitor record storage
4. Add confirmation and success flow
5. Test kiosk usability and validation
6. Prepare reporting hooks for external management tools
