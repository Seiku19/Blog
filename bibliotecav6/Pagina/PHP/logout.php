<?php

session_start();

session_destroy();

header("Location: ../Formularios/formlogin.php");