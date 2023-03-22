<div class="flex flex-col  justify-between items-center">
  <div class="w-24 h-24">
    <a href="{{ route('jobs.index') }}"><img src="{{ asset('img/isi.jpeg') }}"></a>
  </div>
  <ul class="flex flex-col md:flex-row items-center mb-3 md:mb-5">
    @auth
    {{-- <livewire:search /> --}}
    <li class="md:mr-10 py-2 md:py-0" style="border:5px solid" ><a href="{{ route('jobs.index') }}" class="hover:text-blue-400">Les missions</a></li>
    <li class="md:mr-5 py-2 md:py-0" style="border:5px solid"><a href="{{ route('conversations.index') }}" class="hover:text-blue-400">Mes conversations</a></li>
    <li class="md:mr-5 py-2 md:py-0" style="border:5px solid"><a href="{{ route('home') }}" class="hover:text-blue-400">Mon compte</a></li>
    <li class="md:mr-5 py-2 md:py-0" style="border:5px solid"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-blue-800 ">Se déconnecter</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" style="border:5px solid">
      @csrf
    </form>
    @else
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('login') }}" class="hover:text-blue-400" style="border:5px solid">Se connecter</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('register') }}" class="hover:text-blue-400" style="border:5px solid">S'enregistrer</a></li>
    @endauth
  </ul>
</div>