# Magento 2 Repository Pattern

### From 
 https://www.thecoachsmb.com/display-data-from-database-on-frontend-in-magento2 
 
 with changes ...

## Api Layer

```
 app\code\Thecoachsmb\Mymodule\Api\Data\ItemInterface.php
```

```
 app\code\Thecoachsmb\Mymodule\Api\ItemRepositoryInterface.php
```

### Model Layer

```
 app\code\Thecoachsmb\Mymodule\Model\ResourceModel\Item\Collection.php
```

```
 app\code\Thecoachsmb\Mymodule\Model\ResourceModel\Item.php
```

```
 app\code\Thecoachsmb\Mymodule\Model\Item.php
```

```
 app\code\Thecoachsmb\Mymodule\Model\ItemRepository.php
```

### di.xml

```
 app\code\Thecoachsmb\Mymodule\etc\di.xml
```

### webapi.xml

```
 app\code\Thecoachsmb\Mymodule\etc\webapi.xml
```

### Sample API call

```
 POST {domain_url}/rest/V1/article
```
```
Raw json data

{
    "article": {
        "title": "test",
        "content": "test"
    }
}
```

### Sample ajax call

```
 app\code\Thecoachsmb\Mymodule\view\frontend\templates\view.phtml
```
