<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
    <h1>Crear una Nueva Lista</h1>
    <p>Aquí podrás crear una lista con todo lo que vas as registrar <em>Cover, chelas, descorches</em></p>


    <form class="form" action="{{url('/guardarLista')}}" method="POST">

      {{ csrf_field() }}

      <div id="productos">

        <div class="productos">
          <div class="form-group">
            <input type="text" name="producto[]" placeholder="Nombre del Producto" value="">
            <input type="text" name="precio[]" placeholder="Precio" value="">
          </div>
        </div>

        <div class="nuevosProductos" v-for="producto in totalProductos">
          <todo-item>
          </todo-item>
        </div>
        <button type="button" name="button" v-on:click="agregarProducto()" >Agregar Otro Producto</button>
      </div>



      <input type="submit" name="" value="Guardar Lista">
    </form>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <script type="text/javascript">

    Vue.component('todo-item', {
      template: '<div class="form-group">' +
                '<input type="text" name="producto[]" placeholder="Producto" value="">' +
                '<input type="text" name="precio[]" placeholder="Precio" value="">' +
                '</div>'
    })

      var productos = new Vue({
        el: '#productos',
        data: {
          message: 'Hallo',

          nuevoProducto: '\<h1> Derp </h1>',

          totalProductos: 0
        },
        methods: {
          agregarProducto: function(){
            this.totalProductos++
          }
        }
      });
    </script>
  </body>
</html>
