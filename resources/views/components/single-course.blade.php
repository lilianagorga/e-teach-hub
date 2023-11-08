<a href="/courses" class="inline-block text-stone-700 my-8 min-[500px]:max-[768px]:ml-8"><i class="fa-solid fa-arrow-left"></i>Back</a>
<div class="card rounded p-10 min-[500px]:max-[768px]:mx-8 text-center">
    <div class="">
        <h2 class="font-nunito font-bold uppercase text-stone-700">{{ $course->name }}</h2>
    </div>
    <div>
      @if ($course->id === 1)
        <p class="font-nunito font-bold text-stone-700 px-10 min-[500px]:max-[768px]:px-4 mt-10">
          Il frontend è la parte visibile di un'applicazione o di un sito web con cui gli utenti interagiscono direttamente.
          È responsabile dell'aspetto e del comportamento dell'interfaccia utente, comprese le pagine web, i bottoni, i menu
          e i form. Il frontend coinvolge l'uso di tecnologie come HTML, CSS e JavaScript per creare layout accattivanti e interattivi.
        </p>
        <p class="font-nunito font-bold text-stone-700 px-10 min-[500px]:max-[768px]:px-4 mb-10">
          Gli sviluppatori frontend lavorano per migliorare l'esperienza dell'utente, ottimizzando la navigazione e garantendo
          che tutto funzioni in modo fluido. È un campo in continua evoluzione, con sempre nuove tecnologie e tendenze da esplorare.
        </p>
      @else
        <p class="font-nunito font-bold text-stone-700 px-10 min-[500px]:max-[768px]:px-4 mt-10">
          Il "backend" è il cervello di un'applicazione web. È la parte invisibile che gestisce i dati, le elaborazioni e
          la logica del sistema. I backend developers creano e mantengono server, database e applicazioni lato server che
          alimentano l'intero sito web. Lavorano con linguaggi di programmazione come Python, Ruby, PHP e JavaScript per
          creare API e servizi web che forniscono dati al frontend. Senza un backend robusto, il frontend non potrebbe funzionare.
        </p>
        <p class="font-nunito font-bold text-stone-700 px-10 min-[500px]:max-[768px]:px-4 mb-10">
          Gli sviluppatori di backend svolgono un ruolo fondamentale nell'assicurare che un'applicazione sia sicura,
          veloce ed efficiente. È un campo in costante crescita con una crescente domanda di professionisti esperti.
        </p>
      @endif
    </div>
    <div>
      <x-application-icon iconType='chalkboard-user'/>
    </div>
</div>
