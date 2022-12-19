// const dominio = 'http://localhost:5200/vianca';
const dominio = 'https://taller-simu-production.up.railway.app';
const api = `${dominio}/services/api.php`;

export const Router = (functionExec, ruta) => {
    if(window.location.href === `${dominio}${ruta}`){
        functionExec();
    }
}

export const ApiGet = async() => {
    return await fetch(api, {
        method: 'GET'
    }).then(response => response.json())
}


export const countBy = (collection, collection2, attr) => {
    return collection.map((comp) => {
        let contador = 0;
        collection2.forEach((item) => {
            if(item[attr] === comp){
            contador++;
            }
        });

        return contador;
    });
}

export const getBy = (data, attr, value) => {
    return data.filter(item => item[attr] === value)
}

export const getListUnique = (data, attr) => {
    return data.map((item) => item[attr])
                .filter((item, index, obj) => {
                    return index === obj.indexOf(item)
                })
}

export const getValues = (data, attr) => {
    return data.filter((item) => item[attr]);
}
