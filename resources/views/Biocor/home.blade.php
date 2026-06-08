<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biocor · Centro de Enfermedades Cardiovasculares</title>
    @vite(['resources/css/Biocor/biocor.css', 'resources/js/Biocor/biocor.js'])
</head>
<body>

<!-- Aviso de prototipo (quitar en producción) -->
<div class="proto-note">Prototipo de demostración · Las fotografías, nombres y datos de contacto son marcadores de posición pendientes de los reales de Biocor.</div>

<!-- Barra superior de contacto -->
<div class="topbar">
  <div class="wrap">
    <div class="left">
      <a href="#contacto">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.3-9.3-10A5 5 0 0112 7a5 5 0 019.3 4C19 15.7 12 21 12 21z"/></svg>
        Centro de Enfermedades Cardiovasculares · Santa Cruz de la Sierra
      </a>
    </div>
    <div class="right">
      <a href="tel:+59100000000">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 1.9.7 2.8a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.3-1.2a2 2 0 012.1-.5c.9.3 1.8.6 2.8.7a2 2 0 011.8 2z"/></svg>
        (+591) 3 000-0000
      </a>
      <a href="https://wa.me/59100000000">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
        WhatsApp
      </a>
    </div>
  </div>
</div>

<!-- Navegación -->
<header class="nav">
  <div class="wrap">
    <a href="#" class="logo" aria-label="Biocor inicio">
      <svg class="mark heartbeat" viewBox="0 0 40 40" aria-hidden="true">
        <path class="organ" d="M20 33C9 25.5 6 20.5 6 15.2 6 11.2 9 8.5 12.4 8.5c2.4 0 4.4 1.3 5.6 3.3h.1l1.9-2.9 1.9 2.9h.1c1.2-2 3.2-3.3 5.6-3.3C31 8.5 34 11.2 34 15.2c0 5.3-3 10.3-14 17.8z" opacity="0"/>
        <path d="M3 21h7l2.5-7 4 13 3-9 2 3h6"/>
      </svg>
      <span class="name">bio<b>cor</b></span>
    </a>
    <nav>
      <ul>
        <li><a href="#servicios">Estudios</a></li>
        <li><a href="#consultas">Consultas</a></li>
        <li><a href="#equipo">Equipo</a></li>
        <li><a href="#valores">Nosotros</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
    <a href="https://wa.me/59100000000" class="btn btn-primary">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
      Agendar cita
    </a>
  </div>
</header>

<!-- HERO -->
<section class="hero" style="padding:0">
  <div class="wrap">
    <div class="hero-copy reveal">
      <span class="eyebrow">Más de 25 años cuidando tu corazón</span>
      <h1>Tu corazón en <span class="accent">manos expertas</span></h1>
      <p class="lead">La confianza que ya conoces, ahora más cerca de ti. Consultas y estudios cardiológicos especializados, en un solo lugar.</p>
      <div class="cta-row">
        <a href="https://wa.me/59100000000" class="btn btn-primary">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
          Agendar por WhatsApp
        </a>
        <a href="#servicios" class="btn btn-ghost">Ver nuestros estudios</a>
      </div>
      <div class="stats">
        <div class="stat"><div class="n">+25</div><div class="l">años de trayectoria</div></div>
        <div class="stat"><div class="n">+9</div><div class="l">estudios especializados</div></div>
        <div class="stat"><div class="n">100%</div><div class="l">estudios realizados por médicos especialistas</div></div>
      </div>
    </div>
    <div class="hero-media reveal">
      <div class="photo">
        <svg class="icon-camera" viewBox="0 0 24 24" fill="none" stroke="#33523a" stroke-width="1.5"><path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <span class="ph-note">Fotografía real · Equipo médico de Biocor en consulta</span>
      </div>
      <div class="badge">
        <div class="dot">
          <svg viewBox="0 0 24 24" fill="none" stroke="#19661E" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        </div>
        <div>
          <b>Equipos de última tecnología</b>
          <span>operados por especialistas, no por técnicos genéricos</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALORES -->
<section class="values" id="valores">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow">Lo que nos respalda</span>
      <h2>Nuestros pacientes hablan por nosotros</h2>
      <p>Una reputación construida durante más de dos décadas, sostenida por tres valores que guían cada consulta y cada diagnóstico.</p>
    </div>
    <div class="value-grid">
      <div class="value reveal">
        <div class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <h3>Confianza</h3>
        <p>Entre el doctor y su paciente, con la seguridad de que el diagnóstico es el correcto.</p>
      </div>
      <div class="value reveal">
        <div class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M20 7L9 18l-5-5"/><path d="M3 12a9 9 0 1118 0"/></svg>
        </div>
        <h3>Responsabilidad</h3>
        <p>Con nuestros pacientes y con la sociedad. Nuestra experiencia nos respalda.</p>
      </div>
      <div class="value reveal">
        <div class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg>
        </div>
        <h3>Empatía</h3>
        <p>Con nuestros pacientes y sus familias: comunicamos siempre la verdad, pero de manera empática.</p>
      </div>
    </div>
  </div>
</section>

<!-- INSIGHT -->
<section class="insight">
  <div class="wrap reveal">
    <span class="mark-q">"</span>
    <blockquote>Cuando se trata de la salud del corazón, las personas no buscan opciones: buscan certeza y la confianza de estar en buenas manos.</blockquote>
    <p>Por eso en Biocor los estudios se realizan con maquinaria de última tecnología y son operados directamente por médicos especialistas altamente formados.</p>
  </div>
</section>

<!-- SERVICIOS / ESTUDIOS -->
<section id="servicios">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow">Estudios especializados</span>
      <h2>Todo para tu corazón, en un solo lugar</h2>
      <p>Diagnóstico cardiológico avanzado sin derivaciones externas, con explicaciones claras y sin tecnicismos.</p>
    </div>
    <div class="serv-grid" id="servGrid"></div>

    <div class="sec-head reveal" id="consultas" style="margin-top:64px;margin-bottom:18px">
      <span class="eyebrow">Consultas médicas</span>
      <h2 style="font-size:1.7rem">Atención integral, especialistas a tu alcance</h2>
    </div>
    <div class="consultas reveal">
      <span class="chip">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        Cardiología clínica
      </span>
      <span class="chip">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        Cirugía cardiovascular
      </span>
      <span class="chip">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        Arritmias y postoperatorio
      </span>
      <span class="chip">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        Endocrinología
      </span>
      <span class="chip">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        Nutrición
      </span>
    </div>
  </div>
</section>

<!-- EQUIPO -->
<section class="team" id="equipo">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow">El factor humano</span>
      <h2>Conoce a quienes cuidarán de ti</h2>
      <p>Médicos especialistas que combinan tecnología de precisión con un trato cercano y honesto.</p>
    </div>
    <div class="team-grid" id="teamGrid"></div>
  </div>
</section>

<!-- TESTIMONIOS -->
<section>
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow">Testimonios</span>
      <h2>La confianza de quienes ya nos eligieron</h2>
    </div>
    <div class="tst-grid" id="tstGrid"></div>
  </div>
</section>

<!-- CONTACTO -->
<section class="contact" id="contacto" style="background:var(--paper-2)">
  <div class="wrap">
    <div class="map reveal">
      <div class="pin">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <b>Mapa interactivo de Google</b><br>
        <span style="color:var(--grey);font-size:.9rem">Aquí se insertará la ubicación exacta del consultorio</span>
      </div>
    </div>
    <div class="info reveal">
      <span class="eyebrow">Estamos para ayudarte</span>
      <h2>Fácil de encontrar, fácil de contactar</h2>
      <div class="row">
        <div class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <div>
          <b>Dirección</b>
          <span>[Dirección del consultorio] · Santa Cruz de la Sierra, Bolivia</span>
        </div>
      </div>
      <div class="row">
        <div class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 1.9.7 2.8a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.3-1.2a2 2 0 012.1-.5c.9.3 1.8.6 2.8.7a2 2 0 011.8 2z"/></svg>
        </div>
        <div>
          <b>Teléfono</b>
          <span>(+591) 3 000-0000</span>
        </div>
      </div>
      <div class="row">
        <div class="ic">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 5L2 7"/></svg>
        </div>
        <div>
          <b>Horario de atención</b>
          <span>Lunes a viernes · [horario] · Sábados · [horario]</span>
        </div>
      </div>
      <div class="cta-row">
        <a href="https://wa.me/59100000000" class="btn btn-primary">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
          Escríbenos por WhatsApp
        </a>
        <a href="#" class="btn btn-clay">Cómo llegar</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="cta-band">
  <div class="wrap reveal">
    <h2>Da el primer paso por tu corazón</h2>
    <p>Agenda tu valoración cardiológica hoy. Te acompañamos con claridad y cercanía en cada etapa.</p>
    <div class="cta-row">
      <a href="https://wa.me/59100000000" class="btn btn-primary">Agendar por WhatsApp</a>
      <a href="tel:+59100000000" class="btn btn-ghost" style="background:transparent;color:#fff;border-color:rgba(255,255,255,.4)">Llamar ahora</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="wrap">
    <div class="grid">
      <div>
        <div class="logo" style="margin-bottom:14px">
          <svg class="mark" viewBox="0 0 40 40" aria-hidden="true">
            <path d="M3 21h7l2.5-7 4 13 3-9 2 3h6" stroke="#2DB336" stroke-width="2.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span class="name">bio<b>cor</b></span>
        </div>
        <p style="max-width:34ch">Centro de Enfermedades Cardiovasculares. Más de 25 años de experiencia cuidando la salud del corazón en Santa Cruz de la Sierra.</p>
      </div>
      <div>
        <h4>Servicios</h4>
        <a href="#servicios">Estudios especializados</a>
        <a href="#consultas">Consultas médicas</a>
        <a href="#equipo">Nuestro equipo</a>
      </div>
      <div>
        <h4>Contacto</h4>
        <a href="tel:+59100000000">(+591) 3 000-0000</a>
        <a href="https://wa.me/59100000000">WhatsApp</a>
        <a href="#contacto">Ubicación</a>
      </div>
    </div>
    <div class="bottom">
      <span>© 2026 Biocor · Todos los derechos reservados.</span>
      <span>Biocor informa y acompaña.</span>
    </div>
  </div>
</footer>

<a href="https://wa.me/59100000000" class="fab" aria-label="WhatsApp">
  <svg viewBox="0 0 24 24"><path d="M20 3.9A10 10 0 003.5 18L2 22l4.1-1.5A10 10 0 1020 3.9zm-8 16a8 8 0 01-4-1l-.3-.2-2.4.9.8-2.4-.2-.3a8 8 0 1110.6 2.9A8 8 0 0112 19.9z"/></svg>
</a>

</body>
</html>
