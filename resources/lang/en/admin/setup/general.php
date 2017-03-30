<?php

return array(
	'create_user'			=> 'Create a User',
	'create_database_tables' => 'Create Database Tables',
	'config_file' => 'Config File',
	'config_file_exposed_text' => 'Sweet. It does not look like your <code>.env</code> file is exposed to the outside world. (You should double check this in a browser though. You do not ever want anyone able to see that file. Ever. Ever ever.) <a href="../../.env">Click here to check now</a> (This should return a file not found or forbidden error.)',
	'config_file_notexposed_text' => 'Please make sure your <code>.env</code>. You do not ever want anyone able to see that file. Ever. Ever ever.  <a href="../../.env">Click here to check now</a> (This should return a file not found or forbidden error.)',
	'database'			=> 'Database',
	'database_connected_text' => 'Great work! Connected to ',
	'database_notconnected_text1' => 'Oh! Looks like we can not connect to your database. Please update your database settings in your  <code>.env</code> file. Your database says: ',
	'file_owner' => 'File Owner',
	'image_library' => 'Image Library',
	'image_library_correct_text' => 'GD is installed. Go you!',
	'image_library_incorrect_text' => 'The GD library is not installed. While this will not prevent the system from working, you will not be able to generate labels or upload images.',
	'main_info_title'	=> 'Pre-Flight Check',
	'main_info_text'	=> 'This page will do a system check to make sure your configuration looks correct. We will add your first user on the next page.',
	'permisions_writable_text' => 'Yippee! Your app storage directory seems writable.',
	'permisions_notwritable_text' => 'Uh-oh. Your <code>{{ storage_path() }}</code> directory (or sub-directories within) are not writable by the web-server. Those directories need to be writable by the web server in order for the app to work.',
	'url_valid_text' => 'That URL looks right! Good job!',
	'url_notvalid_text1' => 'Uh oh! Snipe-IT thinks your URL is ', 
	'url_notvalid_text2' => ', but your real URL is ',
	'url_notvalid_text3' => 'Please update your <code>APP_URL</code> settings in your  <code>.env</code> file.',


	'nothing_to_migrate' => 'There was nothing to migrate. Your database tables were already set up!',
	'database_created' => 'Your database tables have been created',
	'migration_output' => 'Migration output: ',
	'email_credentials_text' => 'Email my credentials to the email address above',
	'email_credentials' => 'Email credentials',
	'admin_added' => 'Success! Your admin user has been added!',
	'click_to_login' => 'Click here to go to your app login! ',
	'summary' => 'Summary',
);
