# Database Schema

This directory contains schema files for managing the installation, upgrading, and uninstallation of the Moodle plugin's database, along with custom database interactions and data cleanup.

## Files

### install.xml
- Defines tables, fields, keys, and relationships.
- Automatically read during installation to create database tables.
- The [Moodle XMLDB Editor](https://moodledev.io/general/development/tools/xmldb) ensures compatibility with Moodle's database structure by adhering to the XMLDB schema standards.

### install.php (optional)
- Runs during installation to handle additional setup tasks.
- Common uses: initializing default settings, creating extra tables, or pre-loading data.
- Moodle automatically runs this file if it exists.

### upgradelib.php (optional)
- Contains functions for upgrading the database schema.
- Automatically called by Moodle during upgrades.

### uninstall.php (optional)
- Handles data cleanup when uninstalling the plugin.

### db_manager.php
- **Location**: `classes/db_manager.php`
- Manages database interactions (CRUD) and encapsulates logic for easier maintenance.

The `db_manager.php` file simplifies database interactions, schema changes, and SQL queries. It's similar to Moodle's [`moodle_database.php`](https://github.com/moodle/moodle/blob/MOODLE_405_STABLE/lib/dml/moodle_database.php), allowing for more efficient database management.

Some widely used plugins rely on methods like those in `db_manager.php`, especially for reporting, user management, and analytics.

### Examples of widely used plugins using database management functions:

- **Configurable Reports**  
  Handles database queries in files like `plugin.class.php`, using methods like `$DB->get_record`. More details can be found in `/block_configurable_reports/plugin.class.php`. This plugin integrates custom SQL logic directly in its core files, such as `/adhocquery.php`.

  [Configurable Reports GitHub Repository](https://github.com/jleyva/moodle-block_configurablereports)

- **Ad-hoc Database Queries**  
  A plugin for custom database queries, typically using `$DB` methods for flexible data management.

  [Ad-hoc Database Queries GitHub Repository](https://github.com/moodleou/moodle-report_customsql)

- **Attendance Plugin**  
  Tracks session records using Moodle's DB methods, with key files like `/attendance/lib.php` and `/attendance/locallib.php` handling data retrieval and storage.

  [Attendance Plugin GitHub Repository](https://github.com/danmarsden/moodle-mod_attendance)

## Best practices
- Keep `install.xml` simple and follow Moodle’s XMLDB schema standards.
- Use `upgradelib.php` for version-specific database changes.
- Document schema changes for future reference.

## Resources
- [Data Manipulation API](https://moodledev.io/docs/4.5/apis/core/dml)
- [Moodle XMLDB Documentation](https://docs.moodle.org/dev/XMLDB)
- [Plugin Development Guidelines](https://docs.moodle.org/dev/Plugin_contribution)
