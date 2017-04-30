Collection-Object 
=========================
Collections to use as objects for lists.  
Can convert arrays to collections and collections to arrays.  
Collections are iterable.

Installation
------------------
composer require mibexx/collection 

Configuration
-----------------
There is no configuration needed

Usage
-----------------
Convert array to collection:

```php
use mibexx\collection\Collection\Collection;
use mibexx\collection\Parser\CollectionParser;

$list = [
    'foo' => 'bar',
    'fuzz' => [
        'foo' => 'buzz'
    ]
];

$parser = new CollectionParser();
$collection = new Collection();
$parser->convertToCollection($list, $collection);
 
echo $collection->get('foo')->get(); // prints bar
echo $collection->get('fuzz')->get('foo')->get(); // prints buzz
```

Create collection and convert to array:
```php
use mibexx\collection\Collection\Collection;
use mibexx\collection\Parser\ArrayParser;

$parser = new ArrayParser();
$collection = new Collection();

$fuzz = new Collection();
$fuzz->set('foo', new SimpleElement('buzz'));

$collection->set('foo', new SimpleElement('bar'));
$collection->set('fuzz', new CollectionElement($fuzz));

$newList = $parser->convertToArray($collection);

print_r($newList);
/* equal to:
array(
    'foo' => 'bar',
    'fuzz' => [
        'foo' => 'buzz'
    ]
)
*/
```