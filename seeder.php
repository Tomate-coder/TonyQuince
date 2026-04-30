<?php
include("connection.php");
$con = connection();

$sql = "INSERT INTO articulos (nombre, precio, stock) VALUES 
('Lápiz Adhesivo Pritt 40g', 35.50, 150),
('Cuaderno Profesional Scribe Raya', 28.00, 300),
('Cuaderno Profesional Scribe Cuadro Chico', 28.00, 300),
('Cuaderno Profesional Scribe Cuadro Grande', 28.00, 300),
('Bolígrafo BIC Cristal Punto Fino Negro', 6.50, 500),
('Bolígrafo BIC Cristal Punto Fino Azul', 6.50, 500),
('Bolígrafo BIC Cristal Punto Fino Rojo', 6.50, 500),
('Marcador Permanente Sharpie Negro', 22.00, 100),
('Marcador Magistral para Pizarrón', 25.00, 80),
('Borrador Pelikan Miga de Pan', 8.50, 150),
('Sacapuntas Maped Metálico', 12.00, 120),
('Tijeras Barrilito Escolares', 35.00, 90),
('Pegamento Líquido Resistol 850 110g', 24.00, 140),
('Colores Norma 24 piezas', 145.00, 60),
('Colores Blanca Nieves 12 piezas', 45.00, 100),
('Cinta Adhesiva Tuk Transparente', 18.00, 200),
('Corrector Líquido Paper Mate', 21.00, 110),
('Marcatextos Stabilo Boss Amarillo', 29.00, 85),
('Marcatextos Stabilo Boss Pastel Rosa', 29.00, 85),
('Calculadora Científica Casio fx-82MS', 350.00, 30),
('Calculadora Básica de Bolsillo', 120.00, 50),
('Paquete Hojas Blancas Carta Scribe 500pzs', 110.00, 200),
('Paquete Hojas Color Carta 100pzs', 45.00, 100),
('Cartulina Blanca', 5.00, 400),
('Papel Cascarón 1/8', 8.00, 250),
('Foami Tamaño Carta Varios Colores', 3.00, 500),
('Silicon Líquido Pascua 250ml', 45.00, 70),
('Tubo de Silicon 10 pzs', 25.00, 150),
('Pincel Baco de Pelo de Camello No. 4', 15.00, 90),
('Pintura Vinci Cartel 25ml Rojo', 14.00, 120),
('Pintura Vinci Cartel 25ml Azul', 14.00, 120),
('Pintura Vinci Cartel 25ml Amarillo', 14.00, 120),
('Plastilina Play-Doh 4 Pack', 85.00, 40),
('Plastilina Baco Barra', 12.00, 200),
('Juego de Geometría Maped Flexible', 65.00, 80),
('Regla Metálica 30cm', 25.00, 100),
('Compás Metálico de Precisión', 85.00, 50),
('Libreta Francesa Scribe', 22.00, 150),
('Libreta Italiana Scribe', 22.00, 150),
('Diccionario Larousse Básico Escolar', 115.00, 60),
('Diccionario Inglés-Español Básico', 135.00, 50),
('Fólder Tamaño Carta Beige', 3.00, 500),
('Fólder Tamaño Oficio Beige', 4.00, 400),
('Sobre Bolsa Manila Tamaño Carta', 4.00, 300),
('Grapadora Truper de Oficina', 120.00, 40),
('Caja de Grapas Estándar 5000 pzs', 45.00, 100),
('Clips Metálicos Mariposa 100 pzs', 25.00, 150),
('Broches Baco de 8cm 50 pzs', 35.00, 120),
('Mochila Escolar Básica Negra', 250.00, 20),
('Caja de Archivo Muerto Oficio', 35.00, 80)";

if(mysqli_query($con, $sql)){
    echo "<h1 style='color: #00a859; text-align: center; margin-top: 50px;'>¡50 artículos insertados con éxito!</h1>";
    echo "<div style='text-align: center;'><a href='gestion.php' style='padding: 10px 20px; background: #002b7f; color: white; text-decoration: none; border-radius: 5px;'>Ir al Panel de Gestión</a></div>";
} else {
    echo "Error al insertar: " . mysqli_error($con);
}
?>