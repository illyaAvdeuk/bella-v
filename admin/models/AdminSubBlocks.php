<?php
/*
 *  Подблоки страницы
 * */

class admin_sub_blocks extends AdminTable
{
	public $TABLE = 'sub_blocks';
        public $SORT = 'sort ASC';
	public $IMG_SIZE = 460;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 1200;
	public $IMG_BIG_VSIZE = 960;
	public $IMG_NUM = 1;
	public $ECHO_NAME = 'alias';
    
        public $FIELD_UNDER = 'parent_id';
	public $NAME="Блоки";
	public $NAME2="блок";
	
	public $MULTI_LANG = 1;
	public $USE_TAGS = 1;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);		
		$this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
		$this->fld[] = new Field("description","Описание",2, array('multiLang'=>1));
                $this->fld[] = new Field("text","Текст",2, array('multiLang'=>1));
                $this->fld[] = new Field("hide","Скрыть блок",6);
		$this->fld[] = new Field("parent_id","Принадлежит странице", 9, array(
				'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'pages', 'valsFromCategory'=>-1, 
				'valsEchoField'=>'name'));		
		//$this->fld[] = new Field("images","Изображения",5);
		//$this->fld[] = new Field("files","Файли",5);
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
    function printFiles($row) {
        if (!empty($row['id']))
            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=sub_blocks&amp;tablei=files&amp;id=0&amp;under='.$row['id'].'"></iframe>';
        else
            echo 'Файлы можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
    }
    

};

?>
