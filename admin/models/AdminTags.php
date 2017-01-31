<?php
/*
 *  Категории материалов
 * */

class admin_tags extends AdminTable
{
	public $TABLE = 'tags';
	public $ECHO_NAME = 'name';

	public $IMG_SIZE = 190;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 800;
	public $IMG_BIG_VSIZE = 800;
	public $IMG_NUM = 1;
    
    public $FIELD_UNDER = 'parent_id';
	public $NAME = "Теги";
	public $NAME2 = "тег";
	
	public $MULTI_LANG = 1;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);
		$this->fld[] = new Field("name","Заголовок",1, array('multiLang'=>1));
        $this->fld[] = new Field("description","Текст",2, array('multiLang'=>1));
		$this->fld[] = new Field("parent_id","Вид тегу", 9, array(
				'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'tags', 'valsFromCategory'=>-1, 
				'valsEchoField'=>'name'));
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}

	function afterAdd($row) {
        
        if (empty($row['alias'])) {
			
			$qup = "UPDATE tags SET alias = '" . Translit(str_to_l($row['name_1'])) . $row['id']."' WHERE id = " . $row['id'];
			pdoExec($qup);
		}
    }

};


?>
