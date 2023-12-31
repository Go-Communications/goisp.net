<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo esc_html(apply_filters('YcdComingSoonPageTitle', '')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo esc_html(apply_filters('YcdComingSoonPageHeaderContent', '')); ?>
    <?php wp_head(); ?>
</head>
<body class="ycd-body">
<div style="text-align: center">
    <div class="ycd-coming-soon-before-header"><?php echo esc_html(apply_filters('YcdComingSoonPageBeforeHeader', '', $comingSoonThis)); ?></div>
    <div class="ycd-coming-soon-header"><?php echo esc_html(apply_filters('YcdComingSoonPageHeader', '', $comingSoonThis)); ?></div>
    <div class="ycd-coming-soon-after-header"><?php echo esc_html(apply_filters('YcdComingSoonPageAfterHeader', '', $comingSoonThis)); ?></div>
    <div class="ycd-coming-soon-before-message"><?php echo esc_html(apply_filters('YcdComingSoonPageBeforeMessage', '', $comingSoonThis)); ?></div>
    <div class="ycd-coming-soon-message"><?php echo esc_html(apply_filters('YcdComingSoonPageMessage', '', $comingSoonThis)); ?></div>
    <div class="ycd-coming-soon-after-message"><?php echo esc_html(apply_filters('YcdComingSoonPageAfterMessage', '', $comingSoonThis)); ?></div>
</div>
<?php wp_footer(); ?>
</body>
</html>
