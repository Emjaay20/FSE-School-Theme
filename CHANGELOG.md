# Changelog

All notable changes to this project are documented in this file.

The format is based on Keep a Changelog and follows semantic versioning principles where practical.

## [1.1.0] - 2026-04-08

### Added

- Core block templates for broader install compatibility:
  - `templates/single.html`
  - `templates/archive.html`
  - `templates/search.html`
  - `templates/404.html`
- Improved repository docs:
  - distribution checklist
  - troubleshooting notes
  - release notes in README

### Changed

- Enhanced theme metadata in `style.css`:
  - text domain
  - WordPress and PHP requirements
  - license fields
  - theme tags
- Improved pattern compatibility and reliability for Full Site Editing:
  - normalized block structure in `patterns/features.php`
  - modern query markup in `patterns/announcements.php`
- Updated hero pattern to use local theme image fallback in `patterns/hero.php`.

### Fixed

- Reduced invalid-block conflicts caused by non-canonical pattern serialization.
- Reduced portability issues from remote hero image dependency.

## [1.0.0] - 2026-04-07

### Added

- Initial release of EduPress block theme.
- Homepage block patterns:
  - `edupress/hero`
  - `edupress/features`
  - `edupress/announcements`
- Base templates and template parts:
  - `templates/front-page.html`
  - `templates/home.html`
  - `templates/index.html`
  - `templates/page.html`
  - `parts/header.html`
  - `parts/footer.html`
- `theme.json` design tokens and base typography.
