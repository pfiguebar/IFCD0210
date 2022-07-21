<div class="container-fluid">
<p><strong>NOMBRE:</strong> <?php echo $factura1->getNombre(); ?></p>
<p><strong>DIRECCION:</strong> <?php echo $factura1->getDireccion(); ?></p>
<p><strong>TELEFONO:</strong> <?php echo $factura1->getTelefono(); ?></p>
</div>

<div class="container" style="margin-top: 30px;"></div>

<div class="container-fluid">
<table class="table" style="width: 100%">
  
<thead>
<tr>
      
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col" style="background-color: green; color: white;">

      <?php
        // imprimo fecha actual 
            $fecha = getdate();
            echo $fecha['mday'] ." / ". $fecha['month'] ." / ". $fecha['year'];
           
      ?>

      </th>
    </tr>  



<tr style="background-color: black; color: white;">
      <th scope="col">PRODUCTO</th>
      <th scope="col">PRECIO UNIDAD</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">SUBTOTAL</th>
    </tr>
  </thead>


  <tbody>
    <!-- si valor subtotal = 0, significa no han seleccionado producto = no muestro este <tr>
        en caso contrario si lo muestro -->
    

    <div class=
    "
    <?php
        $visible = "display: block";
        $invisible = "display: none";

            if($subtotal_patatas == 0){  echo $invisible; }
            else{  echo $visible;  }
    ?>
    
    ">
    <tr>
      <td>PATATAS</td>
      <td><?php echo $precio_patatas ?></td>
      <td><?php echo $factura1->getPatatas(); ?></td>
      <td><?php echo $subtotal_patatas ?></td>
    </tr>
    </div>

    <div class="">
    <tr>
      <td>CEBOLLAS</td>
      <td><?php echo $precio_cebollas ?></td>
      <td><?php echo $factura1->getCebollas(); ?></td>
      <td><?php echo $subtotal_cebollas ?></td>
    </tr>
    </div>

    <div class="">
    <tr>
      <td>PIMIENTOS</td>
      <td><?php echo $precio_pimientos ?></td>
      <td><?php echo $factura1->getPimientos(); ?></td>
      <td><?php echo $subtotal_pimientos ?></td>
    </tr>
    </div>

    <div class="">
    <tr>
      <td>HUEVOS</td>
      <td><?php echo $precio_huevos ?></td>
      <td><?php echo $factura1->getHuevos(); ?></td>
      <td><?php echo $subtotal_huevos ?></td>
    </tr>
    </div>

    <div class="">
    <tr>
      <td>MANZANAS</td>
      <td><?php echo $precio_manzanas ?></td>
      <td><?php echo $factura1->getManzanas(); ?></td>
      <td><?php echo $subtotal_manzanas ?></td>
    </tr>
    </div>

    <div class="">
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>TOTAL: <?php echo $total ?></td>
    </tr>
    </div>

</tbody>
</table>
</div>