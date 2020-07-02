/*!
 * This file is a part of Mibew Messenger.
 *
 * Copyright 2005-2015 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
var Mibew = Mibew || {};
!function (t) {
    if (!t.ChatPopup) {
        t.ChatPopup = {}, t.Objects = t.Objects || {}, t.Objects.ChatPopups = {}, t.Utils = {}, t.Utils.createCookie = function (t, e, i) {
            var a = /([^\.]+\.[^\.]+)$/.exec(document.location.hostname);
            document.cookie = "" + t + "=" + e + "; path=/; " + (a ? "domain=" + a[1] + "; " : "") + (i ? "expires=" + i.toUTCString() + "; " : "")
        }, t.Utils.readCookie = function (t) {
            for (var e = document.cookie.split("; "), i = t + "=", a = !1, o = 0; o < e.length; o++)if (-1 != e[o].indexOf(i)) {
                a = e[o].substr(i.length);
                break
            }
            return a
        }, t.Utils.deleteCookie = function (e) {
            t.Utils.createCookie(e, "", new Date(0))
        }, t.Utils.inherits = function () {
            var t = function () {
            };
            return function (e, i) {
                t.prototype = i.prototype, e.prototype = new t, t.prototype = null, e.prototype.constructor = e
            }
        }(), t.Utils.addEventListener = function (t, e, i) {
            t.addEventListener ? t.addEventListener(e, i, !1) : t.attachEvent && t.attachEvent("on" + e, function (e) {
                i.call(t, e)
            })
        }, t.Utils.loadStyleSheet = function (t, e) {
            var i = document.createElement("link");
            return i.setAttribute("rel", "stylesheet"), i.setAttribute("type", "text/css"), i.setAttribute("href", t), e && i.setAttribute("id", e), document.getElementsByTagName("body")[0].appendChild(i), i
        }, t.Utils.loadScript = function (t, e) {
            var i = document.createElement("script");
            return i.setAttribute("type", "text/javascript"), i.setAttribute("src", t), e && i.setAttribute("id", e), document.getElementsByTagName("body")[0].appendChild(i), i
        }, t.ChatPopup.init = function (e) {
            var i = window.postMessage && e.preferIFrame, a = i ? t.ChatPopup.IFrame : t.ChatPopup.Window;
            t.Objects.ChatPopups[e.id] = new a(e)
        };
        var e = function (t) {
            this.id = t.id, this.url = t.url, this.width = t.width, this.height = t.height, this.resizable = t.resizable || !1, this.styleLoader = t.styleLoader, this.modSecurity = t.modSecurity || !1
        };
        e.prototype.buildChatUrl = function () {
            var t = document.location.href, e = document.referrer;
            return this.modSecurity && (t = t.replace("http://", "").replace("https://", ""), e = e.replace("http://", "").replace("https://", "")), this.url + (-1 === this.url.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(t) + "&referrer=" + encodeURIComponent(e)
        }, t.ChatPopup.IFrame = function (i) {
            e.call(this, i), this.iframe = null, this.isOpened = !1, this.attachDefaultStyles(), t.Utils.loadScript(this.styleLoader);
            var a = t.Utils.readCookie("mibew-chat-frame-" + this.id);
            a && this.open(a)
        }, t.Utils.inherits(t.ChatPopup.IFrame, e), t.ChatPopup.IFrame.prototype.attachDefaultStyles = function () {
            var t = !1;
            return function () {
                if (!t) {
                    t = !0;
                    var e = document.createElement("style"), i = ".mibew-chat-frame {height: 0px; width: 0px;}";
                    e.setAttribute("type", "text/css"), e.styleSheet ? e.styleSheet.cssText = i : e.appendChild(document.createTextNode(i)), document.getElementsByTagName("body")[0].appendChild(e)
                }
            }
        }(), t.ChatPopup.IFrame.prototype.open = function (t) {
            if (!this.isOpened) {
                if (!this.iframe) {
                    var e = document.createElement("div");
                    e.innerHTML = '<iframe name="mibewChat' + this.id + '"></iframe>', this.iframe = e.getElementsByTagName("iframe")[0], this.iframe.setAttribute("id", "mibew-chat-frame-" + this.id), this.iframe.className = "mibew-chat-frame", this.iframe.setAttribute("frameBorder", 0), this.iframe.style.display = "none", document.getElementsByTagName("body")[0].appendChild(this.iframe)
                }
                this.iframe.style.display = "block", this.iframe.src = t || this.buildChatUrl(), this.isOpened = !0
            }
        }, t.ChatPopup.IFrame.prototype.close = function () {
            this.isOpened && (this.iframe.style.display = "none", this.iframe.src = "", this.isOpened = !1, t.Utils.deleteCookie("mibew-chat-frame-" + this.id))
        }, t.ChatPopup.Window = function (t) {
            e.call(this, t), this.window = null
        }, t.Utils.inherits(t.ChatPopup.Window, e), t.ChatPopup.Window.prototype.open = function (t) {
            this.window = window.open(t || this.buildChatUrl(), "mibewChat" + this.id, this.getWindowParams()), this.window.focus(), this.window.opener = window
        }, t.ChatPopup.Window.prototype.close = function () {
            this.window && (this.window.close(), this.window = null)
        }, t.ChatPopup.Window.prototype.getWindowParams = function () {
            return ["toolbar=0", "scrollbars=0", "location=0", "status=1", "menubar=0", "width=" + this.width.toString(), "height=" + this.height.toString(), "resizable=" + (this.resizable ? "1" : "0")].join(",")
        }, t.Utils.addEventListener(window, "message", function (e) {
            var i = /^mibew-chat-started\:mibewChat([0-9A-Za-z]+)\:(.*)$/.exec(e.data);
            i && t.Utils.createCookie("mibew-chat-frame-" + i[1], i[2])
        }), t.Utils.addEventListener(window, "message", function (e) {
            var i = t.Objects.ChatPopups, a = /^mibew-chat-closed\:mibewChat([0-9A-Za-z]+)$/.exec(e.data);
            a && i[a[1]] && i[a[1]].close()
        })
    }
}(Mibew);

var mibewBbutton = $('#mibew-agent-button');
var chatShowed = false;
mibewBbutton.click(function (e) {
    e.preventDefault();
    Mibew.ChatPopup.init({
        'id': 'mibewChat',
        'url': '/support/chat?locale=ru&style=reproduction',
        'preferIFrame': true,
        'modSecurity': false,
        'resizable': true,
        'styleLoader': '/support/chat/style/popup/reproduction'
    });
    Mibew.Objects.ChatPopups['mibewChat'].open();
    chatShowed = true;
});
setClassForMibewButton(true);
function setClassForMibewButton(firstCall) {
    $.ajax({
        url: "/support/b?i=mibew&lang=ru", success: function (response) {
            if(true != firstCall && !chatShowed && 'on' == response){
                chatShowed = true;
                mibewBbutton.click();
            }
            mibewBbutton.removeClass('on').removeClass('off').addClass(response);
            setTimeout(setClassForMibewButton, 30000);
        }
    });
}