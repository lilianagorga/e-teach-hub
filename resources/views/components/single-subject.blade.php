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
          Web Development is a fascinating discipline that deals with the design, development, and maintenance of web
          applications. This field plays a crucial role in creating everything we see and use online. From simple
          informative websites to complex e-commerce platforms, web development enables content to be accessible worldwide
          through the Internet. One of the primary reasons to be passionate about web development is its constant evolution.
          In the rapidly growing digital world, web technologies are constantly evolving, creating endless opportunities
          for learning and innovation..
        </p>
        <p>
          The opportunity to contribute to the evolution of the Internet is a compelling reason for aspiring web developers.
          Every website they create represents a new contribution to the online ecosystem, which can positively impact
          people's lives, businesses, and access to information. For instance, web application development can make
          online booking services more convenient and accessible or create e-learning platforms for distance education.
        </p>
      @else
        <p>
          Yoga is an ancient practice that offers numerous benefits for both the body and the mind. While web programming
          may require long hours of mental work and focus, yoga provides an opportunity for rejuvenation. Its combination
          of postures, breathing, and meditation helps relax the mind, reduce stress, and enhance body flexibility. This
          practice can alleviate muscle tension caused by extended web development sessions and improve posture. Moreover,
          it promotes overall well-being, boosts energy levels, and enhances concentration.
        </p>
        <p>
          In our school, we offer two different yoga disciplines: Hatha Yoga and Ashtanga Yoga. Hatha Yoga is slower and
          aims to enhance flexibility and mental tranquility through static postures. Ashtanga Yoga is more dynamic,
          focusing on strength and breath control during movement.
        </p>
      @endif
    </div>
    <div>
      <x-application-icon iconType='chalkboard-user'/>
    </div>
</div>
