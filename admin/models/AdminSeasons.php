<?php
/*
 *  Блог
 * */

class admin_seasons extends AdminTable
{
	public $SORT = 'seasons.id DESC';
	public $TABLE = 'seasons';
	public $IMG_SIZE = 260;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 960;
	public $IMG_BIG_VSIZE = 960;
	public $IMG_NUM = 1;
	public $ECHO_NAME = 'title';
    
	public $NAME = "Сезоны";
	public $NAME2 = "рубрику";
	
	public $MULTI_LANG = 1;
	public $USE_TAGS = 0;
        public $TAGS_GROUPS = [];
	
	function __construct()
	{
		$this->fld[] = new Field("alias","Alias",1);
		$this->fld[] = new Field("title","Заголовок",1, array('multiLang'=>1));
		$this->fld[] = new Field("description","Краткое описание",2, array('multiLang'=>1));
		$this->fld[] = new Field("text","Текст",2, array('multiLang'=>1));
		/*$this->fld[] = new Field("parent_id","принадлежит к рубрике", 9, array(
				'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'seasons', 'valsFromCategory'=>-1, 
				'valsEchoField'=>'name'));*/
		//$this->fld[] = new Field("files","Файлы",5);
                $this->fld[] = new Field("seo_title","SEO title",1, array('multiLang'=>1));
		$this->fld[] = new Field("seo_description","SEO description",1, array('multiLang'=>1));
                $this->fld[] = new Field("seo_text","SEO текст",2, array('multiLang'=>1));
                $this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("status","Опубликовать",6,array('showInList'=>1));
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
