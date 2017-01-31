<?php
/*
 *  Портфолио
 * */

class admin_portfolio extends AdminTable
{
    public $TABLE = 'portfolio';
    public $SORT = 'sort ASC';

    public $IMG_SIZE = 940;
    public $IMG_RESIZE_TYPE = 1;
    public $IMG_BIG_SIZE = 1920;
    public $IMG_BIG_VSIZE = 504;
    public $IMG_NUM = 1;
    public $ECHO_NAME = 'name';

    public $FIELD_UNDER = 'parent_id';
    public $NAME="Категории";
    public $NAME2="категорию";

    public $MULTI_LANG = 1;
    public $USE_TAGS = 0;
	
    function __construct()
    {
            $this->fld[] = new Field("alias","Alias",1);		
            $this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
            $this->fld[] = new Field("text","Описание",2, array('multiLang'=>1));
            $this->fld[] = new Field("parent_id","В категории", 9, array(
                            'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'portfolio', 'valsFromCategory'=>-1, 
                            'valsEchoField'=>'name'));
            $this->fld[] = new Field("sort","SORT",4);
            $this->fld[] = new Field("creation_time","Date of creation",4);
            $this->fld[] = new Field("update_time","Date of update",4);
    }

    function afterAdd($row) {
            
        if (empty($row['alias'])) {
            $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit($row['name_1'])."-". $row['id'] ."' WHERE id = " . $row['id'];
            pdoExec($qup);
        }
    }

};

?>
