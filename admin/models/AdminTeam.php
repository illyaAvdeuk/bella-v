<?php
/*
 *  Команда
 * */

class admin_team extends AdminTable
{
	public $TABLE = 'team';
        public $SORT = 'sort ASC';

	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 260;
	public $IMG_BIG_VSIZE = 260;
	public $IMG_NUM = 1;
	public $ECHO_NAME = 'name';
    
	public $NAME="Команда";
	public $NAME2="сотрудника";
	
	public $MULTI_LANG = 1;
	public $USE_TAGS = 0;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);		
		$this->fld[] = new Field("name","Заголовок",1, array('multiLang'=>1));
                $this->fld[] = new Field("sub_title","Подзаголовок",1, array('multiLang'=>1));
		$this->fld[] = new Field("description","Описание",2, array('multiLang'=>1));
                $this->fld[] = new Field("text","Текст",2, array('multiLang'=>1));
		$this->fld[] = new Field("status","Публікувати",6,array('showInList'=>1));
                $this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
        function afterAdd($row) 
        {
            if (empty($row['alias'])) {
                    $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit(str_to_l($row['name_1'])).$row['id']."' WHERE id = " . $row['id'];
                    pdoExec($qup);
            }
        }

};

?>
