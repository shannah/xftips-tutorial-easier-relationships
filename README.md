# Xataface-Tips Tutorial: Making Adding/Removing Related Records Easier

This repository provides the source code that accompanies [this blog post]http://xataface-tips.blogspot.ca/2013/09/making-addingremoving-related-records.html)  It uses
branches for different versions of the app, each branch demonstrating a different way of using
relationships in a Xataface application.

## Installation

1. Check out the branch you want to work with from Github.
2. Either copy or symlink a Xataface distribution as the "xataface" directory directly inside the app.
3. Make sure the templates_c directory is writable by the webserver.
4. Create an empty database for the app.
5. Copy the conf.db.ini-sample file to conf.db.ini and change the connection information to connect
	to your database.
	
## Switching Branches

Different branches of this repo use different database structures.  When you first run the app, it will
execute the update_1() method in the conf/Installer.php to create the tables of the database.  Since
this will conflict for different branches, you should use a different database for each branch if you 
are setting tests for each version simulataneously.