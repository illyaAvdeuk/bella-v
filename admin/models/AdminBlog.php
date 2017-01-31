<?php
/*
 *  Блог
 * */

class admin_blog extends AdminTable
{
	public $SORT = 'blog.id DESC';
	public $TABLE = 'blog';
	public $IMG_SIZE = 260;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 960;
	public $IMG_BIG_VSIZE = 960;
	public $IMG_NUM = 1;
	public $ECHO_NAME = 'title';
    
	public $NAME = "Блог";
	public $NAME2 = "запись";
	
	public $MULTI_LANG = 1;
	public $USE_TAGS = 1;
        public $TAGS_GROUPS = ['blog'];
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);
		$this->fld[] = new Field("pub_date","Дата публікації",13,array('showInList'=>1));
		$this->fld[] = new Field("title","Заголовок",1, array('multiLang'=>1));
		$this->fld[] = new Field("description","Анонс",2, array('multiLang'=>1));
		$this->fld[] = new Field("text","Текст",2, array('multiLang'=>1));
		$this->fld[] = new Field("status","Публікувати",6,array('showInList'=>1));
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
    function afterAdd($row) {
            
        if (empty($row['alias'])) {
			$qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit(str_to_l($row['title_1'])) . $row['id']."' WHERE id = " . $row['id'];
                        pdoExec($qup);
		}
    }

	

};


?>
