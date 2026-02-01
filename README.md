<div align="center">
  <img src="public/assets/screenshots/index.php.png" alt="TCEK Website" width="100%">

  <h1 align="center">Trinity College of Engineering and Technology (TCEK)</h1>

  <p align="center">
    A comprehensive, responsive institutional website built with vanilla PHP, HTML, and CSS.
    <br />
    <a href="https://tcek-ac-in.vercel.app/"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://tcek-ac-in.vercel.app/">View Demo</a>
    ·
    <a href="https://github.com/saicharan-bhuthkuri/tcek.in-php/issues">Report Bug</a>
    ·
    <a href="https://github.com/saicharan-bhuthkuri/tcek.in-php/issues">Request Feature</a>
  </p>
</div>

<div align="center">
  <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/vercel-%23000000.svg?style=for-the-badge&logo=vercel&logoColor=white" alt="Vercel">
</div>

<br />

<details>
  <summary><strong>Table of Contents</strong></summary>
  <ol>
    <li><a href="#about-the-project">About The Project</a></li>
    <li><a href="#built-with">Built With</a></li>
    <li><a href="#getting-started">Getting Started</a></li>
    <li><a href="#project-structure">Project Structure</a></li>
    <li><a href="#deployment">Deployment</a></li>
    <li><a href="#gallery">Gallery</a></li>
  </ol>
</details>

---

## About The Project

This repository contains the source code for the **Trinity College of Engineering and Technology, Peddapally (TCEK)** website. It is designed to provide a seamless digital experience for students, faculty, and prospective applicants.

The application allows users to access:
- **Department Portals**: Detailed pages for EEE, ECE, CSE, etc., with dedicated tabs for faculty, labs, and achievements.
- **Student Resources**: Examination schedules, library information, and grievance forms.
- **Institutional Data**: Mandatory disclosures for NAAC, AICTE, and NIRF.

## Built With

*   ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
*   ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
*   ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
*   ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)

## Getting Started

Follow these instructions to set up the project locally on your machine.

### Prerequisites

*   **PHP 8.0+**: Ensure PHP is installed and added to your system path.
*   **Git**: Version control system.

### Installation

1.  Clone the repository
    ```bash
    git clone https://github.com/saicharan-bhuthkuri/tcek.in-php.git
    cd tcek.in-php
    ```

2.  Start the local development server
    ```bash
    cd public
    php -S localhost:8000
    ```

3.  Open your browser and navigate to `http://localhost:8000`

## Project Structure

The project is structured for optimal deployment on **Vercel** while maintaining a standard PHP codebase.

```txt
tcek.in-php/
├── api/
│   └── index.php                   # Vercel entry point (Router/Proxy)
├── php/                            # Local PHP binaries and config (for development)
├── public/                         # Web root directory (Publicly accessible)
│   ├── assets/                     # Static Assets
│   │   ├── Desirable-AICTE/        # AICTE Desirable Documents (PDFs)
│   │   ├── Essentials-AICTE/       # AICTE Essential Documents (PDFs)
│   │   └── img/                    # Website Images
│   ├── css/                        # Stylesheets
│   ├── js/                         # JavaScript files
│   ├── components/                 # Reusable components (Header, Footer)
│   ├── index.php                   # Home Page
│   ├── dept-*.php                  # Department Portals (CSE, EEE, etc.)
│   └── naac.php                    # Accreditation Pages
└── vercel.json                     # Vercel Serverless Configuration
```

## Deployment

This project is optimized for the **Vercel PHP Runtime**.

1.  **Framework Preset**: None (Other)
2.  **Build Command**: None
3.  **Root Directory**: `.` (Root)
4.  **Environment Variables**: Not required for basic functioning.

The `vercel.json` configuration automatically routes all dynamic requests to `api/index.php`.

## Gallery

**Department Portal Example (EEE)**
![Department Page](public/assets/screenshots/dept-eee.php.png)
