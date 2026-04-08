# EduPress — Premium FSE School Theme

EduPress is a modern WordPress Full Site Editing (FSE) theme crafted for schools, academies, and learning platforms. It combines a clean editorial layout with reusable block patterns for rapid page building.

## Why EduPress

- Built with the WordPress Site Editor (Gutenberg)
- Lightweight, no custom framework dependency
- Reusable homepage sections via block patterns
- Design tokens centralized in `theme.json`
- Clean base for scaling into a premium education product

## Highlights

- **Block Theme Architecture**: Template parts + templates + patterns
- **Homepage Patterns**: Hero, Features, Announcements
- **FSE-First Workflow**: Edit visually in Appearance → Editor
- **Consistent Design System**: Colors, typography, spacing from `theme.json`

## Project Structure

```
Edupress-Theme/
├── parts/
│   ├── header.html
│   └── footer.html
├── patterns/
│   ├── hero.php
│   ├── features.php
│   └── announcements.php
├── templates/
│   ├── front-page.html
│   ├── home.html
│   ├── index.html
│   └── page.html
├── theme.json
├── style.css
└── index.php
```

## Requirements

- WordPress 6.3+
- PHP 8.0+

## Installation

1. Copy this folder into `wp-content/themes/`.
2. Activate **EduPress** in the WordPress admin.
3. Open **Appearance → Editor** to customize templates and patterns.
4. Set homepage behavior in **Settings → Reading**:
	- Static homepage → uses `front-page.html`
	- Latest posts → uses `home.html`/`index.html`

## Included Templates

- `templates/front-page.html` — Homepage layout
- `templates/home.html` — Posts index when homepage is static
- `templates/index.html` — Global fallback template
- `templates/page.html` — Standard pages

## Included Pattern Slugs

- `edupress/hero`
- `edupress/features`
- `edupress/announcements`

## Customization Guide

- Update brand colors and typography in `theme.json`
- Adjust section content inside `patterns/*.php`
- Edit shell structure in `parts/header.html` and `parts/footer.html`

> If a pattern is updated in code but the editor still shows old content, remove the existing section in the Site Editor and insert the pattern again. Saved template content does not auto-sync with updated pattern source files.

## Roadmap

- Custom `single.html` and `archive.html`
- Dedicated About / Admissions page patterns
- Accessibility and performance pass
- Screenshot refresh for theme preview card

## Author

Yusuf Abubakar

## License

GPL-2.0-or-later