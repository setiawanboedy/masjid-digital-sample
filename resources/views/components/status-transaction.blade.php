@props(['status'])
<div>
    @if ($status == \App\Helper\ConstData::SUCCESS)
    <p class="bg-green-500 px-4 rounded-md md:rounded-r-none text-white uppercase">
        {{$status}}
      </p>
    @elseif ($status == \App\Helper\ConstData::PENDING)
    <p class="bg-yellow-500 px-4 rounded-md md:rounded-r-none text-white uppercase">
        {{$status}}
      </p>
    @elseif ($status == \App\Helper\ConstData::FAILED)
    <p class="bg-red-500 px-4 rounded-md md:rounded-r-none text-white uppercase">
        {{$status}}
      </p>
    @endif
</div>
