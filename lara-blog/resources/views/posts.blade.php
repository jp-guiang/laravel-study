<x-layout>

  <!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        

        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
           
          @if($posts->count())  
          <x-post-featured-card :post="$posts[0]"/>

          @if($posts->count()>1)
            <div class="lg:grid lg:grid-cols-6">
                @foreach($posts->skip(1) as $post)
                  <x-post-card :post="$post" class="{{$loop->iteration<3 ?'col-span-3' : 'col-span-2'}}"/>
                @endforeach
            </div>
          @endif

          @else
          <p class='text-center'>No posts yet please come back later</p>

          @endif

            {{-- <div class="lg:grid lg:grid-cols-3">
                <x-post-card/>
                <x-post-card/>
                <x-post-card/>
                
            </div> --}}
        </main>

        
    </section>
</body>


  
</x-layout>