<?php
/*
 *  Расписание
 * */

class admin_shedule extends AdminTable
{
	public $TABLE = 'shedule';
        public $SORT = 'pub_date DESC';

	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 500;
	public $IMG_BIG_VSIZE = 500;
	public $IMG_NUM = 0;
	public $ECHO_NAME = 'name';
    
	public $NAME="События";
	public $NAME2="событие";
	
	public $MULTI_LANG = 1;
	public $USE_TAGS = 0;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias (заполнять не обязательно)",1);
                $this->fld[] = new Field("pub_date","Дата",13,array('showInList'=>1));
		$this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
		$this->fld[] = new Field("description","Описание",2, array('multiLang'=>1));
		$this->fld[] = new Field("address","Адрес",1, array('multiLang'=>1));
                $this->fld[] = new Field("speaker","Спикер",1, array('multiLang'=>1));
                $this->fld[] = new Field("link","Ссылка",1);
                $this->fld[] = new Field("status","Публиковать",6,array('showInList'=>1));
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
