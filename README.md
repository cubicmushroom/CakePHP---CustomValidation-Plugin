CakePHP - CustomValidation-Plugin
=================================

CakePHP 2.0 Plugin to add additional, custom model validation rules


## Quick Start Guide

1. Add the Plugin files to `<app>/Plugin/` directory
1. Enable the plugin by adding .`CakePlugin::load('CustomValidation');` to your `<app>/Config/bootstrap.php` file.
1. Include the rules in your Model by adding `'CustomValidation.Rules


## Rules
# uniqueForFields


    Important Note: This is not working yet, as couldn't work out how to get access to the parent records ID during validation (as may be before the record is saved!)

This validation rule validates that the value of this fields is unique when combined with the foreign key for an associated model.

**Note:** Have to save parent record 1st & include it's ID when saving the associated records