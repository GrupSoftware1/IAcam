const cam = require('foscam');
let fs = require('fs');

cam.setup({
    host: '192.168.0.24:4747',
    port: 4747,

  });
class camara{
    constructor(){

    }

    capturar(){
        capturarInfinito(0);
    }

  
    capturarUno(i){
        return new Promise((resolve , reject)=>{
            cam.snapshot('/home/roheru/Royer/Disk/U.A.G.R.M./SOFTWARE_I/2da vuelta/Software/RepositorioGit/sw1/ProyectoSW/imagenes/'+ i + '.jpg' , result =>{
                console.log(result);
                resolve(result)
                //  capturarInfinito(++i);
            });
        })
       
    }
}

function capturarInfinito(i) {
    setTimeout(() => {
        cam.snapshot('./imagenes/'+ i + '.jpg' , result =>{
            console.log(result);
            capturarInfinito(++i);
        });
    }, 2000)
}


module.exports = camara;
