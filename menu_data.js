const menuItems = [
    { name: "Iced White Choco Mocha", category: "iced coffee" },
    { name: "Hot Espresso", category: "hot coffee" },
    { name: "Chocolate Cake", category: "dessert" },
    { name: "Caramel Frappé", category: "frappé" },
    // Magdagdag pa ng iba pang items dito
];

// Function para i-filter ang search results
function searchMenu(query) {
    query = query.toLowerCase();
    return menuItems.filter(item => item.name.toLowerCase().includes(query));
}
