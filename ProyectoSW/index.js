const express = require('express')
const app = express()
var camara = require('./camara/camera');
var ipcam = new camara();
var IaWatson = require('./watson/IA');
var dir = require('node-dir');
var watson = new IaWatson();

var notificacion = require('./notificacion/notificacion')
var noti = new notificacion();
///////con nodewebcam
var i = 1;
var NodeWebcam = require('./camara/cam')
var Webcam = NodeWebcam.create({
  callbackReturn: "base64",
  saveShots: true
});
////////////////

app.use(express.json());
app.use(express.urlencoded({ extended: true }));
/////////////////////////

app.use(function(req, res, next) {

  // Website you wish to allow to connect
  res.setHeader('Access-Control-Allow-Origin', '*');

  // Request methods you wish to allow
  //res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST');
  // Request headers you wish to allow
  //res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');
  res.setHeader('Access-Control-Allow-Headers', 'Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
  // Set to true if you need the website to include cookies in the requests sent
  // to the API (e.g. in case you use sessions)
  res.setHeader('Access-Control-Allow-Credentials', true);

  // Pass to next layer of middleware
  next();
});


app.post('/droid',(req,res)=>{
  
    Webcam.capture( i.toString(), function( err, data ) {
        if( err ) {
            throw err;
        }else
        watson.consultar(data).then(response=>{
          console.log(JSON.stringify(response))
          
          console.log('POST A /DROID')
          res.send(response)
        });
               
    });
})


app.listen(4202);

/*
function setupWebcam() {
    
  function capture() {

      Webcam.capture( i.toString(), function( err, data ) {

          if( err ) {

              throw err;

          }

         // WSS.broadcast( data );
          i++;

          setTimeout( capture, 5000 );

      });

  }

  capture();

}
*/


/***
app.get('/', function (req, res) {
  res.send('Hello World')
})

app.post('/camara' , (req,res)=>{
    ipcam.capturarUno(req.body.i);
    res.send({ dato : 'capturado'});
});


******
app.get('/notificacion', (req, res)=>{
  noti.enviarNotificacion( "hola mundo",{
    priority: 'high',
    timeToLive: 60 * 60 * 24, // 1 day
  }).then(data=>{
    res.send(data)
  })
})  ******/
 
/*********
app.get('/rutas', (req,res)=>{
  dir.readFiles('/home/titon/Disk/U.A.G.R.M./SOFTWARE_I/2da vuelta/Software/RepositorioGit/sw1/IA/imagenes',function(err, content, next) {
        if (err) throw err;
       // console.log('content:', content);
        next();
    },function(err, files){
        if (err) throw err;
        console.log('finished reading files:', files.length);
        res.send(files)
    });
});
********


app.post('/prueba',(req,res)=>{
  watson.consultar(req.body.ruta).then(response=>{
    console.log(response)
    res.send(JSON.stringify(response.result))
  }) 
})*


app.post('/watson' , (req , res)=>{
  ipcam.capturarUno(req.body.i).then(
    ruta=>{ watson.consultar(ruta).then(response=>{
      console.log('POST A /WATSON')
       res.send(JSON.stringify(response.result))
      })
    })
});*/


