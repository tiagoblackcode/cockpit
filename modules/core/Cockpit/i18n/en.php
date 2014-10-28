<?php

return [

    '@meta' => [

        'language' => 'English',
        'author'   => 'Artur Heinze',

        'date' => [
            'shortdays'   => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            'longdays'    => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            'shortmonths' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'longmonths'  => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
        ]
    ],

/*

    // Common
    'Dashboard' => '',
    'General' => '',
    'Settings' => '',
    'Logout' => '',
    'Info' => '',
    'Filter by name...' => '',
    'Save' => '',
    'Cancel' => '',
    'Entry' => '',
    'Entries' => '',
    'Field' => '',
    'Fields' => '',
    'Date' => '',
    'Latest' => '',
    'Created' => '',
    'Modified' => '',
    'Today' => '',
    'Info' => '',
    'Language' => '',
    'System' => '',
    'Are you sure?' => '',
    'Uuups, something went wrong...' => '',

    // Activity
    'Activity' => '',
    'No events logged.' => '',
    '%s logged in' => '',

    // Search
    'Search...'=> '',
    'Search Results'=> '',
    'No results found'=> '',

    // Login
    'Authenticate Please!' => '',
    'Authenticate' => '',
    'Login failed' => '',
    'Welcome back!' => '',

    // Accounts
    'Account'  => '',
    'Accounts' => '',
    'Name' => '',
    'Username' => '',
    'Email' => '',
    'Password' => '',
    'New Password' => '',
    'Create account' => '',
    'Leave the password field empty to keep your current password.' => '',
    'Edit account' => '',
    'Edit account settings' => '',
    'Delete account' => '',
    'Account saved!' => '',
    'Account removed' => '',
    'You can\'t delete yourself!' => '',
    'You can\'t delete admin accounts!' => '',

    'Groups' => '',
    'Group' => '',
    'Manage account groups and permissions' => '',
    'Add group' => '',
    'Please enter a groupname' => '',
    'Group saved!' => '',
    'Group removed!' => '',
    'Access' => '',
    'Media root path' => '',
    'Relative to' => '',

    // Settings
    'API' => '',
    'Registry' => '',
    'Token' => '',
    'You have no api token generated yet.' => '',
    'Generate api token' => '',
    'The registry is just a global key/value storage you can reuse as global options for your app or site.' => '',
    'The registry is empty.' => '',
    'Access the registry values' => '',

    // Addons
    'Addons' => '',
    'No additional addons installed.' => '',

    // Datastore
    'Datastore' => '',
    'No tables yet.' => '',
    'Add table' => '',
    'Create a table' => '',
    'Table' => '',
    'Manage table' => '',
    'Delete table' => '',
    'No Entries' => '',
    'Actions' => '',
    'Export data' => '',
    'Empty table' => '',

    // Updater
    'Update' => '',
    'Getting information...' => '',

    // Collections
    'Collections' => '',
    'Collection' => '',
    'Show entries' => '',
    'Create new entry' => '',
    'Add collection' => '',
    'Edit collection' => '',
    'Delete collection' => '',
    'You don\'t have any collections created.' => '',
    'Create a collection' => '',
    'Save Collection' => '',
    'It seems you don\'t have any entries created.' => '',
    'Field name' => '',
    'Add entry' => '',
    'Edit entry' => '',
    'Delete entry' => '',
    'Delete entries' => '',
    'Filter entries...' => '',
    'Reset filter' => '',
    'No entries found.' => '',
    'This field is required.' => '',
    'It seems you don\'t have any fields created.' => '',
    'Field type' => '',
    'options...' => '',
    'Code syntax' => '',
    'default value...' => '',
    'Required' => '',
    'Separate different options by comma' => '',
    'Goto entries' => '',
    'Fields on entries list page' => '',
    'Order entries on list page' => '',
    'created' => '',
    'modified' => '',
    'descending' => '',
    'ascending' => '',
    'Collection removed' => '',
    'Collection saved!' => '',
    'Entry removed' => '',
    'Entry saved!' => '',
    'Load more...' => '',

    // Mediamanager
    'Mediamanager' => '',
    'Bookmarks' => '',
    'Folders' => '',
    'Folder' => '',
    'Files' => '',
    'File' => '',
    'Upload files' => '',
    'You have nothing bookmarked.' => '',
    'Table mode' => '',
    'List mode' => '',
    'Folders hidden via filter' => '',
    'Files hidden via filter' => '',
    'All' => '',
    'Show files + directories' => '',
    'Show only directories' => '',
    'Show only files' => '',
    'Bookmark folder' => '',
    'Rename folder' => '',
    'Delete folder' => '',
    'Bookmark file' => '',
    'Rename file' => '',
    'Delete file' => '',
    'Download file' => '',
    'Size' => '',
    'Last modified' => '',
    'This folder is empty.' => '',
    'File(s) uploaded.' => '',
    'Save file' => '',
    'Close file' => '',
    'Do you really want to remove %s ?' => '',
    'This file is not writable!' => '',
    'Please enter new name:' => '',
    'Please enter name:' => '',
    '%s is already bookmarked.' => '',
    '%s bookmarked.' => '',
    'Do you really want to remove %s ?' => '',
    'Please enter a name:' => '',
    'Please enter a filename:' => '',
    'Nothing selected' => '',
    'Find files...' => '',

    // Regions
    'Regions' => '',
    'Region' => '',
    'Add region' => '',
    'Create a region' => '',
    'Create groups to organize your regions.' => '',
    'Group name' => 'Naam groep',
    'Groups updated' => 'Groepen gewijzigd',
    'All regions' => '',
    'Edit region' => '',
    'Delete region' => '',
    'You don\'t have any regions created.' => '',
    'Form' => '',
    'Template' => '',
    'Region fields' => '',
    'Form fields' => '',
    'Manage form' => '',
    'Done' => '',
    'This region has no fields yet.' => '',
    'Add field' => '',
    'Insert form field' => '',
    'You have no fields added.' => '',
    'Embed region snippet' => '',
    'Save Region' => '',
    'Region removed' => '',
    'Region saved!' => '',
    'Show all regions' => '',

    // Versions
    'Versions' => '',
    'Version' => '',
    'Restore this version' => '',
    'Clear version history' => '',
    'Close versions' => '',
    'Restoring version...' => '',
    'Version history cleared!' => '',

    // Backups
    'Backups' => '',
    'You don\'t have any backups created.' => '',
    'Create a new backup' => '',
    'Backups are located here' => '',
    'Download backup' => '',
    'Delete backup' => '',
    'Creating backup...' => '',
    'Backup created' => '',
    'Backup deleted' => '',

    // Forms
    'Forms' => '',
    'Form' => '',
    'Add form' => '',
    'Create a form' => '',
    'Edit form' => '',
    'Delete form' => '',
    'You don\'t have any forms created.' => '',
    'Email form data to this adress' => '',
    'Leave the field empty if you don\'t want to recieve any form data via email.' => '',
    'Save form data' => '',
    'Save form' => '',
    'Form snippet example' => '',
    'It is important to prefix the form fields with <strong>form[...]</strong>.' => '',
    'It seems you don\'t have any form entries.' => '',
    'Form data' => '',
    'Form saved!' => '',
    'Form removed' => '',

    // Galleries
    'Galleries' => '',
    'Gallery' => '',
    'You don\'t have any galleries created.' => '',
    'All galleries' => '',
    'Add gallery' => '',
    'Create a gallery' => '',
    'Edit gallery' => '',
    'Delete gallery' => '',
    'Gallery saved!' => '',
    'Gallery removed' => '',
    'Select single image' => '',
    'Import images from folder' => '',
    'Import images from folder' => '',
    'No images.' => '',
    'You don\'t have any images in this gallery.' => '',
    'Meta fields' => '',
    'No meta fields defined.' => '',
    'Save gallery' => '',
    '%s image(s) imported' => '',
    'Create groups to organize your galleries.' => '',
    'Create new group' => '',
    'Create new group' => '',
    'Import' => 'Importer',
    'Manage meta fields' => '',
    'Add images to gallery' => '',
    'Single image' => '',
    'Images from folder' => '',
    'Show all galleries' => ''
*/
];
