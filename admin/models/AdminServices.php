<?php
class admin_services extends AdminTable
{
    public $SORT = 'services.id DESC';
    public $TABLE = 'services';
    public $IMG_SIZE = 460;
    public $IMG_RESIZE_TYPE = 1;
    public $IMG_BIG_SIZE = 800;
    public $IMG_BIG_VSIZE = 800;
    public $IMG_NUM = 1;
    public $ECHO_NAME = 'title';

    public $FIELD_UNDER = 'parent_id';
    public $NAME = "Услуга";
    public $NAME2 = "услугу";

    public $MULTI_LANG = 1;
    public $USE_TAGS = 1;
    public $TAGS_GROUPS = [];

    function __construct()
    {
            $this->fld[] = new Field("alias","Alias (заповнювати не обов`язково)",1);       
            $this->fld[] = new Field("name","Название",1, array('multiLang'=>1));
            $this->fld[] = new Field("sub_title","Кратко о виде сезонного отдыха",1, array('multiLang'=>1));
            $this->fld[] = new Field("text","Описание",2, array('multiLang'=>1));
            $this->fld[] = new Field("brand_id","Бренд", 9, array(
                            'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'brands', 'valsFromCategory'=>null, 
                            'valsEchoField'=>'name'));
            $this->fld[] = new Field("parent_id","Принадлежит категории", 9, array(
                            'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'category', 'valsFromCategory'=>-1, 
                            'valsEchoField'=>'name'));  
            $this->fld[] = new Field("feature1","Особенность 1",1, array('multiLang'=>1));
            $this->fld[] = new Field("feature2","Особенность 2",1, array('multiLang'=>1));
            $this->fld[] = new Field("feature3","Особенность 3",1, array('multiLang'=>1));
            $this->fld[] = new Field("feature4","Особенность 4",1, array('multiLang'=>1));
            $this->fld[] = new Field("feature5","Особенность 5",1, array('multiLang'=>1));
            $this->fld[] = new Field("feature6","Особенность 6",1, array('multiLang'=>1));
            $this->fld[] = new Field("description","Вкладка описание",2, array('multiLang'=>1));
            $this->fld[] = new Field("application","Вкладка применение",2, array('multiLang'=>1));
            $this->fld[] = new Field("ingredients","Вкладка ингредиенты",2, array('multiLang'=>1));
            $this->fld[] = new Field("honors","Вкладка награды",2, array('multiLang'=>1));
            $this->fld[] = new Field("same1_id","Похожий продукт 1",1);
            $this->fld[] = new Field("same2_id","Похожий продукт 2",1);
            $this->fld[] = new Field("same3_id","Похожий продукт 3",1);
            //$this->fld[] = new Field("images","Изображения",5);
            //$this->fld[] = new Field("files","Файли",5);
            $this->fld[] = new Field("sort","SORT",4);
            $this->fld[] = new Field("creation_time","Date of creation",4);
            $this->fld[] = new Field("update_time","Date of update",4);
    }
    
    function printFiles($row) {
        if (!empty($row['id']))
            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=products&amp;tablei=files&amp;id=0&amp;under='.$row['id'].'"></iframe>';
        else
            echo 'Файлы можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
    }
    
//    function show_images($row) {
//        if (!empty($row['id']))
//            echo '<iframe width="800" height="500" style="border:1px solid #CCC" frameborder="0" src="sub_items.php?tabler=products&amp;tablei=images&amp;id=0&amp;under='.$row['id'].'"></iframe>';
//        else
//            echo 'Изображения можно добавлять только в созданные страницы. Сохраните страницу и откройте ее для редактирования<br/><br/>';
//    }             
    function afterAdd($row) {
        if (empty($row['alias'])) {
                $qup = "UPDATE products SET alias = '" . Translit(str_to_l($row['name_1'])). $row['id']."' WHERE id = " . $row['id'];
                pdoExec($qup);
        }
    }

};

?>