# Wordpress composer skeleton

This is a simple plug-n-play skeleton of a git-friendly Wordpress composer installation. Inspired by https://github.com/markjaquith/WordPress-Skeleton

# Usage

To get started using it, use the `create-project` composer command:

```
composer create-project the-jj/wordpress-composer-skeleton
```

After that, copy `config/sample.secure-config.php` to `config/secure-config.php` and set up configuration inside.

That's it! Now just run the regular Wordpress installer by visiting your Wordpress homepage.

Additionally, you can initialize git repository and configure it as you wish (existing .gitignore provides a good starting point).

---

# Resources:
* https://roots.io/using-composer-with-wordpress/
* https://davidwinter.me/install-and-manage-wordpress-with-composer/
* http://composer.rarst.net/recipe/site-stack

# Thanks to:
* [John P. Bloch](https://github.com/johnpbloch/wordpress)
* [Andrey “Rarst” Savchenko](http://composer.rarst.net/)

---

# License:

MIT