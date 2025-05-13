<?php 
$page_title = "Contacto - Cámara PYME";
$current_page = "contacto";
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
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/img/contacto/hero-contacto.jpg');
            background-size: cover;
            background-position: center;
            min-height: 50vh;
        }
        
        .contact-info-card {
            border-left: 4px solid var(--ladrillo);
            transition: all 0.3s ease;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
        }
        
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Contáctenos</h1>
            <p class="lead">Estamos aquí para responder sus consultas y propuestas</p>
        </div>
    </section>

    <!-- Información de Contacto -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="p-4 h-100 bg-white shadow-sm contact-info-card">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-geo-alt fs-1 text-ladrillo me-3"></i>
                            <h3 class="h5 mb-0">Ubicación</h3>
                        </div>
                        <p>Av. Ejemplo 123, Piso 8<br>San Isidro, Lima<br>Perú</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="p-4 h-100 bg-white shadow-sm contact-info-card">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-telephone fs-1 text-ladrillo me-3"></i>
                            <h3 class="h5 mb-0">Teléfonos</h3>
                        </div>
                        <p>
                            <strong>Central:</strong> (01) 123-4567<br>
                            <strong>Móvil:</strong> 987 654 321<br>
                            <strong>Fax:</strong> (01) 123-4568
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="p-4 h-100 bg-white shadow-sm contact-info-card">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-envelope fs-1 text-ladrillo me-3"></i>
                            <h3 class="h5 mb-0">Correos Electrónicos</h3>
                        </div>
                        <p>
                            <strong>Informes:</strong> info@camarapyme.pe<br>
                            <strong>Administración:</strong> administracion@camarapyme.pe<br>
                            <strong>Prensa:</strong> prensa@camarapyme.pe
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario y Mapa -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h2 class="text-ladrillo mb-4">Envíenos un Mensaje</h2>
                    
                    <form action="procesar-contacto.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono">
                        </div>
                        
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <select class="form-select" id="asunto" name="asunto" required>
                                <option value="" selected disabled>Seleccione un asunto</option>
                                <option value="consulta">Consulta General</option>
                                <option value="afiliacion">Afiliación de Empresas</option>
                                <option value="proyectos">Oportunidades de Proyectos</option>
                                <option value="prensa">Prensa y Comunicaciones</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-ladrillo">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-6">
                    <h2 class="text-ladrillo mb-4">Nuestra Ubicación</h2>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.966575744758!2d-77.03654292416408!3d-12.046990940719973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima%20Hist%C3%B3rico!5e0!3m2!1ses-419!2spe!4v1680000000000!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Horario de Atención -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-ladrillo mb-4">Horario de Atención</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-ladrillo text-white">
                                <tr>
                                    <th>Día</th>
                                    <th>Horario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lunes - Viernes</td>
                                    <td>8:30 am - 5:30 pm</td>
                                </tr>
                                <tr>
                                    <td>Sábados</td>
                                    <td>9:00 am - 1:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Domingos</td>
                                    <td>Cerrado</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
    
    <!-- Bootstrap JS Bundle with Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JS personalizado -->
    <script src="assets/js/main.js"></script>
</body>
</html>