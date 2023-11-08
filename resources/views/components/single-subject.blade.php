<a href="/subjects" class="inline-block text-dark my-8 min-[500px]:max-[768px]:ml-8"><i class="fa-solid fa-arrow-left"></i>Back</a>
<div class="card rounded p-10 min-[500px]:max-[768px]:mx-8 text-center">
    <div>
      <h2 class="font font-bold uppercase text-dark">
        <a href="{{ route('showCoursesForSingleSubject', ['subject' => $subject->id]) }}">{{ $subject->name }}</a>
      </h2>
    </div>
    <div class="font font-bold text-dark px-10 min-[500px]:max-[768px]:px-4 my-10">
      @if ($subject->id === 1)
        <p>
          Il Web Development, noto anche come sviluppo web, è una disciplina affascinante che si occupa di progettazione,
          sviluppo e manutenzione di applicazioni web. Questa materia gioca un ruolo fondamentale nella creazione di tutto
          ciò che vediamo e utilizziamo online. Dal semplice sito web informativo alle complesse piattaforme di e-commerce,
          il web development è ciò che consente ai contenuti di essere accessibili in tutto il mondo tramite Internet.
          Una delle ragioni principali per appassionarsi al web development è il suo costante evolversi. Nel mondo digitale
          in rapida crescita, le tecnologie web si evolvono costantemente, creando infinite opportunità di apprendimento
          e innovazione.
        </p>
      @else
        <p>
          La possibilità di contribuire all'evoluzione di Internet è un motivo di grande interesse per
          gli aspiranti web developer. Ogni sito web che creano rappresenta un nuovo contributo all'ecosistema online che
          può influenzare positivamente la vita delle persone, le imprese e l'accesso alle informazioni. Ad esempio, lo
          sviluppo di applicazioni web può rendere i servizi di prenotazione online più facili e accessibili o creare
          piattaforme di e-learning per l'istruzione a distanza.
        </p>
      @endif
    </div>
    <div>
      <x-application-icon iconType='chalkboard-user'/>
    </div>
</div>
