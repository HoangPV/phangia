/*jslint browser: true, white: true */
/*global console,jQuery,megamenu,window,navigator*/

/**
 * EDD Ajax Cart
 */
(function($) {
    "use strict";

    $(function() {
        $('body').on('edd_cart_item_added', function(event, data) {
            $('.mega-menu-edd-cart-total').html(data.total);
            $('.mega-menu-edd-cart-count').html(data.cart_quantity);
        });
    });

})(jQuery);

/**
 * Searchbox jQuery plugin
 */
(function($) {
    "use strict";

    $.maxmegamenu_searchbox = function(menu, options) {

        var plugin = this;
        var $menu = $(menu);
        var $wrap = $menu.parent();
        var breakpoint = $menu.attr('data-breakpoint');

        plugin.isDesktopView = function() {
            return Math.max(window.outerWidth, $(window).width()) >= breakpoint; // account for scrollbars
        };

        plugin.isMobileView = function() {
            return !plugin.isDesktopView();
        };

        plugin.monitorView = function() {
            if (plugin.isDesktopView()) {
                $menu.data("proview", "desktop");
            } else {
                $menu.data("proview", "mobile");
            }

            plugin.checkWidth();

            $(window).resize(function() {
                plugin.checkWidth();
            });
        };

        plugin.checkWidth = function() {
            var expanding_search = $("li.mega-menu-item .mega-search.expand-to-left input[type=text], li.mega-menu-item .mega-search.expand-to-right input[type=text]", $menu);

            if ( plugin.isMobileView() ) {
                var placeholder = expanding_search.attr('data-placeholder');
                expanding_search.attr('placeholder', placeholder);
            }

            if ( plugin.isMobileView() && $menu.data("proview") === "desktop" ) {
                $menu.data("proview", "mobile");
                var placeholder = expanding_search.attr('data-placeholder');
                expanding_search.attr('placeholder', placeholder);
            }

            if ( plugin.isDesktopView() && $menu.data("proview") === "mobile" ) {
                $menu.data("proview", "desktop");
                expanding_search.attr('placeholder', '');
            }
        };

        plugin.init_replacements_search = function() {

            $(".mega-search", $menu).children('input[type=text]').val("");

            if ( plugin.isMobileView() ) {
                $(".mega-search.expand-to-left .search-icon", $menu).on('click', function(e) {
                    $(this).parents(".mega-search").submit();
                });
            } else {
                $(".mega-search input[type=text]", $menu).on('focus', function(e) {
                    var form = $(this).parents('.mega-search');

                    if (! form.parent().hasClass('mega-static') && form.hasClass('mega-search-closed') && $menu.hasClass('mega-keyboard-navigation') ) {
                        $(this).attr('placeholder', $(this).attr('data-placeholder'));
                        form.removeClass('mega-search-closed');
                        form.addClass('mega-search-open');
                    }
                });

                $(".mega-search input[type=text]", $menu).on('blur', function(e) {
                    var form = $(this).parents('.mega-search');

                    if ( ! form.parent().hasClass('mega-static') && form.hasClass('mega-search-open') && $menu.hasClass('mega-keyboard-navigation') ) {
                        $(this).attr('placeholder', '');
                        form.removeClass('mega-search-open');
                        form.addClass('mega-search-closed');
                    }
                });

                $(".mega-search .search-icon", $menu).on('click', function(e) {

                    var input = $(this).parents('.mega-search').children('input[type=text]');
                    var form = $(this).parents('.mega-search');

                    if (form.parent().hasClass('mega-static') ) {
                        form.submit();
                    } else if (form.hasClass('mega-search-closed')) {
                        input.focus();
                        input.attr('placeholder', input.attr('data-placeholder'));
                        form.removeClass('mega-search-closed');
                        form.addClass('mega-search-open');
                    } else if ( input.val() == '' ) {
                        form.addClass('mega-search-closed');
                        form.removeClass('mega-search-open');
                        input.attr('placeholder', '');
                    } else {
                        form.submit();
                    }
                });
            }

        };


        plugin.init_toggle_search = function() {

            $(".mega-menu-toggle .mega-search", $wrap).children('input[type=text]').val("");

            $(".mega-menu-toggle .mega-search .search-icon", $wrap).on('click', function(e) {

                var input = $(this).parents('.mega-search').children('input[type=text]');
                var form = $(this).parents('.mega-search');

                if (form.hasClass('static') ) {
                    form.submit();
                } else if (form.hasClass('mega-search-closed')) {
                    input.focus();
                    input.attr('placeholder', input.attr('data-placeholder'));
                    form.removeClass('mega-search-closed');
                    form.addClass('mega-search-open');
                } else if ( input.val() == '' ) {
                    form.addClass('mega-search-closed');
                    form.removeClass('mega-search-open');
                    input.attr('placeholder', '');
                } else {
                    form.submit();
                }
            });

        };

        plugin.monitorView();
        plugin.init_replacements_search();
        plugin.init_toggle_search();

    };

    $.fn.maxmegamenu_searchbox = function(options) {

        return this.each(function() {
            if (undefined === $(this).data('maxmegamenu_searchbox')) {
                var plugin = new $.maxmegamenu_searchbox(this, options);
                $(this).data('maxmegamenu_searchbox', plugin);
            }
        });

    };

    $(function() {
        $(".mega-menu").maxmegamenu_searchbox();
    });
})(jQuery);

/**
 * Sticky jQuery Plugin
 */
(function($) {

    "use strict";

    $.maxmegamenu_sticky = function(menu, options) {
        var plugin = this;
        var $menu = $(menu);
        var $wrap = $menu.parent();
        var breakpoint = $menu.attr('data-breakpoint');
        var sticky_on_mobile = $menu.attr('data-sticky-mobile');
        var sticky_offset = parseInt($menu.attr('data-sticky-offset'));
        var sticky_hide_until_scroll_up = $menu.attr('data-sticky-hide');
        var sticky_hide_until_scroll_up_tolerance = parseInt($menu.attr('data-sticky-hide-tolerance'));
        var sticky_hide_until_scroll_up_offset = parseInt($menu.attr('data-sticky-hide-offset'));
        var sticky_menu_offset_top;
        var sticky_menu_offset_left;
        var sticky_menu_width;
        var sticky_menu_width_round_up;
        var sticky_menu_height;
        var is_stuck = false;
        var admin_bar_height = 0;
        var last_scroll_top = 0;
        var saved_scroll_top = 0;

        var sticky_hide_until_scroll_up_enabled = function() {
            return $menu.hasClass('mega-menu-horizontal') && sticky_hide_until_scroll_up == "true";
        }

        var sticky_enabled = function() {
            return $(window).width() > breakpoint || sticky_on_mobile === 'true';
        };

        var calculate_menu_position = function() {
            sticky_menu_offset_top = $wrap.offset().top;

            if ($('body.admin-bar').length && $("#wpadminbar:visible").length) {
                admin_bar_height = $('#wpadminbar').height();
                sticky_menu_offset_top = sticky_menu_offset_top - admin_bar_height;
            }

            if (sticky_offset < 0) {
                sticky_menu_offset_top = sticky_menu_offset_top + sticky_offset;
            } else {
                sticky_menu_offset_top = sticky_menu_offset_top - sticky_offset;
            }

            sticky_menu_offset_left = $menu.offset().left;
            sticky_menu_width = window.getComputedStyle($wrap[0]).width;
            sticky_menu_width_round_up = Math.ceil(parseFloat(sticky_menu_width));
            sticky_menu_height = $wrap.height();
        };

        plugin.stick_menu = function() {
            is_stuck = true;

            var total_offset = parseInt(admin_bar_height, 10) + parseInt(sticky_offset, 10);

            if (sticky_offset < 0) {
                total_offset = parseInt(admin_bar_height, 10);
            }

            var placeholder = $("<div />").addClass("mega-sticky-wrapper").css({
                'height' : sticky_menu_height + 'px',
                'position' :'static'
            });

            $wrap.addClass('mega-sticky').wrap(placeholder).css({
                'margin-top' : total_offset + 'px'
            });

            if ($(window).width() > breakpoint) {
                $menu.css({
                    'margin-left' : sticky_menu_offset_left + 'px',
                    'max-width' : sticky_menu_width_round_up + 'px'
                });
            } else {
                $menu.css({
                    'margin-left' : '0',
                    'max-width' : 'auto'
                });
            }

            $wrap.delay(0).queue(function(next){
                $(this).addClass('mega-stuck');
                next();
            });
        };

        plugin.unstick_menu = function() {
            is_stuck = false;

            $wrap.removeClass('mega-sticky').removeClass('mega-stuck').unwrap().css({
                'margin-top' : ''
            });

            $menu.css({
                'margin-left' : '',
                'max-width' : ''
            });
        };

        var mega_sticky_on_scroll = function(){
            if ( ! sticky_enabled() ) {
                return;
            }

            var scroll_top = $(window).scrollTop();

            if (scroll_top > sticky_menu_offset_top) {
                if (!is_stuck) {
                    plugin.stick_menu();
                }
            } else {
                if (is_stuck) {
                    plugin.unstick_menu();
                }
            }
        };

        var mega_hide_on_scroll_up = function() {
            if (sticky_hide_until_scroll_up_enabled()) {
                var scroll_top = $(window).scrollTop();

                if ( last_scroll_top > 0 ) {
                    // Only hide once scrolling. Show menu when refreshing page.
                    $wrap.addClass('mega-hide');
                }
                
                if ( scroll_top < sticky_hide_until_scroll_up_offset ) {
                    $wrap.addClass('mega-reveal');
                }
                
                saved_scroll_top = last_scroll_top;

                if (scroll_top < last_scroll_top) {
                    // scroll up
                    if (saved_scroll_top - scroll_top > sticky_hide_until_scroll_up_tolerance) {
                        $wrap.addClass('mega-reveal');
                    }
                } else {
                    // scroll down
                    if (scroll_top - saved_scroll_top > sticky_hide_until_scroll_up_tolerance) {
                        $wrap.removeClass('mega-reveal');
                    }
                }

                last_scroll_top = scroll_top;
            }
        }

        var mega_sticky_on_resize = function() {
            if ($('input', $wrap).is(':focus')) {
                return;
            }

            if ( sticky_enabled() ) {
                if (is_stuck) {
                    plugin.unstick_menu();
                    calculate_menu_position();
                    plugin.stick_menu();
                } else {
                    calculate_menu_position();
                    mega_sticky_on_scroll();
                }
            } else {
                if (is_stuck) {
                    plugin.unstick_menu();
                }
            }
        };

        plugin.init = function() {
            calculate_menu_position();
            mega_sticky_on_scroll();

            var $window = $(window);

            $window.scroll(function() {
                 mega_sticky_on_scroll();
                 mega_hide_on_scroll_up();
            });

            var windowWidth = $window.width();

            $window.resize(function() {
                if ($window.width() != windowWidth) {
                    windowWidth = $window.width();
                    mega_sticky_on_resize();
                }
            });
        };

        plugin.init();
    };

    $.fn.maxmegamenu_sticky = function(options) {

        return this.each(function() {
            if (undefined === $(this).data('maxmegamenu_sticky')) {
                var plugin = new $.maxmegamenu_sticky(this, options);
                $(this).data('maxmegamenu_sticky', plugin);
            }
        });

    };

    $(function() {
        $(".mega-menu[data-sticky-enabled]").maxmegamenu_sticky();
    });
})(jQuery);

/**
 * Handle tabbed functionality
 */
(function($) {
    $(function() {
        $('li.mega-menu-tabbed').on('open_panel', function() {
            var menu = $(this).parents('.mega-menu');
            var menu_item = $(this);

            if ( menu.data('view') == 'desktop' ) {
                var max_height = 0;

                if ($('> ul.mega-sub-menu > li.mega-menu-item-has-children.mega-toggle-on', menu_item).length == 0 ) {
                    $('> ul.mega-sub-menu > li.mega-menu-item-has-children', menu_item).first().addClass('mega-toggle-on');
                }

                $('> ul.mega-sub-menu > li.mega-menu-item > ul.mega-sub-menu', menu_item).each(function() {
                    var tab_content = $(this);
                    var this_height = parseInt(tab_content.css('height'));

                    if (this_height > max_height) {
                        max_height = this_height;
                    }
                });

                $('> ul.mega-sub-menu', menu_item).css('minHeight', max_height);
            }

            $('li.mega-menu-tabbed').on('close_panel', function() {
                $(".mega-toggle-on", menu).removeClass("mega-toggle-on");
            });
        });
    });
})(jQuery);