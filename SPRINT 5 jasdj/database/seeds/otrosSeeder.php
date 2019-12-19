<?php

use Illuminate\Database\Seeder;

class otrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("otros")->insert (
            [
            "nombre"=> "Hornillo Ceramica",
            "color"=> "Rojo",
            "precio"=> "300",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("otros")->insert (
            [
            "nombre"=> "Hornillo Ceramica",
            "color"=> "Blanco",
            "precio"=> "300",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("otros")->insert (
            [
            "nombre"=> "Hornillo Ceramica",
            "color"=> "natural",
            "precio"=> "300",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );



        DB::table("otros")->insert (
            [
            "nombre"=> "Jala Neti",
            "color"=> "Blanco",
            "precio"=> "350",
            "stock"=> "15",
            "descripcion"=> null
            ]
            );
        
        
        DB::table("otros")->insert (
            [
            "nombre"=> "Aceites Esenciales",
            "color"=> "Natural",
            "precio"=> "500",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );


        DB::table("otros")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Rojo",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("otros")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Azul",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("otros")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Blanco",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("otros")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Verde",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("otros")->insert (
            [
            "nombre"=> "Bandera de Oracion",
            "color"=> "Amarillo",
            "precio"=> "100",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );



        DB::table("otros")->insert (
            [
            "nombre"=> "Velador de Yoga",
            "color"=> "Estampado",
            "precio"=> "350",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );


        DB::table("otros")->insert (
            [
            "nombre"=> "Tapices Grandes",
            "color"=> "Estampados",
            "precio"=> "800",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
    }
}
