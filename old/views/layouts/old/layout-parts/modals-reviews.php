<?php
use yii\helpers\Url;
?>
<!-- MODAL -->
<div style="display: none;">
       
    <div class="g-modal box-modal" id="thanks_review">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close--dark"></i></div>
        <div class="g-modal__inner">
            <div class="g-modal__title">Cпасибо! Ваш отзыв добавлен.</div>
            <div class="g-text--center">
                После проверки на спам он будет опубликован.
            </div>
        </div>
    </div>
    
    <div class="g-modal box-modal" id="err_review">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close--dark"></i></div>
        <div class="g-modal__inner">
            <div class="g-modal__title g-text--danger"><?= Yii::t('forms','error_occured') ?> :(</div>
            <div class="g-text--center">
                <?= Yii::t('forms','error_occured_msg_1') ?>.<br> 
                <?= Yii::t('forms','error_occured_msg_2') ?>.
            </div>
        </div>
    </div>
    
</div>
<!-- /MODAL -->