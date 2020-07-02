(function () {

    $(window).resize(function () {
    });

    $('.back-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    });

    $('a.subdirs').click(function () {
        var subDirs = $(this).next();
        if (subDirs.hasClass('open')) {
            subDirs.removeClass('open');
        } else {
            subDirs.addClass('open');
        }
    });
})();

function showPageImgForm(elementClicked, slug) {
    loaderShow(elementClicked);
    $.get('/page-img/default/get-model-by-slug/' + slug, function (r) {
        loaderHide(elementClicked);
        $('#content-ajax').html(r).slideDown();
        $('.fileinput-remove, .fileinput-cancel, .kv-fileinput-upload').remove();
        initAjaxForm();
    });
}

function showPageDescriptionForm(elementClicked, slug) {
    loaderShow(elementClicked);
    $.get('/section/default/get-model-by-slug/' + slug, function (r) {
        loaderHide(elementClicked);
        $('#content-ajax').html(r).slideDown();
        initAjaxForm();
    });
}

var loaderImg = $('.loader-img');
function loaderShow(obj) {
    $(obj).css({opacity: 0});
    var offset = $(obj).offset();
    var top = offset.top + $(obj).outerHeight() / 2 - 10;
    var left = offset.left + $(obj).outerWidth() / 2 - 10;
    loaderImg.css({top: top, left: left}).show();
}
function loaderHide(obj) {
    $(obj).css({opacity: 1});
    loaderImg.hide();
}

function initAjaxForm() {
    $('.form-ajax').each(function () {
        if (typeof $(this).yiiActiveForm == 'function') $(this).yiiActiveForm("destroy");
        $(this).submit(function () {
            var form = $(this);
            var notificationWr = $('.form-notification');
            notificationWr.empty();
            loaderShow($('#btn-save'));
            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: form.serialize(),
                success: function (data) {
                    loaderHide($('#btn-save'));
                    if (true == data.save) {
                        showNotification('success', data.title, data.text, notificationWr);
                    } else {
                        var errors = '';
                        for (var error in data.errors) {
                            errors += data.errors[error] + '<br>';
                        }
                        showNotification('error', data.title, errors, notificationWr);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    loaderHide($('#btn-save'));
                    var errors = "Status: " + textStatus + "<br>Error: " + errorThrown;
                    showNotification('error', 'Error', errors, notificationWr);
                }
            });
            return false;
        });
    });
    $('.msg-ajax button, #file-type-error button').click(function () {
        $(this).parent().hide();
    });
}

/* Notifications */
function showNotification(type, title, text, obj) {
    $('.fileinput-remove, .fileinput-cancel, .kv-fileinput-upload').remove();
    var types = {
        error: {class: 'danger', icon: 'close-circle'},
        warning: {class: 'warning', icon: 'attention'},
        success: {class: 'info', icon: 'info'}
    };
    if (!types[type]) {
        obj.html('notification "' + type + '" does not exist');
    } else {
        obj.html('<div class="alert alert-' + types[type]['class'] + ' alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><div class="media"><figure class="pull-left alert--icon"><i class="pe-7s-' + types[type]['icon'] + '"></i></figure><div class="media-body"><h3 class="alert--title">' + title + '</h3><p class="alert--text">' + text + '</p></div></div></div>');
    }
    $('html, body').animate({
        scrollTop: obj.offset().top
    }, 500);
}

/* form */
function sendForm(form, btn, notificationWr, activeFormOff, callBack) {
    notificationWr.empty();
    form = $(form);
    if ('client-form' == form.attr('id') && 2 < tabActive) return false;
    loaderShow(btn);
    if (activeFormOff) form.yiiActiveForm("destroy");
    $.ajax({
        url: form.attr('action'),
        type: 'post',
        data: form.serialize(),
        beforeSend: function () {
            sendInProcess = true;
        },
        success: function (data) {
            loaderHide(btn);
            if (data.create) {
                $('#' + data.linkId).attr({href: data.href}).click();
            } else if (true == data.save) {
                showNotification('success', data.title, data.text, notificationWr);
                if (callBack) window[callBack]();
            } else {
                var errors = '';
                for (var error in data.errors) {
                    errors += data.errors[error] + '<br>';
                }
                showNotification('error', data.title, errors, notificationWr);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            loaderHide(btn);
            var errors = "Status: " + textStatus + "<br>Error: " + errorThrown;
            showNotification('error', 'Error', errors, notificationWr);
        }
    });
    return false;
}

/* Tabs */
var tabActive = 0;
function tabby(id) {
    $('.notification-wr').empty();
    var tab = $('#' + id);
    var t = id.replace('tab', '');//id.substr(id.length - 1);
    tabActive = t;
    if (tab.data('load')) {
        showImgForm(tab.data('load'), t);
    } else {
        var tActiveHeight = $('.tabs__content--' + t).height() + 25;
        $('.tabs__content-wr').innerHeight(tActiveHeight);

    }
}

function showImgForm(action, t) {
    var tab = $('.tabs__content--' + t);
    tab.empty();
    $.get(action, function (r) {
        tab.html(r);
        var tActiveHeight = tab.height() + 300;
        if (6 == t) tActiveHeight += 300;
        $('.tabs__content-wr').innerHeight(tActiveHeight);
        $('.fileinput-remove, .fileinput-cancel, .kv-fileinput-upload').remove();
    });
}

function getHtmlViaAjax(btn, wrapper) {
    $.get(btn.href, function (r) {
        wrapper.html(r);
    });
    return false;
}

function getConfirm(frase, btn, wrapper) {
    var r = confirm(frase);
    if (r == true) {
        getHtmlViaAjax(btn, wrapper);
    } else {
        return false;
    }
}

/* slug */
jQuery.strtr = function (str, from, to) {
    var fr = '', i = 0, j = 0, lenStr = 0, lenFrom = 0, tmpStrictForIn = false, fromTypeStr = '', toTypeStr = '', istr = '';
    var tmpFrom = [];
    var tmpTo = [];
    var ret = '';
    var match = false;

    // Received replace_pairs?
    // Convert to normal from->to chars
    if (typeof from === 'object') {
        for (fr in from)
            if (from.hasOwnProperty(fr)) {
                tmpFrom.push(fr);
                tmpTo.push(from[fr]);
            }

        from = tmpFrom;
        to = tmpTo;
    }

    // Walk through subject and replace chars when needed
    lenStr = str.length;
    lenFrom = from.length;
    fromTypeStr = typeof from === 'string';
    toTypeStr = typeof to === 'string';

    for (i = 0; i < lenStr; i++) {
        match = false;
        if (fromTypeStr) {
            istr = str.charAt(i);
            for (j = 0; j < lenFrom; j++)
                if (istr == from.charAt(j)) {
                    match = true;
                    break;
                }
        }
        else
            for (j = 0; j < lenFrom; j++)
                if (str.substr(i, from[j].length) == from[j]) {
                    match = true;
                    // Fast forward
                    i = (i + from[j].length) - 1;
                    break;
                }
        if (match) ret += toTypeStr ? to.charAt(j) : to[j];
        else ret += str.charAt(i);
    }

    return ret;
};
jQuery.toSlug = function (text) {
    var trans={
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'jo', 'ж': 'zh', 'з': 'z', 'и': 'i', 'й': 'jj',
        'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o', 'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u', 'ф': 'f',
        'х': 'kh', 'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'shh', 'ъ': '', 'ы': 'y', 'ь': '', 'э': 'eh', 'ю': 'ju', 'я': 'ja'
    };
    return jQuery.strtr(text.toLowerCase(), trans) // transliterate cyrillic letters
        .replace(/[^A-Za-z0-9 _.-]/g, '') // leave only known characters
        .replace(/[ _\.]/g, '-') // convert 'space', '_', '.' into '-'
        .replace(/^-|-$/gm, ''); // remove '-' from start and end of the text
};
function convertToSlug(text) {
    return text
        .toLowerCase()
        .replace(/ /g, '-')
        .replace(/[^\w-]+/g, '');
}

/* gallery */
function addItemsToGallery(items) {
    jQuery.each(items, function (id, src) {
        $('#gallery-list').prepend('<li draggable="true"><div class="gallery-item" id="gallery-item' + id + '"><div class="widget__config"><a href="" onclick="removeGalleryItem($(this) ,' + id + '); return false;"><i class="pe-7s-close remove"></i></a></div><img src="' + src + '" style="max-width: 100%;"></div></li>').sortable();
    });

}
function removeGalleryItem(elementClicked, url, id) {
    loaderShow(elementClicked);
    $.get(url, function (r) {
        loaderHide(elementClicked);
        if (true == r) {
            $('#gallery-item' + id).parent().remove();
        } else {
            alert('Error - cannot remove');
        }
    });
}

function setOrderItemsGallery(url) {
    var items = '';
    $('.gallery-item').each(function () {
        items += this.id.replace('gallery-item', '') + ';';
    });
    $.post(url, {items: items}, function (r) {
        if (1 == r) {
            // alert('saved');
        } else {
            alert('don\'t saved');
        }
    })
}

function removeImg(elementClicked, url, imgWr, imgSrc) {
    loaderShow(elementClicked);
    $.get(url, function (r) {
        loaderHide(elementClicked);
        if (true == r) {
            $(elementClicked).hide();
            imgWr.attr({src: imgSrc});
        } else {
            loaderHide(elementClicked);
            alert('Error - cannot remove');
        }
    });
}

function nl2br(str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}