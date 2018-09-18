# Dunne Hall Website

This website is being built as the inaugural website of Dunne Hall, a male dorm at the University of Notre Dame. It is currently hosted
[here](https://dunnehall.com).

Of special note is that it makes it easier for non-technical members to update the website, as it draws its textual and gallery content from google docs and caches them locally.

## Getting Started

This website uses HTML, PHP, JS, and CSS. All that is required to run on a localhost is a webserver like WAMP.

If your instance of the website is not at the root, e.g. localhost/dunne/, you can set the PHP/Apache environmental variable DUNNE_HALL_BASE.

As well, once it has been pulled, make sure to run the /cache/~update.php file to pull down the content (make sure PHP has write permissions to that directory too).

## Built With

* [PHP](http://php.net/manual/en/index.php)
* [Bootstrap 4](https://getbootstrap.com/docs/4.0/)
* [jQuery](https://api.jquery.com/)

## Authors
* **John Meyer** - Creator and maintainer
