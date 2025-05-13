<?php 
$page_title = "Únase a Nosotros - Cámara PYME";
$current_page = "unirse";
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
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/img/unirse/hero-unirse.jpg');
            background-size: cover;
            background-position: center;
            min-height: 50vh;
        }
        
        .form-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .benefit-icon {
            font-size: 2rem;
            color: var(--ladrillo);
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Únase a Nuestro Conglomerado</h1>
            <p class="lead">Fortalezca su empresa constructora con nuestra red de colaboración</p>
        </div>
    </section>

    <!-- Proceso de Afiliación -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="text-ladrillo mb-4">Beneficios de Afiliación</h2>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <i class="bi bi-building benefit-icon"></i>
                        </div>
                        <div>
                            <h4>Mayor Visibilidad</h4>
                            <p>Su empresa aparecerá en nuestro directorio oficial y plataformas digitales.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <i class="bi bi-hand-thumbs-up benefit-icon"></i>
                        </div>
                        <div>
                            <h4>Oportunidades de Negocio</h4>
                            <p>Acceso a proyectos conjuntos y licitaciones de mayor envergadura.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="me-4">
                            <i class="bi bi-people benefit-icon"></i>
                        </div>
                        <div>
                            <h4>Red de Contactos</h4>
                            <p>Conexión con otras empresas del sector para alianzas estratégicas.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="p-5 form-section">
                        <h3 class="text-center mb-4">Solicitud de Afiliación</h3>
                        
                        <form action="procesar-unirse.php" method="POST">
                            <div class="mb-3">
                                <label for="nombreEmpresa" class="form-label">Nombre de la Empresa</label>
                                <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="ruc" class="form-label">RUC</label>
                                <input type="text" class="form-control" id="ruc" name="ruc" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="especialidad" class="form-label">Especialidad Principal</label>
                                <select class="form-select" id="especialidad" name="especialidad" required>
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    <option value="edificaciones">Edificaciones</option>
                                    <option value="infraestructura">Infraestructura Vial</option>
                                    <option value="estructuras">Estructuras Metálicas</option>
                                    <option value="electricidad">Instalaciones Eléctricas</option>
                                    <option value="sanitarias">Instalaciones Sanitarias</option>
                                    <option value="inmobiliario">Desarrollo Inmobiliario</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="aniosExperiencia" class="form-label">Años de Experiencia</label>
                                <input type="number" class="form-control" id="aniosExperiencia" name="aniosExperiencia" min="1" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="nombreContacto" class="form-label">Nombre del Contacto</label>
                                <input type="text" class="form-control" id="nombreContacto" name="nombreContacto" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje Adicional</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-ladrillo">Enviar Solicitud</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Requisitos -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-ladrillo">Requisitos de Afiliación</h2>
                <p class="lead">Conozca los criterios para formar parte de nuestro conglomerado</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 h-100 text-center bg-white rounded shadow">
                        <i class="bi bi-file-earmark-text fs-1 text-ladrillo mb-3"></i>
                        <h4>Documentación Legal</h4>
                        <p>RUC vigente y documentación que acredite la legal constitución de la empresa.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 h-100 text-center bg-white rounded shadow">
                        <i class="bi bi-briefcase fs-1 text-ladrillo mb-3"></i>
                        <h4>Experiencia Comprobable</h4>
                        <p>Mínimo 2 años de experiencia en el rubro de construcción.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 h-100 text-center bg-white rounded shadow">
                        <i class="bi bi-check-circle fs-1 text-ladrillo mb-3"></i>
                        <h4>Estándares de Calidad</h4>
                        <p>Compromiso con los estándares de calidad y seguridad en construcción.</p>
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