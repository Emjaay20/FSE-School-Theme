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

## Current Project Structure

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
│   ├── 404.html
│   ├── archive.html
│   ├── front-page.html
│   ├── home.html
│   ├── index.html
│   ├── page.html
│   ├── search.html
│   └── single.html
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

- `templates/404.html` — Not found page
- `templates/archive.html` — Archive listing pages
- `templates/front-page.html` — Homepage layout
- `templates/home.html` — Posts index when homepage is static
- `templates/index.html` — Global fallback template
- `templates/page.html` — Standard pages
- `templates/search.html` — Search results page
- `templates/single.html` — Single post page

## Included Pattern Slugs

- `edupress/hero`
- `edupress/features`
- `edupress/announcements`

## Customization Guide

- Update brand colors and typography in `theme.json`
- Adjust section content inside `patterns/*.php`
- Edit shell structure in `parts/header.html` and `parts/footer.html`

> If a pattern is updated in code but the editor still shows old content, remove the existing section in the Site Editor and insert the pattern again. Saved template content does not auto-sync with updated pattern source files.

## Distribution (Install on Other Sites)

1. Ensure the folder name is `Edupress-Theme`.
2. Create a zip from the theme root (the zip should contain `style.css` at top level, not a nested folder).
3. In a target WordPress site, go to **Appearance → Themes → Add New → Upload Theme**.
4. Upload the zip and activate the theme.
5. Go to **Settings → Reading** and set homepage mode (static page or latest posts).

### Pre-release Checklist

- `style.css` theme headers are complete.
- `theme.json` palette/typography tokens are valid.
- Templates and patterns load without block validation errors.
- `screenshot.png` matches current visual design.
- Front Page template is not overridden by stale Site Editor customizations.

## Troubleshooting

- **Invalid block content in Site Editor**: reset the affected template/template-part, then reinsert the updated pattern.
- **Pattern update not visible**: remove old inserted pattern instances and insert again.
- **Color mismatch in header/footer**: confirm no customized template-part override exists in Site Editor.

## Changelog

### v1.1

- Added release-ready template coverage (`single`, `archive`, `search`, `404`).
- Improved pattern structure for better FSE compatibility.
- Added translation-ready output in pattern text content.
- Replaced remote hero image dependency with local theme image fallback.
- Expanded theme metadata in `style.css` for portability.

## Roadmap

- Dedicated About / Admissions page patterns
- Accessibility and performance pass
- Screenshot refresh for theme preview card

## Author

Yusuf Abubakar

## License

GPL-2.0-or-later