import { ApiGet, getListUnique, countBy, getBy } from './functions.js';
import { grafico1, grafico2, grafico3, grafico4, grafico5, grafico6 } from './graphics.js';

export const selectGraphic = async() => {
    const data = await ApiGet();
    const mul = 11995;

    render_g1(data, mul);

    const options = [render_g1, render_g2, render_g3, render_g4, render_g5, render_g6];

    const options_graphic = document.getElementById('questions-graphics');

    options_graphic.addEventListener('change', (e) => {
        const resoption = Number(e.target.value);
        const content = document.getElementById('content-chart-graph');
        const canva = document.createElement('canvas');
        canva.setAttribute('id', 'chart-grafico');
        content.innerHTML = '';
        content.append(canva);

        console.log(resoption);

        options[resoption](data, mul);
    });
}

const render_g1 = (data, mul) => {
    const departamentos = getListUnique(data, 'departamento');
    const contarHombres = countBy(departamentos, getBy(data, 'sexo_nacer', 'Varon / Masculino'), 'departamento');
    const contarMujeres = countBy(departamentos, getBy(data, 'sexo_nacer', 'Mujer / Femenino'), 'departamento');
    const rescontarHombres = contarHombres.map(item => Number(item)*mul);
    const rescontarMujeres = contarMujeres.map(item => Number(item)*mul);

    grafico1(rescontarHombres, rescontarMujeres, departamentos);
}

const render_g2 = (data, mul) => {
    const grados = getListUnique(data, 'nivel_educativo_max');
    const contarGrados = countBy(grados, data, 'nivel_educativo_max');
    const rescontarGrados = contarGrados.map(item => Number(item)*mul);
    grafico2(rescontarGrados, grados);
}

const render_g3 = (data, mul) => {
    const mujeres = data.filter((item) => item.sexo_nacer === 'Mujer / Femenino');
    const conHijos = mujeres.filter((item) => Number(item.cantidad_hijos) > 0).length;
    const sinHijos = mujeres.filter((item) => Number(item.cantidad_hijos) <= 0).length;
    grafico3([conHijos*mul, sinHijos*mul]);
}

const render_g4 = (data, mul) => {
    const prensiones = data.map((item) => item.cobro_pension);
    const cobro_pension = prensiones.filter(item => item.toLowerCase() === "si").length;
    const no_cobro_pension = prensiones.filter(item => item.toLowerCase() === "no").length;
    grafico4([cobro_pension*mul, no_cobro_pension*mul]);
}

const render_g5 = (data, mul) => {
    const titulosaportes = getListUnique(data, 'trabajo_aporte_jubilacion');
    const aportes = data.map((item) => item.trabajo_aporte_jubilacion);
    const contarAportes = titulosaportes.map((item) => {
        return aportes.filter(sub => sub.toLowerCase() === item.toLowerCase()).length;
    });
    const rescontarAportes = contarAportes.map(item => Number(item)*mul);

    grafico5(titulosaportes, rescontarAportes);
}

const render_g6 = (data, mul) => {
    const poblacion = data.map((item) => item.edad);
    const restriccion_1 = poblacion.filter(item => Number(item) >= 0 || Number(item) <= 14).length;
    const restriccion_2 = poblacion.filter(item => Number(item) >= 15 || Number(item) <= 59).length;
    const restriccion_3 = poblacion.filter(item => Number(item) >= 60).length;

    grafico6([restriccion_1*mul, restriccion_2*mul, restriccion_3*mul]);
}