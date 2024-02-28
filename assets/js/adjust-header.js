document.addEventListener('DOMContentLoaded', function () {
    const adjustMenuForAdminBar = () => {
        const adminBar = document.getElementById('wpadminbar');
        const header = document.querySelector('.site-header'); // Asegúrate de que este selector coincida con tu encabezado
        console.log(header)
        

        if (adminBar && header) {
            const adminBarHeight = adminBar.offsetHeight;
            header.style.top = `${adminBarHeight}px`;

            
        }
    };

    // Llamada inicial
    adjustMenuForAdminBar();

    // Ajustar en el redimensionamiento de la ventana
    window.addEventListener('resize', adjustMenuForAdminBar);
});
