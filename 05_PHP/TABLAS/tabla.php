<table>

<tr>
    <td>CANTIDAD</td>

    <td>PRODUCTOS</td>

    <td>SUBTOTAL</td>
</tr>

<tr>
    <td>
            <?php 
                echo $n_producto001;  
            ?>  
    </td>

    <td>BARRA PAN</td>

    <td>  
            <?php 
                echo calcular_barrapan($n_producto001); 
            ?> 
    </td>
</tr>

<tr>
    <td> 
            <?php 
                echo $n_producto002; 
            ?> 
    </td>

    <td>CROISANT</td>

    <td> 
            <?php 
                echo calcular_croisant($n_producto002);
            ?> 
    </td>
  </tr>

  <tr>
    <td> 
            <?php 
                echo $n_producto003; 
            ?> 
    </td>

    <td>NAPOLITANA</td>

    <td> 
            <?php 
               echo calcular_napolitana($n_producto003);
            ?> 
    </td>
  </tr>
 
</table>