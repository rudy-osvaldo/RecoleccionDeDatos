export const grafico1 = (contarHombres, contarMujeres, departamentos) => {
    const ctx = document.getElementById('chart-grafico');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: departamentos,
            datasets:[
                {
                    label: "Hombres",
                    data: contarHombres,
                    backgroundColor: 'rgba(22, 121, 209, 0.8)'
                }, 
                {
                    label: "Mujeres",
                    data: contarMujeres,
                    backgroundColor: 'rgba(227, 8, 94, 0.8)'
                }
            ]
        },
  
        options: { plugins: { title: { display: true, text: '¿Cuantas mujeres y hombres hay en cada departamento?',}}}
    });
  }
  
  
export const grafico2 = (contarGrados, grados) => {
    const ctx = document.getElementById('chart-grafico');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: grados,
            datasets: [
                {
                    label:'Grado Maximo',
                    data: contarGrados,
                    backgroundColor: 'rgba(142, 68, 173, 0.8)',
                }
            ]
        },

        options: { plugins: { title: { display: true, text: '¿Cuántas personas terminaron el grado escolar?',}}}
    });
}


export const grafico3 = (contar_mujeres_hijos) => {
    const ctx = document.getElementById('chart-grafico');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Mujeres con hijos", "Mujeres sin hijos"],
            datasets: [
                {
                    label:'Hijos',
                    data: contar_mujeres_hijos,
                    backgroundColor: ['rgba(40, 180, 99, 0.8)', 'rgba(243, 156, 18, 0.8)']
                }
            ]
        },

        options: { plugins: { title: { display: true, text: 'Mujeres con hijos',}}}
    });
}



export const grafico4 = (pensiones) => {
    const ctx = document.getElementById('chart-grafico');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Cobran", "No cobran"],
            datasets: [
                {
                    label:'Personas',
                    data: pensiones
                }
            ]
        },

        options: { plugins: { title: { display: true, text: '¿Cobra la pension o jubilacion?',}}}
    });
}



export const grafico5 = (titulosaportes, contarAportes) => {
    const ctx = document.getElementById('chart-grafico');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: titulosaportes,
            datasets: [
                {
                    label:'Personas',
                    data: contarAportes,
                    backgroundColor: ['rgba(46, 64, 83, 0.8)', 'rgba(31, 97, 141, 0.8)'],
                }
            ]
        },

        options: { plugins: { title: { display: true, text: 'Tipos de aportes de jubilacion',}}}
    });
}


export const grafico6 = (restricciones) => {
    const ctx = document.getElementById('chart-grafico');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Entre 0 a 14 años', 'Entre 15 a 59 años', 'Mayores a 60 años'],
            datasets: [
                {
                    label:'Personas',
                    data: restricciones,
                    backgroundColor: ['rgba(243, 156, 18, 0.8)', 'rgba(34, 153, 84, 0.8)', 'rgba(108, 52, 131, 0.8)'],
                }
            ]
        },

        options: { plugins: { title: { display: true, text: 'Poblacion por edades',}}}
    });
}