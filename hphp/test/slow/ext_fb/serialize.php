<?php

$ret = null;
var_dump(fb_unserialize(fb_serialize("test"), $ret));
var_dump($ret);

$ret = null;
var_dump(fb_unserialize(fb_serialize(array("test")), $ret));
var_dump($ret);

$ret = null;
fb_unserialize("\t\374\003\310\001\270", $ret);
var_dump($ret);
