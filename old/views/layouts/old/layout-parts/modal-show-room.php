<?php
use yii\helpers\Url;
?>
<div style="display: none">
    <div class="g-modal box-modal" id="show-room">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close--dark"></i></div>
                <div class="g-modal__inner">
                        <div class="g-modal__title"><?= Yii::t('forms','visit_our_show_room') ?></div>
                        <form class="f-smr xhr-form" id="smr_form" method="POST" action="<?= Url::to(['/api/forms/add']) ?>" data-modal-success="thanks" data-modal-err="server-error">
                            <div class="g-form__col--one">
                                <label class="g-hidden"><?= Yii::t('forms','your_name') ?></label>
                                <input type="text" class="g-input g-input--simple" name="name" id="smr_name" placeholder="<?= Yii::t('forms','your_name') ?>">
                            </div>
                            <div class="g-form__col--one">
                                <label class="g-hidden"><?= Yii::t('forms','phone_number') ?> *</label>
                                <input type="phone" class="g-input g-input--simple" name="phone" id="smr_phone" placeholder="<?= Yii::t('forms','phone_number') ?> *" required="required" aria-required="true">
                            </div>
                            <div class="g-form__col--one">
                                <label class="g-hidden"><?= Yii::t('forms','your_email') ?></label>
                                <input type="email" class="g-input g-input--simple" name="email" id="smr_email" placeholder="<?= Yii::t('forms','your_email') ?>">
                            </div>
                                <input type="hidden" hidden name="form_type" value="show-room">
                                <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                                <div class="g-form__col--one g-text-center g-margin--none">
                                    <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send') ?></button>
                                </div>
                        </form>
                </div>
    </div>
</div>