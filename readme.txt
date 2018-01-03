BAVALOG

The module for receiving and statistical processing, server data, for creating a log file with 
information about visits to the site.

The code block is installed in your index file index.php. The general statistics are written in 
the stat.txt file. All the work is done using Ajax queries in the main.js file that connect, one 
of the five statistics handlers:
1. Statistics by ID
2. Statistics by the query method.
3. Statistics on the referrer.
4. Statistics on the type of browser.
5. Statistics of visits by day.
