<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W3CSSTest {

  function testTable(&$ci) {
    //$ci->load->splint("francis94c/w3css", "+W3CSS", null, "w3css");
    $ci->unit->run($ci->load->package("francis94c/w3css"), true, "Auto Load Library.");
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
    echo $ci->w3css->fontsawesome();
    $menus = array(
      array(
        "text"  => "Open",
        "icon"  => "fa-external-link-alt",
        "link"  => "localhost"
      ),
      array(
        "text" => "Save",
        "icon" => "fa-save"
      ),
      array(
        "text" => "Close",
        "icon" => "fa-times",
        "link" => "localhost"
      )
    );
    $ci->w3css->renderMenuBar($menus);
    $ci->w3css->renderMenuBar($menus, W3CSS::MENU_BAR_VERTICAL);
  }
}
?>
