<?php
/*
 *  Изображения
 * */

class admin_images extends AdminTable
{
    public $SORT = 'sort ASC';
    public $TABLE = 'images';
    public $ECHO_NAME = 'title';

    public $NAME = "Изображения";
    public $NAME2 = "изображение";
    public $FIELD_UNDER = 'record_id';

    function __construct()
    {
            $this->fld=array(
                    new Field("title","Подпись (обязательно)",1),
                    new Field("filename","Назва файлу",4, array('showInList'=>1)),
                    new Field("format","Файл для завантаження",4),
                    new Field("table_name","Таблиця",3),
                    new Field("record_id","ID from table",3),
                    new Field("creation_time","Date of creation",4),
                    new Field("sort","SORT",4),
            );

    $this->SP_WHERE_AND = "AND table_name = '" . $_REQUEST['tabler']."'";

    }
    
    function showit_filename($row) {
        return '<a href="/userfiles/'.$row['format'].'/'.$row['filename'].'" target="_blank">' . $row['filename'] . '</a>';
    }
    
   function afterAdd($row) {
        if (empty($row['table_name'])) {
            $qup = "UPDATE " . $this->TABLE . " SET `table_name` = '" . $_POST['tabler'] ."' WHERE id = " . $row['id'];
            pdoExec($qup);
        }
    }

	

};

?>
