@extends('app')
@section('content')
<x-logo.axs class="w-auto h-30 md:h-40 lg:h-50 fixed left-20 top-51 md:top-74 md:left-40" />
<div class="mt-[30vh] flex flex-col space-y-60 md:space-y-80 lg:space-y-100">

  <div class="md:max-w-2xl lg:max-w-4xl mx-auto flex flex-col md:flex-row gap-y-60 md:gap-x-80 lg:grid lg:grid-cols-12 md:w-full">
    <a href="https://aas.aero" title="AAS" target="_blank" class="lg:col-span-4 flex justify-center">
      <x-logo.aas class="w-auto h-20 md:h-25 lg:h-34" />
    </a>
    <a href="https://www.ahs-aero.de/" title="AHS Aviation Handling Services GmbH" target="_blank" class="lg:col-span-4 flex justify-center">
      <x-logo.ahs class="text-white block w-auto h-20 md:h-25 lg:h-38" />
    </a>
    <a href="https://aas-technics.com" title="AAS Technics" target="_blank" class="lg:col-span-4 flex justify-center">
      <x-logo.aastechnics class="w-auto h-20 md:h-24 lg:h-33" />
    </a>
  </div>
  <div class="md:max-w-xl lg:max-w-3xl mx-auto flex flex-col md:flex-row gap-y-60 md:gap-x-80 lg:grid lg:grid-cols-12 md:w-full">
    <a href="https://did-it.ch" title="Didit GmbH" target="_blank" class="lg:col-span-4 flex justify-center">
      <x-logo.didit class="w-auto h-20 md:h-25 lg:h-35" />
    </a>
    <a href="https://shair.aero" title="Shair" target="_blank" class="lg:col-span-4 flex justify-center">
      <x-logo.shair class="w-auto h-28 md:h-32 lg:h-44" />
    </a>
    <a href="https://www.aeropointservices.com/ " title="Aeropoint Services" target="_blank" class="lg:col-span-4 flex justify-center">
      <x-logo.aeropointservices class="w-auto h-24 md:h-34 lg:h-44" />
    </a>
  </div>

</div>
@endsection