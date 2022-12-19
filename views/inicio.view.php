<?php require './views/includes/header.php'; ?>

<section class="contenedor background-image-gente">

    <div class="header-image">
        <img src="<?=RAIZ?>/assets/images/logo.jpg" alt="asd">
    </div>

    <?php require './views/includes/menu.php'; ?>

    <div class="contenedor-body">
        <div class="card">
        
            <div class="questions-actions-estadistica">
                <select class="questions-graphics" id="questions-graphics">
                    <option value="0">¿Cuantas mujeres y hombres hay en cada departamento?</option>
                    <option value="1">¿Cuántas personas terminaron el grado escolar?</option>
                    <option value="2">Mujeres con hijos</option>
                    <option value="3">¿Cobra la pension o jubilacion?</option>
                    <option value="4">Tipos de aportes de jubilacion</option>
                    <option value="5">Poblacion por edades</option>
                </select>

                <a href="<?=RAIZ?>/services/pdf.php" target="_blank">Descargar PDF</a>
            </div>

            <div class="content-chart-graph" id="content-chart-graph">
                <canvas id="chart-grafico"></canvas>
            </div>

            <table class="tabla-proyections">
                <tr>
                    <td>Poblacion total 2022</td>
                    <td>11995033</td>
                </tr>
                <tr>
                    <td>Poblacion total 2023</td>
                    <td>2159353</td>
                </tr>
                <tr>
                    <td>Poblacion total 2024</td>
                    <td>12325924</td>
                </tr>
                <tr>
                    <td>Poblacion total 2025</td>
                    <td>124944777</td>
                </tr>
                <tr>
                    <td>Poblacion total 2026</td>
                    <td>12665955</td>
                </tr>
                <tr>
                    <td>Poblacion total 2027</td>
                    <td>12839510</td>
                </tr>
            </table>
        </div>



    </div>

</section>

<?php require './views/includes/footer.php'; ?>