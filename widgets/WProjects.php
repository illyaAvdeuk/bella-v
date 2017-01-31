<?php
namespace app\widgets;
use app\models\Projects;
use yii\bootstrap\Widget;

class WProjects extends Widget
{
    public function init(){
        parent::init();
    }

    public function run() {
        $projects = Projects::find()->joinWith(['info','portfolio'])
                ->home()
                ->all();
        $count = count($projects);
        
        if ($count == 0) {
            $projectsTop = false;
            $projectsBottom = false;
        } elseif ($count <= 4) {
            $projectsTop = $projects;
            $projectsBottom = false;
        } else {
            if ($count%2 == 0) {
                $divider = $count/2;
            } else {
                $divider = ((int)($count/2))+1;
            }
            $chunks = array_chunk($projects, $divider);
            $projectsTop = reset($chunks);
            $projectsBottom = end($chunks);
        }
        
        
        return $this->render('projects/view', [
            'projectsTop' => $projectsTop,
            'projectsBottom' => $projectsBottom
        ]);	
    }
}
