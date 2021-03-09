

////base 64
var base64ToFile = require('base64-to-file');
const VisualRecognitionV4 = require('ibm-watson/visual-recognition/v4');
const { IamAuthenticator } = require('ibm-watson/auth');
var fs = require('fs');
const { resolve } = require('path');
const visualRecognition = new VisualRecognitionV4({
  version: '2020-02-05',//5/2/2020 
  authenticator: new IamAuthenticator({
   //clave de la cuenta del grupo
// apikey: 'J_FLM2BXQaO8vUl8uKcqvNW2ODtuPPpphJiJ-Mw_zdQu', carlos: 'mPmyhzibcxVZ-RqeXfu42QCr7VxLlJJdak9iO4KPJMej'
    //clave de mi cuenta :iHIqyXI9luwM7EJqiirESJqv2Qwaqe7giBa9mHmsS0bs
 apikey: 'mPmyhzibcxVZ-RqeXfu42QCr7VxLlJJdak9iO4KPJMej',
  }),
  url: 
//'https://gateway.watsonplatform.net/visual-recognition/api','https://api.us-south.visual-recognition.watson.cloud.ibm.com/instances/98b82d5e-0534-40f7-b23e-7da3fea938c8'
//'https://api.us-south.visual-recognition.watson.cloud.ibm.com/instances/6bbda3b3-d572-45e1-8c54-22d6ed9e52c2'
'https://api.us-south.visual-recognition.watson.cloud.ibm.com/instances/1e1619c4-a6ab-4adb-a7ca-b4a18bad6fe2',
  disableSslVerification: true,
});


class IaWatson{
     constructor(){}

     consultar(imagen){
       return new Promise((resolve , reject )=>{
          base64ToFile.convert(
            imagen,
            "/home/roheru/Royer/Disk/U.A.G.R.M./SOFTWARE_I/4taVuelta/GitHub/sw1/iacam/resources/js/",
          ['jpg','jpeg','png'], 
          
          function (filePath) {
            var threshold = 0.40;
            const params = {
              imagesFile: [
                {
                  data: fs.createReadStream(filePath),
                  contentType: 'image/jpeg',
                }
              ],//mio:'d43688e9-955f-44c7-aec8-8def5194e636'
              // carlos: armasdefuego:'7dbe7129-f941-46ff-9f80-64363cf7c146', armas:'77a128b5-c9e2-4bdf-9c38-4019f1fc12f3'
              collectionIds: ['77a128b5-c9e2-4bdf-9c38-4019f1fc12f3'],
              features: ['objects'],
              threshold: threshold
            };
            visualRecognition.analyze(params).then(respuestawatson=>{
              resolve({watson:respuestawatson.result,ruta:filePath.split('js/')[1]});
            })
            
         });
       })
     }


}

module.exports = IaWatson;
