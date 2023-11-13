<div class="card rounded p-10 min-[500px]:max-[768px]:mx-8 text-center">
  <h1 class="font font-bold uppercase text-color hover-dark hover:scale-125">{{ $course->name }}</h1>
  <p class="font font-bold text-dark min-[500px]:max-[768px]:px-4 my-10">{{ $course->content }}</p>
  <x-application-icon iconType='chalkboard-user'/>
</div>
