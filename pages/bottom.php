<? // include 'footer/'?>
</div>

<!-- popup -->
<div class="popup">
    <button class="popup__close" type="button">
        <img class="popup__close-img" src="/images/icons/close.png">
    </button>
    <div class="popup__wrapper"></div>
</div>
<!-- END popup -->

<!-- callorderTemplate -->
<div hidden class="callorderTemplate">
    <div class="callorder">
        <form class="callorder__form form" action="#" method="post">
            <div class="callorder__title"> </div>
            <div class="callorder__subtitle"> </div>
            <div class="form__fields">

            </div>
            <input type="hidden" name="action" value="callorderDataSend">
            <input type="hidden" name="theme" value="">
            <button class="form__submit callorder__submit" type="submit">
                <div class="btn">
                    <div class="btn__title"> </div>
                    <div class="btn__lines">
                        <div class="btn__line-top"></div>
                        <div class="btn__line-right"></div>
                        <div class="btn__line-bottom"></div>
                        <div class="btn__line-left"></div>
                    </div>
                </div>
            </button>
        </form>
    </div>
</div>
<!-- END callorderTemplate -->

<!-- Yandex.Metrika counter start -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(37527960, "init", {
        id: 37527960,
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/37527960" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter end -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = 'EgGTx7jAU8';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id
            ;var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();
</script>
<!-- {/literal} END JIVOSITE CODE -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100147413-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-100147413-1');
</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3028883", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div>
        <img src="//top-fwz1.mail.ru/counter?id=3028883;js=na" style="border:0;position:absolute;left:-9999px;"
             alt=""/>
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1523476794416728');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1523476794416728&ev=PageView&noscript=1"
    />
</noscript>
<!-- End Facebook Pixel Code -->

<script type='application/ld+json'>
    {
        "@context": "https://www.schema.org",
        "@type": "Organization",
        "name": "Веб-Комп",
        "url": "https://web-comp.ru/",
        "telephone": "+7 (495) 150-45-98",
        "email": "info@web-comp.ru",
        "logo": "https://web-comp.ru/images/bg/logo.png",
        "image": "https://web-comp.ru/images/bg/logo.png",
        "description": "Создание и продвижение сайтов",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Нижние поля, 31",
            "addressLocality": "Москва",
            "postalCode": "109382",
            "addressCountry": "Российская Федерация"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+7 (495) 150-45-98",
            "contactType": "sales"
        }
    }
</script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/js/vendor.min.js"></script>
<script src="/js/main.min.js"></script>
</body>
</html>