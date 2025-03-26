<?php
$menuItems = [
    "Iced Caramel Macchiato",
    "Iced Vanilla Latte",
    "Hot Coffee",
    "Frappe",
    "Dessert"
];

$query = isset($_GET['query']) ? strtolower($_GET['query']) : '';

$results = array_filter($menuItems, function ($item) use ($query) {
    return strpos(strtolower($item), $query) !== false;
});

echo json_encode(array_values($results));
?>
