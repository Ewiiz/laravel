{{-- <ul>
    <li><a href='{{ route('welcome') }}'>L'acceuil</a></li>
    <li><a href='{{ route('posts.create') }}'>Créer un nouveau POST</a></li>
    <li><a href='{{ route('contact') }}'>Page De Contact</a></li>
</ul> --}}

<ul class="flex">
    <li class="flex-1 mr-2">
      <a class="text-center block border-2 border-rose-500 rounded text-blue-500 hover:bg-gray-200 py-2 px-4" href="{{ route('welcome') }}">L'acceuil</a>
    </li>
    <li class="flex-1 mr-2">
      <a class="text-center block border-2 border-rose-500 rounded text-blue-500 hover:bg-gray-200 py-2 px-4" href="{{ route('posts.create') }}">Créer un nouveau POST</a>
    </li>
    <li class="text-center flex-1">
      <a class="text-center block border-2 border-rose-500 rounded text-blue-500 hover:bg-gray-200 py-2 px-4" href="{{ route('contact') }}">Contact</a>
    </li>
  </ul>