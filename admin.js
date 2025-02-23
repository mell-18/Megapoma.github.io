/*

document.getElementById('producto-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let nombre = document.getElementById('nombre').value;
    let precio = document.getElementById('precio').value;
    let cantidad = document.getElementById('cantidad').value;
    
    if (nombre && precio && cantidad) {
        let tabla = document.getElementById('inventario-lista');
        let fila = document.createElement('tr');
        
        fila.innerHTML = `
            <td>${nombre}</td>
            <td>${precio}</td>
            <td>${cantidad}</td>
            <td>
                <button class="editar">Editar</button>
                <button class="eliminar">Eliminar</button>
            </td>
        `;
        
        tabla.appendChild(fila);
        
        let productosContainer = document.getElementById('productos-container');
        let productoInfo = document.createElement('p');
        productoInfo.textContent = `Producto: ${nombre}, Precio: ${precio}, Cantidad: ${cantidad}`;
        productosContainer.appendChild(productoInfo);
        
        document.getElementById('producto-form').reset();
        
        fila.querySelector('.eliminar').addEventListener('click', function() {
            fila.remove();
            productoInfo.remove();
        });
        
        fila.querySelector('.editar').addEventListener('click', function() {
            document.getElementById('nombre').value = nombre;
            document.getElementById('precio').value = precio;
            document.getElementById('cantidad').value = cantidad;
            fila.remove();
            productoInfo.remove();
        });
    }
});*/