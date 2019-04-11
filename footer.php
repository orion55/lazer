<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package llorix-one-lite
 */
?>

<footer itemscope itemtype="//schema.org/WPFooter" id="footer" role="contentinfo"
        class="footer grey-bg">

    <div class="container">
        <div class="footer-widget-wrap">
            <?php
            if (is_active_sidebar('footer-area')) {
                ?>
                <div itemscope itemtype="//schema.org/WPSideBar" role="complementary"
                     id="sidebar-widgets-area-1"
                     class="col-md-3 col-sm-6 col-xs-12 widget-box"
                     aria-label="<?php esc_html_e('Widgets Area 1', 'llorix-one-lite'); ?>">
                    <?php
                    dynamic_sidebar('footer-area');
                    ?>
                </div>
                <?php
            }
            if (is_active_sidebar('footer-area-2')) {
                ?>
                <div itemscope itemtype="//schema.org/WPSideBar" role="complementary"
                     id="sidebar-widgets-area-2"
                     class="col-md-3 col-sm-6 col-xs-12 widget-box"
                     aria-label="<?php esc_html_e('Widgets Area 2', 'llorix-one-lite'); ?>">
                    <?php
                    dynamic_sidebar('footer-area-2');
                    ?>
                </div>
                <?php
            }
            if (is_active_sidebar('footer-area-3')) {
                ?>
                <div itemscope itemtype="//schema.org/WPSideBar" role="complementary"
                     id="sidebar-widgets-area-3"
                     class="col-md-3 col-sm-6 col-xs-12 widget-box"
                     aria-label="<?php esc_html_e('Widgets Area 3', 'llorix-one-lite'); ?>">
                    <?php
                    dynamic_sidebar('footer-area-3');
                    ?>
                </div>
                <?php
            }
            if (is_active_sidebar('footer-area-4')) {
                ?>
                <div itemscope itemtype="//schema.org/WPSideBar" role="complementary"
                     id="sidebar-widgets-area-4"
                     class="col-md-3 col-sm-6 col-xs-12 widget-box"
                     aria-label="<?php esc_html_e('Widgets Area 4', 'llorix-one-lite'); ?>">
                    <?php
                    dynamic_sidebar('footer-area-4');
                    ?>
                </div>
                <?php
            }
            ?>

        </div><!-- .footer-widget-wrap -->

        <div class="footer-bottom-wrap">
            <?php
            global $wp_customize;

            /* COPYRIGHT */
            $llorix_one_lite_copyright = get_theme_mod('llorix_one_lite_copyright', apply_filters('llorix_one_lite_copyright_default_filter', 'Themeisle'));
            $llorix_one_lite_copyright = apply_filters('llorix_one_lite_translate_single_string', $llorix_one_lite_copyright, 'Copyright');

            if (!empty($llorix_one_lite_copyright)) {
                echo '<span class="llorix_one_lite_copyright_content">' . esc_attr($llorix_one_lite_copyright) . '</span>';
            } elseif (isset($wp_customize)) {
                echo '<span class="llorix_one_lite_copyright_content llorix_one_lite_only_customizer"></span>';
            }

            /* OPTIONAL FOOTER LINKS */

            echo '<div itemscope role="navigation" itemtype="//schema.org/SiteNavigationElement" id="menu-secondary" aria-label="' . esc_html__('Secondary Menu', 'llorix-one-lite') . '">';
            echo '<div class="screen-reader-text">' . esc_html__('Secondary Menu', 'llorix-one-lite') . '</div>';
            wp_nav_menu(
                array(
                    'theme_location' => 'llorix_one_lite_footer_menu',
                    'container' => false,
                    'menu_class' => 'footer-links small-text',
                    'depth' => 1,
                    'fallback_cb' => false,
                )
            );
            echo '</div>';
            /* SOCIAL ICONS */

            $llorix_one_lite_social_icons = get_theme_mod('llorix_one_lite_social_icons');
            llorix_one_lite_social_icons($llorix_one_lite_social_icons, true);
            ?>
        </div><!-- .footer-bottom-wrap -->

        <!--LiveInternet counter-->
        <script type="text/javascript">
          document.write('<a href=\'//www.liveinternet.ru/click\' ' +
            'target=_blank><img src=\'//counter.yadro.ru/hit?t44.12;r' +
            escape(document.referrer) + ((typeof (screen) == 'undefined') ? '' :
              ';s' + screen.width + '*' + screen.height + '*' + (screen.colorDepth ?
              screen.colorDepth : screen.pixelDepth)) + ';u' + escape(document.URL) +
            ';h' + escape(document.title.substring(0, 150)) + ';' + Math.random() +
            '\' alt=\'\' title=\'LiveInternet\' ' +
            'border=\'0\' width=\'31\' height=\'31\'><\/a>')
        </script><!--/LiveInternet-->

        <!--<script type="text/javascript">(function (w, doc) {
            if (!w.__utlWdgt) {
              w.__utlWdgt = true
              var d = doc, s = d.createElement('script'), g = 'getElementsByTagName'
              s.type = 'text/javascript'
              s.charset = 'UTF-8'
              s.async = true
              s.src = ('' == w.location.protocol
                ? 'https'
                : 'https') + '://w.uptolike.com/widgets/v1/uptolike.js'
              var h = d[g]('body')[0]
              h.appendChild(s)
            }
          })(window, document)
        </script>-->

        <div data-mobile-view="true" data-share-size="30" data-follow-button-text="ПРИСОЕДИНЯЙСЯ"
             data-like-text-enable="false"
             data-additional-network-text="а ещё мы есть: //vk.com/dmi3_tattoo"
             data-background-alpha="0.0" data-pid="1800182" data-mode="share"
             data-background-color="#ffffff"
             data-hover-effect="scale" data-share-shape="round" data-share-counter-size="12"
             data-icon-color="#ffffff"
             data-mobile-sn-ids="fb.vk.tw.ok.wh.vb.tm." data-text-color="#000000"
             data-buttons-color="#ffffff"
             data-counter-background-color="#fbf5f5" data-share-counter-type="disable"
             data-follow-text="У нас есть группа : а ещё мы есть: //vk.com/dmi3_tattoo"
             data-orientation="fixed-bottom"
             data-following-enable="false" data-sn-ids="fb.vk.tw.ok.tm." data-preview-mobile="false"
             data-selection-enable="false" data-follow-title="Присоединяйся к нам в Соц.сетях!"
             data-exclude-show-more="true" data-share-style="11" data-counter-background-alpha="1.0"
             data-top-button="false" class="uptolike-buttons"></div>
    </div><!-- container -->

</footer>

<?php wp_footer(); ?>
<link rel="stylesheet" href="//cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="//cdn.envybox.io/widget/cbk.js?wcb_code=9655fb2bd1ab9c0f85c9c4dd1e873662"
        charset="UTF-8" async></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function (m, e, t, r, i, k, a) {
    m[i] = m[i] || function () {(m[i].a = m[i].a || []).push(arguments)}
    m[i].l = 1 * new Date()
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
      k,
      a)
  })
  (window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym')

  ym(43854274, 'init', {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true,
  })
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/43854274" style="position:absolute; left:-9999px;"
              alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
