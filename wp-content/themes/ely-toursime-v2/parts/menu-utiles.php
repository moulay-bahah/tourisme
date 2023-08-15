<?php

// menu with commpo
// data structure
class NavItems
{
  public array $nav_items;
  public int $index; // cuurent nav item index

  public int $index_child; // cuurent nav item index

  public function __construct()
  {
    $this->nav_items = [];
    $this->index = 0;
    $this->index_child = 0;
  }

  public function add(string $title, string $link, bool $hasChild)
  {
    $this->nav_items[$this->index] = array(
      'title' => $title,
      'link' => $link,
      'has-child' => $hasChild,
      'childrens' => array()

    );

  }
  public function increment()
  {
    $this->index++;
    $this->index_child = 0;

  }

  public function addChild($title, $link)
  {
    $this->nav_items[$this->index]['childrens'][$this->index_child] = array(
      'title' => $title,
      'link' => $link,
    );
    $this->index_child++;
  }

  public function get_nav_object()
  {
    return $this->nav_items;
  }


}

function g($items)
{
 
  foreach ($items as $item) {
    if ($item['has-child'] == 1) {
      $link_principale = '<li>';
      $link_principale = $link_principale . '<a href="' . $item['link'] . '">';
      $link_principale = $link_principale . $item['title'];
      $link_principale = $link_principale . '<i class="fa-solid fa-chevron-right"></i>';
      $link_principale = $link_principale . '</a>';
      $link_principale = $link_principale . '<ul class="dropdwon">';
      echo $link_principale;
      foreach ($item['childrens'] as $child) {
        $link_secondaire = '<li>';
        $link_secondaire = $link_secondaire . '<a href="' . $child['link'] . '" class="dropdwon-iteme">';
        $link_secondaire = $link_secondaire . $child['title'];
        $link_secondaire = $link_secondaire . '</a>';
        echo $link_secondaire;
      }
      echo '</ul></li>';
    } else {
      $link = '<li>';
      $link = $link . '<a href="' . $item['link'] . '">';
      $link = $link . $item['title'];
      $link = $link . '</a>';
      echo $link;
    }
  }
}

function get_menu_with_items(string $name)
{
    $nav_items = new NavItems();
    //
    $menu_locations = get_nav_menu_locations(); 
    $menu_id = $menu_locations[$name];
    $globale_index = 0;
    $menu_items = wp_get_nav_menu_items($menu_id);
    //
    $globale_index = 0;
    $name_en_majuscule = ucfirst($name);
    $nav_items->add($name_en_majuscule, "", true);
    //
    foreach ($menu_items as $menu_item) {
        $nav_items->addChild($menu_item->title, $menu_item->url);
        $globale_index++;
    }
    $items = $nav_items->get_nav_object();
    g($items);
}

function get_simple_menu(string $name)
{
    $nav_items = new NavItems();
    $menu_locations = get_nav_menu_locations();
    $menu_id = $menu_locations[$name];
    $menu_items = wp_get_nav_menu_items($menu_id);

    foreach ($menu_items as $menu_item) {
        $nav_items->add($menu_item->title, $menu_item->url, false);
        $nav_items->increment();
    }
    $items = $nav_items->get_nav_object();
    g($items);
}
 

?>