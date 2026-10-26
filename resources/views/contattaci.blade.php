<x-layout>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="text-light mt-5 text-center">Inviaci la tua richiesta</h1>
      <h4 class="mt-5 mb-5 text-warning">Ecco la pagina relativa all'assistenza, dicci di cosa hai bisogno, quale problema hai riscontrato o se hai dubbi, così da fornirti il giusto supporto per la riparazione.</h4>
    </div>
    <div class="col-8 justify-content-center">

      <form action="{{route('contattaci.invio')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label text-light">Inserisci il nome:</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="es.Luca, Antonio,....">
        </div>
        <div class="mb-3">
          <label for="surname" class="form-label text-light">Inserisci il tuo cognome:</label>
          <input type="text" name="surname"class="form-control" id="surname" placeholder="es.Bianchi, Rossi,...">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-light">Inserisci la tua email:</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label text-light">Descrivi il problema:</label>
          <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <button id="submit" type="submit" name="submit">Invia richiesta</button>
        </div>
      </form>

    </div>
  </div>
</div>














</x-layout>