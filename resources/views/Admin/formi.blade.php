
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myDropzone</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  
</head>
<style>
.dropzone {

    /* min-height: 100px; */
    width: 100%;
    border: 2px solid rgba(0,0,0,0.3);
    background: white;
    /* padding: 20px 20px; */
    cursor: pointer;    
}
.dropzone>input{
    opacity: 0;
    
}


</style>

<body>


<div class="container">
<div class="dropzone"  >
    <h5 class="text-center" onclick="img()"> Suba las Imagenes aqui</h5>
    <input id="img" type="file" name="img[]" class="dropzone" multiple>
    
</div>
<img src="" id='ig' alt="">
</div>
<div  id="preview"></div>


<br>
<br>
<button onclick="l()" > VER</button>

<script>
function img(){
    

    var img = document.getElementById('img').files;

    for (i=0; i<img.length; i++){

        let reader = new FileReader();
        reader.readAsDataURL(img[i]);
        reader.onload = function(){

            let preview = document.getElementById('preview'),
            image = document.createElement('img');
            image.src = reader.result;
            

    // preview.innerHTML = '';
    preview.append(image);
  };
        
    }
    

    
    
}

function l() {
        alert(document.getElementById('img').files.length);
    }


</script> 
</body>
</html>