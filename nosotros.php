<?php 
$page_title = "Nosotros - Cámara PYME";
$current_page = "nosotros";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Estilos personalizados -->
    <style>
        :root {
            --ladrillo: #B14A3D;
            --negro: #212529;
            --azul: #2A5CAA;
            --amarillo: #FFC107;
            --verde-cana: #D2DE32;
        }
        
        .bg-ladrillo {
            background-color: var(--ladrillo);
        }
        
        .text-ladrillo {
            color: var(--ladrillo);
        }
        
        .bg-verde-cana {
            background-color: var(--verde-cana);
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/img/nosotros/hero-nosotros.jpg');
            background-size: cover;
            background-position: center;
            min-height: 50vh;
        }
        
        .mision-vision {
            border-left: 5px solid var(--ladrillo);
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Nuestra Historia</h1>
            <p class="lead mb-5">Más de una década fortaleciendo el sector construcción</p>
        </div>
    </section>

    <!-- Quiénes Somos -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="text-ladrillo mb-4">Quiénes Somos</h2>
                    <p class="lead">El conglomerado líder en construcción civil del Perú</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/nosotros/equipo.jpg" alt="Equipo Cámara PYME" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Misión y Visión -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Misión -->
                <div class="col-md-6">
                    <div class="p-4 h-100 mision-vision">
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-bullseye text-ladrillo fs-1 me-3"></i>
                            <h3 class="text-ladrillo mb-0">Misión</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                
                <!-- Visión -->
                <div class="col-md-6">
                    <div class="p-4 h-100 mision-vision">
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-eye text-ladrillo fs-1 me-3"></i>
                            <h3 class="text-ladrillo mb-0">Visión</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="py-5 bg-ladrillo text-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="mb-4">Nuestros Valores</h2>
                <p class="lead">Principios que guían nuestro trabajo diario</p>
            </div>
            
            <div class="row g-4">
                <!-- Valor 1 -->
                <div class="col-md-4">
                    <div class="text-center p-4 h-100 bg-white text-dark rounded shadow">
                        <i class="bi bi-shield-check text-ladrillo fs-1 mb-3"></i>
                        <h4>Integridad</h4>
                        <p>Actuamos con honestidad y transparencia en todas nuestras operaciones.</p>
                    </div>
                </div>
                
                <!-- Valor 2 -->
                <div class="col-md-4">
                    <div class="text-center p-4 h-100 bg-white text-dark rounded shadow">
                        <i class="bi bi-people-fill text-ladrillo fs-1 mb-3"></i>
                        <h4>Trabajo en Equipo</h4>
                        <p>Fomentamos la colaboración entre nuestras empresas asociadas.</p>
                    </div>
                </div>
                
                <!-- Valor 3 -->
                <div class="col-md-4">
                    <div class="text-center p-4 h-100 bg-white text-dark rounded shadow">
                        <i class="bi bi-lightbulb text-ladrillo fs-1 mb-3"></i>
                        <h4>Innovación</h4>
                        <p>Buscamos constantemente mejoras para el sector construcción.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Llamado a acción -->
    <section class="py-5 bg-verde-cana">
        <div class="container py-5 text-center">
            <h2 class="display-5 fw-bold mb-4">¿Quiere ser parte de nuestra comunidad?</h2>
            <p class="lead mb-5">Descubra los beneficios de unirse a nuestro conglomerado</p>
            <a href="unirse.php" class="btn btn-dark btn-lg px-4 me-2">Únase a Nosotros</a>
            <a href="contacto.php" class="btn btn-outline-dark btn-lg px-4">Contáctenos</a>
        </div>
    </section>

    <?php include('footer.php'); ?>
    
    <!-- Bootstrap JS Bundle with Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JS personalizado -->
    <script src="assets/js/main.js"></script>
</body>
</html>