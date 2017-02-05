<?php
use yii\helpers\Url;
?>
<!-- MODAL -->
<div style="display: none;">
    <div class="g-modal box-modal" id="paybackCosmetics">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close"></i></div>

                <div class="g-modal__inner">
                        <div class="g-modal__title"><?= Yii::t('forms','payback_cosmetic_title1') ?>.</div>
                        <div class="g-modal__title"><?= Yii::t('forms','payback_cosmetic_title2') ?>.</div>
                        <form class="f-cst xhr-form" id="cst_form" method="POST" action="<?= Url::to(['/api/forms/add']) ?>" enctype="multipart/form-data" data-modal-success="thanks" data-modal-err="server-error">
                            <div class="g-form__col--half">
                                <label class="g-hidden"><?= Yii::t('forms','your_name') ?></label>
                                <input type="text" class="g-input g-input--simple" name="name" id="cst_name" placeholder="<?= Yii::t('forms','your_name') ?>">
                            </div>
                            <div class="g-form__col--half">
                                <label class="g-hidden"><?= Yii::t('forms','mobile_phone') ?></label>
                                <input type="phone" class="g-input g-input--simple" name="phone" id="cst_phone" placeholder="Мобильный телефон*" required="required" aria-required="true">
                            </div>

                                <div class="g-form__col--one g-input-file js-input-file">
                                <div class="g-input-file__btn">
                                    <i class="icon-attache"></i>
                                    <input type="file" id="cst_file1" name="file1">
                                </div>
                                <div class="g-input-file__wrapper">
                                    <input type="text" class="g-input-file__path g-text--small" placeholder="Прикрепите фото сертификата или диплома об образовании*">
                                </div>
                            </div>
                                <div class="g-form__col--one g-input-file js-input-file">
                                <div class="g-input-file__btn">
                                    <i class="icon-attache"></i>
                                    <input type="file" id="cst_file2" name="file2">
                                </div>
                                <div class="g-input-file__wrapper">
                                    <input type="text" class="g-input-file__path g-text--small" placeholder="Прикрепите фото документа, удостоверяющего личность*">
                                </div>
                            </div>
                                <input type="hidden" hidden name="form_type" value="payback-cosmetics">
                                <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                                <div class="g-form__col--one g-text-center g-margin--none">
                                    <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send') ?></button>
                                </div>
                        </form>
                    </div>
    </div>

    <div class="g-modal box-modal" id="paybackBusiness">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close"></i></div>
                <div class="g-modal__inner">
                        <div class="g-modal__title"><?= Yii::t('forms','payback_business_title1') ?>.</div>
                        <div class="g-modal__title"><?= Yii::t('forms','payback_business_title2') ?>.</div>
                        <form class="f-bsn xhr-form" id="bsn_form" method="POST" action="<?= Url::to(['/api/forms/add']) ?>" data-modal-success="thanks" data-modal-err="server-error">
                            <div class="g-form__col--half">
                                <label class="g-hidden"><?= Yii::t('forms','your_name') ?></label>
                                <input type="text" class="g-input g-input--simple" name="name" id="bsn_name" placeholder="<?= Yii::t('forms','your_name') ?>">
                            </div>
                            <div class="g-form__col--half">
                                <label class="g-hidden"><?= Yii::t('forms','phone_number') ?></label>
                                <input type="phone" class="g-input g-input--simple" name="phone" id="bsn_phone" placeholder="<?= Yii::t('forms','phone_number') ?>*" required="required" aria-required="true">
                            </div>
                                <input type="hidden" hidden name="form_type" value="payback-business">
                                <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                                <div class="g-form__col--one g-text-center g-margin--none">
                                    <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send') ?></button>
                                </div>
                        </form>
    </div>
    </div>

    <div class="g-modal box-modal" id="subscribeForm">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close"></i></div>

                <div class="g-modal__inner">
                        <div class="g-modal__title"><?= Yii::t('forms','subscribe_form') ?></div>

                        <form class="f-sbc xhr-form" id="sbc_form" method="POST" action="<?= Url::to(['/api/forms/add']) ?>" data-modal-success="thanks" data-modal-err="server-error">
                            <div class="g-form__col--one">
                                <label class="g-hidden"><?= Yii::t('forms','your_email') ?></label>
                                <input type="email" class="g-input g-input--simple" name="email" id="sbc_email" placeholder="<?= Yii::t('forms','your_email') ?>">
                            </div>
                                <input type="hidden" hidden name="form_type" value="subscribe">
                                <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                                <div class="g-form__col--one g-text-center g-margin--none">
                                    <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send') ?></button>
                                </div>
                        </form>
    </div>
    </div>

    <div class="g-modal box-modal" id="callback">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close"></i></div>

                <div class="g-modal__inner">
                        <div class="g-modal__title"><?= Yii::t('forms','to_order_callback') ?>!</div>

                        <form class="f-clb xhr-form" id="clb_form" method="POST" action="<?= Url::to(['/api/forms/add']) ?>" data-modal-success="thanks" data-modal-err="server-error">
                            <div class="g-form__col--half">
                                <label class="g-hidden"><?= Yii::t('forms','your_name') ?></label>
                                <input type="text" class="g-input g-input--simple" name="email" id="clb_email" placeholder="<?= Yii::t('forms','your_name') ?>">
                            </div>
                            <div class="g-form__col--half">
                                <label class="g-hidden"><?= Yii::t('forms','phone_number') ?> *</label>
                                <input type="phone" class="g-input g-input--simple" name="phone" id="clb_phone" placeholder="<?= Yii::t('forms','phone_number') ?> *">
                            </div>
                                <input type="hidden" hidden name="form_type" value="callback">
                                <input name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" type="hidden">
                                <div class="g-form__col--one g-text-center g-margin--none">
                                    <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','send') ?></button>
                                </div>
                        </form>
    </div>
    </div>
    
    <div class="g-modal box-modal" id="searchform">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close--dark"></i></div>

                <div class="g-modal__inner">					
                    <form class="f-sch" id="sch_form" method="GET" action="<?= Url::to(['/search']) ?>" >
                            <div class="g-form__col--one">
                                <label class="g-hidden"><?= Yii::t('forms','site_search') ?>...</label>
                                <input type="text" class="g-input g-input--simple" name="s" id="sch_query" placeholder="<?= Yii::t('forms','site_search') ?>..." required="">
                            </div>
                                <div class="g-form__col--one g-text-center g-margin--none">
                                    <button type="submit" class="btn btn--colored btn--normal"><?= Yii::t('forms','to_search') ?></button>
                                </div>
                        </form>
    </div>
    </div>
    
    <div class="g-modal box-modal" id="thanks">
        <div class="box-modal_close arcticmodal-close"><i class="icon-modal-close--dark"></i></div>
        <div class="g-modal__inner">
            <div class="g-modal__title"><?= Yii::t('forms','thank_you!') ?></div>
            <div class="g-text--center">
                <?= Yii::t('forms','your_request_saved') ?>.<br> 
                <?= Yii::t('forms','we_contact_you_soon') ?>.
            </div>
        </div>
    </div>
    
    <div class="g-modal box-modal" id="server-error">
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