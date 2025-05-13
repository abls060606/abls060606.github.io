<?php
// Definir la página activa si no está definida
if(!isset($current_page)) {
    $current_page = '';
}
?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-ladrillo py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="Cámara PYME" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'inicio' ? 'active' : ''; ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'nosotros' ? 'active' : ''; ?>" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'empresas' ? 'active' : ''; ?>" href="empresas.php">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'unirse' ? 'active' : ''; ?>" href="unirse.php">Únase a Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'contacto' ? 'active' : ''; ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>