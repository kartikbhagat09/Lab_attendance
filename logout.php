<?php

    session_start();

    session_unset();
    session_destroy();

    header("Location: /Mega_project/index.html");

?>