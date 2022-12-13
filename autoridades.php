<?php 
//Pequeña logica para cargar la pagina que queremos abrir
$pagina = isset($_GET['p'])? strtolower($_GET['p']) : 'home';

require_once 'header.php';
require_once 'menu.php';?>
<!-- Page Header Start -->
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Directores</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Inicio</a>
                        <a href="">Directores</a>
                    </div>
                </div>
            </div>
        </div>


<div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content">
                            
                            <h2>Escuela de Idiomas de la Armada Bolviana</h2>
                            <h2>Directores</h2>
                            <ul>
                            <li>2001 - 2002 </li><li class="tabulacion">CF. DEMN. Roger Landivar Rojas</li>
                            
                            <li>2003 - 2005	&nbsp &nbsp CF. DEMN. German Vargas Guardia</li>
                            
                            <li>2006 - 2007 &nbsp &nbsp	CF. DEMN. Napoleón Bustos Martínez</li> 
                            
                            <li>2008 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CN. DAEN. Hugo Zelada Mendoza</li> 
                            <li>2009	&nbsp &nbsp CN. DAEN. Roger Landivar Rojas</li>
                            <li>2010 - 2011	&nbsp &nbsp CN. DAEN. Einar Pantoja Espinoza</li>
                            
                            <li>2012 - 2013	&nbsp &nbsp CN. DAEN. Orlando Cruz Flores</li>
                            
                            <li>2014	&nbsp &nbsp CF. DEMN. Aldo Rojas Rivas</li>
                            <li>2015 - 2018 &nbsp &nbsp  CN. DAEN. Carlos Aguirre Vega</li>
                            <li>2019	&nbsp &nbsp CF. DEMN. Marco Antonio Arevalo Valle</li>
                            <li>2020 - 2021	&nbsp &nbsp CN. DAEN. Marco Antonio Crespo Cespedes</li>
                            
                            <li>2022	&nbsp &nbsp CN. DAEN. William Orlando Camacho Martínez</li>
                            </ul>
                            
                        </div>


                        
                    </div>

                    
                </div>
            </div>
        </div>

<!--/FIN CONTAINER-->
<?php require_once 'footer.php';