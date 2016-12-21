<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bok2s</title>
    <link rel="stylesheet" href="css/materialize.css" type="text/css"  media="screen,projection">
    <link href="css/material_icon.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    <style media="screen">
      html{
        background-color: #010101;
      }
      h3{
        font-family: fantasy;
        font-style: oblique;
      }
      .a2{
        color: #08b4da;
        font-family: sans-serif;
        font-style: oblique;
      }
      .menu {
        margin-left: 30px;
        margin-top: 15px;
      }
    </style>

    <script type="text/javascript">
      $(document).ready(function(){

        $('.slider.fullscreen').slider({full_width: true});

        $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .70, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
            starting_top: '4%', // Starting top style attribute
            ending_top: '10%', // Ending top style attribute
          }
        );


      });
    </script>
  </head>

  <body>
    <!--
    <ul id="slide-out" class="side-nav" >
       <li><div class="userView">
         <div class="background">
           <img src="img/md-3.png" style='width: 100%;'>
         </div>
         <a href="#!user"><img class="circle" src="img/image3.jpg"></a>
         <a href="#!name"><span class="white-text name">Bok2s</span></a>
       </div></li>
       <li><a href="#modal1">Quienes Somos</a></li>
       <li><a href="#modal1">Mision y Vision</a></li>
       <li><div class="divider"></div></li>
       <li><a class="waves-effect" onclick="Materialize.toast('C.C Centro Plaza nivel 5 frente al Supermercado Plazas - Altamira - Caracas🍰🍩🍪', 4000)" >Ubicacion</a></li>
       <li><a class="waves-effect" onclick="Materialize.toast('Lun a Vie⏰12:00M a 6:00PM 📞04241803896', 4000)" >Contacto</a></li>
       <li><a class="waves-effect" href="https://www.instagram.com/delibok2s/" target="_blank">Instagram</a></li>
       <li><a class="waves-effect" href="https://www.facebook.com/delibok2s" target="_blank">Facebook</a></li>
     </ul>



     <div class="row">

       <div class="col s1">
         <a href="#" data-activates="slide-out" class="button-collapse waves-effect menu" ><img class="circle" src="img/image3.jpg" style='width: 40%;'></a>

       </div>
       <div class="col s5">
         <h4 style="color: rgb(153,14,110)"><b>Bok2s🍰</b></h4>
       </div>

     </div> -->





     <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large  pink darken-2">
      <i class="large material-icons">menu</i>
    </a>
    <ul class="hide-on-small-only">
        <li class="waves-effect waves-light"><a href="#modal1"><i class="material-icons">perm_identity</i> Quienes Somos</a></li>
        <li class="waves-effect waves-light"><a href="#modal1">Mision & Vision</a></li>
        <li class="waves-effect waves-light"><a onclick="Materialize.toast('Lun a Vie⏰12:00M a 6:00PM 📞04241803896', 4000)" ><i class="material-icons">contact_phone</i> Contacto</a></li>
        <li class="waves-effect waves-light"><a onclick="Materialize.toast('C.C Centro Plaza nivel 5 frente al Supermercado Plazas - Altamira - Caracas🍰🍩🍪', 4000)"><i class="material-icons">location_on</i> Ubicacion</a></li>
        <li><a class="waves-effect" href="https://www.instagram.com/delibok2s/" target="_blank">Instagram</a></li>
        <li><a class="waves-effect" href="https://www.facebook.com/delibok2s" target="_blank">Facebook</a></li>
    </ul>

    <ul class="hide-on-med-and-up">
        <li class="waves-effect waves-light"><a href="#modal1"><i class="material-icons">perm_identity</i></a></li>
        <li class="waves-effect waves-light"><a href="#modal1">M&V</a></li>
        <li class="waves-effect waves-light"><a onclick="Materialize.toast('Lun a Vie⏰12:00M a 6:00PM 📞04241803896', 4000)" ><i class="material-icons">contact_phone</i></a></li>
        <li class="waves-effect waves-light"><a onclick="Materialize.toast('C.C Centro Plaza nivel 5 frente al Supermercado Plazas - Altamira - Caracas🍰🍩🍪', 4000)"><i class="material-icons">location_on</i></a></li>
        <li><a class="waves-effect" href="https://www.instagram.com/delibok2s/" target="_blank">Instagram</a></li>
        <li><a class="waves-effect" href="https://www.facebook.com/delibok2s" target="_blank">Facebook</a></li>
    </ul>
  </div>










    <div class="slider fullscreen" style="top: 0em;">
        <ul class="slides">
            <li>
              <img src="img/image0.jpg" style='width: 100%;'> <!-- random image -->
              <div class="caption center-align">
                <h1 style="color: #c2185b;"><b>Delicateses Bok2s🍰🍩🍪</b></h1>
                <h5 class="light grey-text text-lighten-3">Bienvenidos Bokadictos.</h5>
                <div class="col m12 hide-on-small-only">
                  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </div>
              </div>
            </li>
            <li>
              <img src="img/image6.jpg" style='width: 100%;'> <!-- random image -->
              <div class="caption right-align">
                <h3 style="color: #000">Come ~ Comparte ~ Disfruta</h3>
                <br /><br /><br /><br /><br />
                <h5 class="a2" id="a2"><b>🍰🍩🍪El lugar perfecto para compartir, degustar, y disfrutar de los mejores postres acompañados con un espumante y delicioso nescafé.🍰🍩🍪</b></h5>
              </div>
            </li>
            <li>
              <img src="img/image4.jpg" style='width: 100%;'> <!-- random image -->
              <div class="caption center-align">
                <h3 style="color: #a711aa">🍰🍩🍪Bok2s🍰🍩🍪</h3>
                <h5 class="light grey-text text-lighten-3">Otro slogan.</h5>
              </div>
            </li>
            <li>
              <img src="img/image5.jpg" style='width: 100%;'> <!-- random image -->
              <div class="caption left-align">
                <h3 style="color: #a711aa">Que esperas para Visitarnos?</h3>
                <h5 class="light grey-text text-lighten-3">Otro slogan.</h5>
              </div>
            </li>
        </ul>
  </div>






  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Quienes Somos?</h4>
      <p>Pastelería-cafetería, el lugar perfecto para compartir, degustar, y disfrutar de los mejores postres acompañados con un espumante y delicioso nescafé.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>



  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>













  </body>
</html>
