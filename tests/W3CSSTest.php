<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W3CSSTest {

  function testTable(&$ci) {
    $ci->load->splint("francis94c/w3css", "+W3CSS", null, "w3css");
    echo $ci->w3css->stylesheet();
    $columns = array("S/N", "Item", "Description");
    $rows = array(
      array(1, "Broom", "For Seeeping"),
      array(2, "Data", "For Browsing"),
      array(3, "Git", "For version Control"),
      array(4, "Food", "What we eat")
    );
    $ci->w3css->renderTable($columns, $rows);
    $ci->w3css->renderProgressBar(30, "w3-brown");
  }
}
?>
