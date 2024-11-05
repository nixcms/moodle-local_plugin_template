# Database Schema

This directory contains the schema files needed for installing and upgrading the Moodle plugin's database.

## Files

### install.xml
- Defines tables, fields, keys, and relationships.
- Automatically read during plugin installation to create database tables.

### install.php (optional)
- Executed during the installation of the plugin. It can be used to perform additional setup tasks that are not handled by the `install.xml` file. 
- Common uses include initializing default settings, creating additional database tables, or pre-loading data.
- When the plugin is installed, Moodle will automatically run the `install.php` file if it exists. You can define any necessary setup logic here to ensure that your plugin is fully configured upon installation.

### upgradelib.php (optional)
- Contains functions for upgrading the database schema across versions.
- Moodle will automatically call these functions during upgrades.

### uninstall.php (optional)
- Executes logic for data cleanup when uninstalling the plugin.

### db_manager.php
- Manages database interactions (CRUD operations) for the plugin.
- Encapsulates database logic for easier maintenance.

## Best Practices

- Keep `install.xml` simple and follow Moodle’s XMLDB schema.
- Use `upgradelib.php` for version-specific schema changes.
- Document schema changes for future reference.

## Resources
- [Moodle XMLDB Documentation](https://docs.moodle.org/dev/XMLDB)
- [Plugin Development Guidelines](https://docs.moodle.org/dev/Plugin_contribution)

