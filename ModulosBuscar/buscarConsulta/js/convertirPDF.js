document.addEventListener("DOMContentLoaded", () => {
    // Escuchamos el click del botón
    const $boton = document.querySelector("#btnCrearPdf");
    $boton.addEventListener("click", () => {
        const $elementoParaConvertir = document.getElementById('element-to-print');  // <-- Aquí puedes elegir cualquier elemento del DOM*/
        /*const $elementoParaConvertir = document.getElementById('element-to-print-pro');  // <-- Aquí puedes elegir cualquier elemento del DOM*/
        html2pdf()
            .set({
                margin: -0.5,
                filename: 'documento.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1
                },
                html2canvas: {
                    scale: 5, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a3",
                    orientation: 'portrait' // landscape o portrait
                }
            })
            .from($elementoParaConvertir)
            .save()
            .catch(err => console.log(err));
    });


});

document.addEventListener("DOMContentLoaded", () => {
    // Escuchamos el click del botón
    const $boton = document.querySelector("#btnCrearPdfReportes");
    $boton.addEventListener("click", () => {
        const $elementoParaConvertir = document.getElementById('element-to-print-reportes');  // <-- Aquí puedes elegir cualquier elemento del DOM*/
        /*const $elementoParaConvertir = document.getElementById('element-to-print-pro');  // <-- Aquí puedes elegir cualquier elemento del DOM*/
        html2pdf()
            .set({
                margin: 1,
                filename: 'documento.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1
                },
                html2canvas: {
                    scale: 5, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a3",
                    orientation: 'landscape' // landscape o portrait
                }
            })
            .from($elementoParaConvertir)
            .save()
            .catch(err => console.log(err));
    });


});