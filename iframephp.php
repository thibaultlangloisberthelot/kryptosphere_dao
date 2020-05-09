<?php
    $URL = "https://etherscan.io/token/tokenholderchart/0x73a6686ACf1d3F52D5846a3B037D2ba71f914f27";

    $domain = file_get_contents($URL);

    echo $domain;
?>