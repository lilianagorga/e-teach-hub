<div class="card rounded p-10 my-4 text-center font">
    <div class="">
      <a href="{{ route('showSingleCourse', ['course' => $course->id]) }}" class="no-underline">
        <h1 class="text-dark font-bold uppercase hover-text-light">{{ $course->name }}</h1>
      </a>
    </div>
</div>
