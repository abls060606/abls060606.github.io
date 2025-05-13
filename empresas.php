<?php 
$page_title = "Empresas Asociadas - Cámara PYME";
$current_page = "empresas";
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
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/img/empresas/hero-empresas.jpg');
            background-size: cover;
            background-position: center;
            min-height: 50vh;
        }
        
        .empresa-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .empresa-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .badge-especialidad {
            background-color: var(--verde-cana);
            color: var(--negro);
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Nuestras Empresas Asociadas</h1>
            <p class="lead">Conozca el talento y experiencia de nuestro conglomerado</p>
        </div>
    </section>

    <!-- Listado de Empresas -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-ladrillo">Constructoras Asociadas</h2>
                <p class="lead">Más de 50 empresas confían en nuestra red</p>
            </div>
            
            <!-- Filtros -->
            <div class="row mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <input type="text" class="form-control" placeholder="Buscar empresa...">
                </div>
                <div class="col-md-6">
                    <select class="form-select">
                        <option selected>Todas las especialidades</option>
                        <option>Edificaciones</option>
                        <option>Infraestructura vial</option>
                        <option>Ingeniería estructural</option>
                        <option>Desarrollo inmobiliario</option>
                    </select>
                </div>
            </div>
            
            <!-- Grid de Empresas -->
            <div class="row g-4">
                <!-- Empresa 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 empresa-card shadow" id="horizonte">
                        <img src="assets/img/empresas/empresa1.jpg" class="card-img-top" alt="Constructora Horizonte">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="h5 text-azul mb-2">Constructora Horizonte</h3>
                                <span class="badge badge-especialidad mb-2">Edificaciones</span>
                            </div>
                            <p class="card-text">Especialistas en proyectos de alta gama con 15 años de experiencia en el mercado.</p>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-geo-alt text-ladrillo me-2"></i> Lima, Arequipa, Trujillo</li>
                                <li class="mb-1"><i class="bi bi-award text-ladrillo me-2"></i> +120 proyectos completados</li>
                                <li><i class="bi bi-people text-ladrillo me-2"></i> 150 colaboradores</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo me-2">Ver proyectos</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Contactar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Empresa 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 empresa-card shadow" id="estructural">
                        <img src="assets/img/empresas/empresa2.jpg" class="card-img-top" alt="Ingeniería Estructural SAC">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="h5 text-azul mb-2">Ingeniería Estructural SAC</h3>
                                <span class="badge badge-especialidad mb-2">Estructuras</span>
                            </div>
                            <p class="card-text">Líderes en diseño y cálculo estructural para edificaciones de alta complejidad.</p>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-geo-alt text-ladrillo me-2"></i> Lima, Cusco</li>
                                <li class="mb-1"><i class="bi bi-award text-ladrillo me-2"></i> +80 proyectos estructurales</li>
                                <li><i class="bi bi-people text-ladrillo me-2"></i> 45 ingenieros especializados</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo me-2">Ver proyectos</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Contactar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Empresa 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 empresa-card shadow" id="inmobiliarios">
                        <img src="assets/img/empresas/empresa3.jpg" class="card-img-top" alt="Desarrollos Inmobiliarios PYME">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="h5 text-azul mb-2">Desarrollos Inmobiliarios PYME</h3>
                                <span class="badge badge-especialidad mb-2">Inmobiliario</span>
                            </div>
                            <p class="card-text">Proyectos habitacionales con enfoque en comunidades sostenibles y accesibles.</p>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-geo-alt text-ladrillo me-2"></i> Lima Norte, Chiclayo</li>
                                <li class="mb-1"><i class="bi bi-award text-ladrillo me-2"></i> +35 desarrollos</li>
                                <li><i class="bi bi-people text-ladrillo me-2"></i> 80 colaboradores</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo me-2">Ver proyectos</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Contactar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Empresa 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 empresa-card shadow">
                        <img src="assets/img/empresas/empresa4.jpg" class="card-img-top" alt="Vías del Perú SAC">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="h5 text-azul mb-2">Vías del Perú SAC</h3>
                                <span class="badge badge-especialidad mb-2">Vial</span>
                            </div>
                            <p class="card-text">Especialistas en infraestructura vial y transporte con proyectos a nivel nacional.</p>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-geo-alt text-ladrillo me-2"></i> Todo el Perú</li>
                                <li class="mb-1"><i class="bi bi-award text-ladrillo me-2"></i> +250 km construidos</li>
                                <li><i class="bi bi-people text-ladrillo me-2"></i> 200 colaboradores</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo me-2">Ver proyectos</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Contactar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Empresa 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 empresa-card shadow">
                        <img src="assets/img/empresas/empresa5.jpg" class="card-img-top" alt="Construcciones Metálicas Fortaleza">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="h5 text-azul mb-2">Construcciones Metálicas Fortaleza</h3>
                                <span class="badge badge-especialidad mb-2">Estructuras metálicas</span>
                            </div>
                            <p class="card-text">Fabricación y montaje de estructuras metálicas para proyectos industriales.</p>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-geo-alt text-ladrillo me-2"></i> Lima, Ica</li>
                                <li class="mb-1"><i class="bi bi-award text-ladrillo me-2"></i> +45 plantas industriales</li>
                                <li><i class="bi bi-people text-ladrillo me-2"></i> 120 especialistas</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo me-2">Ver proyectos</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Contactar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Empresa 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 empresa-card shadow">
                        <img src="assets/img/empresas/empresa6.jpg" class="card-img-top" alt="Electricidad y Servicios Generales">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="h5 text-azul mb-2">Electricidad y Servicios Generales</h3>
                                <span class="badge badge-especialidad mb-2">Instalaciones</span>
                            </div>
                            <p class="card-text">Soluciones integrales en instalaciones eléctricas y sistemas especiales.</p>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="bi bi-geo-alt text-ladrillo me-2"></i> Lima, Arequipa</li>
                                <li class="mb-1"><i class="bi bi-award text-ladrillo me-2"></i> +60 proyectos eléctricos</li>
                                <li><i class="bi bi-people text-ladrillo me-2"></i> 85 técnicos especializados</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="#" class="btn btn-sm btn-ladrillo me-2">Ver proyectos</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Contactar</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paginación -->
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Beneficios Asociados -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-ladrillo">Beneficios para Empresas Asociadas</h2>
                <p class="lead">Ventajas competitivas de ser parte de nuestro conglomerado</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 text-center">
                        <i class="bi bi-building text-ladrillo fs-1 mb-3"></i>
                        <h4>Mayor Visibilidad</h4>
                        <p>Exposición en nuestro directorio de empresas y plataformas digitales.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 text-center">
                        <i class="bi bi-hand-thumbs-up text-ladrillo fs-1 mb-3"></i>
                        <h4>Oportunidades de Negocio</h4>
                        <p>Acceso a proyectos conjuntos y licitaciones de mayor envergadura.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="p-4 text-center">
                        <i class="bi bi-graph-up text-ladrillo fs-1 mb-3"></i>
                        <h4>Desarrollo Empresarial</h4>
                        <p>Capacitaciones especializadas y asesoría para crecimiento organizacional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Llamado a acción -->
    <section class="py-5 bg-verde-cana">
        <div class="container py-5 text-center">
            <h2 class="display-5 fw-bold mb-4">¿Su empresa quiere unirse a nuestra red?</h2>
            <p class="lead mb-5">Fortalezca su negocio con los beneficios de nuestra comunidad</p>
            <a href="unirse.php" class="btn btn-dark btn-lg px-4 me-2">Solicitar Afiliación</a>
            <a href="contacto.php" class="btn btn-outline-dark btn-lg px-4">Contactar un Asesor</a>
        </div>
    </section>

    <?php include('footer.php'); ?>
    
    <!-- Bootstrap JS Bundle with Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JS personalizado -->
    <script src="assets/js/main.js"></script>
</body>
</html>