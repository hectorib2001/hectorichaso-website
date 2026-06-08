# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

Personal portfolio website for Hector Ichaso, built with Laravel 12 + Blade + Vite + Tailwind CSS v4. The app is a single-page site served by one route (`/`) that renders `resources/views/home.blade.php`.

The project lives inside the `hectorichaso-website/` subdirectory. All commands below should be run from inside that directory.

## Commands

**First-time setup:**
```bash
composer run setup
```
This installs Composer and npm dependencies, copies `.env.example` → `.env`, generates the app key, runs migrations, and builds frontend assets.

**Dev server (PHP + queue + Vite, all in one):**
```bash
composer run dev
```

**Build frontend assets only:**
```bash
npm run build
```

**Lint PHP (Laravel Pint):**
```bash
./vendor/bin/pint
```

**Run tests (Pest):**
```bash
php artisan test
```

**Run a single test file:**
```bash
php artisan test tests/Feature/ExampleTest.php
```

## Architecture

There is currently only one route and one view:

- `routes/web.php` — single `GET /` route returning the `home` view
- `resources/views/home.blade.php` — the entire portfolio page (hero, experience, projects, skills, about, contact footer) as a single Blade template
- `resources/css/home.css` — all styles for the page; uses CSS custom properties defined in `:root` for the dark color palette and typography (`Syne` + `DM Sans`)
- `resources/js/home.js` — all client-side interactivity: smooth scrolling, navbar scroll-state, scroll-reveal via `IntersectionObserver`, typing effect on the hero subtitle, active nav highlighting

Assets are bundled by Vite via `@vite()` directives in the Blade template. Per-page CSS/JS files (e.g. `home.css`, `home.js`) are the pattern — not a global `app.css`/`app.js` bundle.

There is an empty stub at `resources/views/Biocor/home.blade.php` — it has no content and is not wired to any route yet.

The test suite uses **Pest** (not PHPUnit directly). CI runs against PHP 8.2, 8.3, and 8.4.
