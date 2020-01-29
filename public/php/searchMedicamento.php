 <?php  
 $connect = mysqli_connect("localhost", "root", "", "hospitalxonacatlan");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM minventarios WHERE medicamento LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<dl class="ulCLass" style="margin-bottom: 0px;">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<dt>'.utf8_encode($row["medicamento"]).'</dt>';  
           }  
      }else{
        $output .= 'No existe medicamento';
      }  
     
      $output .= '</dl>';  
      echo $output;  
 }  
 ?>  