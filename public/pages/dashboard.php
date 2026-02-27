<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PH SARA PEREZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow+Condensed:wght@400;700&family=Barlow:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styleDashboard.css">
    <link rel="stylesheet" href="../assets/css/aboutMe.css">
    <link rel="stylesheet" href="../assets/css/portfolio.css">
    <link rel="stylesheet" href="../assets/css/services.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>

    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- NAV -->
    <nav>
        <div class="logo">PH.SARA<span>_PEREZ</span></div>

        <ul class="nav-links">
            <li><a href="#sobre-mi">SOBRE MÍ</a></li>
            <li><a href="#portafolio">PORTAFOLIO</a></li>
            <li><a href="#servicios">SERVICIOS</a></li>
            <li><a href="#anuncios">ANUNCIOS</a></li>
        </ul>

        <button class="btn-reserve">RESERVAR SESIÓN</button>
    </nav>

  <header class="hero">
    <div class="hero-image-container">
        <img src="../assets/img/foto-portada.jpg" class="hero-img" alt="Sara Pérez">
        <div class="hero-overlay-gradient"></div>
    </div>

    <div class="hero-content">
        <div class="hero-tag-container">
            <span class="hero-tag">FOTOGRAFÍA</span>
        </div>
        <h1 class="hero-title">
            MOTO<br>
            <span class="accent">VELOCIDAD</span>
        </h1>
        <p class="hero-description">
            Soy Sara Peréz , Fotógrafa especializada en motos , circuitos y motovelocidad. Capturo la adrenalina, la rapidéz y la belleza de cada máquina en movimiento
        </p>
    </div>

    <div class="hero-stats">
        <div class="stat-box">
            <div class="stat-number">5<span>+</span></div>
            <p class="stat-label">AÑOS DE EXPERIENCIA</p>
        </div>
        <div class="stat-box">
            <div class="stat-number">200<span>+</span></div>
            <p class="stat-label">EVENTOS CUBIERTOS</p>
        </div>
        <div class="stat-box">
            <div class="stat-number">12<span>K</span></div>
            <p class="stat-label">FOTOS ENTREGADAS</p>
        </div>
    </div>
</header>

    <section id="sobre-mi" class="about">
    <div class="about-container">
        
        <div class="about-gallery">
            <div class="main-img-wrapper">
                <img src="../assets/img/foto1-seccio2.PNG" alt="Sara Pérez" class="img-moto">
                
                <div class="purple-line"></div>
                
                <div class="circuit-box">
                    <span class="pin">📍 EN EL CIRCUITO</span>
                </div>
            </div>
        </div>

        <div class="about-text-content">
            <div class="subtitle">
                <span class="short-line"></span> SOBRE MÍ
            </div>
            <h2 class="main-name">
                SARA <br> PÉREZ <br> <span class="highlight">FOTÓGRAFA</span>
            </h2>
            
            <div class="desc">
                <p>Desde que vi mi primera carrera de motos supe que quería capturar esa energía. No solo el movimiento, sino la tensión, la adrenalina, el momento exacto en que todo se decide.</p>
                <p>Trabajo en circuitos, eventos de calle y sesiones privadas. Conozco los ángulos que hacen que una moto parezca volar.</p>
            </div>

            <div class="tags-container">
                <span>MOTOVELOCIDAD</span>
                <span>CARRERAS</span>
                <span>ENDURO</span>
                <span>SESIONES PRIVADAS</span>
                <span>EVENTOS</span>
                <span>CIRCUITOS</span>
            </div>
        </div>

    </div>
</section>

<section id="portafolio" class="portfolio">
    <div class="section-header">
        <span class="header-tag">TRABAJOS</span>
        <h2 class="section-title">PORTAFOLIO</h2>
    </div>

    <div class="portfolio-grid">
        <div class="port-item p-large">
            <div class="port-img-container">
                <img src="../assets/img/10.png" alt="Motovelocidad">
                <div class="port-overlay">
                    <span class="category-label">MOTOVELOCIDAD</span>
                </div>
            </div>
        </div>

        <div class="port-item">
            <div class="port-img-container">
                <img src="../assets/img/Ph_049.PNG" alt="Carreras">
                <div class="port-overlay">
                    <span class="category-label">CARRERAS</span>
                </div>
            </div>
        </div>

        <div class="port-item">
            <div class="port-img-container">
                <img src="../assets/img/Ns..PNG" alt="Sesión Privada">
                <div class="port-overlay">
                    <span class="category-label">SESIÓN PRIVADA</span>
                </div>
            </div>
        </div>

        <div class="port-item">
            <div class="port-img-container">
                <img src="../assets/img/Ph_Yilmar.PNG" alt="Enduro">
                <div class="port-overlay">
                    <span class="category-label">CIRCUITO</span>
                </div>
            </div>
        </div>

        <div class="port-item p-wide">
            <div class="port-img-container">
                <img src="../assets/img/11.png" alt="Evento">
                <div class="port-overlay">
                    <span class="category-label">EVENTO</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="servicios" class="services">
    <div class="section-header">
        <span class="header-tag">PAQUETES</span>
        <h2 class="section-title">SERVICIOS &<br>PRECIOS</h2>
    </div>

    <div class="services-grid">
        <div class="service-card">
            <span class="tier">PAQUETE BÁSICO</span>
            <h3 class="package-name">SPRINT</h3>
            <div class="price"><sup>$</sup>150.000<sub>/sesión</sub></div>
            <p class="package-desc">Ideal para sesiones rápidas y personales. Perfecta para tu moto y tú en un lugar especial.</p>
            <ul class="features">
                <li><span class="check">✓</span> 2 horas de sesión</li>
                <li><span class="check">✓</span> 20 fotos editadas</li>
                <li><span class="check">✓</span> Galería digital privada</li>
                <li><span class="check">✓</span> Entrega en 5 días</li>
            </ul>
            <div class="location">📍 BOGOTÁ Y ALREDEDORES</div>
            <button class="btn-service">RESERVAR</button>
        </div>

        <div class="service-card featured">
            <span class="tier">⭐ MÁS POPULAR</span>
            <h3 class="package-name">CIRCUITO</h3>
            <div class="price"><sup>$</sup>350.000<sub>/evento</sub></div>
            <p class="package-desc">Cobertura completa de tu evento o carrera. Capturo cada momento de la acción sobre la pista.</p>
            <ul class="features">
                <li><span class="check">✓</span> Jornada completa (hasta 8h)</li>
                <li><span class="check">✓</span> 80+ fotos editadas</li>
                <li><span class="check">✓</span> Video highlights 60s</li>
                <li><span class="check">✓</span> Entrega en 3 días</li>
                <li><span class="check">✓</span> Acceso a zonas VIP</li>
            </ul>
            <div class="location">📍 COLOMBIA (VIÁTICOS INCLUIDOS)</div>
            <button class="btn-service">RESERVAR</button>
        </div>

        <div class="service-card">
            <span class="tier">PREMIUM</span>
            <h3 class="package-name">FULL GAS</h3>
            <div class="price"><sup>$</sup>700.000<sub>/día</sub></div>
            <p class="package-desc">Cobertura VIP para temporadas, campeonatos o marcas. Contenido profesional para redes y medios.</p>
            <ul class="features">
                <li><span class="check">✓</span> Todo el día sin límite</li>
                <li><span class="check">✓</span> Fotos ilimitadas editadas</li>
                <li><span class="check">✓</span> Video 2-3 minutos</li>
                <li><span class="check">✓</span> Entrega en 24 horas</li>
                <li><span class="check">✓</span> Derechos para medios</li>
                <li><span class="check">✓</span> Temporada disponible</li>
            </ul>
            <div class="location">📍 NACIONAL E INTERNACIONAL</div>
            <button class="btn-service">CONTACTAR</button>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-logo">
            PH.SARA<span>_PEREZ</span>
        </div>

        <div class="footer-credits">
            <p>© 2025 PH.SARA_PEREZ - TODOS LOS DERECHOS RESERVADOS</p>
            <p class="passion">HECHO CON PASIÓN DESDE COLOMBIA <span>CO</span></p>
        </div>

        <div class="footer-socials">
        </div>
    </div>
</footer>

<script>
        const dot = document.querySelector('.cursor-dot');
        const outline = document.querySelector('.cursor-outline');

        window.addEventListener('mousemove', (e) => {
            dot.style.left = `${e.clientX}px`;
            dot.style.top = `${e.clientY}px`;
            outline.style.left = `${e.clientX}px`;
            outline.style.top = `${e.clientY}px`;
        });
    </script>

</body>
</html>