<?php
$page_full = true;
?>

<!-- Abschnitt 1: Über uns / Unser Restaurant -->
<section class="grid gap-10 md:grid-cols-2 items-stretch">
  <div class="flex flex-col">
    <h2 class="border-b-2 border-gray-200 pb-2 font-extralight">Über uns</h2>
    <article class="mt-5 bg-gray-50 p-10 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition-shadow h-full">
      <img src="/images/food.png" class="mb-10 border-6 border-amber-600 rounded">
      <p>Jedes Gericht ist eine Geschichte – und meine erzählt von Wind über der Steppe und Wellen auf dem Meer. Ich glaube an wenige, ehrliche Zutaten, Respekt vor jedem Produkt und daran, dass Essen Menschen über Kulturen hinweg verbindet.</p>
    </article>
  </div>

  <div class="flex flex-col">
    <h2 class="border-b-2 border-gray-200 pb-2 font-extralight">Unser Restaurant</h2>
    <article class="group flex flex-col gap-4 mt-5 h-full rounded-xl border border-gray-200 bg-gray-50/80 p-10 shadow-sm transition hover:shadow-lg hover:-translate-y-0.5">
      <h4 class="text-lg font-semibold tracking-tight">Modernes Nomaden-Ambiente</h4>
      <p class="text-gray-700 leading-relaxed">Unser Gastraum verbindet warme Holztoene, offene Sichtkueche und ein ruhiges Lichtkonzept. So entsteht ein Ort, der sowohl fuer private Dinner als auch fuer Business-Events funktioniert.</p>
      <h4 class="mt-2 text-lg font-semibold tracking-tight">Saisonale Karte mit klarer Handschrift</h4>
      <p class="text-gray-700 leading-relaxed">Wir arbeiten mit kleinen regionalen Produzenten und wechseln unsere Menues regelmaessig. Das Ergebnis: vertraute Aromen mit einem eigenstaendigen, japanisch inspirierten Twist.</p>

      <!-- Button unten andocken -->
      <a href="index.php?page=restaurant" class="mt-auto inline-flex items-center gap-2 self-start rounded-md px-4 py-2 bg-amber-500 text-white transition-colors hover:bg-amber-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-400">
        Mehr erfahren
        <span aria-hidden="true" class="transition-transform group-hover:translate-x-0.5">→</span>
      </a>
    </article>
  </div>
</section>

<!-- Abschnitt 2: Serviceleistungen -->
<section>
  <h2 class="border-b-2 border-gray-200 pb-2 font-extralight">Unsere Serviceleistungen</h2>
  <div class="grid gap-10 md:grid-cols-3 items-stretch"> <!-- items-stretch wichtig -->
    <article class="mt-5 bg-gray-50 p-10 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition-shadow h-full">
      <h4 class="mb-3 text-lg font-semibold">Business-Catering</h4>
      <p class="text-gray-700 leading-relaxed">Fingerfood, Lunch-Bowls oder Flying Dinner fuer Meetings, Produktpraesentationen und Team-Events. Auf Wunsch inklusive Aufbau, Servicepersonal und Ablaufplanung.</p>
    </article>
    <article class="mt-5 bg-gray-50 p-10 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition-shadow h-full">
      <h4 class="mb-3 text-lg font-semibold">Private Feiern</h4>
      <p class="text-gray-700 leading-relaxed">Vom kleinen Geburtstag bis zur Hochzeit: Wir entwickeln ein auf euch zugeschnittenes Konzept, das Budget, Stil und besondere Ernaehrungswuensche beruecksichtigt.</p>
    </article>
    <article class="mt-5 bg-gray-50 p-10 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition-shadow h-full">
      <h4 class="mb-3 text-lg font-semibold">Live-Stationen & Show-Cooking</h4>
      <p class="text-gray-700 leading-relaxed">Interaktive Sushi- und Grill-Stationen sorgen fuer Erlebnisfaktor auf Events. Damit wird Catering nicht nur Verpflegung, sondern Teil der Inszenierung.</p>
    </article>
  </div>
</section>

<!-- Abschnitt 3: Kontakt -->
<section>
  <h2 class="border-b-2 border-gray-200 pb-2 font-extralight mt-10 sm:mt-0">Kontakt aufnehmen</h2>
  <p class="mt-4 text-gray-700">Du planst ein Event und willst eine unverbindliche Erstberatung? Schreib uns kurz Anlass, Datum und Personenzahl - wir melden uns in der Regel innerhalb von 24 Stunden.</p>
  <form class="mt-5 grid gap-4">
    <label for="name" class="font-medium">Name</label>
    <input id="name" name="name" type="text" required class="w-full border border-gray-300 bg-gray-50 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500">

    <label for="email" class="font-medium">E-Mail</label>
    <input id="email" name="email" type="email" required class="w-full border border-gray-300 bg-gray-50 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500">

    <label for="nachricht" class="font-medium">Nachricht</label>
    <textarea id="nachricht" name="nachricht" rows="5" required class="w-full border border-gray-300 bg-gray-50 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500"></textarea>

    <button type="submit" class="justify-self-start bg-amber-500 text-white py-2 px-4 rounded-md hover:bg-amber-600 transition-colors">Absenden</button>
  </form>
</section>