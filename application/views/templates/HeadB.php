<?php session_start(); ?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>MDL-Static Website</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                    <span class="mdl-layout__title">Simple portfolio website</span>
                    <span>
                        <?php 
                        foreach ($email as $em):
                            echo $em->email;
                        endforeach;
                        ?>
                    </span>
                </span>
            </div>
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a id="ind" class="mdl-navigation__link is-active" href="">Portfolio</a>
                    <a class="mdl-navigation__link" href="blog.html">Blog</a>
                    <a class="mdl-navigation__link" href="about.html">About</a>
                    <a class="mdl-navigation__link" href="contact.html">Contact</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="index.html">Portfolio</a>
                <a class="mdl-navigation__link" href="blog.html">Blog</a>
                <a class="mdl-navigation__link" href="about.html">About</a>
                <a class="mdl-navigation__link" href="contact.html">Contact</a>
            </nav>
        </div>

        <script>
            document.getElementById("hs").onclick=function()
            {
                window.location.href="<?php echo site_url('');?>";   
            };

            document.getElementById("gg").onclick=function()
            {
                window.location.href="<?php echo site_url('Games/get_games');?>";   
            };

            document.getElementById("mp").onclick=function()
            {
                window.location.href="<?php echo site_url('Users/get_stats');?>";   
            };

            document.getElementById("lo").onclick=function()
            {
                window.location.href="<?php echo site_url('Users/logout');?>";   
            };

            document.getElementById("ct").onclick=function()
            {
                window.location.href="<?php echo site_url('Games/get_cart');?>";   
            };

            document.getElementById("rm").onclick=function()
            {
                window.location.href="<?php echo site_url('Games/get_rec');?>";   
            };

        </script>