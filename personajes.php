<?php include("header.php") ?>

<section class="personajes-contenedor">
<h1>Personajes</h1>
<div class="personajes-botonera">
<ul>
    <li> <a href="personajes.php?personaje=sc">Sonic</a></li>
    <li> <a href="personajes.php?personaje=ts">Tails</a></li>
    <li> <a href="personajes.php?personaje=kn">Knuckles</a></li>
</ul>
</div>
</section>

<?php 
$personaje = "";
$descripcion = "";
$img = "";

if (isset($_GET["personaje"])) {
    switch ($_GET["personaje"]){
            case "sc":
                $personaje = "Sonic";
                $descripcion = "Nació en Christmas Island con su habilidad anormal de correr a súper velocidad, pero su amor por la aventura eventualmente lo llevo lejos de su casa.
                Desde entonces, ha pasado su vida viajando por el mundo, impulsado por su espíritu inquieto, en busca de aventuras para satisfacer su sed de emociones.
                En algún momento, Sonic conoció al Dr. Ivo Robotnik y se convirtieron en enemigos. Sonic posteriormente pelearía con Robotnik en un número incalculable de enfrentamientos mientras el científico intentaba una y otra vez conquistar el mundo, con Sonic frustrando los planes del doctor cada vez.";
                $img = "./images/Sonic1.png";
            break;
            case "ts":
                $personaje = "Tails";
                $descripcion = "El personaje de Tails es retratado como un zorro muy dulce y bastante humilde quien, antes de conocer a Sonic, a menudo era maltratado por sus dos colas.
                                Sin embargo, Sonic vio el talento especial de Tails y lo animó, lo que hizo que Tails sintiera cierta admiración hacia el erizo azul.
                                Como un viejo amigo, el admira a Sonic y sueña en ser como él.";
                $img = "./images/Tails.png";
            break;
            case "kn": 
                $personaje = "Knuckles";
                $descripcion = "Knuckles vive en Angel Island, también llamada la Isla Flotante, por flotar en el cielo gracias al poder de la Master Emerald, que se encarga de cuidar. 
                                Es el último superviviente de una población de equidnas que habitó alguna vez la isla. Knuckles es el guardián de la Master Emerald (Esmeralda Maestra, Esmeralda Principal, Gran Esmeralda o Esmeralda Madre), destino que ha pasado en su familia durante generaciones.
                                Los Guardianes existen para que la Master Emerald no caiga en manos equivocadas, ya que, si eso sucediera, el mundo estaría en peligro.
                                Esto significa que los Guardianes, en cierta forma, existen para mantener la armonía del Universo.";
                $img = "./images/Knuckles.png";
            break;
    }
}
?>

<div class="descripcion-personajes">
    <h2> <?php echo $personaje ?> </h2>
    <p> <?php echo $descripcion ?> </p>
    <div class="contenedor-img">
        <img src="<?php echo $img ?>" alt="<?php $personaje ?>">
    </div>
</div>