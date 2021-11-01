# Wordpress Theme Boilerplate

## The structure

```txt
wp-theme-boilerplate/
├── app/
│   ├── assets.php
│   ├── boot.php
│   ├── config.php
│   ├── functions.php
│   ├── install.php
│   ├── posttypes.php
│   └── setup.php
├── assets/
│   ├── favicon/
│   │   ├── favicon.ico
│   │   └── favicon.png
│   ├── fonts/
│   ├── icons/
│   ├── images/
│   ├── scripts/
│   │   └── main.js
│   └── styles/
│       └── main.css
├── components/
│   ├── xxx.php
│   └── xxx.php
├── config/
│   ├── admin.php
│   ├── assets.php
│   ├── categories.php
│   ├── locales.php
│   ├── menus.php
│   ├── pages.php
│   ├── posts.php
│   └── tags.php
├── functions/
│   └── *.php
├── resources/
│   └── AffinityDesigner/
│       ├── favicon.afdesign
│       ├── logo.afdesign
│       └── screenshot.afdesign
│   └── PSD/
│       ├── favicon.psd
│       ├── logo.psd
│       └── screenshot.psd
├── templates/
│   └── *.php
├── 404.php
├── archive.php
├── attachment.php
├── author.php
├── category.php
├── comments.php
├── contact.php
├── custom-dynamic.php
├── custom-static.php
├── date.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── home.php
├── index.php
├── page.php
├── screenshot.jpg
├── search.php
├── searchform.php
├── sidebar.php
├── single.php
├── singular.php
├── style.css
├── tag.php
└── taxonomies.php
```

### The `app` directory

The `app` directory content files of plugin core.

### The `assets` directory

The `assets` directory can store assets of your theme like `css`, `js`, `images`, ...

### The `components` directory

### The `config` directory

### The `functions` directory

### The `resources` directory

The `resources` directory content some resources files like photoshop patterns.

### The `template-part` directory

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

### Set the permalink structure

Change the constant `PERMALINK_STRUCTURE`

```php
define("PERMALINK_STRUCTURE", (string) "/%postname%/");
```
