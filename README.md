# cakephp-money-helper
Money Plugin for CakePHP

The CakePHP Money Plugin helps format currency a little better than the $this->Number->currency helper currently does.

Using the $this->Money->small method, you can format any number to display the money amount in a smaller format possible.

It will strip any ".00" and automatically display the currency as a whole number rather than adding ".00"

e.g. 10.00 becomes $10
9.90 becomes $9.90
100 becomes $100
100.04 becomes $100.04
1000 becomes $1,000
1000.9 becomes $1,000.90

## How to Install

1) Install the plugin to app/Plugin/Money

2) In your app/Config/bootstrap.php load the plugin:

```
CakePlugin::load('Money');
```

Or:

```
CakePlugin::loadAll();
```

3) Load the helper in your controller:

```
public $helpers = array('Money.Money');
```

If you are using the helper site wide, load it in your app/Controller/AppController.php

4) To use the helper in your view, just use:
```
echo $this->Money->small(10);
```