# Url
A thin wrapper over the library sabre/uri, package for framework Laravel

## Installation

Via Composer

``` bash
$ composer require savin/url
```

 
## Usage


```

    $url = Url::parse('https://www.google.com/search?q=curent+time');
    
    var_dump($url);

    /*
        array(7) {
          ["scheme"]=>
          string(5) "https"
          ["host"]=>
          string(14) "www.google.com"
          ["path"]=>
          string(7) "/search"
          ["query"]=>
          string(13) "q=curent+time"
          ["port"]=>
          NULL
          ["user"]=>
          NULL
          ["fragment"]=>
          NULL
        }
    */
```
