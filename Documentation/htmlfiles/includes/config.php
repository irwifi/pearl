<?php

    $host=strtolower($_SERVER['HTTP_HOST']).'/pearl';                     // dir where site is located if any  (if your site is like www.domain.com/somedir) no endig slash
    //$host=strtolower($_SERVER['HTTP_HOST']).'';                         // like this if your site is located in the root like www.domain.com

    $site_dir = "http://" . $host;                                        // no ending slash
    $img_dir = "http://" . $host . "/images";	                  // no ending slash
    $js_dir = "http://" . $host. "/js";                          // no ending slash
    $css_dir = "http://" . $host . "/css";                       // no ending slash

    $site_title = "The Pearl Company - Lipsum dolor tagline...";
    $site_keywords = "";
    $site_description = "";
?>