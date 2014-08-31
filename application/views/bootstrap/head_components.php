<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><?php
            if($viewport == TRUE) : ?><meta name="viewport" content="<?php echo CB_VIEWPORT; ?>"><?php
        endif; ?>        
        <meta name="author" content="<?php echo CB_AUTHOR; ?>">
        <meta name="description" content="<?php echo CB_DESCRIPTION; ?>">
        <meta name="keywords" content="<?php echo CB_KEYWORDS; ?>">
        <link rel="icon" href="../../favicon.ico">
        <title><?php echo $title; ?> - <?php echo CB_BRAND; ?></title>        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo CB_BOOTSTRAP_CSS; ?>bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo CB_BOOTSTRAP_CSS . $custom_css; ?>.css" rel="stylesheet">
        <link
            href="data:text/css;charset=utf-8,"
            data-href="<?php echo CB_BOOTSTRAP_CSS; ?>bootstrap-theme.min.css"
            rel="stylesheet"
            id="bs-theme-stylesheet">
        <!-- Documentation extras -->
        <link href="<?php echo CB_BOOTSTRAP_CSS; ?>docs.min.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo CB_BOOTSTRAP_JS; ?>ie-emulation-modes-warning.js"></script>        
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo CB_BOOTSTRAP_JS; ?>ie10-viewport-bug-workaround.js"></script>        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body<?php if($body_role != NULL) : ?> role="document"<?php endif; ?>>