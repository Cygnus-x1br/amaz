<?php

require __DIR__ . '/../controller/route.php';

require __DIR__ . '/../view/header.phtml';
include __DIR__ . '/../view/contents/' . $route . '.phtml';
require __DIR__ . '/../view/footer.phtml';
