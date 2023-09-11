<x-layout>
    @foreach ($repositories as $repo)
    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $repo->name }} </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
                @php 
                    foreach ($repo->languages as $language => $percent) {
                        echo "<span>$language: $percent</span>";
                    }
                @endphp
            </h6>
            <p class="card-text">{{ $repo->description }}</p>
            <a href="#" class="card-link">{{ $repo->html_url }}</a>
        </div>
    </div>

    @endforeach
</x-layout>
    
