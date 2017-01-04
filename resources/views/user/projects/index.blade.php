@foreach ($projects as $project)
    <div class="project">
        <h3>{{ $project->name }}</h3>
        <p>(For {{$project->company->name }})</p>
    </div>
@endforeach