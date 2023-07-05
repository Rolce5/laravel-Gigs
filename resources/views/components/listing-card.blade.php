@props(['listing'])
<x-card>   
<div class="flex">
        <img src="{{$listing->logo ? asset('storage/'. $listing->logo) :asset('images/download.jpg')}}" class="hidden w-28 mr-6 md:block" alt="">
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>