# **PHP Table Builder by Cleyam**

This PHP class will help you easily create HTML tables with two methods.

## **How to setup**

* Copy the /vendor directory inside your project.


## **Working with the Table Builder**

To create a table :

1-  Require/Include/Autoload the TableBuilder class in your file.

2-	Instantiate a new object with the TableBuilder class wherever you want in your HTML, within PHP tags. You can set an `id` and css `class` for said table in the parameters, which are empty by default.

Exemple
```php
$newTable = new TableBuilder('id', 'css classes');
```
 
3-	For each column you need in the table, use the `newCol()` method to set the values you want to use, then when you are done, echo the table via the `createTable()` method.

Exemple
```php
    $newTable->newColumn('name', ['Johnson', 'Doe', 'Spencer']);
    $newTable->newColumn('surname', ['David', 'John', 'Phill']);
    $newTable->newColumn('age', ['25', '28', '42']);
    echo $newTable->createTable();
```


## **Methods**

* #### newCol
This method will automatically setup a new key/values array inside the $table attribute of the class. It will later be used to generate the table.

`colName` - The name of your column, which will become the tr tag in your theader.

`colValues` - The values of the column, which will become the td tags in your tbody.


* #### createTable
This method will return the HTML table with all the values previously setup with newCol(). You can use an echo to display it in your HTML.

`theadClass` - Empty by default. Let you setup the css classes of your thead tag.

`tbodyClass` - Empty by default. Let you setup the css classes of your tbody tag.

`trClass` - Empty by default. Let you setup the css classes of your tr tags.

`trOddClass` - Empty by default. Let you setup the css classes of your odd tr tags.

`trEvenClass` - Empty by default. Let you setup the css classes of your even tr tags.
