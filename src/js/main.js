document.addEventListener('DOMContentLoaded', function () {
    const adjustMenuForAdminBar = () => {
        const adminBar = document.getElementById('wpadminbar');
        const header = document.querySelector('#site-header'); // Asegúrate de que este selector coincida con tu encabezado
        const mainContent = document.body; // Asumiendo que quieres ajustar el padding del body

        if (adminBar && header) {
            const adminBarHeight = adminBar.offsetHeight;
            header.style.top = `${adminBarHeight}px`;

            const headerHeight = header.offsetHeight;
            mainContent.style.paddingTop = `${headerHeight}px`;
        }
    };

    // Llamada inicial
    adjustMenuForAdminBar();

    // Ajustar en el redimensionamiento de la ventana
    window.addEventListener('resize', adjustMenuForAdminBar);
});
