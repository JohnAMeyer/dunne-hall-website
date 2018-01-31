<?php

//should do all processing here or on outside?
file_put_contents("menu.csv", fopen("https://docs.google.com/spreadsheets/export?id=1dtgm4G_NNzj6FIhbjvwSkxO14dSfLFuy4NmLfuVZDzQ&exportFormat=csv", 'r'));

echo "<h1>Updating finished</h1>";