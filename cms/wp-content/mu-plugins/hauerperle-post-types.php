<?php

/* === HAUERPERLE CUSTOM POST TYPES === */
function hauerperle_post_types()
{
  add_post_type_support("team", "thumbnail");
  add_post_type_support("team", "excerpt");

  add_filter("hauerperle_gallery_metabox_post_types", function ($types) {
    $types[] = "gallery";
    return $types;
  });

  /* --- Custom Post Type DISHES --- */
  $labels = [
    "name" => "Mittagsmenüs",
    "add_new" => "Neues Mittagsmenü erstellen",
    "edit_item" => "Mittagsmenü bearbeiten",
    "singular_name" => "Mittagsmenü",
    "all_items" => "Alle Mittagsmenüs",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("dish", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "labels" => $labels,
    "supports" => [
      "editor",
      "page-attributes",
      "revisions",
      "thumbnail",
      "title",
      "custom-fields",
    ],
    "has_archive" => false,
    "exclude_from_search" => false,
    "rewrite" => [
      "slug" => "activity",
      "with_front" => true,
      "pages" => true,
      "feeds" => true,
    ],
    "menu_position" => 9,
    "show_in_admin_bar" => false,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-food",
  ]);

  add_post_type_support("dish", "thumbnail");








  /* --- Custom Post Type PARTNER --- */
  $labels = [
    "name" => "Partner",
    "add_new" => "Neuen Partner anlegen",
    "edit_item" => "Partner bearbeiten",
    "singular_name" => "Partner",
    "all_items" => "Alle Partner",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("partner", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "taxonomies" => ["partner-category"],
    "labels" => $labels,
    "supports" => [
      "editor",
      "revisions",
      "thumbnail",
      "title",
      "custom-fields",
    ],
    "has_archive" => false,
    "exclude_from_search" => false,
    "menu_position" => 11,
    "show_in_admin_bar" => false,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-networking",
  ]);

  add_post_type_support("partner", "thumbnail");

  /* --- Custom Post Type HINWEIS --- */
  $labels = [
    "name" => "Hinweise",
    "add_new" => "Neuen Hinweis erstellen",
    "edit_item" => "Hinweis bearbeiten",
    "singular_name" => "Hinweis",
    "all_items" => "Alle Hinweise",
    "supports" => ["title", "editor", "author", "custom-fields"],
  ];

  register_post_type("notification", [
    "show_in_rest" => true,
    "public" => true,
    "show_ui" => true,
    "supports" => [
      "editor",
      "page-attributes",
      "revisions",
      "thumbnail",
      "title",
      "custom-fields",
    ],
    "labels" => $labels,
    "has_archive" => false,
    "exclude_from_search" => true,
    "rewrite" => ["slug" => "hinweise"],
    "menu_position" => 12,
    "show_in_admin_bar" => false,
    "show_in_nav_menus" => false,
    "publicly_queryable" => true,
    "menu_icon" => "dashicons-bell",
  ]);
}

/* === HAUERPERLE CUSTOM TAXONOMIES === */

function hauerperle_taxonomies()
{

  /* --- Custom Taxonomie PARTNER-KATEGORIE --- */
  $labels = [
    "name" => _x("Partner-Kategorien", "taxonomy general name"),
    "singular_name" => _x("Partner-Kategorie", "taxonomy singular name"),
    "search_items" => __("Partner-Kategorien durchsuchen"),
    "popular_items" => __("Meist benutzte Partner-Kategorien"),
    "all_items" => __("Alle Partner-Kategorien"),
    "parent_item" => __("Übergeordnete Partner-Kategorie"),
    "parent_item_colon" => __("Übergeordnete Partner-Kategorien:"),
    "edit_item" => __("Partner-Kategorie bearbeiten"),
    "update_item" => __("Partner-Kategorie aktualisieren"),
    "add_new_item" => __("Neue Partner-Kategorien hinzufügen"),
    "new_item_name" => __("Name der neuen Partner-Kategorie"),
  ];

  register_taxonomy(
    "partner-category",
    ["partner"],
    [
      "hierarchical" => true,
      "labels" => $labels,
      "show_ui" => true,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "query_var" => true,
    ]
  );
}

add_action("init", "hauerperle_post_types");
add_action("init", "hauerperle_taxonomies", 0);

?>
