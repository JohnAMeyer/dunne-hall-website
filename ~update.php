<?php
echo("<ul><li>");
echo(`../dunne.sh | tr '\n' '&'| sed 's:&&:<\/li><\/ul><hr/><ul><li>:g' | sed 's:&:<\/li><li>:g' `); //calls the update script stored on the server
echo("</li></ul>");
