<?php

use Illuminate\Database\Seeder;

class yogaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("yoga")->insert (
            [
                "nombre"=> "Aku Ball",
                "color"=> "Rojo",
                "precio"=> "500",
                "stock"=> "20",
                "descripcion"=> null
            ]
            );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Aku Ball",
                "color"=> "Azul",
                "precio"=> "500",
                "stock"=> "20",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Aku Ball",
                "color"=> "Verde",
                "precio"=> "500",
                "stock"=> "20",
                "descripcion"=> null
                ]
                );



        DB::table("yoga")->insert (
                [
                "nombre"=> "Almohada Cervical",
                "color"=> "Blanco",
                "precio"=> "1100",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );  
        
        DB::table("yoga")->insert (
                [
                "nombre"=> "Almohada Lumbar",
                "color"=> "Blanco",
                "precio"=> "900",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        
        DB::table("yoga")->insert (
                [
                "nombre"=> "Almohada Termica",
                "color"=> "Blanco",
                "precio"=> "1800",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 

        DB::table("yoga")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Blanco",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Azul",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Rojo",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Amarillo",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Zafu",
                "color"=> "Verde",
                "precio"=> "750",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        
        
        DB::table("yoga")->insert (
                [
                "nombre"=> "Mat Estampada",
                "color"=> "Blanco",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Blanco",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Rojo",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Azul",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 
        DB::table("yoga")->insert (
                [
                "nombre"=> "Mat",
                "color"=> "Violeta",
                "precio"=> "790",
                "stock"=> "10",
                "descripcion"=> null
                ]
                ); 


        DB::table("yoga")->insert (
                [
                "nombre"=> "Porta Mat",
                "color"=> "Rojo",
                "precio"=> "150",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Porta Mat",
                "color"=> "Azul",
                "precio"=> "150",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Porta Mat",
                "color"=> "Estampado",
                "precio"=> "150",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );

        DB::table("yoga")->insert (
                [
                "nombre"=> "Cintos de 4 metros",
                "color"=> "Rojo",
                "precio"=> "300",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        
        DB::table("yoga")->insert (
                [
                "nombre"=> "Elongador Curvo",
                "color"=> "Natural",
                "precio"=> "2900",
                "stock"=> "5",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Azul",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Rojo",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );

        DB::table("yoga")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Negro",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Gris",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Manta Microfibra",
                "color"=> "Verde",
                "precio"=> "800",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );


        DB::table("yoga")->insert (
                [
                "nombre"=> "Ladrillo de Yoga",
                "color"=> "Azul",
                "precio"=> "200",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Ladrillo de Yoga",
                "color"=> "Rojo",
                "precio"=> "200",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Ladrillo de Yoga",
                "color"=> "Violeta",
                "precio"=> "200",
                "stock"=> "10",
                "descripcion"=> null
                ]
                );

        
        DB::table("yoga")->insert (
                [
                "nombre"=> "Silla meditacion",
                "color"=> "Azul",
                "precio"=> "1500",
                "stock"=> "5",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Silla meditacion",
                "color"=> "Rojo",
                "precio"=> "1500",
                "stock"=> "5",
                "descripcion"=> null
                ]
                );
        DB::table("yoga")->insert (
                [
                "nombre"=> "Silla meditacion",
                "color"=> "Negro",
                "precio"=> "1500",
                "stock"=> "5",
                "descripcion"=> null
                ]
                );
        

     
        }
}
