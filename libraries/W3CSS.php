<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W3CSS {

  private $ci;

  private $package;

  const PACKAGE = "francis94c/w3css";

  function __construct() {
    $this->ci =& get_instance();
    $this->package = $this->ci->load->splint(self::PACKAGE);
  }
  /**
   * [stylesheet description]
   * @return [type] [description]
   */
  function stylesheet() {
    return "<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\" />";
  }
  /**
   * [renderTable description]
   * @param  [type]  $columns      [description]
   * @param  [type]  $rows         [description]
   * @param  [type]  $header_class [description]
   * @param  boolean $striped      [description]
   * @param  boolean $bordered     [description]
   * @param  boolean $return       [description]
   * @return [type]                [description]
   */
  function renderTable($columns, $rows, $header_class="w3-teal", $striped=true, $bordered=false, $table_class=null, $return=false) {
    $html = "";
    $html = $this->package->load->view("table_header", array(
      "class"       => $header_class,
      "columns"     => $columns,
      "striped"     => $striped,
      "bordered"    => $bordered,
      "table_class" => $table_class
    ), $return);
    foreach ($rows as $row) {
      $html .= $this->package->load->view("table_row", array(
        "row" => $row
      ), $return);
    }
    $html .= $this->package->load->view("table_footer", null, $return);
    return $html;
  }
  /**
   * [renderProgressBar description]
   * @return [type] [description]
   */
  function renderProgressBar($value=0, $centered=true, $color="w3-green", $bar_class=null) {
    $data = array(
      "value"     => $value,
      "color"     => $color,
      "bar_class" => $bar_class,
      "centered"  => $centered
    );
    if ($bar_class != null) $data["bar_class"] = $bar_class;
    return $this->package->load->view("progress_bar", $data);
  }
}
?>
