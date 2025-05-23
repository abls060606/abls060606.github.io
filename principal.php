<?php 
$page_title = "Cámara PYME - Conglomerado de Construcción Civil";
$current_page = "inicio";
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
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/img/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            min-height: 60vh;
        }
        
        .empresa-card:hover {
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Fortaleciendo la construcción civil</h1>
            <p class="lead mb-5">Un conglomerado de empresas comprometidas con el desarrollo sostenible del país</p>
            <a href="unirse.php" class="btn btn-warning btn-lg px-4 me-2">Únase a Nosotros</a>
            <a href="empresas.php" class="btn btn-outline-light btn-lg px-4">Conozca Nuestras Empresas</a>
        </div>
    </section>

    <!-- Propósito -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="text-ladrillo mb-4">Nuestro Propósito</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="nosotros.php" class="btn btn-outline-ladrillo mt-3">Conozca más</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Construcción civil" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Empresas Destacadas -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-ladrillo">Empresas del Conglomerado</h2>
                <p class="lead">Conozca algunas de nuestras empresas asociadas</p>
            </div>
            
            <div class="row g-4">
                <!-- Empresa 1 -->
                <div class="col-md-4">
                    <div class="card h-100 empresa-card shadow border-0">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Empresa 1">
                        <div class="card-body">
                            <h5 class="card-title text-azul">Constructora Ejemplo 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Empresa 2 -->
                <div class="col-md-4">
                    <div class="card h-100 empresa-card shadow border-0">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Empresa 2">
                        <div class="card-body">
                            <h5 class="card-title text-azul">Constructora Ejemplo 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo">Ver detalles</a>
                        </div>
                    </div>
                </div>
                
                <!-- Empresa 3 -->
                <div class="col-md-4">
                    <div class="card h-100 empresa-card shadow border-0">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Empresa 3">
                        <div class="card-body">
                            <h5 class="card-title text-azul">Constructora Ejemplo 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="empresas.php" class="btn btn-ladrillo px-4">Ver todas las empresas</a>
            </div>
        </div>
    </section>

    <!-- Llamado a acción -->
    <section class="py-5 bg-verde-cana">
        <div class="container py-5 text-center">
            <h2 class="display-5 fw-bold mb-4">¿Es su empresa parte de la construcción civil?</h2>
            <p class="lead mb-5">Únase a nuestro conglomerado y acceda a beneficios exclusivos para crecimiento empresarial</p>
            <a href="unirse.php" class="btn btn-dark btn-lg px-4">Solicite información</a>
        </div>
    </section>

    <?php include('footer.php'); ?>
    
    <!-- Bootstrap JS Bundle with Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JS personalizado -->
    <script>
        // Activar tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>