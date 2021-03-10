
var request = new XMLHttpRequest();
const imagen = document.querySelector('#imagen');
//var dirimg = '/home/roheru/Escritorio/prueba/images/2.jpg'  
function obtener(){
  
     request.open('POST', 'http://192.168.0.24:4202/droid');
     request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
     request.onload = function() {
       var data = JSON.parse(this.response);
      console.log(data.ruta)
        
       var img = data.ruta;
       imagen.innerHTML = ` <img id="picture" class="picture"  width="300" height="250" src="/resources/js/${img}">`
       //imagen.innerHTML = ` <img id="picture" class="picture"  width="300" height="250"  src="<?php echo site_url('${img}');?>" >`
       var name = data.watson.images[0].objects.collections[0].objects[0].object
      
       if (request.status >= 200 && request.status < 400) {
          //if (!data.images[0].objects) {
            var dim = data.watson.images[0].objects.collections[0].objects[0].location;
            /**
             * {"watson":{"images":[{"source":{"type":"file","filename":"image-38368ca3031a9d3f03617e99845c93e360baaeb4.jpeg"},"dimensions":{"height":480,"width":640},"objects":{"collections":[{"collection_id":"d43688e9-955f-44c7-aec8-8def5194e636","objects":[{"object":"arma_blanca","location":{"left":125,"top":100,"width":242,"height":245},"score":0.974114}]}]}}]},"ruta":"/home/roheru/Royer/Disk/U.A.G.R.M./SOFTWARE_I/4taVuelta/GitHub/sw1/ProyectoSW/ProyectoSW/imagenes/image-38368ca3031a9d3f03617e99845c93e360baaeb4.jpeg"}
             */
            
            var dimImg = data.watson.images[0].dimensions;
            var scaleH =  (dim.height * 250 ) / dimImg.height;
            var scaleW = (dim.width * 300) / dimImg.width;
            var scaleT = (dim.top * 300) / dimImg.width;
            var scaleL = (dim.left * 250) / dimImg.height;
            imagen.innerHTML += `
           
    
            <div style="position: absolute;
            border: 2px solid #FFF;
            position: absolute;
            left :      ${scaleL}px;
            top :      ${scaleT}px;
            width:    ${scaleW}px;
            height :  ${scaleH}px;"> ${name}
            </div>`;
         // }else{
         //   console.log('no hay resultados')
//}
       } else {
         console.log('error')
       }
     }
   
   request.send(JSON.stringify({}))
}

    //obtener()


function camara(i){
  
  request.open('POST', 'http://localhost:3000/camara');
  request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  request.onload = function() {
    var data = this.response;
    if (request.status >= 200 && request.status < 400) {
      console.log(data)
    } else {
      console.log('error')
    }
  }

request.send(JSON.stringify({ i : i}))
}

function capturarInfinito() {
  setTimeout(() => {
       obtener();
      capturarInfinito()
  }, 2000)
}

capturarInfinito()
//obtener();