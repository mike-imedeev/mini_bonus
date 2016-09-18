<?php
print '<html><head>';
print '<title>???</title>';
print '<script type="text/javascript" src="//vk.com/js/api/openapi.js?129"></script>';
print '</head><body>';
print 'Женя дурак!<hr>';
print '<script type="text/javascript">VK.init({apiId: 5631629, onlyWidgets: true});</script><div id="vk_comments"></div><script type="text/javascript">VK.Widgets.Comments("vk_comments", {limit: 20, width: "665", attach: "*"});</script>';
print '<hr>';
include 'counter.php';
print '</body></html>'; 
?>