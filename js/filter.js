let dropdown = document.getElementById("warehousesDropdown");

let filterTable = () => {
    // Variables
    let table, rows, cells, warehouse, filter;
    table = document.querySelector("tbody");
    rows = table.getElementsByTagName("tr");
    filter = dropdown.value;

    // Itera por la filas de la tabla.
    for (let row of rows) {
        // Obtiene las celdas de una fila en especifico.
        cells = row.getElementsByTagName("td");
        // Obtiene la celda que corresponde a la bodega.
        warehouse = cells[4]; 
        // Si el filtro esta en All entonces mostrara todos, si el filtro es igual al la bodega, entonces la mostrara.
        if (filter == "All" || (filter == warehouse.textContent)) {
            row.style.display = ""; 
        } else {
            row.style.display = "none"; 
        }
    }
}

dropdown.addEventListener("input", filterTable);