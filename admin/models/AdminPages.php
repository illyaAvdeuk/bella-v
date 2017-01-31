<?php
/*
 *  Текстовые страницы
 * */

class admin_pages extends AdminTable
{
	public $TABLE = 'pages';
        public $SORT = 'sort ASC';
	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 1600;
	public $IMG_BIG_VSIZE = 900;
	public $IMG_NUM = 1;
	public $ECHO_NAME = 'name';
    
        public $FIELD_UNDER = 'parent_id';
	public $NAME="Страницы";
	public $NAME2="страницу";
	
	public $MULTI_LANG = 1;
	public $USE_TAGS = 1;
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);
		$this->fld[] = new Field("url","URL (значение строго копируется из адресной строки браузера без изменений и без учета языка, например страница Услуги: /services). Поле можно оставить пустым",1);
		$this->fld[] = new Field("name","Заголовок",1, array('multiLang'=>1));
		$this->fld[] = new Field("sub_name","Подзаголовок",1, array('multiLang'=>1));
		$this->fld[] = new Field("description","Описание",2, array('multiLang'=>1));
		$this->fld[] = new Field("text","Текст",2, array('multiLang'=>1));
		$this->fld[] = new Field("href","Ссылка",1, array('multiLang'=>1));
		$this->fld[] = new Field("hide","Скрити сторінку",6);
		$this->fld[] = new Field("parent_id","Належить до розділу", 9, array(
				'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'pages', 'valsFromCategory'=>-1, 
				'valsEchoField'=>'name'));
		//$this->fld[] = new Field("files","Файлы",5);
                $this->fld[] = new Field("seo_title","SEO title",1, array('multiLang'=>1));
		$this->fld[] = new Field("seo_description","SEO description",1, array('multiLang'=>1));
                $this->fld[] = new Field("seo_text","SEO текст",2, array('multiLang'=>1));
                $this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
    function printFiles($row) {
        if (!empty($row['id']))
            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=pages&amp;tablei=files&amp;id=0&amp;under='.$row['id'].'"></iframe>';
        else
            echo 'Файли можна додавати тільки у створені сторінки, додайте сторінку та відкрийте її для редагування<br/><br/>';
    }

    
    function afterAdd($row) {
        
        // Recheck url
        $qup = "UPDATE pages SET url = '/".trim($row['url'], ' /')."' WHERE id = " . $row['id'];
        pdoExec($qup);
        
        if (empty($row['alias'])) {
			if (!empty($row['parent_id'])) {
				$rowu = FetchID('pages', $row['parent_id']);
				$parentAlias = $rowu['alias'] . '-';
			} else {
				$parentAlias = '';
			}
			
			
			$qup = "UPDATE pages SET alias = '" . Translit($parentAlias . $row['name_1'])."' WHERE id = " . $row['id'];
			pdoExec($qup);
		}
    }
    
    function afterEdit($row) {
        
        //saveAllCatRelations();
    }

	

};

?>
