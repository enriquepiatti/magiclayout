magiclayout
===========
MVVM based on Magento Layout design
If you know how Magento works you probably love how it implemented the MVVM pattern, the View system in magento is very flexible and customizable.
Now you can use it inside any non-magento project too.

Installation:
------------------
If your framework support PSR-0 autoloading, just put these classes on the correct folder.
If your framework doesn't support PSR-0 then you probably need to register an extra autoloader (or include the classes manually)

Kohana example:
create a folder inside /modules, and put the /Mage folder inside /classes:
for example: /modules/magiclayout/classes/Mage/Layout/*


How to use it
-----------------
read/learn how it works in Magento, is basically the same :)
you can set the basic configuration inside Mage/Layout/config.php
check test.php for a simple example