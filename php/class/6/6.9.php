<?php
    $string = "The quick brown Brown fox Fox jumps over fox the lazy dog The quick brown Brown fox Fox jumps over fox the lazy dog The quick brown Brown fox Fox jumps over fox the lazy dog The quick brown Brown fox Fox jumps over fox the lazy dog";

    echo wordwrap($string, 30, "\n", true);