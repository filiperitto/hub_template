<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Meta para HTML puro -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <title><?php echo PW_SITE_NAME; ?> | <?php echo PW_SITE_DESCRIPTION; ?></title>
    <meta name="description" content="<?php echo PW_SITE_DESCRIPTION; ?>">


    <?php wp_head(); ?>

    <!-- Script para gerar searchbox na pesquisa do google https://developers.google.com/search/docs/guides/sd-policies#nesting
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "url": "https://www.example.com/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://query.example.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
    </script> -->
</head>