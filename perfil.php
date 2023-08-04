  <li> <a href="index.php">CARRERA</a></li>
<div class="row">
    <div class="col-md-12 text-center">
        <img src="img/utc.png"  height="200" width="200">
        <h1><b>SISTEMAS DE INFORMACIÓN</h1>
    </div>
</div>

<h1> Desarollado Por: </h1> <br>
<div class="row">
    <div class="col-md-4">
        <table class="table table-bordered table-striped table-hover" >
          <tr>
            <th class="text-rigth"> Cédula:</th>
            <td>0550157242</td>
          </tr>
          <tr>
            <th class="text-rigth"> Nombre:</th>
            <td>Lisbeth</td>
          </tr>
          <tr>
            <th class="text-rigth"> Apellido:</th>
            <td>Rocha</td>
          </tr>
          <tr>
            <th class="text-rigth"> Celular:</th>
            <td>0984925042</td>
          </tr>
          <tr>
            <th class="text-rigth"> Email:</th>
            <td>lisbeth.rocha7242@utc.edu.ec</td>
          </tr>
          <tr>
            <th class="text-rigth"> Edad:</th>
                <td>21</td>
          </tr>
        </table>

    </div>
    <div clas="col-md-8">
          <div id ="mapaDireccion" style="width:50%; height:300px">
          </div>
    </div>
    <script type="text/javascript">
        function initMap()
        {
          //CREANDO el puntoMAPA
        var coordenadaCentral=new google.maps.LatLng(-0.814557605316403,-78.58508997957631);
        //Creando el mapa
        var map1=new google.maps.Map(document.getElementById('mapaDireccion'),
        {
          center:coordenadaCentral,
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        }
        );
        var marcador1=new google.maps.Marker({
          position: coordenadaCentral,
          map:map1
          title:"Domicilio Lisbeth",
          icon:"img/marcador.png"
        });


        }
  </script>
