<?php
use kartik\popover\PopoverX;
use yii\helpers\Html;

foreach ($model AS $s):
    echo '<div class="chat-item textarea" id="chat-item' . $s->translationid . '"><span>' . $s->translation . '</span><div class="bt-popoverx">' . PopoverX::widget([
            'header' => '',
            'placement' => PopoverX::ALIGN_LEFT,
            'content' => '<textarea id="translation-' . $s->translationid . '" class="textarea">' . $s->translation . '</textarea>',
            'footer' => Html::button(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btChatSave' . $s->translationid, 'onclick' => 'chatSave(' . $s->translationid . ')']),
            'toggleButton' => ['label' => '<span class="glyphicon glyphicon-pencil"></span>', 'class' => 'btn btn-skyblue'],
        ]) . '</div></div>';
endforeach; ?>

<script>
    function chatSave(id) {
        var btn = $('#btChatSave' + id);
        loaderShow(btn);
        $.ajax({
            url: '/chat/default/save-translation/' + id,
            type: 'post',
            data: {translation: $('#translation-' + id).val()},
            beforeSend: function () {
                sendInProcess = true;
            },
            success: function (data) {
                loaderHide(btn);
                $('#chat-item' + id + ' > span').html($('#translation-' + id).val());
                $('.close').click();
                console.log(data);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                loaderHide(btn);
                alert("Error: " + errorThrown);
            }
        });
        return false;
    }
</script>
