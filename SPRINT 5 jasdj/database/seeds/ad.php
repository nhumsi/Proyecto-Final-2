<?php

use Illuminate\Database\Seeder;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("productos")->insert (
            [
            "nombre"=> "Fisiobalon",
            "color"=> "Azul",
            "precio"=> "1200",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Fisiobalon",
            "color"=> "Rojo",
            "precio"=> "1200",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Fitness"            
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Fisiobalon",
            "color"=> "Verde",
            "precio"=> "1200",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );


        DB::table("productos")->insert (
            [
            "nombre"=> "Capsula estimulante",
            "color"=> "Rojo",
            "precio"=> "450",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );


        DB::table("productos")->insert (
            [
            "nombre"=> "Barra multiejercicio",
            "color"=> "Negro",
            "precio"=> "1700",
            "stock"=> "3",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        
        DB::table("productos")->insert (
            [
            "nombre"=> "Colchoneta con cierre",
            "color"=> "Azul",
            "precio"=> "500",
            "stock"=> "5",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );

        DB::table("productos")->insert (
            [
            "nombre"=> "Colchoneta plegable",
            "color"=> "Azul",
            "precio"=> "500",
            "stock"=> "5",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );

        DB::table("productos")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Azul",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Rojo",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Verde",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Amarillo",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );


        DB::table("productos")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Azul",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Negro",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Gris",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Estampado",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );


        DB::table("productos")->insert (
            [
            "nombre"=> "Guantes Fitness",
            "color"=> "Negro",
            "precio"=> "440",
            "stock"=> "5",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Encastrable Goma Eva",
            "color"=> "Rojo",
            "precio"=> "220",
            "stock"=> "30",
            "descripcion"=> null,
            "categoria"=> "Fitness"
            ]
            );
    
    
    DB::table("productos")->insert (
            [
                "nombre"=> "Aku Ball",
                "color"=> "Rojo",
                "precio"=> "500",
                "stock"=> "20",
                "descripcion"=> null,
                "categoria"=> "Yoga"
            ]
            );
        DB::table("productos")->insert (
                [
                "nombre"=> "Aku Ball",
                "color"=> "Azul",
                "precio"=> "500",
                "stock"=> "20",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Aku Ball",
                "color"=> "Verde",
                "precio"=> "500",
                "stock"=> "20",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );



        DB::table("productos")->insert (
                [
                "nombre"=> "Almohada Cervical",
                "color"=> "Blanco",
                "precio"=> "1100",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );  
        
        DB::table("productos")->insert (
                [
                "nombre"=> "Almohada Lumbar",
                "color"=> "Blanco",
                "precio"=> "900",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        
        DB::table("productos")->insert (
                [
                "nombre"=> "Almohada Termica",
                "color"=> "Blanco",
                "precio"=> "1800",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 

        DB::table("productos")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Blanco",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Azul",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Rojo",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Amarillo",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Verde",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        
        
        DB::table("productos")->insert (
                [
                "nombre"=> "Mat Estampada",
                "color"=> "Blanco",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Blanco",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Rojo",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Azul",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 
        DB::table("productos")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Violeta",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                ); 


        DB::table("productos")->insert (
                [
                "nombre"=> "Porta Mat",
                "color"=> "Rojo",
                "precio"=> "150",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Porta Mat",
                "color"=> "Azul",
                "precio"=> "150",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Porta Mat",
                "color"=> "Estampado",
                "precio"=> "150",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );

        DB::table("productos")->insert (
                [
                "nombre"=> "Cintos de 4 metros",
                "color"=> "Rojo",
                "precio"=> "300",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        
        DB::table("productos")->insert (
                [
                "nombre"=> "Elongador Curvo",
                "color"=> "Natural",
                "precio"=> "2900",
                "stock"=> "5",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Azul",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Rojo",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );

        DB::table("productos")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Negro",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Gris",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Verde",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );


        DB::table("productos")->insert (
                [
                "nombre"=> "Ladrillo de Yoga",
                "color"=> "Azul",
                "precio"=> "200",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Ladrillo de Yoga",
                "color"=> "Rojo",
                "precio"=> "200",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Ladrillo de Yoga",
                "color"=> "Violeta",
                "precio"=> "200",
                "stock"=> "10",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );

        
        DB::table("productos")->insert (
                [
                "nombre"=> "Silla meditacion",
                "color"=> "Azul",
                "precio"=> "1500",
                "stock"=> "5",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Silla meditacion",
                "color"=> "Rojo",
                "precio"=> "1500",
                "stock"=> "5",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        DB::table("productos")->insert (
                [
                "nombre"=> "Silla meditacion",
                "color"=> "Negro",
                "precio"=> "1500",
                "stock"=> "5",
                "descripcion"=> null,
                "categoria"=> "Yoga"
                ]
                );
        
                
        DB::table("productos")->insert (
            [
            "nombre"=> "Hornillo Ceramica",
            "color"=> "Rojo",
            "precio"=> "300",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Hornillo Ceramica",
            "color"=> "Blanco",
            "precio"=> "300",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Hornillo Ceramica",
            "color"=> "natural",
            "precio"=> "300",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );



        DB::table("productos")->insert (
            [
            "nombre"=> "Jala Neti",
            "color"=> "Blanco",
            "precio"=> "350",
            "stock"=> "15",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
        
        
        DB::table("productos")->insert (
            [
            "nombre"=> "Aceites Esenciales",
            "color"=> "Natural",
            "precio"=> "500",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );


        DB::table("productos")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Rojo",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Azul",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Blanco",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Verde",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
        DB::table("productos")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Amarillo",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );



        DB::table("productos")->insert (
            [
            "nombre"=> "Velador de Yoga",
            "color"=> "Estampado",
            "precio"=> "350",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );


        DB::table("productos")->insert (
            [
            "nombre"=> "Tapices Grandes",
            "color"=> "Estampados",
            "precio"=> "800",
            "stock"=> "10",
            "descripcion"=> null,
            "categoria"=> "Otros"
            ]
            );
    }
}
