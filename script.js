// Crear un header dinámicamente
function crearHeader() {
    const headerContainer = document.getElementById("header-container");

    // Crear elementos del header
    const header = document.createElement("header");
    const logo = document.createElement("div");
    logo.className = "logo";
    logo.textContent = "GestiEscolar";

    const nav = document.createElement("nav");
    const navList = document.createElement("ul");

    // Enlaces de navegación
    const menuItems = [
        { text: "Inicio", href: "#inicio" },
        { text: "Módulos", href: "#modulos" },
        { text: "Vista Previa", href: "#vista-previa" },
        { text: "Acerca de", href: "#acerca" },
        { text: "Blog", href: "#blog" },
        { text: "Foro", href: "#foro" },
        { text: "Precios", href: "#precios" }
    ];

    menuItems.forEach(item => {
        const listItem = document.createElement("li");
        const link = document.createElement("a");
        link.href = item.href;
        link.textContent = item.text;
        listItem.appendChild(link);
        navList.appendChild(listItem);
    });

    // Ensamblar el header
    nav.appendChild(navList);
    header.appendChild(logo);
    header.appendChild(nav);
    headerContainer.appendChild(header);
}

// Llamar a la función para crear el header
crearHeader();
