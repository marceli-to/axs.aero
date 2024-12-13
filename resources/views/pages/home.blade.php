@extends('app')
@section('content')
<x-logo.axs class="w-auto h-30 lg:h-40 fixed left-20 top-40 md:left-40 md:top-40 lg:left-60 lg:top-60" />
  <div class="max-w-4xl mx-auto mt-[30vh] flex flex-col space-y-30 lg:space-y-80">
    <div class="flex flex-col gap-y-30 items-center md:items-start md:flex-row md:justify-around md::gap-80 w-full">
      <a href="">
        <x-logo.aas class="w-auto h-30 lg:h-40" />
      </a>
      <a href="">
        <x-logo.ahs class="w-auto h-30 lg:h-40" />
      </a>
      <a href="">
        <x-logo.aastechnics class="w-auto h-30 lg:h-40" />
      </a>
    </div>
    <div class="flex flex-col gap-y-30 items-center md:items-start md:flex-row md:justify-around md::gap-80 w-full">
      <a href="">
        <x-logo.didit class="w-auto h-30 lg:h-40" />
      </a>
      <a href="">
        <x-logo.shair class="w-auto h-30 lg:h-40" />
      </a>
    </div>
  </div>
@endsection