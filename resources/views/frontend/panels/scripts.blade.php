            <style id='global-styles-inline-css' type='text/css'>
                        body {
                            --wp--preset--color--black: #000000;
                            --wp--preset--color--cyan-bluish-gray: #abb8c3;
                            --wp--preset--color--white: #ffffff;
                            --wp--preset--color--pale-pink: #f78da7;
                            --wp--preset--color--vivid-red: #cf2e2e;
                            --wp--preset--color--luminous-vivid-orange: #ff6900;
                            --wp--preset--color--luminous-vivid-amber: #fcb900;
                            --wp--preset--color--light-green-cyan: #7bdcb5;
                            --wp--preset--color--vivid-green-cyan: #00d084;
                            --wp--preset--color--pale-cyan-blue: #8ed1fc;
                            --wp--preset--color--vivid-cyan-blue: #0693e3;
                            --wp--preset--color--vivid-purple: #9b51e0;
                            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
                            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
                            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
                            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
                            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
                            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
                            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
                            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
                            --wp--preset--font-size--small: 13px;
                            --wp--preset--font-size--medium: 20px;
                            --wp--preset--font-size--large: 36px;
                            --wp--preset--font-size--x-large: 42px;
                            --wp--preset--spacing--20: 0.44rem;
                            --wp--preset--spacing--30: 0.67rem;
                            --wp--preset--spacing--40: 1rem;
                            --wp--preset--spacing--50: 1.5rem;
                            --wp--preset--spacing--60: 2.25rem;
                            --wp--preset--spacing--70: 3.38rem;
                            --wp--preset--spacing--80: 5.06rem;
                            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
                        }
                        
                        :where(.is-layout-flex) {
                            gap: 0.5em;
                        }
                        
                        body .is-layout-flow>.alignleft {
                            float: left;
                            margin-inline-start: 0;
                            margin-inline-end: 2em;
                        }
                        
                        body .is-layout-flow>.alignright {
                            float: right;
                            margin-inline-start: 2em;
                            margin-inline-end: 0;
                        }
                        
                        body .is-layout-flow>.aligncenter {
                            margin-left: auto !important;
                            margin-right: auto !important;
                        }
                        
                        body .is-layout-constrained>.alignleft {
                            float: left;
                            margin-inline-start: 0;
                            margin-inline-end: 2em;
                        }
                        
                        body .is-layout-constrained>.alignright {
                            float: right;
                            margin-inline-start: 2em;
                            margin-inline-end: 0;
                        }
                        
                        body .is-layout-constrained>.aligncenter {
                            margin-left: auto !important;
                            margin-right: auto !important;
                        }
                        
                        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                            max-width: var(--wp--style--global--content-size);
                            margin-left: auto !important;
                            margin-right: auto !important;
                        }
                        
                        body .is-layout-constrained>.alignwide {
                            max-width: var(--wp--style--global--wide-size);
                        }
                        
                        body .is-layout-flex {
                            display: flex;
                        }
                        
                        body .is-layout-flex {
                            flex-wrap: wrap;
                            align-items: center;
                        }
                        
                        body .is-layout-flex>* {
                            margin: 0;
                        }
                        
                        :where(.wp-block-columns.is-layout-flex) {
                            gap: 2em;
                        }
                        
                        .has-black-color {
                            color: var(--wp--preset--color--black) !important;
                        }
                        
                        .has-cyan-bluish-gray-color {
                            color: var(--wp--preset--color--cyan-bluish-gray) !important;
                        }
                        
                        .has-white-color {
                            color: var(--wp--preset--color--white) !important;
                        }
                        
                        .has-pale-pink-color {
                            color: var(--wp--preset--color--pale-pink) !important;
                        }
                        
                        .has-vivid-red-color {
                            color: var(--wp--preset--color--vivid-red) !important;
                        }
                        
                        .has-luminous-vivid-orange-color {
                            color: var(--wp--preset--color--luminous-vivid-orange) !important;
                        }
                        
                        .has-luminous-vivid-amber-color {
                            color: var(--wp--preset--color--luminous-vivid-amber) !important;
                        }
                        
                        .has-light-green-cyan-color {
                            color: var(--wp--preset--color--light-green-cyan) !important;
                        }
                        
                        .has-vivid-green-cyan-color {
                            color: var(--wp--preset--color--vivid-green-cyan) !important;
                        }
                        
                        .has-pale-cyan-blue-color {
                            color: var(--wp--preset--color--pale-cyan-blue) !important;
                        }
                        
                        .has-vivid-cyan-blue-color {
                            color: var(--wp--preset--color--vivid-cyan-blue) !important;
                        }
                        
                        .has-vivid-purple-color {
                            color: var(--wp--preset--color--vivid-purple) !important;
                        }
                        
                        .has-black-background-color {
                            background-color: var(--wp--preset--color--black) !important;
                        }
                        
                        .has-cyan-bluish-gray-background-color {
                            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
                        }
                        
                        .has-white-background-color {
                            background-color: var(--wp--preset--color--white) !important;
                        }
                        
                        .has-pale-pink-background-color {
                            background-color: var(--wp--preset--color--pale-pink) !important;
                        }
                        
                        .has-vivid-red-background-color {
                            background-color: var(--wp--preset--color--vivid-red) !important;
                        }
                        
                        .has-luminous-vivid-orange-background-color {
                            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
                        }
                        
                        .has-luminous-vivid-amber-background-color {
                            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
                        }
                        
                        .has-light-green-cyan-background-color {
                            background-color: var(--wp--preset--color--light-green-cyan) !important;
                        }
                        
                        .has-vivid-green-cyan-background-color {
                            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
                        }
                        
                        .has-pale-cyan-blue-background-color {
                            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
                        }
                        
                        .has-vivid-cyan-blue-background-color {
                            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
                        }
                        
                        .has-vivid-purple-background-color {
                            background-color: var(--wp--preset--color--vivid-purple) !important;
                        }
                        
                        .has-black-border-color {
                            border-color: var(--wp--preset--color--black) !important;
                        }
                        
                        .has-cyan-bluish-gray-border-color {
                            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
                        }
                        
                        .has-white-border-color {
                            border-color: var(--wp--preset--color--white) !important;
                        }
                        
                        .has-pale-pink-border-color {
                            border-color: var(--wp--preset--color--pale-pink) !important;
                        }
                        
                        .has-vivid-red-border-color {
                            border-color: var(--wp--preset--color--vivid-red) !important;
                        }
                        
                        .has-luminous-vivid-orange-border-color {
                            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
                        }
                        
                        .has-luminous-vivid-amber-border-color {
                            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
                        }
                        
                        .has-light-green-cyan-border-color {
                            border-color: var(--wp--preset--color--light-green-cyan) !important;
                        }
                        
                        .has-vivid-green-cyan-border-color {
                            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
                        }
                        
                        .has-pale-cyan-blue-border-color {
                            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
                        }
                        
                        .has-vivid-cyan-blue-border-color {
                            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
                        }
                        
                        .has-vivid-purple-border-color {
                            border-color: var(--wp--preset--color--vivid-purple) !important;
                        }
                        
                        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
                        }
                        
                        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
                        }
                        
                        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
                        }
                        
                        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
                        }
                        
                        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
                        }
                        
                        .has-cool-to-warm-spectrum-gradient-background {
                            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
                        }
                        
                        .has-blush-light-purple-gradient-background {
                            background: var(--wp--preset--gradient--blush-light-purple) !important;
                        }
                        
                        .has-blush-bordeaux-gradient-background {
                            background: var(--wp--preset--gradient--blush-bordeaux) !important;
                        }
                        
                        .has-luminous-dusk-gradient-background {
                            background: var(--wp--preset--gradient--luminous-dusk) !important;
                        }
                        
                        .has-pale-ocean-gradient-background {
                            background: var(--wp--preset--gradient--pale-ocean) !important;
                        }
                        
                        .has-electric-grass-gradient-background {
                            background: var(--wp--preset--gradient--electric-grass) !important;
                        }
                        
                        .has-midnight-gradient-background {
                            background: var(--wp--preset--gradient--midnight) !important;
                        }
                        
                        .has-small-font-size {
                            font-size: var(--wp--preset--font-size--small) !important;
                        }
                        
                        .has-medium-font-size {
                            font-size: var(--wp--preset--font-size--medium) !important;
                        }
                        
                        .has-large-font-size {
                            font-size: var(--wp--preset--font-size--large) !important;
                        }
                        
                        .has-x-large-font-size {
                            font-size: var(--wp--preset--font-size--x-large) !important;
                        }
</style>
                    

                    <script data-cfasync="false" src="{{ asset('themes/frontend/assets/js/email-decode.min.js') }}"></script>
                    <script type='text/javascript' id='wpcf7-redirect-script-js-extra'>
                        /* <![CDATA[ */
                        var wpcf7r = {
                            "ajax_url": "https:\/\/hoanglienpark.com\/wp-admin\/admin-ajax.php"
                        };
                        /* ]]> */
                    </script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/wpcf7r-fe.js') }}' id='wpcf7-redirect-script-js'></script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/front.js') }}' id='CALCULATIONCF7-front-js-js'></script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/index.js') }}' id='swv-js'></script>
                    <script type='text/javascript' id='contact-form-7-js-extra'>
                        /* <![CDATA[ */
                        var wpcf7 = {
                            "api": {
                                "root": "https:\/\/hoanglienpark.com\/wp-json\/",
                                "namespace": "contact-form-7\/v1"
                            }
                        };
                        /* ]]> */
                    </script>
                    <!-- <script type='text/javascript' src='https://hoanglienpark.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.6' id='contact-form-7-js'></script> -->
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/flatsome-live-search.js') }}' id='flatsome-live-search-js'></script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/wp-polyfill-inert.min.js') }}' id='wp-polyfill-inert-js'></script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/regenerator-runtime.min.js') }}' id='regenerator-runtime-js'></script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/wp-polyfill.min.js') }}' id='wp-polyfill-js'></script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/hoverIntent.min.js') }}' id='hoverIntent-js'></script>
                    <script type='text/javascript' id='flatsome-js-js-extra'>
                        /* <![CDATA[ */
                        var flatsomeVars = {
                            "theme": {
                                "version": "3.15.7"
                            },
                            "ajaxurl": "https:\/\/hoanglienpark.com\/wp-admin\/admin-ajax.php",
                            "rtl": "",
                            "sticky_height": "70",
                            "assets_url": "https:\/\/hoanglienpark.com\/wp-content\/themes\/flatsome\/assets\/js\/",
                            "lightbox": {
                                "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
                                "close_btn_inside": false
                            },
                            "user": {
                                "can_edit_pages": false
                            },
                            "i18n": {
                                "mainMenu": "Main Menu",
                                "toggleButton": "Toggle"
                            },
                            "options": {
                                "cookie_notice_version": "1",
                                "swatches_layout": false,
                                "swatches_box_select_event": false,
                                "swatches_box_behavior_selected": false,
                                "swatches_box_update_urls": "1",
                                "swatches_box_reset": false,
                                "swatches_box_reset_extent": false,
                                "swatches_box_reset_time": 300,
                                "search_result_latency": "0"
                            }
                        };
                        /* ]]> */
                    </script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/flatsome.js') }}' id='flatsome-js-js'></script>
         
                    <script type='text/javascript' id='formidable-js-extra'>
                        /* <![CDATA[ */
                        var frm_js = {
                            "ajax_url": "https:\/\/hoanglienpark.com\/wp-admin\/admin-ajax.php",
                            "images_url": "https:\/\/hoanglienpark.com\/wp-content\/plugins\/formidable\/images",
                            "loading": "Loading\u2026",
                            "remove": "Remove",
                            "offset": "4",
                            "nonce": "e2c2451c81",
                            "id": "ID",
                            "no_results": "No results match",
                            "file_spam": "That file looks like Spam.",
                            "calc_error": "There is an error in the calculation in the field with key",
                            "empty_fields": "Please complete the preceding required fields before uploading a file.",
                            "focus_first_error": "1",
                            "include_alert_role": "1"
                        };
                        /* ]]> */
                    </script>
                    <script type='text/javascript' src='{{ asset('themes/frontend/assets/js/frm.min.js') }}' id='formidable-js'></script>

@isset($web_information->source_code->footer)
  {!! $web_information->source_code->footer !!}
@endisset
