<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/Paginacion.css">
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list <?php if (isset($_GET["Poke"])) {if (!$_GET["Poke"] || $_GET["Poke"]==1) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=1">
                    <span class="icon">1</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==2) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=2">
                    <span class="icon">2</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==3) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=3">
                    <span class="icon">3</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==4) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=4">
                    <span class="icon">4</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==5) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=5">
                    <span class="icon">5</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==6) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=6">
                    <span class="icon">6</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==7) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=7">
                    <span class="icon">7</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==8) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=8">
                    <span class="icon">8</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==9) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=9">
                    <span class="icon">9</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==10) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=10">
                    <span class="icon">10</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==11) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=11">
                    <span class="icon">11</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==12) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=12">
                    <span class="icon">12</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==13) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=13">
                    <span class="icon">13</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==14) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=14">
                    <span class="icon">14</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==15) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=15">
                    <span class="icon">15</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==16) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=16">
                    <span class="icon">16</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==17) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=17">
                    <span class="icon">17</span>
                </a>
            </li>
            <li class="list <?php if (isset($_GET["Poke"])) {if ($_GET["Poke"]==18) {echo "active"; }}?>" style="--clr:#f44336">
                <a href="Index.php?Pagina=1&Poke=18">
                    <span class="icon">18</span>
                </a>
            </li>

            
            
            <div class="indicator"> </div>
        </ul>
    </div>

    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active')
        }
        list.forEach((item) =>
        item.addEventListener('click',activeLink));
    </script>
</body>
</html>