<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dra. Laura Bazán Stelzer · Odontóloga</title>
    <meta name="description" content="Dra. Laura Bazán Stelzer — Odontóloga general e implantología en Santa Cruz de la Sierra, Bolivia." />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,400;0,500;0,600;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/Laura/laura.css', 'resources/js/Laura/laura.js'])
</head>
<body>

<!-- ===== NAV ===== -->
<header class="nav">
    <div class="wrap nav-inner">
        <a class="brand" href="#inicio"><b>Dra.&nbsp;Laura&nbsp;Bazán</b><span>odontóloga</span></a>

        <nav class="nav-links" id="navLinks">
            <a href="#inicio">Inicio</a>
            <a href="#sobre">Sobre mí</a>
            <a href="#servicios">Servicios</a>
            <a href="#testimonios">Testimonios</a>
            <a href="#ubicacion">Ubicación</a>
        </nav>

        <div class="nav-cta">
            <a class="btn btn-ghost" href="https://instagram.com/dra.laurabazan" target="_blank" rel="noopener">Instagram</a>
            <a class="btn btn-primary" href="https://wa.me/59170000000?text=Hola,%20quiero%20agendar%20una%20cita%20con%20la%20Dra.%20Laura" target="_blank" rel="noopener">Agendar cita</a>
            <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>


<!-- ===== HERO ===== -->
<section class="hero" id="inicio">
    <div class="hero-glow"></div>
    <div class="wrap hero-inner">

        <div class="hero-copy reveal">
            <p class="eyebrow">Odontología general · Santa Cruz, Bolivia</p>
            <h1>Tu sonrisa,<br><em>tu confianza.</em></h1>
            <p class="hero-role">Dra. Laura Bazán Stelzer <i>·</i> Odontóloga general</p>
            <p class="lead">Cuido tu salud bucal en cada etapa del tratamiento, con resultados que te hagan sentir seguro y tranquilo. Será un placer atenderte.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="https://wa.me/59170000000?text=Hola,%20quiero%20agendar%20una%20cita%20con%20la%20Dra.%20Laura" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor">
                        <path d="M17.5 14.4c-.3-.2-1.7-.8-2-.9-.3-.1-.5-.2-.6.2-.2.3-.7.8-.8 1-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.5-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5L9 7.3c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.3.3-1 .9-1 2.3s1 2.7 1.1 2.9c.2.2 2 3.1 5 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.2-.3-.2-.6-.4z"/>
                        <path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.1-1.3C8.6 21.5 10.3 22 12 22c5.5 0 10-4.5 10-10S17.5 2 12 2zm0 18c-1.6 0-3.1-.4-4.4-1.2l-.3-.2-3 .8.8-2.9-.2-.3C4 14.8 3.6 13.4 3.6 12 3.6 7.4 7.4 3.6 12 3.6s8.4 3.8 8.4 8.4S16.6 20 12 20z"/>
                    </svg>
                    Agendar por WhatsApp
                </a>
                <a class="btn btn-ghost" href="#servicios">Ver servicios</a>
            </div>
        </div>

        <div class="portrait reveal">
            <span class="portrait-arc"></span>
            <div class="portrait-frame">
                {{-- Replace with <img src="foto-dra.jpg" alt="Dra. Laura Bazán"> when photo is available --}}
                <div class="portrait-ph">
                    <span class="mono">LB</span>
                    <small>Dra. Laura Bazán</small>
                </div>
            </div>
            <div class="portrait-badge">
                <div class="num">UCB</div>
                <div class="lab">Odontología</div>
            </div>
        </div>

    </div>
</section>


<!-- ===== ABOUT ===== -->
<section class="about" id="sobre">
    <div class="wrap about-grid">

        <div class="about-card reveal">
            <p class="quote">Mi misión es ayudarte a mejorar tu sonrisa, tu salud bucal y tu confianza.</p>
            <ul class="creds">
                <li>
                    <span class="dot">✓</span>
                    <span><b>Odontóloga general</b>Universidad Católica Boliviana (UCB)</span>
                </li>
                <li>
                    <span class="dot">✓</span>
                    <span><b>Diplomado en Implantología Oral</b>Formación especializada en implantes dentales</span>
                </li>
                <li>
                    <span class="dot">✓</span>
                    <span><b>Atención cercana</b>Te acompaño en cada etapa de tu tratamiento</span>
                </li>
            </ul>
        </div>

        <div class="about-copy reveal">
            <p class="eyebrow">Quién te atiende</p>
            <h2>Hola, soy la Dra. Laura Bazán Stelzer</h2>
            <p>Bienvenido a mi perfil profesional. Para mí, cada sonrisa tiene una historia, y me encantaría acompañarte a escribir la próxima: la tuya.</p>
            <p>Trabajo para que te sientas seguro y cómodo de principio a fin, cuidando tu salud bucal en cada etapa del tratamiento. Gracias por estar aquí; será un placer atenderte.</p>
            <a class="btn btn-primary" href="https://wa.me/59170000000?text=Hola%20Dra.%20Laura,%20quiero%20una%20consulta" target="_blank" rel="noopener">Conversemos por WhatsApp</a>
        </div>

    </div>
</section>


<!-- ===== SERVICES ===== -->
<section id="servicios">
    <div class="wrap">
        <div class="sec-head reveal">
            <p class="eyebrow">Lo que hacemos</p>
            <h2>Servicios pensados para tu sonrisa</h2>
            <p>Desde el control de rutina hasta la rehabilitación completa, cada tratamiento busca cuidar tu salud bucal y devolverte la confianza.</p>
        </div>
        <div class="services-grid">
            <article class="svc reveal">
                <span class="idx">01</span>
                <div class="ic">🦷</div>
                <h3>Odontología general</h3>
                <p>Diagnóstico, controles y tratamientos para mantener tu boca sana en el día a día.</p>
            </article>
            <article class="svc reveal">
                <span class="idx">02</span>
                <div class="ic">🔩</div>
                <h3>Implantología oral</h3>
                <p>Recupera las piezas perdidas con implantes que se ven y se sienten naturales.</p>
            </article>
            <article class="svc reveal">
                <span class="idx">03</span>
                <div class="ic">✨</div>
                <h3>Estética dental</h3>
                <p>Diseño de sonrisa y armonía para una sonrisa que refleje lo mejor de ti.</p>
            </article>
            <article class="svc reveal">
                <span class="idx">04</span>
                <div class="ic">🌟</div>
                <h3>Blanqueamiento</h3>
                <p>Aclara el tono de tus dientes de forma segura y profesional.</p>
            </article>
            <article class="svc reveal">
                <span class="idx">05</span>
                <div class="ic">🪥</div>
                <h3>Limpieza y prevención</h3>
                <p>Profilaxis y controles periódicos para prevenir antes de tener que tratar.</p>
            </article>
            <article class="svc reveal">
                <span class="idx">06</span>
                <div class="ic">🦷</div>
                <h3>Rehabilitación oral</h3>
                <p>Devolvemos función y estética a tu sonrisa con tratamientos a tu medida.</p>
            </article>
        </div>
    </div>
</section>


<!-- ===== PREVENTION STRIP ===== -->
<section class="strip">
    <div class="wrap">
        <h2>Tu salud bucal <em>no es negociable</em></h2>
        <p>Muchas enfermedades empiezan en la boca y pueden evitarse con un control a tiempo. La prevención es siempre tu mejor opción. Agenda tu cita y empezá a cuidarte hoy.</p>
        <a class="btn btn-primary" href="https://wa.me/59170000000?text=Hola,%20quiero%20agendar%20un%20control" target="_blank" rel="noopener">Agendar mi control</a>
    </div>
</section>


<!-- ===== TESTIMONIALS ===== -->
{{-- Replace these placeholder testimonials with real patient reviews --}}
<section class="testimonials" id="testimonios">
    <div class="wrap">
        <div class="sec-head reveal">
            <p class="eyebrow">Lo que dicen</p>
            <h2>Sonrisas que ya dieron el primer paso</h2>
        </div>
        <div class="test-grid">
            <article class="test reveal">
                <div class="stars">★★★★★</div>
                <p>La Dra. Laura me explicó todo con paciencia y nunca sentí dolor. Por fin sonrío sin taparme la boca.</p>
                <div class="who">
                    <span class="av">M</span>
                    <div><b>María F.</b><small>Paciente · Diseño de sonrisa</small></div>
                </div>
            </article>
            <article class="test reveal">
                <div class="stars">★★★★★</div>
                <p>Me hice un implante y el resultado es increíble. El trato del equipo es cálido y muy profesional.</p>
                <div class="who">
                    <span class="av">J</span>
                    <div><b>Jorge V.</b><small>Paciente · Implante dental</small></div>
                </div>
            </article>
            <article class="test reveal">
                <div class="stars">★★★★★</div>
                <p>Voy a mis controles desde hace un año y mi salud bucal cambió por completo. 100% recomendada.</p>
                <div class="who">
                    <span class="av">C</span>
                    <div><b>Carla R.</b><small>Paciente · Controles y limpieza</small></div>
                </div>
            </article>
        </div>
    </div>
</section>


<!-- ===== LOCATION ===== -->
<section id="ubicacion">
    <div class="wrap loc-grid">

        <div class="loc-info reveal">
            <p class="eyebrow">Dónde atiendo</p>
            <h2>Agenda tu consulta</h2>
            <ul class="loc-list">
                <li>
                    <span class="dot">📍</span>
                    <div>
                        <b>Consultorio</b>
                        <span>Atiendo en Lúmia Estudio Dental<br>Av. San Martín, C/ Alejandro Ramírez N°36<br>Santa Cruz de la Sierra, Bolivia</span>
                    </div>
                </li>
                <li>
                    <span class="dot">💬</span>
                    <div>
                        <b>WhatsApp</b>
                        <span>Escríbeme por DM o WhatsApp para agendar</span>
                    </div>
                </li>
                <li>
                    <span class="dot">📷</span>
                    <div>
                        <b>Instagram</b>
                        <span>@dra.laurabazan</span>
                    </div>
                </li>
            </ul>
            <div class="hero-actions">
                <a class="btn btn-primary" href="https://www.google.com/maps/search/?api=1&query=Lúmia+Estudio+Dental+Av.+San+Martín+Alejandro+Ramírez+Santa+Cruz+Bolivia" target="_blank" rel="noopener">Cómo llegar</a>
                <a class="btn btn-ghost" href="https://instagram.com/dra.laurabazan" target="_blank" rel="noopener">Ver Instagram</a>
            </div>
        </div>

        <div class="map reveal">
            <iframe
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps?q=Av.%20San%20Martin%20Alejandro%20Ramirez%20Santa%20Cruz%20de%20la%20Sierra%20Bolivia&output=embed"
                title="Ubicación de Lúmia Estudio Dental"></iframe>
        </div>

    </div>
</section>


<!-- ===== FOOTER ===== -->
<footer>
    <div class="wrap">
        <div class="foot-grid">
            <div class="foot-brand">
                <a class="brand" href="#inicio"><b>Dra.&nbsp;Laura&nbsp;Bazán</b><span>odontóloga</span></a>
                <p>Odontología general e implantología con un trato cercano. Cuido tu sonrisa en cada etapa.</p>
            </div>
            <div class="foot-col">
                <h4>Navegación</h4>
                <a href="#sobre">Sobre mí</a>
                <a href="#servicios">Servicios</a>
                <a href="#testimonios">Testimonios</a>
                <a href="#ubicacion">Ubicación</a>
            </div>
            <div class="foot-col">
                <h4>Contacto</h4>
                <a href="https://wa.me/59170000000" target="_blank" rel="noopener">WhatsApp</a>
                <a href="https://instagram.com/dra.laurabazan" target="_blank" rel="noopener">@dra.laurabazan</a>
                <a href="https://www.google.com/maps/search/?api=1&query=Lúmia+Estudio+Dental+Santa+Cruz+Bolivia" target="_blank" rel="noopener">Lúmia · Av. San Martín N°36</a>
            </div>
        </div>
        <div class="foot-bottom">
            <span>© 2026 Dra. Laura Bazán Stelzer · Odontóloga</span>
            <span>Santa Cruz de la Sierra, Bolivia</span>
        </div>
    </div>
</footer>


<!-- Floating WhatsApp -->
<a class="wa-float" href="https://wa.me/59170000000?text=Hola,%20quiero%20agendar%20una%20cita" target="_blank" rel="noopener" aria-label="Escribir por WhatsApp">
    <svg viewBox="0 0 32 32">
        <path d="M16 .5C7.4.5.5 7.4.5 16c0 2.8.8 5.5 2.1 7.9L.5 31.5l7.8-2C10.6 30.8 13.2 31.5 16 31.5 24.6 31.5 31.5 24.6 31.5 16S24.6.5 16 .5zm0 28c-2.5 0-4.9-.7-7-1.9l-.5-.3-4.6 1.2 1.2-4.5-.3-.5C3.4 21.3 2.7 18.7 2.7 16 2.7 8.6 8.6 2.7 16 2.7S29.3 8.6 29.3 16 23.4 28.5 16 28.5zm7.4-9.9c-.4-.2-2.4-1.2-2.7-1.3-.4-.1-.6-.2-.9.2-.3.4-1 1.3-1.2 1.5-.2.2-.4.3-.8.1-.4-.2-1.7-.6-3.2-2-1.2-1.1-2-2.4-2.2-2.8-.2-.4 0-.6.2-.8.2-.2.4-.4.6-.7.2-.2.3-.4.4-.7.1-.2.1-.5 0-.7-.1-.2-.9-2.2-1.3-3-.3-.8-.7-.7-.9-.7h-.8c-.2 0-.7.1-1 .5-.3.4-1.3 1.3-1.3 3.1s1.3 3.6 1.5 3.9c.2.2 2.6 4 6.3 5.6.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.4-1 2.7-1.9.3-.9.3-1.7.2-1.9-.1-.1-.3-.2-.7-.4z"/>
    </svg>
</a>

</body>
</html>
