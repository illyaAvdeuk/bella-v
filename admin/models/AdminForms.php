<?php
/*
 *  Формы с сайта
 * */

class admin_forms extends AdminTable
{
	public $TABLE = 'forms';
        public $SORT = 'id DESC';

	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 365;
	public $IMG_BIG_VSIZE = 267;
	public $IMG_NUM = 0;
	public $ECHO_NAME = 'name';
    
	public $NAME="Формы";
	public $NAME2="форму";
	
	public $MULTI_LANG = 0;
	public $USE_TAGS = 0;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);	
                $this->fld[] = new Field("pub_date","Дата создания",13,array('showInList'=>1));
                $this->fld[] = new Field("pub_time","Время создания",1);
                $this->fld[] = new Field("status","Обработано",6,array('showInList'=>1));
                $this->fld[] = new Field("name","Имя",1);
                $this->fld[] = new Field("email","E-mail",1);
                $this->fld[] = new Field("phone","Телефон",1);
                $this->fld[] = new Field("msg","Сообщение",2);
                $this->fld[] = new Field("err_msg","Сообщение об ошибке",1);
                $this->fld[] = new Field("form_id","Форма", 9, array(
                            'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'form_types', 'valsFromCategory'=>null, 
                            'valsEchoField'=>'name'));
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
        
        function printFiles($row) {
            if (!empty($row['id']))
                echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=forms&amp;tablei=files&amp;id=0&amp;under='.$row['id'].'"></iframe>';
            else
                echo 'Файлы можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
        }
        
        function afterAdd($row) 
        {
            if (empty($row['alias'])) {
                    $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit(str_to_l($row['name']))."' WHERE id = " . $row['id'];
                    pdoExec($qup);
            }
        }

}

class admin_form_types extends AdminTable
{
	public $TABLE = 'form_types';
        public $SORT = 'sort ASC';

	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 365;
	public $IMG_BIG_VSIZE = 267;
	public $IMG_NUM = 0;
	public $ECHO_NAME = 'name';
    
	public $NAME="Типы форм";
	public $NAME2="форму";
	
	public $MULTI_LANG = 0;
	public $USE_TAGS = 0;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);		
                $this->fld[] = new Field("name","Название",1);
		$this->fld[] = new Field("sort","SORT",4);
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
