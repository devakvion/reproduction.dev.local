<?php
use kartik\sortable\Sortable;

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

        .glyphicon.glyphicon-pencil {
            background-color: #60c6cf;
            color: white;
            cursor: pointer;
            padding: 19px;
        }
    </style>
<?php foreach ($categories AS $c): ?>
    <div class="solutions-list">
        <p><?= $c->title ?></p>
        <?php
        $items = [];
        foreach ($solutions AS $s) {
            if ($c->id == $s->category_id) $items[] = [
                'content' => '<div class="solutions-item" id="solution-item' . $s->id . '"><span>' . $s->title . '</span><div class="bt-popoverx"><span onclick="solutionForm(' . $s->id . ')" class="glyphicon glyphicon-pencil"></span></div></div>',
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

        function solutionForm(id) {
            $('#content').load('/solution/default/update?id=' + id, function () {
                $('#solution-slug').on('change keyup paste', function () {
                    this.value = convertToSlug(this.value);
                });
                $("#solution-content").accordion({
                    collapsible: true,
                    autoHeight: false,
                    navigation: true,
                    active:false
                });
                wideArea();
            });
        }
    </script>
<?php
$this->registerJs(
    '$(".popover-title .close").click(function(){ jQuery("#"+categoryId).sortable(\'enable\'); });'
);
?>