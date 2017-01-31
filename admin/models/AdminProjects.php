<?php
/*
 *  Проекты
 * */

class admin_projects extends AdminTable
{
    public $TABLE = 'projects';
    public $SORT = 'sort ASC';
    public $IMG_SIZE = 400;
    public $IMG_RESIZE_TYPE = 1;
    public $IMG_BIG_SIZE = 960;
    public $IMG_BIG_VSIZE = 960;
    public $IMG_NUM = 1;
    public $ECHO_NAME = 'name';
    
    public $FIELD_UNDER = 'parent_id';
    public $NAME="Проекты";
    public $NAME2="проект";

    public $MULTI_LANG = 1;
    public $USE_TAGS = 0;

    function __construct()
    {
        $this->fld[] = new Field("alias","Alias",1);		
        $this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
        $this->fld[] = new Field("description","Превью",2, array('multiLang'=>1));
        $this->fld[] = new Field("text","Описание",2, array('multiLang'=>1));
        $this->fld[] = new Field("on_home","Показывать на главной",6,array('showInList'=>1));
        $this->fld[] = new Field("parent_id","Принадлежит категории", 9, array(
                        'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'portfolio', 'valsFromCategory'=>-1, 
                        'valsEchoField'=>'name'));		
        $this->fld[] = new Field("images","Изображения",5);
//        $this->fld[] = new Field("files","Файли",5);
        $this->fld[] = new Field("sort","SORT",4);
        $this->fld[] = new Field("creation_time","Date of creation",4);
        $this->fld[] = new Field("update_time","Date of update",4);
    }
    
//    function printFiles($row) {
//        if (!empty($row['id']))
//            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=projects&amp;tablei=files&amp;id=0&amp;under='.$row['id'].'"></iframe>';
//        else
//            echo 'Файлы можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
//    }
    function show_images($row) {
        if (!empty($row['id']))
            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=projects&amp;tablei=images&amp;id=0&amp;under='.$row['id'].'"></iframe>';
        else
            echo 'Изображения можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
    }			
    function afterAdd($row) 
    {
        if (empty($row['alias'])) {
            $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit($row['name_1']) ."_". $row['id']."' WHERE id = " . $row['id'];
            pdoExec($qup);
        }
    }

};

?>
