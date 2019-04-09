![Licence MIT](https://img.shields.io/github/license/francis94c/w3css.svg) ![Splint](https://img.shields.io/badge/splint--ci-francis94c%2Fw3css-orange.svg) ![Lates Release](https://img.shields.io/github/release/francis94c/w3css.svg) ![Commits](https://img.shields.io/github/last-commit/francis94c/w3css.svg)

# w3css #

W3.CSS is a modern CSS framework with built-in responsiveness. It supports responsive mobile first design by default, and it is smaller and faster than similar CSS frameworks.

W3.CSS can also speed up and simplify web development because it is easier to learn, and easier to use than other CSS frameworks.

W3.CSS has some classes that can be combined with multiple DOM objects to produce several UI components.

This library's focus is in abstracting these nested DOM components away into PHP in Code Igniter.

## Features/Components ##

* Tables
* Progress Bar

## Installation ##

To install, download and install Splint from <https://splint.cynobit.com/downloads/splint> and then run the below from your Code Igniter project root

```bash
splint install francis94c/w3css
```

## Loading ##

From anywhere you can access the ```CI``` instance

```php
$this->load->splint("francis94c/w3css", "+W3CSS", null, "w3css");
```

## Usage ##

### Table ###

```php
$columns = array("S/N", "Item", "Description");
$rows = array(
    array(1, "Broom", "For Seeeping"),
    array(2, "Data", "For Browsing"),
    array(3, "Git", "For version Control"),
    array(4, "Food", "What we eat")
);
$this->w3css->renderTable($columns, $rows);
```

![Table](https://res.cloudinary.com/francis94c/image/upload/v1554820791/table.png)

### Progress Bar ###

```php
$ci->w3css->renderProgressBar(30, "w3-brown");
```

![Progress Bar](https://res.cloudinary.com/francis94c/image/upload/v1554822404/progress_bar.png)

## Wiki ##

https://github.com/francis94c/w3css/wiki
