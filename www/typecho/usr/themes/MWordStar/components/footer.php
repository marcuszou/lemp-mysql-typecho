<footer>
    <div class="container">
        <?php if ($this->options->icp): ?>
            <div>
                <span><?php $this->options->icp(); ?></span>
            </div>
        <?php endif; ?>
        <span>Powered by <a href="http://www.typecho.org/" target="_blank">Typecho</a> Theme by <a href="https://github.com/changbin1997/MWordStar" target="_blank">MWordStar</a></span>
    </div>
</footer>

<div id="footer-btn-box">
    <!--移动设备的目录按钮-->
    <?php if ($this->options->directoryMobile == 'enable' && $this->is('post')): ?>
        <button type="button" id="directory-btn" class="btn rounded-circle d-block d-sm-block d-md-block d-lg-none d-xl-none" aria-expanded="false" aria-label="目录" title="目录">
            <i class="icon-list-ol"></i>
        </button>
    <?php endif; ?>
    <!--切换主题配色按钮-->
    <?php if ($this->options->colorChangeBtn == 'show'): ?>
        <button type="button" class="btn rounded-circle" id="change-color-btn" aria-label="切换主题配色" data-toggle="tooltip" data-placement="left" data-light="<?php $this->options->defaultLightColor(); ?>">
            <i></i>
        </button>
    <?php endif; ?>
    <!--返回顶部按钮-->
    <?php if ($this->options->toTop == 'show'): ?>
        <button type="button" class="btn to-top rounded-circle d-none" title="返回顶部" aria-label="返回顶部">
            <i class="icon-arrow-up"></i>
        </button>
    <?php endif; ?>
</div>

<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/bundle-1722610734.js'); ?>"></script>
<!--PJAX更新完成后执行的JS-->
<?php if ($this->options->pjax === 'on' && $this->options->pjaxEnd): ?>
    <script type="text/javascript">
      $(function() {
        $(document).on('pjax:end', function() {<?php $this->options->pjaxEnd(); ?>});
      });
    </script>
<?php endif; ?>
<!--body底部的自定义JS-->
<?php if ($this->options->bodyHTML): ?>
    <?php $this->options->bodyHTML(); ?>
<?php endif; ?>
<?php $this->footer(); ?>
</body>
</html>
