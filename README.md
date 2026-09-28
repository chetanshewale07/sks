# Shree Kaleshwari Security Services — Website

A 8-page PHP + Bootstrap 5 website built from the provided site structure document and logo.

## Folder structure
```
/
├── index.php              Home page
├── about.php               About Us
├── services.php             Our Services (all 7 services)
├── why-choose-us.php        Why Choose Us + How It Works + FAQ
├── compliance.php           PSARA Compliance
├── contact.php               Contact + Request a Quote form
├── privacy-policy.php
├── terms-conditions.php
├── header.php                Shared header/navbar (included on every page)
├── footer.php                Shared footer + floating buttons (included on every page)
├── send-quote.php            PHP handler that emails the quote form to your inbox
├── css/
│   └── style.css             All styling (separate from HTML as requested)
├── js/
│   └── script.js             All interactivity (separate from HTML as requested)
└── images/
    └── logo.png               Your uploaded logo
```

## How the includes work
Every page follows the pattern you asked for:
```php
<?php include 'header.php'; ?>
... page content ...
<?php include 'footer.php'; ?>
```
`header.php` and `footer.php` are shared across all pages, so any change to the navbar, top bar, footer, WhatsApp/Call buttons only needs to be made once.

## To run it locally
This needs a PHP server (not just double-clicking the files):
1. Install PHP (or use XAMPP/WAMP/MAMP).
2. From the project folder, run: `php -S localhost:8000`
3. Open `http://localhost:8000/index.php` in your browser.

To deploy, upload the whole folder to any PHP-enabled hosting (cPanel, etc.) and visit `index.php`.

## Things to finish before going live
1. **Photos** — the site currently references placeholder photo paths inside `images/` (e.g. `images/about-team.jpg`, `images/service-guard.jpg`). Until you add real photos there, the site automatically shows temporary stock-style placeholder images. Replace these with real photos of your team/guards for the final site.
2. **PSARA licence document** — `compliance.php` has a placeholder "View Document" card. Upload your actual valid PSARA licence PDF/image and link it there, along with the correct licence number and validity dates.
3. **Contact form emails** — `send-quote.php` uses PHP's built-in `mail()` function to send enquiries to `sksecurityservices1002@gmail.com`. Most standard PHP hosting (cPanel etc.) supports this out of the box; if emails don't arrive, ask your host about enabling SMTP or use PHPMailer with SMTP credentials instead.
4. **Google Map** — the embedded map on `contact.php` is centered on Koparkhairane, Navi Mumbai by search text. For pixel-accurate placement, replace it with the exact embed code from Google Maps for your office (Google Maps → Share → Embed a map).
5. **Website domain** — `www.sksecurityservices.com` is referenced in the footer/contact info as given in your document; update if this changes.

## Design
- Colors: Navy (#0B1A33) + Gold (#D4A72C), matching your logo.
- Fonts: Montserrat (headings) + Inter (body), loaded from Google Fonts.
- Bootstrap 5 + Bootstrap Icons via CDN (cdnjs).
- Floating WhatsApp + Call buttons on every page.
- Fully responsive (mobile, tablet, desktop) and keyboard-accessible.
