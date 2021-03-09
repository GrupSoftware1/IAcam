
var request = new XMLHttpRequest();
const imagen = document.querySelector('#imagen');

function obtener(i){
  
     request.open('POST', 'http://localhost:3000/watson');
     request.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
     request.onload = function() {
       var data = JSON.parse(this.response);
      console.log(data)

       var img = data.images[0].source.filename;
       imagen.innerHTML = ` <img id="picture" class="picture"  width="450" height="400" src="./imagenes/${img}">`
       var name = data.images[0].objects.collections[0].objects[0].object
      
       if (request.status >= 200 && request.status < 400) {
          //if (!data.images[0].objects) {
            var dim = data.images[0].objects.collections[0].objects[0].location;
            
            
            var dimImg = data.images[0].dimensions;
            var scaleH =  (dim.height * 400 ) / dimImg.height;
            var scaleW = (dim.width * 450) / dimImg.width;
            var scaleT = (dim.top * 450) / dimImg.width;
            var scaleL = (dim.left * 400) / dimImg.height;
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
   
   request.send(JSON.stringify({i : i}))
}



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

function capturarInfinito(i) {
  setTimeout(() => {
       obtener(i);
      capturarInfinito(++i)
  }, 2000)
}

capturarInfinito(0)
//obtener(0);