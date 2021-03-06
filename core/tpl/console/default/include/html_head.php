<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="<?php echo substr($this->config['lang'], 0, 2); ?>">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
        <?php if (isset($cfg['title']) && !fn_isEmpty($cfg['title'])) {
            echo $cfg['title'], " - ";
        }
        echo $this->lang['common']['page']['console'], " - ", BG_SITE_NAME; ?>
    </title>

    <!--jQuery 库-->
    <script src="<?php echo BG_URL_STATIC; ?>lib/jquery.min.js" type="text/javascript"></script>
    <link href="<?php echo BG_URL_STATIC; ?>lib/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo BG_URL_STATIC; ?>lib/baigoAccordion/baigoAccordion.min.css" type="text/css" rel="stylesheet">

    <?php if (isset($cfg['baigoValidator'])) { ?>
        <!--表单验证 js-->
        <link href="<?php echo BG_URL_STATIC; ?>lib/baigoValidator/baigoValidator.css" type="text/css" rel="stylesheet">
    <?php }

    if (isset($cfg['baigoSubmit'])) { ?>
        <!--表单 ajax 提交 js-->
        <link href="<?php echo BG_URL_STATIC; ?>lib/baigoSubmit/baigoSubmit.css" type="text/css" rel="stylesheet">
    <?php }

    if (isset($cfg['upload'])) { ?>
        <link href="<?php echo BG_URL_STATIC; ?>lib/webuploader/webuploader.css" type="text/css" rel="stylesheet">
    <?php }

    if (isset($cfg['datepicker'])) { ?>
        <link href="<?php echo BG_URL_STATIC; ?>lib/datetimepicker/jquery.datetimepicker.css" type="text/css" rel="stylesheet">
    <?php }

    if (isset($cfg['prism'])) { ?>
        <link href="<?php echo BG_URL_STATIC; ?>lib/prism/prism.css" type="text/css" rel="stylesheet">
    <?php } ?>

    <link href="<?php echo BG_URL_STATIC; ?>css/common.css" type="text/css" rel="stylesheet">
    <link href="<?php echo BG_URL_STATIC; ?>console/<?php echo BG_DEFAULT_UI; ?>/css/console.css" type="text/css" rel="stylesheet">
</head>

<body>