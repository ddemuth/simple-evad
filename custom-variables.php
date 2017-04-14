<?php
/*
 *Used to declare your own variables to be used through your Wordpress Templates 
 */

$uploads = wp_upload_dir(); // Array of key => value pairs
/*
Now use: echo $uploads['baseurl']
	$uploads now contains something like the following (if successful)
	Array ( 
		[path] => C:\path\to\wordpress\wp-content\uploads\2010\05 
		[url] => http://example.com/wp-content/uploads/2010/05 
		[subdir] => /2010/05 
		[basedir] => C:\path\to\wordpress\wp-content\uploads 
		[baseurl] => http://example.com/wp-content/uploads 
		[error] => 
	) 
	// Descriptions
	[path] - base directory and sub directory or full path to upload directory.
	[url] - base url and sub directory or absolute URL to upload directory.
	[subdir] - sub directory if uploads use year/month folders option is on.
	[basedir] - path without subdir.
	[baseurl] - URL path without subdir.
	[error] - set to false.
*/

?>