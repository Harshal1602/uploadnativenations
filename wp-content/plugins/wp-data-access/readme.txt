=== WP Data Access - WordPress App, Table and Form Builder plugin ===
Contributors: peterschulznl, maxxschulz, kimmyx, freemius
Tags: table builder, form builder, data table, datatables, table
Tested up to: 6.6
Requires PHP: 7.0
Stable tag: 5.5.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A powerful data-driven WordPress App Builder with an intuitive Table Builder and highly customizable Form Builder

== Description ==
Our data-driven App Builder includes an intuitive Table Builder and a highly customizable Form Builder, with real-time configuration changes. Apps can operate on both the back-end and front-end, with simple authorization management based on WordPress user and role principles. The App Builder supports 35 languages to localize your apps.

== App Builder ==
> Build data-driven apps with an intuitive Table Builder and Form Builder

* Experience the simplicity of app building with our App Wizard
* Generate data tables with the Table Builder
* Manage data with the grid-driven Form Builder
* Customize with ease using the Intuitive Theme Builder
* Create (multi-level) master-detail pages with the Relationship Wizard
* Utilize real-time updatable computed fields through inline fields
* Perform real-time aggregations through inline fields
* Create (conditional) lookups with the Lookup Wizard
* Access numerous global and inline filter options
* Edit data inline seamlessly
* Connect to both local and remote databases
* Integrate with the WordPress media library
* Integrate with WordPress users and roles
* Export to PDF, CSV, JSON, XML, SQL, and Excel
* Manage authorizations with the App Manager
* Run apps on both the back-end and front-end
* Experience real-time build and run functionality
* Enjoy a fully responsive design
* Support manual styling options

== Data Management ==
> Manage local and remote data and databases directly from the WordPress dashboard

* Manage both local and remote data and databases
* Perform global search and replace across multiple databases and tables
* [Import SQL and CSV files, with ZIP support for large files](https://wpdataaccess.com/docs/data-explorer-manage/imports-sql-csv/)
* [Export data in various formats: SQL, CSV, JSON, and XML, with support for large tables](https://wpdataaccess.com/docs/data-explorer-actions/actions/)
* Execute table operations such as rename, copy, truncate, drop, optimize, and alter
* [Access advanced table and column settings including search, geolocation, inline editing, and more](https://wpdataaccess.com/docs/data-explorer-settings/table-and-view-settings/)

== Remote Databases and Remote Data Files ==
> Connect and auto-sync with remote databases and data files

* Compatible with all plugin tools
* [Premium remote connection wizard for easy setup:](https://wpdataaccess.com/docs/remote-connection-wizard/remote-connection-wizard/)
  * Remote Databases: SQL Server, Oracle, PostgreSQL, MariaDB, MySQL, and MS Access (file-based)
  * Remote Data Files: CSV, JSON, and XML files (e.g., sync with Google Sheets)

== SQL Query Builder ==
> Execute SQL queries directly from the WordPress dashboard

* [Work on multiple SQL queries using tabs](https://wpdataaccess.com/docs/query-builder/query-builder-tutorials/)
* Save and reuse queries for data tables and charts
* Protect WordPress table structures and data
* [Interactive Visual Query Builder for users with limited SQL knowledge](https://wpdataaccess.com/docs/query-builder/visual-query-builder/)

== Dashboards and Widgets ==
> Customizable widgets for dashboards (back-end), webpages (front-end), and external websites

* Centralized data management
* Share data widgets anywhere
* Give specific users and user groups access to locked dashboards
* Support for user-created dashboards
* Cost-effective Business Intelligence solution

== Geolocation search ==
> Create searchable geolocation maps from database tables

* Google Maps integration – Seamlessly incorporate Google Maps for geolocation features
* Customizable settings – Tailor map settings for each database table to fit your needs
* [DataTables integration – Combine with DataTables for enhanced functionality](https://wpdataaccess.com/publication-using-geolocation/)
* [Adjustable radius search map – Enable users to perform searches within a customizable radius](https://wpdataaccess.com/demos/geolocation-demo/)

== Charts ==
> Build charts from SQL queries

* Seamless integration with Google Charts
* Compatible with both the Query Builder and Visual Query Builder
* [Select from a variety of chart types using drop-down menus](https://wpdataaccess.com/2022/06/16/chart-demo/)

== Plugin Settings ==
> Detailed settings for managing user interface and behavior

* Tailor your experience with a wide range of detailed settings to control both the user interface and functionality of the plugin

== Legacy Tools ==
> Soon replaced by the App Builder

* Available until at least summer 2025
* Use to maintain old solutions
* Use new App Builder for new projects

== Data Tables (Legacy Tool) ==
> Create professional data tables for back-end and front-end in minutes

* User-friendly and highly customizable
* Fully responsive design
* Extensive styling options with an intuitive [Style Manager](https://wpdataaccess.com/docs/data-tables/extension-manager/)
* Various [searching and sorting algorithms](https://wpdataaccess.com/docs/data-explorer-settings/search-settings/)
* Numerous static and interactive filters including ([search panes](https://wpdataaccess.com/search-panes-demo-without-buttons/), [search forms](https://wpdataaccess.com/publication-search-form-demo/), [search builder](https://wpdataaccess.com/search-builder-demo/) and [more](https://wpdataaccess.com/docs/data-tables-demos-and-tutorials/data-tables-demos/))
* Server-side processing for handling large tables
* Client-side processing for fast search and sorting of smaller tables
* Export options: [CSV, Excel, PDF, and SQL](https://wpdataaccess.com/export-buttons-demo/)
* [Customizable and programmable buttons](https://wpdataaccess.com/docs/data-tables-buttons/data-tables-custom-buttons/)
* Integrated [geolocation search](https://wpdataaccess.com/publication-using-geolocation/)
* Support of custom queries and custom post types

== Data Apps (Legacy Tool) ==
> Build highly customizable data-driven WordPress apps for back-end and front-end

* Automatically generated CRUD pages
* [Customizable through Project Templates](https://wpdataaccess.com/docs/data-apps/projects-and-templates/)
* Lookups with drop-down lists and autocomplete fields
* Master-detail pages for comprehensive data management
* Transform Data Projects into responsive apps with [Data Forms](https://wpdataaccess.com/data-forms-project-demo/)
* [Inline editing capabilities](https://wpdataaccess.com/docs/data-explorer-settings/search-settings/)
* Extensive [search features](https://wpdataaccess.com/docs/data-explorer-settings/search-settings/)
* Integration with WordPress user roles
* Seamless integration with the WordPress media library

== Data Designer (Legacy Tool) ==
> Intuitive interface for creating and managing tables and indexes

* Easily create and modify tables and indexes
* Support for reverse engineering and reconciliation

== Useful Links ==
- [Plugin Website](https://wpdataaccess.com/)
- [Documentation](https://wpdataaccess.com/documentation/)

== Installation ==
(1) Upload the WP Data Access plugin to your WordPress site
(2) Activate the plugin
(3) Navigate to the WP Data Access menu

And you're all set!

== Changelog ==
= 5.5.9 =
* Released 2024-07-30
* Fixed: Localization not available for date columns
* Fixed: Increase specificity table style
* Fixed: Form Builder icon always visible for master-detail relationships
* Fixed: Highlighting not working if inline HTML is enabled
* Fixed: React findDOMNode is deprecated in StrictMode
* Fixed: Invalid data type on column filter
* Fixed: Cannot reorder details
* Fixed: Cannot add column filter for hidden columns
* Fixed: Relationship display type updates not detected
* Fixed: App Manager asking for confirmation after shortcode generation
* Fixed: Inline field settings not applied
* Fixed: Undefined table settings on multi level master-detail
* Fixed: App pages on back-end missing CSS styling
* Moved: Changelog to readme (making it available online)
* Added: New app type "app container" to bundle apps into one main app
* Added: Apps to repository backup and restore
* Added: Tool replacement info.
* Added: Premium color gold to plugin menu icon.
* Added: Tool guide page also containing FAQs
* Added: Let import container wait until all databases are loaded
* Added: Added lookup placeholders to computed fields
* Added: Custom shortcode parameter support
* Added: Make computed field label in Form editable from columns list
* Added: Container ID to increase CSS specificity
* Added: Classname pp-fullscreen to body element when entering full screen mode

= 5.5.7 =
* Released 2024-07-16
* Fixed: Adding a search pane to a column with lookup requires a full table reload
* Fixed: Page scrolls down when keys f, s, t, v pressed in search boxes
* Fixed: Autocomplete not correctly showing for lookup columns with field layout set to filled or standard
* Fixed: Null value in LOV returns an empty list item
* Fixed: Filter mode 'between inclusive' for datetime not working correctly (same results as inclusive)
* Improved: Language files loaded moved to JSON format and loaded at runtime to improve performance
* Improved: Many textual improvements (hints, examples, labels)
* Improved: Uniformized layout and style of all field types and modes
* Improved: Computed field calculations and display
* Added: Several CSS classes for custom styling
* Added: Customize column filters width
* Added: Customize column filters ordering
* Added: Customize default page size
* Added: Customize available page sizes
* Added: Search panes
* Added: Cascading searches for lookups and lovs
* Added: Custom color picker to theme settings
* Added: HTML and JS support to computed fields
* Added: URL parameter support
* Added: Shortcode parameter support
* Added: Ability to disable full screen mode
* Added: Workaround for app preview not loading styles in Divi Visual Builder (showing no preview message instead)
* Updated: Freemius SDK

= 5.5.6 =
* Released 2024-07-02
* Fixed: Lookup search
* Fixed: User can hide column filter by clicking on filter icon even when hiding is disabled
* Fixed: Filter match highlight
* Added: Shortcode parameter to disable builders on front-end
* Added: Show column filters in table column header
* Added: Lookups missing to export
* Added: Computed fields to export
* Added: Filter match highlight to lookup columns
* Added: Column alignment to PDF export
* Added: PDF orientation and style selection
* Added: Full app localization (containing 35 languages)
* Added: Export apps
* Updated: Freemius SDK

= 5.5.5 =
* Released 2024-06-20
* Post fix: Copy app not copying details
* Post fix: New record added twice for m:m relationship
* Fixed: Force user to select at least one column on app creation or update
* Fixed: Force user to select at least one column on lookup creation or update
* Fixed: Force user to select at least one column on relationship creation or update
* Fixed: Plugin does not register lookup changes
* Fixed: Empty detail blocks visible on master insert
* Fixed: Wrong (local) date in data table (converted to UTC)
* Fixed: Row selection toggled on inline editing fields
* Fixed: Builder buttons on detail form visible to non admins
* Fixed: Media Library window appears behind the form when triggered
* Changed: Export table or app name instead of app id
* Added: Copy app link and icon
* Added: Bulk actions for views
* Added: M:m relation to App Builder
* Added: Kill token property to chart widget

= 5.5.4 =
* Released 2024-05-28
* Fixed: Lookup values not shown in exports
* Fixed: Export to pdf adds an empty column
* Fixed: Details not shown to non admin users
* Fixed: View action for tables without primary key and views
* Fixed: Table cell colors incorrect with multiple apps on one page
* Fixed: WordPress media library usage not working on insert
* Fixed: Rename view not working
* Fixed: Drop view not working
* Fixed: Link tooltips in Data Explorer not completely visible
* Fixed: Media type update not working
* Fixed: Server side updates not synced on client
* Fixed: Sending non-updatable fields to server
* Fixed: Column filters empty and not empty not working with lookups
* Fixed: Column positioning not working with full screen master-detail
* Fixed: Reduce margin bottom of error panel in Data Explorer
* Added: Alter table action to new Data Explorer
* Added: Change PDS refresh interval to new Data Explorer
* Added: Manage databases to Data Explorer
* Added: Premium Data Services access to new Data Explorer
* Added: Change font size of input fields, labels and hints
* Added: Monitor updates in App Manager
* Added: Refresh columns button to App Manager
* Added: Adjustable elevation to app containers
* Added: Use WordPress date and time format in tables
* Added: Sync root app theme with detail app theme in real time
* Added: SQL and ZIP file import to Data Explorer
* Added: Bulk actions to Data Explorer
* Added: Elevation to Papers, Cards and App Bars
* Added: Persistent search criteria in Data Explorer and App Builder

= 5.5.3 =
* Released 2024-05-15
* Improved: Column filter support
* Improved: Several builder hints
* Improved: App responsiveness
* Fixed: Cannot use view in lookups
* Fixed: Master-detail key issue
* Fixed: Database column default constraints not used
* Fixed: Lookups not used in global search
* Fixed: Multi select drop down list not working
* Fixed: Position apps list when opening App Builder
* Fixed: Error on column filter change
* Fixed: Cannot open computed field accordion
* Fixed: Column filter between not working
* Fixed: JSON parse error in Data Explorer

= 5.5.2 =
* Released 2024-05-08
* Added: Inherited font family from page
* Added: Show more|less button
* Added: Column default value
* Added: Master-detail display type
* Added: Inline HTML support to table cells
* Added: Examples to setting blocks
* Improved: Relationship configuration
* Improved: Lookup configuration
* Fixed: Date/time localization not working
* Fixed: Prefill parent data in child component
* Fixed: Lookup not respecting required constraint

= 5.5.1 =
* Released 2024-04-19
* Added: 1:1 and 1:n relationships to App Builder
* Fixed: Added client version number to prevent caching old client files
* Fixed: Geomap not working with block-based themes (Ian)
* Updated: Freemius SDK

= 5.5.0 =
* Released 2024-04-18
* Added: Pre-release new App Builder
* Fixed: URL parameter % usage

= 5.4.0 =
* Released 2024-01-25
* Added: Pre-release new Data Explorer
* Added: REST API drop-down multi-select inline search
* Added: REST API drop-down inline search
* Changed: REST API inline search and estimated row count
* Updated: Freemius SDK

= < 5.4.0 =
* See changelog.txt in plugin folder