@extends('app')
@section('content')
<x-logo.axs class="w-auto h-30 md:h-40 lg:h-50 fixed left-20 top-51 md:top-74 md:left-40" />
<div class="md:max-w-lg lg:max-w-2xl mx-auto mt-[30vh] flex flex-col space-y-60 md:space-y-80 lg:space-y-100">
  <div class="flex flex-col gap-y-60 md:gap-x-80 lg:gap-x-100 items-center md:flex-row md:justify-around w-full">
    <a href="https://aas.aero" title="AAS" target="_blank">
      <x-logo.aas class="w-auto h-20 md:h-25 lg:h-34" />
    </a>
    <a href="https://aas-technics.com" title="AAS Technics" target="_blank">
      <x-logo.aastechnics class="w-auto h-20 md:h-24 lg:h-33" />
    </a>
  </div>
  <div class="flex flex-col gap-y-60 md:gap-x-80 lg:gap-x-100 items-center md:items-start md:flex-row md:justify-around w-full">
    <a href="https://did-it.ch" title="Didit GmbH" target="_blank">
      <x-logo.didit class="w-auto h-20 md:h-25 lg:h-35" />
    </a>
    <a href="https://shair.aero" title="Shair" target="_blank">
      <x-logo.shair class="w-auto h-28 md:h-32 lg:h-44" />
    </a>
  </div>
</div>
@endsection