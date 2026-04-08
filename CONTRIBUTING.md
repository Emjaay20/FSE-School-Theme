# Contributing to EduPress

Thanks for your interest in improving EduPress.

## Development Setup

1. Clone the repository.
2. Place the theme in your WordPress install at:
   `wp-content/themes/Edupress-Theme`
3. Activate the theme in WordPress admin.
4. Use Appearance → Editor to validate template and pattern behavior.

## Branch and Commit Style

- Use short feature branches when possible.
- Keep commits focused and atomic.
- Suggested commit style:
  - `feat: add archive template`
  - `fix: normalize features pattern block markup`
  - `docs: update installation notes`

## Theme Standards

- Keep all block markup valid and canonical for Gutenberg.
- Prefer translation-ready output in PHP pattern files (`esc_html__`, `esc_attr__`).
- Avoid hardcoded external dependencies when local assets can be used.
- Keep styling tokens aligned with `theme.json` palette and typography.

## Testing Checklist

Before opening a PR:

- Verify no block validation errors in Site Editor.
- Check Front Page, Home, Single, Archive, Search, and 404 templates.
- Confirm header/footer render correctly on all templates.
- Confirm pattern insertions work on a clean WordPress install.
- Confirm README and changelog reflect your updates.

## Pull Requests

Please include:

- What changed
- Why it changed
- Screenshots (if UI-related)
- Any migration/reset steps (for example: reset template overrides)

## Reporting Issues

When filing an issue, include:

- WordPress version
- PHP version
- Steps to reproduce
- Expected vs actual behavior
- Screenshot of Site Editor error if applicable
