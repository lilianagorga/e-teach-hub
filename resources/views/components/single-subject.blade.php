<div class="card rounded p-10 min-[500px]:max-[768px]:mx-8 text-center">
  <h1 class="font font-bold uppercase text-color hover-dark hover:scale-125">{{ $subject->name }}</h1>
  <p class="font font-bold text-dark px-10 min-[500px]:max-[768px]:px-4 my-10">{{ $subject->description }}</p>
  <a href="{{ route('showCoursesForSingleSubject', ['subject' => $subject->id]) }}">
    <span class="font font-bold text-color uppercase pr-4 hover-dark">Click here to see all courses for this subject</span>
  </a>
  <x-application-icon iconType='chalkboard-user'/>
</div>
