/*

[Main Script]

Project     : USNews - Multipurpose News, Magazine and Blog HTML5 Template
Author      : themelooks.com
Author URI  : https://themeforest.net/user/themelooks

*/

;(function (b) {
    var p = b(window), l = b(document), v = b("body"), g = "rtl" === b("html").attr("dir") ? !0 : !1;
    b(function () {
        b("[data-bg-img]").each(function () {
            var a = b(this);
            a.css("background-image", "url(" + a.data("bg-img") + ")").addClass("bg--img").attr("data-rjs", 2).removeAttr("data-bg-img")
        });
        b("img").attr("data-rjs", 2);
        retinajs();
        b('[data-trigger="sticky"]').each(function () {
            b(this).sticky({zIndex: 999})
        });
        b('[data-toggle="tooltip"]').tooltip();
        b("[data-marquee]").marquee({
            direction: g ? "right" : "left", delayBeforeStart: 0,
            duration: g ? 8E3 : 2E4, pauseOnHover: !0, startVisible: !0
        });
        var c = b('[data-zoom="img"]');
        c.length && c.zoom();
        b('[data-trigger="smoothScroll"]').on("click", function (a) {
            a.preventDefault();
            a.$el = b(this);
            a.$target = this.hash;
            b("html, body").animate({scrollTop: b(a.$target).offset().top - 60}, 1200)
        });
        b('[data-form="validate"]').each(function () {
            b(this).validate({
                errorPlacement: function () {
                    return !0
                }
            })
        });
        b('[data-ajax="tab"]').on("click", "[data-ajax-action]", function (a) {
            var f = b(this),
                c = f.parents('[data-ajax="tab"]').siblings('[data-ajax-content="outer"]').find(".preloader"),
                h = f.attr("href"), d = f.data("ajax-action");
            c.fadeIn();
            b.post(h, {action: d}, function (b) {
                c.fadeOut()
            });
            f.parent("li").length && f.parent("li").addClass("active").siblings().removeClass("active");
            a.preventDefault()
        });
        b('[data-form="ajax"]').each(function () {
            var a = b(this), f = a.find(".status");
            a.validate({
                errorPlacement: function () {
                    return !0
                }, submitHandler: function (a) {
                    var c = b(a);
                    a = c.attr("action");
                    c = c.serialize();
                    b.post(a, c, function (a) {
                        f.show().html(a).delay(3E3).fadeOut("show")
                    })
                }
            })
        });
        b('[data-form="mailchimpAjax"]').each(function () {
            b(this).validate({
                errorPlacement: function () {
                    return !1
                },
                submitHandler: function (a) {
                    a = b(a);
                    var f = a.children(".status"), c = a.serialize(),
                        h = a.attr("action").replace("/post?", "/post-json?").concat("&c=?"),
                        d = a.find('button[type="submit"] .fa');
                    f.slideUp("slow");
                    d.toggleClass(function () {
                        if (d.hasClass("fa-paper-plane-o")) return "fa-paper-plane-o";
                        if (d.hasClass("fa-close")) return "fa-close";
                        if (d.hasClass("fa-check")) return "fa-check"
                    }() + " fa-spinner fa-spin");
                    b.getJSON(h, c, function (a) {
                        a.text = "0" === a.msg.charAt(0) ? a.msg.substring(4) : a.msg;
                        a.fa = "error" === a.result && "0" ===
                        a.msg.charAt(0) ? "fa-close" : "fa-check";
                        f.html("<p>" + a.text + "</p>").slideDown("slow");
                        d.toggleClass("fa-spinner fa-spin " + a.fa)
                    })
                }
            })
        });
        b(".poll--widget").on("submit", "form", function (a) {
            b(this).find(".btn").addClass("disabled").attr("disabled", "disabled");
            a.preventDefault()
        });
        b(".cart--widget").on("click", ".remove", function (a) {
            a.preventDefault();
            a.$el = b(this);
            a.$parent = a.$el.parent("li");
            a.$el.fadeOut(function () {
                0 === a.$parent.index() && 0 === a.$parent.next().length ? a.$parent.html("<p>No products in cart.</p>") :
                    a.$parent.remove()
            })
        });
        c = b(".fb--widget > iframe");
        c.length && c.attr("src", function (a, f) {
            var c = b(this), d = c.parent().width();
            return f = f.replace(c.width(), d)
        }).attr("width", function () {
            return b(this).parent().width()
        });
        b('[data-trigger="hoverIntent"]').hoverIntent({
            selector: "li.dropdown", over: function () {
                b(this).addClass("open")
            }, out: function () {
                b(this).removeClass("open")
            }, timeout: 200, interval: 200
        });
        b("[data-countdown]").each(function () {
            var a = b(this);
            a.countdown(a.data("countdown"), function (a) {
                b(this).html("<ul>" +
                    a.strftime("<li><strong>%D</strong><span>DAYS</span></li><li><strong>%H</strong><span>HOURS</span></li><li><strong>%M</strong><span>MINUTES</span></li><li><strong>%S</strong><span>SECONDS</span></li>") + "</ul>")
            })
        });
        var e = function (a, b) {
            for (b = {now: 1, max: b, result: ""}; b.now++ <= b.max;) b.result += "<span></span>";
            a.append(b.result)
        };
        b(".preloader--inner").each(function () {
            var a = b(this);
            switch (a.parent(".preloader").data("preloader")) {
                case 6:
                    e(a, 12);
                    break;
                case 7:
                    e(a, 5);
                    break;
                case 8:
                    e(a, 4);
                    break;
                case 9:
                    e(a,
                        9);
                    break;
                case 10:
                    e(a, 4);
                    break;
                case "img":
                    a.append('<img src="' + a.parent().data("preloader-img") + '" alt="Preloader Logo">')
            }
        });
        c = b(".megamenu");
        c.on("click", ".dropdown-menu", function (a) {
            a.stopPropagation()
        });
        c.on("click", ".dropdown-toggle", function (a) {
            a.$el = b(this);
            992 > p.width() && (a.$el.parent(".posts").length || a.$el.parent(".filter").length) && (a.preventDefault(), window.location = a.$el.attr("href"))
        });
        c.on("click", ".megamenu--filter a[data-action]", function (a) {
            var c = b(this), d = c.parents(".megamenu").find(".megamenu--posts .preloader"),
                h = c.attr("href"), g = c.data("action"), e = c.data("cat");
            d.fadeIn();
            b.post(h, {action: g, cat: e}, function () {
                d.fadeOut()
            });
            c.parent("li").addClass("active").siblings().removeClass("active");
            a.preventDefault()
        });
        var k = b(".header--search-form");
        k.on("click", ".btn", function (a) {
            k.addClass("active");
            setTimeout(function () {
                k.children(".form-control").trigger("focus");
                l.on("click.headerSearchForm", function (a) {
                    a.$target = b(a.target);
                    if (0 === a.$target.not(".header--search-form").length || 0 === a.$target.parents(".header--search-form").length) k.removeClass("active"),
                        l.off("click.headerSearchForm")
                })
            }, 200)
        });
        c = b(".header--navbar");
        var h = b(".header--navbar .navbar-toggle"), d = b("#headerNav");
        h.on("click", function (a) {
            setTimeout(function () {
                l.on("click.headerNavbarToggle", function (a) {
                    a.$target = b(a.target);
                    0 === a.$target.parents("#headerNav").length && (d.removeClass("in"), h.addClass("collapsed"), l.off("click.headerNavbarToggle"))
                })
            }, 200)
        });
        var w = b('[data-sticky-content="true"]');
        w.length && w.theiaStickySidebar({additionalMarginTop: c.length ? c.outerHeight() : 0});
        c = b('[data-trigger="map"]');
        b.fn.initMap = function () {
            if ("undefined" !== typeof google) {
                var a = new google.maps.Map(this[0], {
                    center: {
                        lat: this.data("map-latitude"),
                        lng: this.data("map-longitude")
                    }, zoom: this.data("map-zoom"), scrollwheel: !1, disableDefaultUI: !0, zoomControl: !0
                });
                if ("undefined" !== typeof this.data("map-marker")) {
                    var b = this.data("map-marker"), c = 0;
                    for (c; c < b.length; c++) new google.maps.Marker({
                        position: {lat: b[c][0], lng: b[c][1]},
                        map: a,
                        animation: google.maps.Animation.DROP,
                        draggable: !0
                    })
                }
            }
        };
        c.each(function () {
            b(this).initMap()
        });
        b(".post--map").on("click", ".btn-link", function () {
            var a = b(this);
            a.addClass("active");
            "undefined" === typeof a.data("map-status") && (a.attr("data-map-status", "loaded"), a.siblings(".map--wrapper").children("div").initMap());
            setTimeout(function () {
                l.on("click.postMap", function (c) {
                    c.$target = b(c.target);
                    if (0 === c.$target.not(".map--wrapper").length || 0 === c.$target.parents(".map--wrapper").length) a.removeClass("active"), l.off("click.postMap")
                })
            }, 200)
        });
        c = b(".contributor--item.style--3");
        c.length && c.css("padding-bottom",
            function () {
                return b(this).children(".info").outerHeight()
            });
        var m = b(".counter--item"), q = 0;
        m.length && m.css("height", function (a, b) {
            b = parseInt(b, 10);
            q = b > q ? b : q;
            m.length === a + 1 && m.css("height", q)
        });
        c = b("#productRatingSelect");
        c.length && c.barrating({theme: "fontawesome-stars-o", hoverState: !1});
        b(".cart--items").on("click", ".remove", function (a) {
            a.preventDefault();
            a.$el = b(this);
            a.$parents = a.$el.parent("td").parent("tr");
            a.$el.fadeOut(function () {
                0 === a.$parents.index() && 0 === a.$parents.next().length ? a.$parents.html('<td colspan="6" class="text-left">No products in cart.</td>') :
                    a.$parents.remove()
            })
        });
        b(".checkout--info-toggle").on("click", function (a) {
            a.preventDefault();
            b(this).toggleClass("active").parent("p").parent(".title").siblings(".checkout--info-form").slideToggle()
        });
        var r = b(".contact--cats > .nav > li"), n = 0;
        r.each(function (a) {
            var c = b(this).outerHeight();
            c > n && (n = c);
            r.length === a + 1 && r.css("min-height", n)
        });
        var t = b(".footer--copyright"), u = t.find(".social");
        c = t.children(".social--bg");
        g && c.length ? c.css("right", function () {
                return t.outerWidth() - (u.position().left + u.outerWidth())
            }) :
            !g && c.length && c.css("left", u.position().left);
        b("#backToTop").on("click", "a", function (a) {
            a.preventDefault();
            b("html, body").animate({scrollTop: 0}, 1200)
        });
        "undefined" !== typeof b.cColorSwitcher && b.cColorSwitcher({
            switcherTitle: "Main Colors:&lrm;",
            switcherColors: [{bgColor: "#da0000", filepath: "css/colors/theme-color-1.css"}, {
                bgColor: "#119ee6",
                filepath: "css/colors/theme-color-2.css"
            }, {bgColor: "#179ea8", filepath: "css/colors/theme-color-3.css"}, {
                bgColor: "#82b440",
                filepath: "css/colors/theme-color-4.css"
            },
                {bgColor: "#f69323", filepath: "css/colors/theme-color-5.css"}, {
                    bgColor: "#fc5143",
                    filepath: "css/colors/theme-color-6.css"
                }, {bgColor: "#d48b91", filepath: "css/colors/theme-color-7.css"}, {
                    bgColor: "#8cbeb2",
                    filepath: "css/colors/theme-color-8.css"
                }, {bgColor: "#00b249", filepath: "css/colors/theme-color-9.css"}, {
                    bgColor: "#924cf3",
                    filepath: "css/colors/theme-color-10.css"
                }],
            switcherTarget: b("#changeColorScheme")
        })
    });
    p.on("load", function () {
        var c = function () {
            1 < p.scrollTop() ? v.addClass("isScrolling") : v.removeClass("isScrolling")
        };
        c();
        p.on("scroll", c);
        c = b(".AdjustRow");
        c.length && c.isotope({originLeft: g ? !1 : !0, layoutMode: "fitRows"});
        c = b(".header--navbar .dropdown-menu");
        var e = c.children(".dropdown");
        c.each(function () {
            var c = b(this), d = c.parent("li"), e = d.parents(".container").width() - (d.position().left - 15),
                m = d.position().left - 15 + d.width();
            d.parent("ul.nav").length && !d.hasClass("megamenu") && (g && m < c.width() ? d.addClass("dropdown-left") : e < c.width() && d.addClass("dropdown-left"))
        });
        if (e.length) e.on("mouseenter", function () {
            var c = b(this);
            "undefined" === typeof c.data("switch") && setTimeout(function () {
                var b = c.children(".dropdown-menu"), e = c.parents(".dropdown"), h = c.parents(".container").width(),
                    k = e.position().left - 15 + c.width() + b.width(), l = e.position().left - 15 + e.width(),
                    n = c.width() + b.width();
                c.addClass(function () {
                    if (g && n > l || !g && k < h) return "switch--right";
                    if (g && n < l || !g && k > h) return "switch--left"
                }).attr("data-switch", !0)
            }, 420)
        });
        e.on("click", ".dropdown-toggle", function (b) {
            b.preventDefault();
            b.stopPropagation()
        });
        var k = b(".google-plus--widget > .g-page");
        k.each(function (c) {
            var d = b(this);
            d.attr("data-width", d.parent().width());
            k.length === c + 1 && "undefined" !== typeof gapi && gapi.page.go()
        });
        c = b(".portfolio--section").find(".portfolio--items");
        c.length && c.isotope({animationEngine: "best-available", itemSelector: ".portfolio--item"});
        c = b("#preloader");
        c.length && c.fadeOut("slow")
    })
})(jQuery);
