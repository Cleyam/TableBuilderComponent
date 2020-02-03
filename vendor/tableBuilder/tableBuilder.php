<?php

namespace TableBuilder;

class TableBuilder
{
    protected $table = [];
    protected $tableId = "";
    protected $tableClass = "";

    public function __construct($id = "", $class = "")
    {
        $this->setTableId($id);
        $this->setTableClass($class);
    }
    /**
     * Create a new column in the table using the first parameter to set the column title and the second parameter as an array to set the values of said column.
     *
     * @param string $colName
     * @param array $colValues
     */
    public function newCol(string $colName, array $colValues)
    {
        if (!array_key_exists($colName, $this->table)) {
            $this->table[$colName] = [];
        }
        $this->table[$colName] = $colValues;
    }

    /**
     * Return the table
     */
    public function createTable($theadClass='', $tbodyClass='', $trClass='', $trOddClass='odd', $trEvenClass='even')
    {
        $rowLength = 0;
        $createTable = "<table id='$this->tableId' class='$this->tableClass'><thead class='$theadClass'><tr>";
        foreach ($this->table as $key => $val) {
            $createTable .= "<th>$key</th>";
            $rowLength = count($val);
        }
        $createTable .= "</tr></thead><tbody class ='$tbodyClass'>";
        for($tdNumber=0; $tdNumber<$rowLength; $tdNumber++){
            if(($tdNumber+1)%2){
                $createTable .= "<tr class='$trOddClass $trClass'>";
            }else{
                $createTable .= "<tr class='$trEvenClass $trClass'>";
            }
            foreach($this->table as $td){
                $createTable .= "<td>$td[$tdNumber]</td>";
            }
            $createTable .= "</tr>";
        }
        $createTable .= "</tbody></table>";
        return $createTable;
    }

    /**
     * Get the value of tableClass
     */
    public function getTableClass()
    {
        return $this->tableClass;
    }

    /**
     * Set the value of tableClass
     *
     * @return  self
     */
    public function setTableClass($tableClass)
    {
        $this->tableClass = $tableClass;

        return $this;
    }

    /**
     * Get the value of tableId
     */
    public function getTableId()
    {
        return $this->tableId;
    }

    /**
     * Set the value of tableId
     *
     * @return  self
     */
    public function setTableId($tableId)
    {
        $this->tableId = $tableId;

        return $this;
    }
}
