const firebase = require("firebase-admin");
const serviceAccount = require('../notification-5275e-firebase-adminsdk-k39eu-da4fa74958.json');
let fecha = new Date();
let fechafin = add_minutes(fecha,2);
let ini = 0 ;
class notificacion{
    constructor(){
        firebase.initializeApp({
            credential: firebase.credential.cert(serviceAccount),
            databaseURL: "https://notification-5275e.firebaseio.com"
        });
    }

    enviarNotificacion(mensaje ,options){
        const firebaseToken = 'cV91YhEE86Q:APA91bFB1l6VeupV23-wyvAdvg6tIbypgWwn4fhvYus2scEuXmuh0gRa6z2RlyQZM0GLPiG09ih4WAGfJEFpBCXf6rTkO0NHkYiqVHHYpP7CJt_qk9yOKMvg2G1MKJoagPTnWxNMwv-Y'
        const payload = {
            notification: {
                image: "http://36.media.tumblr.com/c066cc2238103856c9ac506faa6f3bc2/tumblr_nmstmqtuo81tssmyno1_1280.jpg" ,
                priority: "HIGH",
                title: 'Alerta IACam',
                body:  mensaje 
                
            }
      };

        if (fecha >= fechafin || ini == 0) {
            console.log(fecha ,fechafin)
            fechafin = add_minutes(fecha ,2);
            ini++;
            return  firebase.messaging().sendToDevice(firebaseToken, payload, options);
            
        }else{
            fecha = new Date();
        }
    }


   
}


function add_minutes (dt, minutes) {
    return new Date(dt.getTime() + minutes*60000);
}


module.exports = notificacion;

