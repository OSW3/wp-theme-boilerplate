# Wordpress Theme Boilerplate

## The structure

```
wp-theme-boilerplate/
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── images/
│   └── js/
│       └── main.js
├── bootstrap/
│   ├── bootstrap.php
│   ├── index.php
│   ├── install.php
│   └── setup.php
├── config/
│   ├── assets.php
│   ├── config.php
│   ├── menus.php
│   └── pages.php
├── functions/
│   └── *.php
├── templates/
│   └── *.php
├── 404.php
├── archive.php
├── comments.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── search.php
├── searchform.php
├── sidebar.php
├── single.php
└── style.css
```

### The `assets` directory

The `assets` directory can store assets of your theme like `css`, `js`, `images`, ...


### The `bootstrap` directory



### The `config` directory


### The `functions` directory


### The `templates` directory


## Configuration

### Add assets


### Create pages on theme activation

#### 1. Create the template

Create your template file `templates/example-page.php`.

```php
<?php
// Template Name: Example Page

echo "Hello Wordpress";
```

#### 2. Delare the page

Add the new page on the `$pages` array of `config/pages.php`

```php
$pages = [
    [
        'title' => 'Example Page',
        'slug'  => 'example-page',
        'template' => 'example-page.php'
    ],
];
```

##### Page declaration parameters

- `title`
- `slug`
- `template`
- `content`

### Create menus on theme activation
