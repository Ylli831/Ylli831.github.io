<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BL Hausdienstleistungen</title>
    <?php require '../components/header.php'; ?>
</head>
<body style="background-color: #F5F5DC;">
<header class="header-background relative bg-cover bg-center h-screen header-background" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0)), 
                      url('../assets/images/background-land.jpg');">
    <!-- Gradient animation added as a side overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-start">
        <h1 class="slogan text-white">„Ihr Zuhause, unser Handwerk – Perfektion bis ins Detail.“</h1>
        <div class="side-gradient"></div> <!-- Animated gradient -->
    </div>
</header>

<!-- Feature Section -->
<section id="features" class="py-16 px-4 text-center">
    <h2 class="text-3xl font-bold mb-8">Unsere Hauptservices</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Repeat for each service -->
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-xl font-semibold">Spachtel Technik</h3>
            <p>Kurzbeschreibung der Spachtel Technik.</p>
        </div>
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-xl font-semibold">Modernisierung</h3>
            <p>Kurzbeschreibung der Modernisierung.</p>
        </div>
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-xl font-semibold">Trockenbau Design</h3>
            <p>Kurzbeschreibung des Trockenbau Designs.</p>
        </div>
        <div class="bg-white p-6 rounded shadow-md">
            <h3 class="text-xl font-semibold">Kreative Lebens-Raumgestaltung</h3>
            <p>Kurzbeschreibung der kreativen Lebens-Raumgestaltung.</p>
        </div>
    </div>
</section>

<!-- Features List Section -->
<section class="bg-gray-100 py-16 px-4 text-center">
    <h2 class="text-2xl font-bold mb-6">Warum Uns Wählen?</h2>
    <ul class="list-disc list-inside">
        <li>Expertise in deutschen Hausdiensten</li>
        <li>Verwendung von hochwertigen Materialien</li>
        <li>Kundenzufriedenheitsgarantie</li>
    </ul>
</section>

<!-- Testimonial Section -->
<section id="testimonials" class="py-16 px-4">
    <h2 class="text-2xl font-bold text-center mb-8">Was Unsere Kunden Sagen</h2>
    <div class="flex flex-wrap justify-center">
        <div class="bg-white p-6 rounded shadow-md max-w-md mx-4">
            <p>"Großartiger Service und erstaunliche Ergebnisse!"</p>
            <p class="italic">- Max Mustermann</p>
        </div>
    </div>
</section>

<!-- Swiper Container -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="before-after-container">
                <img src="../assets/images/teststairs1.jpg" alt="Before" class="before-image">
                <img src="../assets/images/teststairs2.jpg" alt="After" class="after-image">
                <div class="slider-handle"></div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<section id="team" class="py-16 px-4">
    <h2 class="text-2xl font-bold text-center mb-8">Unser Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded shadow-md text-center">
            <img src="team-member.jpg" alt="Portrait von Mitarbeiter Name" class="w-32 h-32 mx-auto rounded-full">
            <h3 class="text-xl font-semibold mt-4">Mitarbeiter Name</h3>
            <p>Rolle des Mitarbeiters</p>
            <p>Kurze Biografie des Mitarbeiters.</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 px-4">
    <h2 class="text-2xl font-bold text-center mb-8">Kontaktieren Sie Uns</h2>
    <p class="text-center mb-4">Für Anfragen oder Angebote können Sie uns hier erreichen:</p>
    <div class="text-center">
        <p>Adresse: Beispielstraße 1, 12345 Stadt</p>
        <p>Telefon: 01234-567890</p>
        <p>Email: kontakt@beispiel.de</p>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-500 py-16 px-4 text-center text-white">
    <h2 class="text-3xl font-bold mb-4">Bereit für Ihre nächste Projekt?</h2>
    <p class="mb-4">Planen Sie eine Beratung oder fordern Sie ein Angebot an.</p>
    <a href="#contact" class="bg-white text-blue-500 px-6 py-3 rounded">Jetzt Kontaktieren</a>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 text-center">
    <p>&copy; 2024 Ihr Firmenname. Alle Rechte vorbehalten.</p>
</footer>
</body>
</html>
