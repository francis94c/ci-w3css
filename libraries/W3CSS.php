<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W3CSS {

  private $ci;

  private $package;

  /**
   * [private See https://www.w3schools.com/w3css/w3css_color_themes.asp]
   * @var string
   */
  private $theme = "w3-theme-teal";

  const PACKAGE = "francis94c/w3css";

  const MENU_BAR_HORIZONTAL = "horizontal";

  const MENU_BAR_VERTICAL = "vertical";

  function __construct($params=null) {
    $this->ci =& get_instance();
    $this->package = $this->ci->load->splint(self::PACKAGE);
    if ($params != null && isset($params["theme"])) $this->theme = $params["theme"];
  }
  /**
   * [stylesheet description]
   * @return [type] [description]
   */
  function stylesheet() {
    $cdn = "<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\" />";
    return $cdn . PHP_EOL . "<link rel=\"stylesheet\" href=\"https://www.w3schools.com/lib/$this->theme.css\" />";
  }
  /**
   * [fontsawesome description]
   * @return [type] [description]
   */
  function fontsawesome() {
    return "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">";
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
  function renderTable($columns, $rows, $header_class="w3-theme", $striped=true, $bordered=false, $table_class=null, $return=false) {
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
   * @param  integer $value     [description]
   * @param  string  $color     [description]
   * @param  boolean $centered  [description]
   * @param  [type]  $bar_class [description]
   * @return [type]             [description]
   */
  function renderProgressBar($value=0, $color="w3-green", $centered=true, $bar_class=null) {
    $data = array(
      "value"     => $value,
      "color"     => $color,
      "bar_class" => $bar_class,
      "centered"  => $centered
    );
    if ($bar_class != null) $data["bar_class"] = $bar_class;
    return $this->package->load->view("progress_bar", $data);
  }
  /**
   * [renderMenuBar description]
   * @param  [type] $menus      [description]
   * @param  [type] $type       [description]
   * @param  string $class      [description]
   * @param  string $item_class [description]
   * @return [type]             [description]
   */
  function renderMenuBar($menus, $type=self::MENU_BAR_HORIZONTAL, $class="w3-theme", $item_class="w3-hover-blue") {
    $this->package->load->view("bar_header", array(
      "class" => $class,
      "type"  => $type
    ));
    $this->package->load->view("bar_items", array(
      "menus"      => $menus,
      "item_class" => $item_class
    ));
    $this->package->load->view("bar_footer");
  }
}
?>
