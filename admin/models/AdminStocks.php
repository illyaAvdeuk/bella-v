<?php
/*
 *  Выгодные предложения
 * */

class admin_stocks extends AdminTable
{
    public $TABLE = 'stocks';
    public $SORT = 'sort ASC';
    public $IMG_SIZE = 200;
    public $IMG_RESIZE_TYPE = 1;
    public $IMG_BIG_SIZE = 448;
    public $IMG_BIG_VSIZE = 176;
    public $IMG_NUM = 1;
    public $ECHO_NAME = 'name';

    public $FIELD_UNDER = 'parent_id';
    public $NAME="Выгодные предложения";
    public $NAME2="предложение";

    public $MULTI_LANG = 1;

    function __construct()
    {
            $this->fld[] = new Field("alias","Alias",1);		
            $this->fld[] = new Field("pub_date","Дата",13,array('showInList'=>1));
            $this->fld[] = new Field("name","Заголовок",1, array('multiLang'=>1));
            $this->fld[] = new Field("sub_title","Подзаголовок",1, array('multiLang'=>1));
            $this->fld[] = new Field("description","Описание",2, array('multiLang'=>1));
            $this->fld[] = new Field("text","Текст",2, array('multiLang'=>1));
            $this->fld[] = new Field("parent_id","Принадлежит категории", 9, array(
                            'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'stock_categories', 'valsFromCategory'=>-1, 
                            'valsEchoField'=>'name'));	
            $this->fld[] = new Field("product_id","Товар", 9, array(
				'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'products', 'valsFromCategory'=> null, 
				'valsEchoField'=>'name'));
            $this->fld[] = new Field("status","Публиковать",6,array('showInList'=>1));
            $this->fld[] = new Field("sort","SORT",4);
            $this->fld[] = new Field("creation_time","Date of creation",4);
            $this->fld[] = new Field("update_time","Date of update",4);
    }
    
    function printFiles($row) {
        if (!empty($row['id']))
            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=stocks&amp;tablei=files&amp;id=0&amp;under='.$row['id'].'"></iframe>';
        else
            echo 'Файлы можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
    }
    
    function afterAdd($row) {
        if (empty($row['alias'])) {
                $qup = "UPDATE ". $this->TABLE ." SET alias = '" . Translit(str_to_l($row['name_1'])). $row['id']."' WHERE id = " . $row['id'];
                pdoExec($qup);
        }
    }

}

/*
 *  Выгодные предложения, категории
 * */

class admin_stock_categories extends AdminTable
{
	public $TABLE = 'stock_categories';
        public $SORT = 'sort ASC';

	public $IMG_SIZE = 220;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 960;
	public $IMG_BIG_VSIZE = 960;
	public $IMG_NUM = 0;
	public $ECHO_NAME = 'name';
    
        public $FIELD_UNDER = 'parent_id';
	public $NAME="Категории";
	public $NAME2="категорию";
	
	public $MULTI_LANG = 1;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);		
		$this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
		$this->fld[] = new Field("text","Описание",2, array('multiLang'=>1));
		$this->fld[] = new Field("parent_id","В категории", 9, array(
				'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'stock_categories', 'valsFromCategory'=>-1, 
				'valsEchoField'=>'name'));
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
        function afterAdd($row) 
        {
            if (empty($row['alias'])) {
                    $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit(str_to_l($row['name_1'])). $row['id'] ."' WHERE id = " . $row['id'];
                    pdoExec($qup);
            }
        }
}


