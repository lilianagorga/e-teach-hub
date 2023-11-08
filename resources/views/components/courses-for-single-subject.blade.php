<div class="card rounded p-10 my-4 text-center font">
    <div class="">
      <a href="{{ route('showSingleCourse', ['course' => $course->id]) }}" class="no-underline">
        <h2 class="text-dark font-bold uppercase hover-text-light">{{ $course->name }}</h2>
      </a>
    </div>
    <div class="font-medium text-color">
      @if($course->id === 1)
        <p>Studiare frontend development ti consente di rimanere al passo con le ultime tendenze tecnologiche e
          contribuire a progetti significativi. Questa competenza apre porte a opportunità soddisfacenti e gratificanti.
        </p>
      @else
        <p>
          Imparando il backend development, avrai la possibilità di progettare soluzioni tecniche sofisticate e
          contribuire a garantire l'affidabilità e la sicurezza dei servizi online.
        </p>
      @endif
    </div>
</div>
