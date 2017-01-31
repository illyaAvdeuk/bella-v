<?php
/*
 *  Отзывы
 * */

class admin_reviews extends AdminTable
{
	public $TABLE = 'reviews';
        public $SORT = 'sort ASC';

	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 365;
	public $IMG_BIG_VSIZE = 267;
	public $IMG_NUM = 1;
	public $ECHO_NAME = 'name';
    
	public $NAME="Отзывы";
	public $NAME2="отзыв";
	
	public $MULTI_LANG = 1;
	public $USE_TAGS = 1;
        public $TAGS_GROUPS = ['reviews'];
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);		
                $this->fld[] = new Field("email","E-mail",1);
                $this->fld[] = new Field("link","Ссылка на видео",1);
		$this->fld[] = new Field("pub_date","Дата публикации",13,array('showInList'=>1));
                $this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
                $this->fld[] = new Field("description","Описание",2, array('multiLang'=>1));
		$this->fld[] = new Field("text","Текст",2, array('multiLang'=>1));
                $this->fld[] = new Field("type_id","Тип", 9, array(
                            'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'review_types', 'valsFromCategory'=>null, 
                            'valsEchoField'=>'name'));
                $this->fld[] = new Field("status","Публиковать",6,array('showInList'=>1));
                $this->fld[] = new Field("on_home","На главной",6,array('showInList'=>1));
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
        function afterAdd($row) 
        {
            if (empty($row['alias'])) {
                    $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit(str_to_l($row['name_1']))."' WHERE id = " . $row['id'];
                    pdoExec($qup);
            }
        }

}

class admin_review_types extends AdminTable
{
	public $TABLE = 'review_types';
        public $SORT = 'sort ASC';

	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 365;
	public $IMG_BIG_VSIZE = 267;
	public $IMG_NUM = 0;
	public $ECHO_NAME = 'name';
    
	public $NAME="Разделы отзывов";
	public $NAME2="раздел";
	
	public $MULTI_LANG = 0;
	public $USE_TAGS = 0;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);		
                $this->fld[] = new Field("name","Название",1);
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
        function afterAdd($row) 
        {
            if (empty($row['alias'])) {
                    $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit(str_to_l($row['name_1']))."' WHERE id = " . $row['id'];
                    pdoExec($qup);
            }
        }

};

?>
