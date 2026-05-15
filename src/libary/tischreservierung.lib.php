<h2 class="text-2xl font-semibold">Tischreservierung</h2>
<p class="mt-3 text-gray-700">Diese Seite ist als statische Demo aufgebaut. Das Formular zeigt den typischen Aufbau fuer eine Reservierungsanfrage.</p>

<form class="mt-8 grid gap-4 max-w-2xl">
  <label for="vorname" class="font-medium">Name</label>
  <input id="vorname" name="vorname" type="text" class="w-full border border-gray-300 bg-white rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500" required>

  <label for="mail" class="font-medium">E-Mail</label>
  <input id="mail" name="mail" type="email" class="w-full border border-gray-300 bg-white rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500" required>

  <label for="datum" class="font-medium">Datum</label>
  <input id="datum" name="datum" type="date" class="w-full border border-gray-300 bg-white rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500" required>

  <label for="personen" class="font-medium">Anzahl Personen</label>
  <input id="personen" name="personen" type="number" min="1" max="20" class="w-full border border-gray-300 bg-white rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500" required>

  <label for="notiz" class="font-medium">Hinweise</label>
  <textarea id="notiz" name="notiz" rows="4" class="w-full border border-gray-300 bg-white rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Allergien, Kinderstuhl, Zeitwuensche..."></textarea>

  <button type="submit" class="justify-self-start bg-amber-500 text-white py-2 px-4 rounded-md hover:bg-amber-600 transition-colors">Reservierung anfragen</button>
</form>
