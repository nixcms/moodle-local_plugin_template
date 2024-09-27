# Moodle plugin template

<mark>STATUS: This is a work in progress and supports a discussion of best practices.</mark>

TODO:
- see notes at https://github.com/moodlehq/moodle-docker?tab=readme-ov-file
- blocker https://github.com/moodlehq/moodle-php-apache/issues/188 or add a monthly maintenance step or a cron job CI to check for new versions and update our docker-compose file
- workaround https://github.com/moodlehq/moodle-docker/issues/287#issuecomment-2355056822
- always do testing https://github.com/moodlehq/moodle-docker/issues/304
- https://moodledev.io/general/development/tools/generator
- how to compile JS https://moodledev.io/general/development/tools/nodejs
- install notes https://moodledev.io/general/development/tools/nodejs
- build strategy https://github.com/marcusgreen/moodle-qbank_bulktags/blob/main/.github/workflows/moodle-ci.yml
  - https://moodlehq.github.io/moodle-plugin-ci/

Use this template as a starting point for any Moodle plugin that you want other people to include in their projects.

EXAMPLES:

MARKETING:

- Post to https://moodle.org/mod/forum/discuss.php?d=462107#p1855356
- Post to https://github.com/sebsoftnl/moodle-block_coupon/issues/24
- Post to new Moodle forum thread
- 



## Features

Your new Moodle plugin will immediately have working code, build system and implement these best practices which all modules should use:

- [ ] Setup, build and testing instructions for people using your modules
- [ ] Automated testing that runs on GitHub Actions
- [ ] Localization for all strings
- [ ] Unit tests for all classes
- [ ] Behat tests for all features
- [ ] Automated code style checks
- [ ] Automated code coverage checks
- [ ] Automated static analysis checks
- [ ] Logging for all actions
- [ ] Backup and restore support

This repository is a fully-functioning plugin demonstrating the best practices by implementing toy functionality with these features. You can rip these features out or modify them. But if you need these kinds of features, there are implemented here as an example, including references to best practices.

- [ ] **Database initialization and upgrade** scripts
- [ ] **Dashboard Context block** (`CONTEXT_USER`) to display content on student dashboards ("My home")
- [ ] **Course content block** (`CONTEXT_COURSE`) to display content on course pages
- [ ] **Activity block** (`CONTEXT_MODULE`) to display content on activity pages
- [ ] **Settings page** to configure the plugin using the standard Moodle admin settings interface
- [ ] **Admin page** to access functionality of this plugin that only administrators should see
- [ ] **Scheduled task** to run background processing
- [ ] **Custom JavaScript** for the user interface, which is built using (AMD??)


## Make your own template

Here is what you need to do to make your own Moodle plugin:

- [ ] Fork this repository:
  - The name of your repository must follow the format `moodle-<type>_<pluginname>`:
    - `<type>` is one of the "component names" listed in the [Moodle plugin types documentation](https://moodledev.io/docs/apis/plugintypes)
    - `<pluginname>` begins with a lowercase letter; followed by lowercase letters, numbers and underscores (but no consecutive underscores); and ends with a lowercase letter or number (as per [requirements](https://moodledev.io/docs/apis/plugintypes))
    - Best practice: We do not see documentation that this exact repository name is required, nor [consistent usage in the wild](https://github.com/search?q=path%3A%2Fdb%2Finstall.xml&type=code&ref=advsearch), nevertheless we assert this is best practice.
- [ ] ...
- [ ] Edit the README contents below, starting at "High five Moodle plugin" to describe your product instead of the high five product.
- [ ] Delete this line from your README and everything above it. Publish your repository. Release version 1.0.0!

# High Five Moodle Plugin

This plugin implements these functions using a "high-five" workflow that end-users will see.

Supported Moodle versions: [[ LINK TO A BUILD BADGE FOR EACH SUPPORTED VERSION ]]

## Features

Here's what you get with *High Five Moodle Plugin*:

* Feature [[ ACTION PHOTOS ]]

## Quick start testing setup

Run a test Moodle site with *High Five Moodle Plugin* on your own computer in under 5 minutes. Zero programming or Moodle experience required.

1. Install a Docker system
   1. On macOS we recommend the open source [Homebrew package manager](https://brew.sh) and then [install Colima](https://github.com/abiosoft/colima?tab=readme-ov-file#installation) and upgrade or [start Colima](https://github.com/abiosoft/colima?tab=readme-ov-file#usage)
   2. On Windows (TODO)
   3. On Linux (TODO)


2. Clone this repository

   ```sh
   cd ~/Developer
   git clone https://github.com/fulldecent/moodle-local_plugin_template.git
   cd moodle-local_plugin_template
   ```

3. Start the Docker container

   ```sh
   cd test
   docker-compose up
   ```

4. Your site is now live, the admin login and password are XXX, access this plugin's features starting at XXX

5. Show down Docker:

   1. To completely kill your test site so that next time you will start with a blank slate:

      ```sh
      docker-compose down --volumes --remove-orphans
      ```

   2. Or to take it offline but the next time you can get back to the state you are in now:

      ```sh
      ???
      ```

      and to get back into it:

      ```sh
      ???
      ```

      

