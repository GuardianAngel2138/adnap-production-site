# ADNAP — Think Backward. Build Forward.

**ADNAP** is a creative digital agency specialising in brand identity, web design, 2D/3D animation, and AI video production. This repository contains the source files for the ADNAP agency website.

---

## Project overview

| Detail | Value |
|---|---|
| Version | 1.0.0 |
| Base template | Davies by Themesflat |
| Adapted by | ADNAP |
| Stack | PHP, HTML5, CSS3, JavaScript (jQuery + Swiper + GSAP) |

---

## Directory structure

```
adnap/
├── assets/
│   ├── css/
│   │   └── styles.css          # Main compiled stylesheet
│   ├── fonts/                  # Brand & body typefaces
│   ├── icon/icomoon/           # Icon font
│   ├── images/                 # All static imagery
│   │   ├── logo/
│   │   └── section/
│   └── js/
│       ├── carousel.js         # Swiper initialisation
│       ├── gsapAnimation.js    # Scroll-triggered animations
│       └── main.js             # Site-wide JS
├── partials/
│   ├── head.php                # <head> meta & stylesheet links
│   ├── nav-header.php          # Top navigation
│   ├── mobile-menu.php         # Mobile drawer
│   └── footer.php              # Footer markup
├── index.php                   # Home page
├── about.php
├── portfolio.php
├── services.php
├── service-*.php               # Individual service pages
├── contact.php
├── blog-*.php                  # Blog layout variants
└── 404.php
```

---

## CSS conventions

Styles live exclusively in `assets/css/styles.css`. All colour values reference the design-token custom properties defined in `:root` — **never** use raw hex or `rgba()` literals in new rules.

### Core tokens

| Token | Value | Usage |
|---|---|---|
| `--primary` | `#0158FF` | Brand accent, CTAs, icons |
| `--white` | `#ffffff` | Headings, bright text |
| `--white-64` | `#FFFFFFA3` | Body text on dark bg |
| `--white-40` | `#FFFFFF66` | Muted / secondary text |
| `--white-32` | `#ffffff52` | Subtle borders (hover) |
| `--white-16` | `#FFFFFF29` | Default card borders |
| `--white-8` | `#FFFFFF14` | Dividers, hover backgrounds |
| `--white-4` | `#FFFFFF0A` | Card resting backgrounds |
| `--black` | `#000000` | Page background |

---

## Development

### Watch SCSS (if compiling from source)

```bash
sass assets/scss/app.scss assets/css/styles.css --watch
```

### Local server

Open via XAMPP or any PHP-capable local server — navigate to the project root in your browser.

---

## Services

- Brand Identity & Strategy
- Web Design & Development
- 2D Animation
- 3D Animation
- AI Video Production

---

## Contact

[adnapagency.com](https://adnapagency.com) · hello@adnapagency.com
