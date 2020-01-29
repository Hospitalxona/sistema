<?php  
 $connect = mysqli_connect("localhost", "root", "", "hospitalxonacatlan");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM tb_cie10 WHERE descripcion LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<dl class="ulCLass" style="margin-bottom: 0px;">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<dt>'.utf8_encode($row["descripcion"]).'</dt>';  
           }  
      }else{
        $output .= 'No existe clave del diagnóstico';
      }  
     
      $output .= '</dl>';  
      echo $output;  
 }  
 ?>  