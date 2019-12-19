<?php

use Illuminate\Database\Seeder;

class fitnessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("fitness")->insert (
            [
            "nombre"=> "Fisiobalon",
            "color"=> "Azul",
            "precio"=> "1200",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Fisiobalon",
            "color"=> "Rojo",
            "precio"=> "1200",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Fisiobalon",
            "color"=> "Verde",
            "precio"=> "1200",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );


        DB::table("fitness")->insert (
            [
            "nombre"=> "Capsula estimulante",
            "color"=> "Rojo",
            "precio"=> "450",
            "stock"=> "10",
            "descripcion"=> null
            ]
            );


        DB::table("fitness")->insert (
            [
            "nombre"=> "Barra multiejercicio",
            "color"=> "Negro",
            "precio"=> "1700",
            "stock"=> "3",
            "descripcion"=> null
            ]
            );
        
        DB::table("fitness")->insert (
            [
            "nombre"=> "Colchoneta con cierre",
            "color"=> "Azul",
            "precio"=> "500",
            "stock"=> "5",
            "descripcion"=> null
            ]
            );

        DB::table("fitness")->insert (
            [
            "nombre"=> "Colchoneta plegable",
            "color"=> "Azul",
            "precio"=> "500",
            "stock"=> "5",
            "descripcion"=> null
            ]
            );

        DB::table("fitness")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Azul",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Rojo",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Verde",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Cordones de silicona",
            "color"=> "Amarillo",
            "precio"=> "280",
            "stock"=> "15",
            "descripcion"=> null
            ]
            );


        DB::table("fitness")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Azul",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Negro",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Gris",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Cuello termico",
            "color"=> "Estampado",
            "precio"=> "200",
            "stock"=> "5",
            "descripcion"=> null
            ]
            );


        DB::table("fitness")->insert (
            [
            "nombre"=> "Guantes Fitness",
            "color"=> "Negro",
            "precio"=> "440",
            "stock"=> "5",
            "descripcion"=> null
            ]
            );
        DB::table("fitness")->insert (
            [
            "nombre"=> "Encastrable Goma Eva",
            "color"=> "Rojo",
            "precio"=> "220",
            "stock"=> "30",
            "descripcion"=> null
            ]
            );
    }
}
