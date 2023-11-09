<a href="/courses" class="inline-block text-dark my-8 min-[500px]:max-[768px]:ml-8"><i class="fa-solid fa-arrow-left"></i>Back</a>
<div class="card rounded p-10 min-[500px]:max-[768px]:mx-8 text-center">
    <div>
        <h2 class="font font-bold uppercase text-dark">{{ $course->name }}</h2>
    </div>
    <div class="font font-bold text-dark px-10 min-[500px]:max-[768px]:px-4 my-10">
      @if ($course->id === 1)
        <p>
          Frontend is the visible part of an application or website with which users directly interact. It's responsible
          for the look and behavior of the user interface, including web pages, buttons, menus, and forms. Frontend
          involves the use of technologies like HTML, CSS, and JavaScript to create appealing and interactive layouts.
        </p>
        <p>
          Frontend developers work to enhance user experience, optimizing navigation and ensuring smooth functionality.
          It's a continuously evolving field with ever-new technologies and trends to explore.
        </p>
      @elseif($course->id === 2)
        <p>
          The 'backend' is the brain behind a web application. It's the invisible part that handles data, processing
          and system logic. Backend developers create and maintain servers, databases, and server-side applications that
          power the entire website. They work with programming languages like Python, Ruby, PHP, and JavaScript to create
          APIs and web services that provide data to the frontend. Without a robust backend, the frontend wouldn't function.
        </p>
        <p>
          Backend developers play a crucial role in ensuring that an application is secure, fast, and efficient. It's a
          growing field with an increasing demand for skilled professionals."
        </p>
      @elseif($course->id === 3)
        <p>
          Hatha yoga is one of the most popular branches of yoga, focusing on physical postures (asana) and breathing
          (pranayama). This practice helps improve strength, flexibility, and relax the mind. It's ideal for those
          seeking a path to balance between body and spirit through the connection between breath and movement.
        </p>
      @else
        <p>
          Ashtanga yoga is a dynamic and rigorous style that involves a specific sequence of postures and breathing.
          This practice aims to improve strength, endurance, and concentration. It's ideal for those seeking a
          challenging physical routine and moving meditation for mental and physical harmony.
        </p>
      @endif
    </div>
    <div>
      <x-application-icon iconType='chalkboard-user'/>
    </div>
</div>
