<?php
/*
 *  Калькулятор
 * */

class admin_calculator extends AdminTable
{
	public $TABLE = 'calculator';
        public $SORT = 'sort ASC';
	public $IMG_SIZE = 100;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 1600;
	public $IMG_BIG_VSIZE = 900;
	public $IMG_NUM = 0;
	public $ECHO_NAME = 'name';
    
	public $NAME="Расчеты";
	public $NAME2="расчет";
	
	public $MULTI_LANG = 0;
	public $USE_TAGS = 0;
	
	function __construct()
	{
		//$this->fld[] = new Field("alias","Alias",1);
		$this->fld[] = new Field("name","Заголовок",1);
		$this->fld[] = new Field("product_id","Аппарат", 9, array(
				'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'products', 'valsFromCategory'=>null, 
				'valsEchoField'=>'name'));
                $this->fld[] = new Field("min_price","Минимальная цена процедуры",1);
                $this->fld[] = new Field("max_price","Максимальная цена процедуры",1);
                $this->fld[] = new Field("step","Шаг ползунка",1);
                $this->fld[] = new Field("proc_per_day","Процедур в день",1);
                $this->fld[] = new Field("bonus","Бонус",1);
                $this->fld[] = new Field("consumables","Расходники",1);
                $this->fld[] = new Field("product_price","Стоимость",1);
		$this->fld[] = new Field("sort","SORT",4);
		$this->fld[] = new Field("creation_time","Date of creation",4);
		$this->fld[] = new Field("update_time","Date of update",4);
	}
    
};

?>
