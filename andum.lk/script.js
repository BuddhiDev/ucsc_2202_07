$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });

  function triggerClick(){
      document.querySelector('#profilepic').click();
  }

  function displayImage(e){
      if(e.files[0]){
          var reader = new FileReader();

          reader.onload = function(e){
              document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
          }
          reader.readAsDataURL(e.files[0]);
      }
  }

function triggerClick1(){
    document.querySelector('#addpic1').click();
}

function displayImage1(e){
    if(e.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
            document.querySelector('#profileDisplay1').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}

function triggerClick2(){
    document.querySelector('#addpic2').click();
}

function displayImage2(e){
    if(e.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
            document.querySelector('#profileDisplay2').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}

function triggerClick3(){
    document.querySelector('#addpic3').click();
}

function displayImage3(e){
    if(e.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
            document.querySelector('#profileDisplay3').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
  

 