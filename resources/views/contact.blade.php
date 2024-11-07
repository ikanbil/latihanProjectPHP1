<x-layout>
  <x-slot:title>
      {{$title}}
  </x-slot:title>
  <ol>
    <li>Nama : {{$nama}}</li>
    <li>Kelas : {{$Kelas}}</li>
    <li><a href={{$Linkedin}}>Linkedin</a></li>
    <li><a href={{ $Github }}>Github</a></li>
</ol>
</x-layout>