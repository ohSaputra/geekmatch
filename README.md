# GeekMatch

This is a sample project using [Wordpress](https://wordpress.org/) and sticking to [GITHUB API](http://api.github.com).

## How to Run

### Setting up your Apache Web Server
You need Apache Web server to run this project e.g ([XAMP](https://www.apachefriends.org/index.html), [MAMP](https://www.mamp.info/en/), [WAMP](http://www.wampserver.com/en/), or any Web Server tools)
Head into your Web Server Folder and Clone [GeekMatch](https://github.com/ohSaputra/geekmatch)

### Setting up the Database
Make a new Database and name it to `c88-micro`
Download and import [this mysql database](https://drive.google.com/file/d/0ByScHb2LD3zIbFdHWWF6a1pxUE0/view?usp=sharing) to your DBMS system
Head into the project and edit `wp-config.php`:

```
define('DB_NAME', 'c88-micro');

/** Your MySQL database username */
define('DB_USER', 'root');

/** Your MySQL database password */
define('DB_PASSWORD', '');

/** Your MySQL hostname */
define('DB_HOST', 'localhost');
```

### Run your Web Server and Mysql
Use your Apache tools to run your Web Server and Mysql Database.

**Thats it!**
**Hope it works well!**
