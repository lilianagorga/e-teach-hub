 <div class="card">
    <div class="card-header">
        <h2>
            <a href="{{ route('showCoursesForSingleSubject', ['subject' => $subject->id]) }}">{{ $subject->name }}</a>
        </h2>
    </div>
    <div class="card-body">
        <p>Card Component</p>
    </div>
</div>
