<?php
use kartik\sortable\Sortable;
use kartik\popover\PopoverX;
use yii\helpers\Html;
?>
<style type="text/css">
    .solutions-list {
        margin: 20px 30px;
    }

    .solutions-item {

    }

    ul p {
        font-size: 32px;
        margin: 20px 0 10px;
    }

    ul li {
        position: relative;
        cursor: pointer;
        font-size: 16px;
        line-height: 40px;
    }

    .bt-popoverx {
        position: absolute;
        right: 0;
        top: 0;
    }
    .popover{
        max-width: 430px;
    }
    .input-text, .textarea{
        width: 400px;
    }
    .popover-title {
        height: 36px;
    }
</style>
<?php foreach ($categories AS $c): ?>
    <div class="solutions-list">
        <p><?= $c->title ?></p>
        <?php
        $items = [];
        foreach ($solutions AS $s) {
            if ($c->id == $s->category_id) $items[] = [
                'content' => '<div class="solutions-item" id="solution-item' . $s->id . '"><span>' . $s->title . '</span><div class="bt-popoverx">' . PopoverX::widget([
                        'header' => '',
                        'placement' => PopoverX::ALIGN_LEFT,
                        'content' => '<input type="text" maxlength="255" value="' . $s->title . '" class="input-text" id="title-' . $s->id . '"><textarea id="description-' . $s->id . '" class="textarea">' . $s->description . '</textarea>',
                        'footer' => Html::button(Yii::t('app', 'BTN_SAVE'), ['class' => 'btn btn-skyblue', 'id' => 'btTitleSave' . $s->id, 'onclick' => 'solutionSave(' . $s->id . ')']),
                        'toggleButton' => ['label' => '<span class="glyphicon glyphicon-pencil"></span>', 'class' => 'btn btn-skyblue', 'onclick' => 'categoryId = "category'.$c->id.'";jQuery("#"+categoryId).sortable(\'disable\')'],
                    ]) . '</div></div>',
                'id' => 'item -' . $s->id];
        }
        echo Sortable::widget([
            'id' => 'category' . $c->id,
            'type' => 'list',
            'items' => $items,
            'pluginEvents' => [
                'sortupdate' => 'function(e, ui) { setOrderItemsSolutions(ui.item); }',
            ]
        ]);
        ?>
    </div>
<?php endforeach; ?>
<script>
    var categoryId = 0;
    function setOrderItemsSolutions(item) {
        var items = '';
        $(item).parent().find('.solutions-item').each(function () {
            items += this.id.replace('solution-item', '') + ';';
        });
        $.post('/solution/default/set-order', {items: items}, function (r) {
            if (1 == r) {
                // alert('saved');
            } else {
                alert('don\'t saved');
            }
        })
    }
    function solutionSave(id) {
        var btn = $('#btTitleSave' + id);
        loaderShow(btn);
        $.ajax({
            url: '/solution/default/save-title/' + id,
            type: 'post',
            data: {title:$('#title-' + id).val(), description:$('#description-' + id).val()},
            beforeSend: function() {
                sendInProcess = true;
            },
            success: function (data) {
                loaderHide(btn);
                console.log(data);
                $('#solution-item' + id +'>span').text($('#title-' + id).val());
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                loaderHide(btn);
                alert("Error: " + errorThrown);
            }
        });
        return false;
    }
</script>
<?php
$this->registerJs(
    '$(".popover-title .close").click(function(){ jQuery("#"+categoryId).sortable(\'enable\'); });'
);
?>