<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use PHPExcel_Worksheet_Drawing;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Hash;

use App\Models\minventarios;



class ReporteExcel extends Controller
{
    public function inventario() {
 
		        Excel::create('Reporte Excel inventario', function($excel) {	//<--- Libro de Excel
		
		            $excel->sheet('inventario', function($sheet) {	//<--- hoja de Excel
		 
		                $usuarios = minventarios::all();  // <------------ consulta

		                $sheet->fromArray($usuarios, null, 'C8');
						//Encabezado o Titulo
		    $sheet->mergeCells('C4:p4');
		    $sheet->cell('C4','Reporte de Inventario de Medicamentos');
			$sheet->cell('C4', function($cell){
					$cell->setFontSize(20);
					$cell->setAlignment('center');
			});

             // agragar borde y color a los encabezados
			$sheet->setBorder('C8:AC8');
			$sheet->cells('C8:AC8', function($cells){
				$cells->setBackground('#066784');
				$cells->setFontColor('#FFFFFF');
			});


			// Poner borde a partir de la fila 4 (de los encabezados)
			$i = 9;
			foreach ($usuarios as $p) {
				$sheet->setBorder('C'.$i.':AC'.$i);
				 if($i%2==0)
				   $sheet->cells('C'.$i.':AC'.$i, function($cells){
				   $cells->setBackground('#37cc63');
					});
				$i++;
			}
			
			
						//Agregar imagenes

            $obj2 = new PHPExcel_Worksheet_Drawing;
            $obj2->setPath(public_path('archivos/sl.jpg')); //your image path
            $obj2->setCoordinates('C3');
            $obj2->setWorksheet($sheet);
            $obj2->setWidthAndHeight(110,120);

			
						
						
						
						
		 
		            });
		        })->export('xls');
 
 			}

}
