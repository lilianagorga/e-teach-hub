<a href="/courses" class="inline-block text-dark my-8 min-[500px]:max-[768px]:ml-8"><i class="fa-solid fa-arrow-left"></i>Back</a>
<div class="card rounded p-10 min-[500px]:max-[768px]:mx-8 text-center">
    <div>
        <h2 class="font font-bold uppercase text-dark">{{ $course->name }}</h2>
    </div>
    <div class="font font-bold text-dark px-10 min-[500px]:max-[768px]:px-4 my-10">
      <p>{{ $course->content }}</p>
    </div>
    <div>
      <x-application-icon iconType='chalkboard-user'/>
    </div>
</div>
