@extends('app')
@section('content')
  <div class="max-w-4xl mx-auto mt-[30vh] flex flex-col space-y-80">
    <div class="flex justify-around gap-80 w-full">
      <a href="">
        <x-logo.aas class="w-auto h-40" />
      </a>
      <a href="">
        <x-logo.ahs class="w-auto h-40" />
      </a>
      <a href="">
        <x-logo.aastechnics class="w-auto h-40" />
      </a>
    </div>
    <div class="flex justify-around gap-80 w-full">
        <a href="">
        <x-logo.didit class="w-auto h-40" />
      </a>
      <a href="">
        <x-logo.shair class="w-auto h-40" />
      </a>
    </div>
  </div>
@endsection