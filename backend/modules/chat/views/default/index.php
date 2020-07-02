<style type="text/css">
    .chat-item {
        position: relative;
        padding-right: 80px;
        padding-bottom: 20px;
    }

    .bt-popoverx {
        position: absolute;
        right: 0;
        top: 0;
    }

    .popover {
        max-width: 730px;
    }

    .input-text, .textarea {
        width: 700px;
    }

    .popover-title {
        height: 36px;
    }

    #chat-text, .chat-item.textarea {
        width: 100%;
    }
</style>

<div id="items-list" class="widget">
    <div class="form-group">
        <textarea placeholder="Текст для редактирования" rows="2" class="textarea" id="chat-text"></textarea>
        <button class="btn btn-skyblue" id="btn-chat-text-find" type="submit">Искать</button>
    </div>
    <div class="form-group" id="found-items-list">

    </div>
</div>

<script>
    window.onload = function () {
        $('#btn-chat-text-find').click(function () {
            var query = $('#chat-text').val();
            if (3 > query.length) {
                alert('3 - минимальное количество символов для поиска');
                $('#chat-text').focus();
            } else {
                $.post('/chat/default/query', {query: query}, function (r) {
                    $('#found-items-list').html(r);
                });
            }
        });
    }
</script>

