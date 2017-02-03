<?php

/*
 *  rests
 * */

class admin_rests extends AdminTable
{
    public $TABLE = 'rests';
    public $SORT = 'sort ASC';
    public $IMG_SIZE = 460;
    public $IMG_RESIZE_TYPE = 1;
    public $IMG_BIG_SIZE = 800;
    public $IMG_BIG_VSIZE = 800;
    public $IMG_NUM = 1;
    public $ECHO_NAME = 'name';

    public $FIELD_UNDER = 'parent_id';
    public $NAME = "Сезонный отдых";
	public $NAME2 = "страницу вида сезонного отдыха";

    public $MULTI_LANG = 1;
    public $USE_TAGS = 1;
    public $TAGS_GROUPS = [];

    function __construct()
    {
            $this->fld[] = new Field("alias","Alias (заповнювати не обов`язково)",1);		
            $this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
            $this->fld[] = new Field("sub_title","Кратко о виде сезонного отдыха",1, array('multiLang'=>1));
            $this->fld[] = new Field("text","Описание",2, array('multiLang'=>1));
          
            $this->fld[] = new Field("parent_id","Принадлежит категории", 9, array(
                            'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'category', 'valsFromCategory'=>-1, 
                            'valsEchoField'=>'name'));	
          
            $this->fld[] = new Field("sort","SORT",4);
            $this->fld[] = new Field("creation_time","Date of creation",4);
            $this->fld[] = new Field("update_time","Date of update",4);
    }
    
    function printFiles($row) {
        if (!empty($row['id']))
            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=products&amp;tablei=files&amp;id=0&amp;under='.$row['id'].'"></iframe>';
        else
            echo 'Файлы можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
    }
			
    function afterAdd($row) {
        if (empty($row['alias'])) {
                $qup = "UPDATE rests SET alias = '" . Translit(str_to_l($row['name_1'])). $row['id']."' WHERE id = " . $row['id'];
                pdoExec($qup);
        }
    }

};

?>